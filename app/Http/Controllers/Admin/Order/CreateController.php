<?php

namespace App\Http\Controllers\Admin\Order;

use App\Http\Handlers\Admin\Order\CreateHandlerContract;
use Illuminate\View\View;

class CreateController implements CreateControllerContract
{
    public function __construct(public CreateHandlerContract $handler)
    {
    }

    public function __invoke(): View
    {
        $data = $this->handler->handle();
        return view('admin.order.create', compact('data' ));
    }
}
