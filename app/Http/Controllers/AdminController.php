<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Game;
use App\Models\Member;
use App\Models\MemberPrize;
use App\Models\Tag;
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
        $tags = Tag::select('action', 'page_name', 'label', DB::raw('COUNT(*) as count'))
            ->groupBy('label', 'action', 'page_name')
            ->get();

        return view('16chaAdmin.analysis', [
            'tags' => $tags
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
}
