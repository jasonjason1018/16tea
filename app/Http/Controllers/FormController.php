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
}
