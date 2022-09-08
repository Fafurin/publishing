<?php

namespace App\Http\Handlers\Admin\Order;

use App\Http\Commands\Admin\Order\UpdateCommandHandlerContract;
use App\Http\Requests\OrderRequest;
use App\Models\Order;

class UpdateHandler implements UpdateHandlerContract
{
    public function __construct(public OrderRequest $request, public UpdateCommandHandlerContract $handler)
    {
    }

    public function handle(Order $order)
    {
        $data = $this->request->validated();
        $this->handler->handle($order, $data);
    }

}
