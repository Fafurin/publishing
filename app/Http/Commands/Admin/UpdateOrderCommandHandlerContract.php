<?php

namespace App\Http\Commands\Admin;

use App\Models\Order;

interface UpdateOrderCommandHandlerContract extends CommandHandlerContract
{
    public function handle(Order $order, array $data);
}
