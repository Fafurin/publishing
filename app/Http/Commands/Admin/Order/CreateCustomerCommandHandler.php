<?php

namespace App\Http\Commands\Admin\Order;

use App\Models\Customer;

class CreateCustomerCommandHandler
{
    public function handle(array $data): Customer
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
