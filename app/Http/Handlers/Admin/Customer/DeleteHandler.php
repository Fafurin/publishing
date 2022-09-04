<?php

namespace App\Http\Handlers\Admin\Customer;

use App\Models\Customer;

class DeleteHandler implements DeleteHandlerContract
{

    public function handle(Customer $customer)
    {
        $customer->delete();
    }

}
