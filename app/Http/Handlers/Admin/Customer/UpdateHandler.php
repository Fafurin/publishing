<?php

namespace App\Http\Handlers\Admin\Customer;

use App\Http\Requests\CustomerRequest;
use App\Models\Customer;

class UpdateHandler implements UpdateHandlerContract
{
    public function __construct(public CustomerRequest $request)
    {
    }

    public function handle(Customer $customer)
    {
        $data = $this->request->validated();
        $customer->update($data);
    }

}
