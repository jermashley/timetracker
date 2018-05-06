<?php

namespace App;

use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission
{

    // User manipulation
    const CREATE_USER = 'create.user';
    const UPDATE_USER_INFORMATION = 'update.user';
    const UPDATE_USER = 'update.user.role';
    const UPGRADE_POD_USER_ROLE = 'upgrade.pod.user.role';
    const DELETE_USER = 'delete.user';
    const RESTORE_DELETED_USER = 'restore.deleted.user';

    // Time Log Manipulation
    const CREATE_TIME_LOG = 'create.time.log';
    const UPDATE_TIME_LOG = 'update.time.log';
    const DELETE_TIME_LOG = 'delete.time.log';
    const RESTORE_DELETED_TIME_LOG = 'restore.deleted.time.log';

}