<?php

namespace App\Http\Commands\Admin;

use App\Models\Order;
use App\Models\Task;

class CreateTaskCommandHandler implements CreateTaskCommandHandlerContract
{

    public function handle(array $data)
    {
        // присваиваем статусу заказа 2 == в работе, когда формируем новую задачу для этого заказа
        $orderData = [
            'status_id' => 2
        ];

        $order = Order::find($data['order_id']);

        $order->update($orderData);

        Task::firstOrCreate($data);

        unset($data);

    }
}
