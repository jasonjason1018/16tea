<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\MemberPrize;
use App\Models\MemberRecord;
use App\Models\RecordItem;
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

    public function record()
    {
        $uid = session('user')['uid'];
        $member = Member::where('uid', '=', $uid)->first();
        $idMember = $member->id_member;

        $recordItem = RecordItem::get();

        foreach ($recordItem as $index => $item) {
            $pathEnd = "-off.png";

            $hasRecord = MemberRecord::where('id_member', '=', $idMember)
                ->where('id_record_item', '=', $item->id_record_item)
                ->exists();

            if ($hasRecord) {
                $pathEnd = ".png";
            }

            $recordItem[$index]['image_path'] = $item->image_path . $pathEnd;
        }

        return view('record', ['recordItem' => $recordItem]);
    }

    public function score(Request $request)
    {
        $requestData = $request->all();

        $score = $requestData['score'];
        $uid = session('user')['uid'];
        $member = Member::where('uid', '=', $uid)->first();
        $idMember = $member->id_member;

        foreach ($score as $recordItem => $num) {
            if ($num > 0) {
                $record = RecordItem::where('name_en', '=', $recordItem)->first();
                $idRecordItem = $record->id_record_item;

                $hasRecord = MemberRecord::where('id_member', '=', $idMember)
                    ->where('id_record_item', '=', $idRecordItem)
                    ->exists();

                if (!$hasRecord) {
                    MemberRecord::create([
                        'id_member' => $idMember,
                        'id_record_item' => $idRecordItem
                    ]);
                }
            }
        }

        return response('success');
    }
}
