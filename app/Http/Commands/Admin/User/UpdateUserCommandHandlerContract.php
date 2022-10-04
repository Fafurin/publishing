<?php

namespace App\Http\Commands\Admin\User;

use App\Http\Commands\Admin\CommandHandlerContract;
use App\Models\User;

interface UpdateUserCommandHandlerContract extends CommandHandlerContract
{
    public function handle(User $user, array $data);
}
