<?php

namespace App\Http\Controllers\Admin\User;

use App\Models\User;
use Illuminate\Http\RedirectResponse;

interface DeleteControllerContract extends UserControllerContract
{
    public function __invoke(User $type): RedirectResponse;
}
