<?php

namespace App\Http\Controllers\Admin;

use App\Models as M;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ManagerController extends Controller
{
    private $data = [];

    public function __construct()
    {
        $this->data = [
            'root' => 'webadmin',
            'path' => 'manager'
        ];
    }

    public function index(Request $request)
    {
        $list = M\Manager::orderBy('i_sno')->get();
        $this->data['list'] = $list;
        $this->data['enc'] = new \App\Libraries\Encryption;

        $this->data['status'] = [
            't' => [
                1 => '啟用',
                0 => '停用'
            ],
            'c' => [
                1 => '',
                0 => 'text-danger'
            ]
            ];

        return view('admin.manager_list', $this->data);
    }

    public function edit(Request $request, $id)
    {
        if ($id == 'create') {
            $method = 'post';
            $action = '/'.$this->data['root'].'/'.$this->data['path'].'/modify';
            $detail = new M\Manager;
        } else {
            $method = 'put';
            $action = '/'.$this->data['root'].'/'.$this->data['path'].'/'.$id;
            $detail = M\Manager::where('i_sno', $id)->first();
            if (is_null($detail)) {
                return redirect()->route('manager');
            }
        }

        $this->data['method'] = $method;
        $this->data['action'] = $action;
        $this->data['detail'] = $detail;
        $this->data['enc'] = new \App\Libraries\Encryption;

        return view('admin.manager_edit', $this->data);
    }

    public function modify(Request $request, $id='')
    {
        $enc = new \App\Libraries\Encryption;

        $rules = [
            'name' => 'required',
            'email' => ['required', 'email', function ($attribute, $value, $fail) use($enc, $id) {
                $chk = M\Manager::where('vc_email', $enc->encrypt($value))->where('i_sno', '<>', $id)->count();
                if ($chk > 0) {
                    $fail('Email已存在');
                }
            }]
        ];

        if ($request->isMethod('post')) {
            $rules['password'] = 'required';
        }

        $messages = [
            'name.required' => '請填寫姓名',
            'email.required' => '請填寫Email',
            'email.email' => '請填寫Email',
            'password.required' => '請填寫密碼'
        ];
        
        $input = $request->all();
        $v = Validator::make($input, $rules, $messages);
        if ($v->fails()) {
            return back()->withInput($input)->withErrors($v);
        }

        try {
            $col = [
                'vc_name' => $enc->encrypt($request->input('name')),
                'vc_email' => $enc->encrypt($request->input('email')),
                'i_status' => intval($request->input('status', 1))
            ];
            if ($request->input('password')!='') {
                $col['vc_password'] = sha1($request->input('password'));
            }

            if ($request->isMethod('post')) {
                $col['dt_create'] = now();
                $m = M\Manager::create($col);

                Mail::to($request->input('email'))->queue(new \App\Mail\ManagerVerify($m->i_sno, $request->ip()));
            } else {
                M\Manager::where('i_sno', $id)->update($col);
            }
        } catch (\Illuminate\Database\QueryException $e) {
            Log::error($e);
            return back()->withInput()->with('result.failed', '失敗');
        }

        return redirect()->route('manager')->with('result.success', '完成');
    }
}
