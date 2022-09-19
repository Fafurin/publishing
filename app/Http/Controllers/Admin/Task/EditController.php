<?php

namespace App\Http\Controllers\Admin\Task;

use App\Models\Order;
use App\Models\Task;
use App\Models\User;
use Illuminate\View\View;

class EditController implements EditControllerContract
{

    public function __invoke(Task $task): View
    {
        $users = User::all();
        $orders = Order::all();
        return view('admin.task.edit', compact('task', 'users', 'orders'));
    }
}
