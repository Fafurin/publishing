<?php

namespace App\Http\Controllers\Admin\Role;

use App\Models\Role;
use Illuminate\View\View;

interface ShowControllerContract extends RoleControllerContract
{
    public function __invoke(Role $role): View;
}
