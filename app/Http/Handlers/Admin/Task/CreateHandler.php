<?php

namespace App\Http\Handlers\Admin\Task;

use App\Models\Order;
use App\Models\User;

class CreateHandler implements CreateHandlerContract
{

    public function handle(): array
    {
        $users = User::all();
        $orders = Order::all();
        return compact('users', 'orders');
    }
}
