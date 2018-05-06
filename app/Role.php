<?php

namespace App;

use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
    const DEVELOPER = 'developer';
    const SUPER_ADMIN = 'super.admin';
    const POD_ADMIN = 'pod.admin';
    const POD_ADVANCED_USER = 'pod.advanced';
    const POD_BASIC_USER = 'pod.basic';
    const POD_USER = 'pod.subscriber';
    const GUEST = 'guest';
}