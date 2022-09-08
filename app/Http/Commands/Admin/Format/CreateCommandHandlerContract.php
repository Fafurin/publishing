<?php

namespace App\Http\Commands\Admin\Format;

use App\Http\Commands\Admin\CommandHandlerContract;

interface CreateCommandHandlerContract extends CommandHandlerContract
{
    public function handle(array $data);
}
