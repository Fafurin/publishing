<?php

namespace App\Http\Controllers\Admin\Role;

use App\Models\Role;
use Illuminate\Http\RedirectResponse;

interface DeleteControllerContract extends RoleControllerContract
{
    public function __invoke(Role $role): RedirectResponse;
}
