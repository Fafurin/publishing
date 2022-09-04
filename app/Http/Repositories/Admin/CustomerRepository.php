<?php

namespace App\Http\Repositories\Admin;

use App\Models\Customer;

class CustomerRepository implements CustomerRepositoryContract
{
    public function getCustomer(int $id): Customer|null
    {
        return Customer::find($id) ? Customer::find($id) : null;
    }
}
