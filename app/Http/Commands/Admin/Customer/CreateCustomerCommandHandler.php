<?php

namespace App\Http\Commands\Admin\Customer;

use App\Models\Customer;

class CreateCustomerCommandHandler implements CreateCustomerCommandHandlerContract
{

    public function handle(array $data)
    {
        Customer::firstOrCreate($data);
    }
}
