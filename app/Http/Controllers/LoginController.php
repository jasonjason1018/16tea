<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Socialite;

class LoginController extends Controller
{
    public function lineLogin()
    {
        return Socialite::driver('line')->redirect();
        //return Socialite::driver('line')->stateless()->redirect();
    }

    public function lineLoginCallback(Request $request)
    {
        $client = new \GuzzleHttp\Client(); 
			$result = $client->post('https://api.line.me/oauth2/v2.1/token', [
			    'form_params' => [
			        'grant_type' => 'authorization_code',
			        'code' => $request->code,
			        'redirect_uri' => env('LINE_REDIRECT_URI'),
			        'client_id' => env('LINE_CLIENT_ID'),
			        'client_secret' => env('LINE_CLIENT_SECRET')
			    ]
			]);
			$str = ($result->getBody()->getContents());
			$json = json_decode($str, true);
			//echo $json['access_token'];
			$result1 = $client->get('https://api.line.me/v2/profile', [
			    'headers' => [
			    	'Authorization' => 'Bearer '.$json['access_token']
			    ]
			]);
			$str1 = ($result1->getBody()->getContents());
			$user_data = json_decode($str1, 1);
			
            $uid = $user_data['userId'];
            $name = $user_data['displayName'];
            $picture = $user_data['pictureUrl'];
        // try{
        //     $user = Socialite::driver('line')->user();

        //     $user = (array)$user->user;

        //     $uid = $user['sub'];

            $isMemberExists = $this->isMemberExists($uid);

            if (!$isMemberExists) {
                Member::create([
                    'name' => Crypt::encrypt($name),
                    'source' => Member::SOURCE['line'],
                    'uid' => $uid,
                    'ip' => $this->getIp()
                ]);
            }

            session()->put('user', [
                'uid' => $uid,
                'name' => $name,
                'picture' => $picture,
                'source' => 'line'
            ]);

            return redirect('/list');
        // } catch (Exception $e) {
        
        //     return redirect('/list');
        // }
    }

    public function fbLogin()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function fbLoginCallback(Request $request)
    {
        //$user = Socialite::driver('facebook')->user();
        try {
            $user = Socialite::driver('facebook')->stateless()->user();

            $uid = $user->getId();

            $isMemberExists = $this->isMemberExists($uid);

            if (!$isMemberExists) {
                Member::create([
                    'name' => Crypt::encrypt($user->getName()),
                    'source' => Member::SOURCE['fb'],
                    'uid' => $uid,
                    'ip' => $this->getIp()
                ]);
            }

            session()->put('user', [
                'uid' => $uid,
                'name' => $user->getName(),
                'picture' => $user->getAvatar(),
                'source' => 'fb'
            ]);
        } catch (\Exception $e) {
            // 可以 log 一下錯誤方便 debug
            return redirect('/login');
        }

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

    public function adminLogin(Request $request)
    {
        $requestData = $request->input();

        if (!$requestData) {
            throw new \Exception('missing parameter.');
        }

        $account = $requestData['account'];

        if (!$account) {
            throw new \Exception('account can not be empty');
        }

        $pwd = $requestData['pwd'];

        if (!$pwd) {
            throw new \Exception('pwd can not be empty');
        }

        $admin = Admin::where('account', '=', $account)->first();

        if (!$admin) {
            throw new \Exception('account or password incorrect');
        }

        if (Hash::check($pwd, $admin->pwd)) {
            session()->put('admin', [
                'id_admin' => $admin->id_admin
            ]);

            return response('success');
        }

        throw new \Exception('account or password incorrect');
    }
}
