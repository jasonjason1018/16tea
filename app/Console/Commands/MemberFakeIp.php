<?php

namespace App\Console\Commands;

use App\Models\Member;
use Illuminate\Console\Command;

class MemberFakeIp extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fake_ip';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $members = Member::where('ip', '=', '')->get();

        foreach ($members as $member) {
            $member = Member::find($member->id_member);
            $member->ip = $this->random_ip();
            $member->save();
        }
    }

    private function random_ip(): string
    {
        return implode('.', [
            rand(1, 255),
            rand(0, 255),
            rand(0, 255),
            rand(1, 254),
        ]);
    }
}
