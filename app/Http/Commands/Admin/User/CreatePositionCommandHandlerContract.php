<?php

namespace App\Http\Commands\Admin\User;

use App\Http\Commands\Admin\CommandHandlerContract;

interface CreatePositionCommandHandlerContract extends CommandHandlerContract
{
    public function handle(array $data);
}
