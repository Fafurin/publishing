<?php

namespace App\Http\Controllers\Admin\Role;

use Illuminate\Http\RedirectResponse;

interface StoreControllerContract extends RoleControllerContract
{
    public function __invoke(): RedirectResponse;
}
