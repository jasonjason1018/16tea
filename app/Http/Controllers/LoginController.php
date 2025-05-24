<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

        session()->put('user', [
            'name' => $user['name'],
            'picture' => $user['picture'],
            'resource' => 'line'
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

        session()->put('user', [
            'name' => $user->getName(),
            'picture' => $user->getAvatar(),
            'resource' => 'fb'
        ]);

        return redirect('/list');
    }
}
