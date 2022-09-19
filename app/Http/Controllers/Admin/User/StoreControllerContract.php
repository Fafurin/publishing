<?php

namespace App\Http\Controllers\Admin\User;

use Illuminate\Http\RedirectResponse;

interface StoreControllerContract extends UserControllerContract
{
    public function __invoke();
}
