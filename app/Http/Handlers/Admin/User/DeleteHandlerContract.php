<?php

namespace App\Http\Handlers\Admin\User;

use App\Http\Handlers\Admin\HandlerContract;
use App\Models\User;

interface DeleteHandlerContract extends HandlerContract
{
    public function handle(User $user): void;
}
