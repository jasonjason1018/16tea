<?php

namespace App\Http\Middleware;

use Closure;

class LoginAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $isForm = false)
    {
        if ((boolean)$isForm) {
            $isCompleteGame = session('complete_game');

            if (!$isCompleteGame) {
                return redirect('/list');
            }

            session()->forget('complete_game');
        }

        $user = session('user');

        if (!$user) {
            return redirect('/login');
        }

        return $next($request);
    }
}
