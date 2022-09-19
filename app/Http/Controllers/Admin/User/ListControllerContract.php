<?php

namespace App\Http\Controllers\Admin\User;

use Illuminate\View\View;

interface ListControllerContract extends UserControllerContract
{
    public function __invoke(): View;
}
