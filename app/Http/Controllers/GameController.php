<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\GameAudioLog;
use App\Models\GameToken;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GameController extends Controller
{
    public function list()
    {
        $games = Game::get();

        foreach ($games as $index => $game) {
            $startAt = Carbon::parse($game->start_at);
            $games[$index]['start_month'] = $startAt->month;
            $games[$index]['start_day'] = $startAt->day;

            $games[$index]['isOpen'] = $startAt->lte(Carbon::now()) ? '-on' : "-off";
        }

        return view('/list', ['games' => $games]);
    }

    public function morningGame()
    {
        $uid = session('user')['uid'];
        $token = $this->getToken($uid);
        $token = $token->token;

        $levels = 'morning';

        $query = $this->checkAudioLog($levels);
        $isExists = $query->exists();
        $audioPopup = $isExists
            ? '-off'
            : '-show';

        $audioStatus = null;

        if ($isExists) {
            $audioStatus = $query->first()->audio_status;
        }

        return view('morning.game', [
                'levels' => $levels,
                'audioPopup' => $audioPopup,
                'audioStatus' => $audioStatus,
                'token' => $token
            ]);
    }

    public function mistGame()
    {
        $uid = session('user')['uid'];
        $token = $this->getToken($uid);
        $token = $token->token;

        $levels = 'mist';

        $query = $this->checkAudioLog($levels);
        $isExists = $query->exists();
        $audioPopup = $isExists
            ? '-off'
            : '-show';

        $audioStatus = null;

        if ($isExists) {
            $audioStatus = $query->first()->audio_status;
        }

        return view('mist.game', [
            'levels' => $levels,
            'audioPopup' => $audioPopup,
            'audioStatus' => $audioStatus,
            'token' => $token
        ]);
    }

    public function starGame()
    {
        $uid = session('user')['uid'];
        $token = $this->getToken($uid);
        $token = $token->token;

        $levels = 'star';

        $query = $this->checkAudioLog($levels);
        $isExists = $query->exists();
        $audioPopup = $isExists
            ? '-off'
            : '-show';

        $audioStatus = null;

        if ($isExists) {
            $audioStatus = $query->first()->audio_status;
        }

        return view('star.game', [
            'levels' => $levels,
            'audioPopup' => $audioPopup,
            'audioStatus' => $audioStatus,
            'token' => $token
        ]);
    }

    private function getToken($uid)
    {
        $token = Hash::make($uid);

        return GameToken::create([
            'uid' => $uid,
            'token' => $token,
        ]);
    }

    private function checkAudioLog($levels)
    {
        $uid = session('user')['uid'];
        $startAt = Carbon::today()->startOfDay()->format('Y-m-d H:i:s');
        $endAt = Carbon::today()->endOfDay()->format('Y-m-d H:i:s');

        $query = GameAudioLog::where('uid', '=', $uid)
            ->where('levels', '=', $levels)
            ->whereBetween('created_at', [$startAt, $endAt]);

        return $query;
    }

    public function audioLog(Request $request)
    {
        $uid = session('user')['uid'];
        return GameAudioLog::create([
            'uid' => $uid,
            'audio_status' => $request->audio_status,
            'levels' => $request->levels
        ]);
    }
}
