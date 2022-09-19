<?php

namespace App\Http\Handlers\Admin\User\Role;

use App\Http\Handlers\Admin\HandlerContract;
use App\Models\Role;

interface UpdateHandlerContract extends HandlerContract
{
    public function handle(Role $role);
}
