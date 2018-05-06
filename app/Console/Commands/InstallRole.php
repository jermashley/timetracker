<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Role;
use App\Permission;
use App\User;

class InstallRole extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'roles:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Installs user roles.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $developer = new Role();
        $developer->name = Role::DEVELOPER;
        $developer->display_name = 'Developer';
        $developer->description = 'God of this domain.';
        $developer->save();

        $superAdmin = new Role();
        $superAdmin->name = Role::SUPER_ADMIN;
        $superAdmin->display_name = 'Super Administrator';
        $superAdmin->description = 'Not quite a developer, but close.';
        $superAdmin->save();

        $guest = new Role();
        $guest->name = Role::GUEST;
        $guest->display_name = 'Guest';
        $guest->save();

        $podAdmin = new Role();
        $podAdmin->name = Role::POD_ADMIN;
        $podAdmin->display_name = 'Pod Administrator';
        $podAdmin->desciption = 'Adminstrator of the pod created on sign-up. Generally a parent or guardian.';
        $podAdmin->save();

        $podAdvanced = new Role();
        $podAdvanced->name = Role::POD_ADVANCED_USER;
        $podAdvanced->display_name = 'Advanced Pod User';
        $podAdvanced->desciption = 'Pod user that had the ability to log time. Usually an older student.';
        $podAdvanced->save();

        $podBasic = new Role();
        $podBasic->name = Role::POD_BASIC_MEMBER;
        $podBasic->display_name = 'Basic Pod Member';
        $podBasic->desciption = 'Basic pod member. This user may not have a login yet, but is necessary to attach time logs to.';
        $podBasic->save();

        $podSubscriber= new Role();
        $podSubscriber->name = Role::POD_SUBSCRIBER;
        $podSubscriber->display_name = 'Pod Subscriber';
        $podSubscriber->desciption = 'A person that subscribes to pod updates, information, and reports. Usually another parent or guardian; also, possibly a client.';
        $podSubscriber->save();
    }
}
