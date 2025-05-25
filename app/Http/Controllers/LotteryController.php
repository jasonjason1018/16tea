<?php

namespace App\Http\Controllers;

use App\Models\LotteryPool;
use App\Models\Member;
use App\Models\MemberPrize;
use App\Models\Pin;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class LotteryController extends Controller
{
    public function lottery()
    {
        session()->put('complete_game', true);
        $result = [
            'isWin' => false,
            'serial_number' => null
        ];
        $now = Carbon::parse('2025-06-05 12:00:00')->format('Y-m-d H:i:s');
        $uid = session('user')['uid'];

        $member = Member::where('uid', '=', $uid)->first();

        if (!$member) {
            throw new \Exception('Invalid member.');
        }

        $idMember = $member->id_member;
        $hasPrize = MemberPrize::where('id_member', '=', $idMember)->exists();

        $ip = $this->getIp();
        if (!$hasPrize) {
            $hasPrize = MemberPrize::where('ip', '=', $ip)->exists();
        }

        if (!$hasPrize) {
            $user = session('user');
            $name = $user['name'];
            $source = $user['source'];

            $memberByName = Member::select('id_member', 'name')
                ->where('source', '=', Member::SOURCE[$source])
                ->get();

            foreach ($memberByName as $v) {
                if (Crypt::decrypt($v->name) == $name) {
                    $memberByNameIdMember = $v->id_member;
                    break;
                }
            }

            $hasPrize = MemberPrize::where('id_member', '=', $memberByNameIdMember)->exists();
        }

        if (!$hasPrize) {
            $lotteryPool = LotteryPool::where('start_at', '<=', $now)
                ->where('end_at', '>=', $now)
                ->first();

            if (!$lotteryPool) {
                return $result;
            }

            $quantity = LotteryPool::where('end_at', '<=', $now)->get()->sum('quantity');
            $winningOdds = $lotteryPool->winning_odds;
            $memberPrizeCount = MemberPrize::count();

            if ($quantity > $memberPrizeCount) {
                $quantity = $quantity - $memberPrizeCount;
                $rate = ($quantity * $winningOdds) / 100;
                $winRange = floor($rate*10000);
                $play = mt_rand(1, 10000);

                if ($play <= $winRange) {
                    $pin = Pin::where('active', '=', Pin::ACTIVE['enabled'])->first();
                    $pin->active = Pin::ACTIVE['disabled'];
                    $pin->save();

                    DB::connection()->getPdo()->exec('LOCK TABLES member_prize WRITE');

                    MemberPrize::create([
                        'id_member' => $idMember,
                        'id_pin' => $pin->id_pin,
                        'ip' => $this->getIp()
                    ]);

                    DB::connection()->getPdo()->exec('UNLOCK TABLES');

                    $result = [
                        'isWin' => true,
                        'serial_number' => $pin->serial_number
                    ];
                }
            }
        }

        return $result;
    }
}
