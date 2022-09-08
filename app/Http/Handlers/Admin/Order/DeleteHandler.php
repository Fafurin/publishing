<?php

namespace App\Http\Handlers\Admin\Order;

use App\Models\Order;

class DeleteHandler implements DeleteHandlerContract
{

    public function handle(Order $order): void
    {
        $order->delete();
    }

}
