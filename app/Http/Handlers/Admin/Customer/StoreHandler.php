<?php

namespace App\Http\Handlers\Admin\Customer;

use App\Http\Commands\Admin\Customer\CreateCustomerCommandHandlerContract;
use App\Http\Requests\CustomerRequest;

class StoreHandler implements StoreHandlerContract
{
    public function __construct(public CustomerRequest $request, public CreateCustomerCommandHandlerContract $handler)
    {
    }

    public function handle()
    {
        $data = $this->request->validated();
        $this->handler->handle($data);
    }
}