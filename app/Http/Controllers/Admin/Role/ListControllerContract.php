<?php

namespace App\Http\Controllers\Admin\Role;

use Illuminate\View\View;

interface ListControllerContract extends RoleControllerContract
{
    public function __invoke(): View;
}
