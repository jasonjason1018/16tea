<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Socialite;

class LoginController extends Controller
{
    public function lineLogin()
    {
        return Socialite::driver('line')->redirect();
    }

    public function lineLoginCallback(Request $request)
    {
        $user = Socialite::driver('line')->user();

        $user = (array)$user->user;

        $uid = $user['sub'];

        $isMemberExists = $this->isMemberExists($uid);

        if (!$isMemberExists) {
            Member::create([
                'name' => Crypt::encrypt($user['name']),
                'source' => Member::SOURCE['line'],
                'uid' => $uid
            ]);
        }

        session()->put('user', [
            'uid' => $uid,
            'name' => $user['name'],
            'picture' => $user['picture'],
            'source' => 'line'
        ]);

        return redirect('/list');
    }

    public function fbLogin()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function fbLoginCallback(Request $request)
    {
        $user = Socialite::driver('facebook')->user();

        $uid = $user->getId();

        $isMemberExists = $this->isMemberExists($uid);

        if (!$isMemberExists) {
            Member::create([
                'name' => Crypt::encrypt($user->getName()),
                'source' => Member::SOURCE['fb'],
                'uid' => $uid
            ]);
        }

        session()->put('user', [
            'uid' => $uid,
            'name' => $user->getName(),
            'picture' => $user->getAvatar(),
            'source' => 'fb'
        ]);

        return redirect('/list');
    }

    private function isMemberExists($uid)
    {
        return Member::where('uid', '=', $uid)->exists();
    }

    public function logout()
    {
        session()->forget('user');

        return redirect('/');
    }
}
