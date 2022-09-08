<?php

namespace App\Http\Controllers\Admin\Order;

use App\Http\Handlers\Admin\Order\DeleteHandlerContract;
use App\Models\Order;
use Illuminate\Http\RedirectResponse;

class DeleteController implements DeleteControllerContract
{
    public function __construct(public DeleteHandlerContract $handler)
    {
    }

    public function __invoke(Order $order): RedirectResponse
    {
        $this->handler->handle($order);
        return redirect()->route('admin.order.index');
    }

}
