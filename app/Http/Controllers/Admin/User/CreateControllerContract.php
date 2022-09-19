<?php

namespace App\Http\Controllers\Admin\User;

use Illuminate\View\View;

interface CreateControllerContract extends UserControllerContract
{
    public function __invoke(): View;
}
