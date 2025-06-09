<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Game;
use App\Models\Member;
use App\Models\MemberPrize;
use App\Models\Tag;
use App\Models\LotteryPool;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminController extends Controller
{
    const PAGE_LIMIT = 20;
    public function createAdmin(Request $request)
    {
        $account = $request->account;

        $isAdminExists = Admin::where('account', '=', $account)->exists();

        if ($isAdminExists) {
            throw new \Exception('account already exists.');
        }

        return Admin::create([
            'account' => $request->account,
            'pwd' => Hash::make($request->pwd)
        ]);
    }

    public function updateAdmin(Request $request)
    {
        $requestData = $request->input();
        $updateData = [];
        $idAdmin = $requestData['id_admin'];

        if (!$requestData) {
            throw new \Exception('Missing Parameter.');
        }

        if (isset($requestData['account']) && $requestData['account'] != '') {
            $updateData['account'] = $requestData['account'];
        }

        if (isset($requestData['pwd']) && $requestData['pwd'] != '') {
            $updateData['pwd'] = Hash::make($requestData['pwd']);
        }

        if (!$updateData) {
            throw new \Exception('update parameter cannot be empty.');
        }

        Admin::where('id_admin', '=', $idAdmin)->update($updateData);

        return 'success';
    }

    public function member()
    {
        $members = Member::select('id_member', 'name', 'source', 'ip', 'created_at')->paginate(self::PAGE_LIMIT);

        foreach ($members as $member) {
            $member->source = array_flip(Member::SOURCE)[$member->source];
            $member->name = Crypt::decrypt($member->name);
        }

        return view('16chaAdmin.member', ['members' => $members]);
    }

    public function winner()
    {
        $memberPrizes = MemberPrize::select('m.name', 'p.serial_number', 'member_prize.created_at')
            ->leftJoin('member as m', 'member_prize.id_member', '=', 'm.id_member')
            ->leftJoin('pin as p', 'member_prize.id_pin', '=', 'p.id_pin')
            ->paginate(self::PAGE_LIMIT);

        foreach ($memberPrizes as $memberPrize) {
            $memberPrize->name = Crypt::decrypt($memberPrize->name);
        }

        return view('16chaAdmin.winner', ['memberPrizes' => $memberPrizes]);
    }

    public function form($topic)
    {
        $pageTitle = Game::GAME_LANG_TW[$topic];

        $forms = Form::select('id_form', 'name', 'mobile', 'email', 'created_at')
            ->where('topic', '=', $topic)
            ->paginate(self::PAGE_LIMIT);

        foreach ($forms as $form) {
            $form->name = Crypt::decrypt($form->name);
            $form->mobile = Crypt::decrypt($form->mobile);
            $form->email = Crypt::decrypt($form->email);
        }

        return view('16chaAdmin.form', ['forms' => $forms, 'pageTitle' => $pageTitle]);
    }

    public function analysis()
    {
        $click_tags = Tag::select('action', 'page_name', 'label', DB::raw('COUNT(*) as count'))
            ->where('action', '=', 'click')
            ->groupBy('label', 'action', 'page_name')
            ->orderBy('page_name')
            ->get();

        $page_tags = Tag::select('action', 'page_name', 'label', DB::raw('COUNT(*) as count'))
            ->where('action', '=', 'page')
            ->groupBy('label', 'action', 'page_name')
            ->get();

        return view('16chaAdmin.analysis', [
            'click_tags' => $click_tags,
            'page_tags' => $page_tags
        ]);
    }

    public function getAnalysis(Request $request)
    {
        $action = $request->action;
        $pageName = $request->page_name;
        $label = $request->label;

        $query = Tag::where('action', '=', $action)
            ->where('label', '=', $label);

        if ($pageName != '') {
            $query->where('page_name', '=', $pageName);
        }

        $list = $query->groupBy('date')
            ->select(DB::raw('date_format(created_at,"%m/%d") as date'), DB::raw('count(*) as num'))
            ->orderBy('date')
            ->get();

        $label = $datas = [];
        foreach ($list as $l) {
            $label[] = $l->date;
            $datas[] = $l->num;
        }

        return response()->json(['labels'=>$label, 'datas'=>$datas]);
    }

    public function logout()
    {
        session()->forget('admin');
        return redirect('/16chaAdmin');
    }

    public function getLotteryInfo(Request $request)
    {
        $today = $request->get('today');

        $todayInfo = $today;
        $hasTodayLotteryInfo = LotteryPool::whereBetween('end_at', [
            Carbon::parse($today)->startOfDay()->format('Y-m-d H:i:s'),
            Carbon::parse($today)->endOfDay()->format('Y-m-d H:i:s')
        ])->exists();

        $maxDate = LotteryPool::max('end_at');
        $maxDate = Carbon::parse($maxDate)->format('Y-m-d');
        $minDate = LotteryPool::min('end_at');
        $minDate = Carbon::parse($minDate)->format('Y-m-d');

        if (!$hasTodayLotteryInfo) {
            $todayInfo = $maxDate;
            $today = $maxDate;
        }

        $startAt = Carbon::parse($today)->startOfDay();
        $endAt = Carbon::parse($today)->endOfDay();

        $now = Carbon::now()->addHours(8)->format('Y-m-d H:i:s');
        $quantity = LotteryPool::whereBetween('start_at', [$startAt, $endAt])->sum('quantity');
        $quantity = LotteryPool::where('start_at', '<=', $now)->sum('quantity');

        $usedPrizeNum = MemberPrize::count();

        $unusePrizeNum = $quantity - $usedPrizeNum;

        $todayLotteryInfo = LotteryPool::where(function ($query) use ($startAt, $endAt) {
            $query->where('start_at', '<=', $endAt)
                ->where('end_at', '>=', $startAt);
        })->get();

        foreach ($todayLotteryInfo as $lotteryInfo) {
            $lotteryInfo->start_at = Carbon::parse($lotteryInfo->start_at)->format('H:i');
            $lotteryInfo->end_at = Carbon::parse($lotteryInfo->end_at)->format('H:i');
        }

        return [
            'prize_info' => [
                'quantity' => $quantity,
                'used_prize_num' => $usedPrizeNum,
                'unuse_prize_num' => $unusePrizeNum,
            ],
            'today_lottery_info' => $todayLotteryInfo,
            'today' => $todayInfo,
            'hasPrev' => Carbon::parse($today)->gt(Carbon::parse($minDate)),
            'hasNext' => Carbon::parse($today)->lt(Carbon::parse($maxDate))
        ];
    }
}
