<?php

namespace App\Http\Commands\Admin\Order;

use App\Http\Commands\Admin\CommandHandlerContract;

interface CreateCommandHandlerContract extends CommandHandlerContract
{
    public function handle(array $data);
}
