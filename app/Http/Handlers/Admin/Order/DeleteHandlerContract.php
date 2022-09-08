<?php

namespace App\Http\Handlers\Admin\Order;

use App\Http\Handlers\Admin\HandlerContract;
use App\Models\Order;

interface DeleteHandlerContract extends HandlerContract
{
    public function handle(Order $order): void;
}
