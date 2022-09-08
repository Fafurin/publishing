<?php

namespace App\Http\Controllers\Admin\Order;

use App\Http\Handlers\Admin\Order\UpdateHandlerContract;
use App\Models\Order;
use Illuminate\View\View;

class UpdateController implements UpdateControllerContract
{
    public function __construct(public UpdateHandlerContract $handler)
    {
    }

    public function __invoke(Order $order): View
    {
        $this->handler->handle($order);
        return view('admin.order.show', compact('order'));
    }

}
