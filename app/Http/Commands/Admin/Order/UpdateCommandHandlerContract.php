<?php

namespace App\Http\Commands\Admin\Order;

use App\Http\Commands\Admin\CommandHandlerContract;
use App\Models\Order;

interface UpdateCommandHandlerContract extends CommandHandlerContract
{
    public function handle(Order $order, array $data);
}
