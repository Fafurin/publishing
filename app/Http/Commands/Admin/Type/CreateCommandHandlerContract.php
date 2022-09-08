<?php

namespace App\Http\Commands\Admin\Type;

use App\Http\Commands\Admin\CommandHandlerContract;

interface CreateCommandHandlerContract extends CommandHandlerContract
{
    public function handle(array $data);
}
