<?php

namespace App\Http\Controllers;

use App\Models\GameToken;
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
    public function lottery($token = null)
    {
        $result = [
            'isWin' => false,
            'serial_number' => null
        ];

        if (!$token) {
            return $result;
        }

        // $now = Carbon::parse('2025-06-05 12:00:00')->format('Y-m-d H:i:s');
        $now = Carbon::now()->addHours(8)->format('Y-m-d H:i:s');
        $uid = session('user')['uid'];

        $gameToken = GameToken::where('uid', '=', $uid)
            ->where('token', '=', $token)
            ->where('active', '=', 1);

        if (!$gameToken->exists()) {
            return $result;
        }

        $token = $gameToken->first();
        $token->active = 0;
        $token->save();

        $nowTime = Carbon::now();
        $tokenCreateAt = Carbon::parse($token->created_at);

        $diffInSeconds = $nowTime->diffInSeconds($tokenCreateAt);

        if ($diffInSeconds < 20) {
            return $result;
        }

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

            $abnormalPattern = '/^\d{2}-\d{6,7}-\d{2}(\+\d+)?$/';

            if (preg_match($abnormalPattern, $name)) {
                return $result;
            }

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

            $quantity = LotteryPool::where('start_at', '<=', $now)->get()->sum('quantity');
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
