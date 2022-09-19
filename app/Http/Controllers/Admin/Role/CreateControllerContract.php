<?php

namespace App\Http\Controllers\Admin\Role;

use Illuminate\View\View;

interface CreateControllerContract extends RoleControllerContract
{
    public function __invoke(): View;
}
