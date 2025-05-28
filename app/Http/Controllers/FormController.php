<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;
use App\Models\Member;

class FormController extends Controller
{
    public function insertForm(Request $request)
    {
        $result = [
            'isSuccess' => false,
        ];

        $requestData = $request->all();

        $validator = Validator::make($requestData, [
            'captcha' => 'required|captcha',
        ]);

        if ($validator->fails()) {
            return $result;
        }

        $member = Member::where('uid', '=', session('user')['uid'])->first();

        Form::create([
            'id_member' => $member->id_member,
            'name' => Crypt::encrypt($requestData['name']),
            'mobile' => Crypt::encrypt($requestData['mobile']),
            'email' => Crypt::encrypt($requestData['email']),
            'ip' => $this->getIp(),
            'topic' => $requestData['topic']
        ]);

        $result['isSuccess'] = true;

        return $result;
    }

    public function morningForm()
    {
        $form = $this->getFormData();

        return view('morning.form', ['form' => $form]);
    }

    public function mistForm()
    {
        $form = $this->getFormData();


        return view('mist.form', ['form' => $form]);
    }

    public function starForm()
    {
        $form = $this->getFormData();

        return view('star.form', ['form' => $form]);
    }

    private function getFormData()
    {
        $uid = session('user')['uid'];
        $member = Member::where('uid', '=', $uid)->first();
        $idMember = $member->id_member;

        $form = Form::where('id_member', '=', $idMember)->first();

        if ($form) {
            $form->name = Crypt::decrypt($form->name);
            $form->mobile = Crypt::decrypt($form->mobile);
            $form->email = Crypt::decrypt($form->email);
        }

        return $form;
    }
}
