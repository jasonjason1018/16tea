<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Carbon\Carbon;
use Illuminate\Http\Request;

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
}
