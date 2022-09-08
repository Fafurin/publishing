<?php

namespace App\Http\Handlers\Admin\Order;

use App\Http\Commands\Admin\Order\CreateCommandHandlerContract;
use App\Http\Requests\OrderRequest;

class StoreHandler implements StoreHandlerContract
{
    public function __construct(public OrderRequest $request, public CreateCommandHandlerContract $handler)
    {
    }

    public function handle()
    {
        $data = $this->request->validated();
        $this->handler->handle($data);
    }
}
