<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Permission;
use App\Role;
use DB;

class RemoveRoles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'roles:remove';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Role::truncate();
        Permission::truncate();
        DB::statement('TRUNCATE TABLE role_user;');
        DB::statement('TRUNCATE TABLE permission_role;');
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
