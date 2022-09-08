<?php

namespace App\Http\Controllers\Admin\Order;

use App\Http\Handlers\Admin\Order\ListHandlerContract;
use Illuminate\View\View;

class ListController implements ListControllerContract
{
    public function __construct(public ListHandlerContract $handler)
    {
    }

    public function __invoke(): View
    {
        $orders = $this->handler->handle();
        return view('admin.order.index', compact('orders'));
    }
}
