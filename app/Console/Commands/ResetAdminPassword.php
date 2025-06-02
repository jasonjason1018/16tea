<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class ResetAdminPassword extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:reset-password {--id=} {--all}';

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
        if ($this->option('all')) {
            Admin::query()->update([
                'pwd' => Hash::make('admin123')
            ]);
            $this->info('All admin passwords reset to "admin123"');
        } elseif ($id = $this->option('id')) {
            $admin = Admin::find($id);
            if ($admin) {
                $admin->pwd = Hash::make('admin123');
                $admin->save();
                $this->info("Admin ID {$id} password reset to 'admin123'");
            } else {
                $this->error('Admin not found');
            }
        } else {
            $this->error('Please provide --id=ID or --all');
        }
    }
}
