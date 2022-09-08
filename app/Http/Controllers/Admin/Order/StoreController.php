<?php

namespace App\Http\Controllers\Admin\Order;

use App\Http\Handlers\Admin\Order\StoreHandler;

class StoreController implements StoreControllerContract
{
    public function __construct(public StoreHandler $handler)
    {
    }

    public function __invoke()
    {
        $this->handler->handle();
        return redirect()->route('admin.order.index');
    }
}
