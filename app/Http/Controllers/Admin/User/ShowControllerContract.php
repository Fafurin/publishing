<?php

namespace App\Http\Controllers\Admin\User;

use App\Models\User;
use Illuminate\View\View;

interface ShowControllerContract extends UserControllerContract
{
    public function __invoke(User $user): View;
}
