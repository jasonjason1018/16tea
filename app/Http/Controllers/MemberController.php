<?php

namespace App\Http\Controllers;

use App\Models\MemberPrize;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function gift()
    {
        $uid = session('user')['uid'];

        $memberPrize = MemberPrize::select('p.serial_number', 'member_prize.created_at')
            ->leftjoin('pin as p', 'member_prize.id_pin', '=', 'p.id_pin')
            ->leftjoin('member as m', 'member_prize.id_member', '=', 'm.id_member')
            ->where('m.uid', '=', $uid)
            ->first();

        return view('gift', ['memberPrize' => $memberPrize]);
    }
}
