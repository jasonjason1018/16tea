<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Game;
use App\Models\Member;
use App\Models\MemberPrize;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
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

    public function member()
    {
        $members = Member::select('id_member', 'name', 'source', 'ip')->paginate(self::PAGE_LIMIT);

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

    public function logout()
    {
        session()->forget('admin');
        return redirect('/16chaAdmin');
    }
}
