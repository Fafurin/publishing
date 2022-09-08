<?php

namespace App\Http\Commands\Admin;

use App\Models\Customer;

class CreateCustomerCommandHandler implements CreateCustomerCommandHandlerContract
{
    public function handle(array $data)
    {
        $customerData = [
            'name' => $data['name'],
            'phone' => $data['phone'],
            'email' => $data['email']
        ];
        $customer = Customer::firstOrCreate($customerData);
        unset($customerData);

        return $customer;
    }
}
