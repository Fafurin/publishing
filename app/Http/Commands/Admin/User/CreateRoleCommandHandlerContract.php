<?php

namespace App\Http\Commands\Admin\User;

use App\Http\Commands\Admin\CommandHandlerContract;

interface CreateRoleCommandHandlerContract extends CommandHandlerContract
{
    public function handle(array $data);
}
