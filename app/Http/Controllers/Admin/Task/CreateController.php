<?php

namespace App\Http\Controllers\Admin\Task;

use App\Http\Handlers\Admin\Task\CreateHandlerContract;
use App\Models\Order;
use Illuminate\View\View;

class CreateController implements CreateControllerContract
{
    public function __construct(public CreateHandlerContract $handler)
    {
    }

    public function __invoke(Order $order): View
    {
        $data = $this->handler->handle();
        return view('admin.task.create', compact('order', 'data' ));
    }
}
