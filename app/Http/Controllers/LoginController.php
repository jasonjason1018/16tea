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

        return redirect('/login');
    }
}
