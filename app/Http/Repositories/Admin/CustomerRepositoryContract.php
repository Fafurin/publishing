<?php

namespace App\Http\Repositories\Admin;

use App\Models\Customer;

interface CustomerRepositoryContract
{
    public function getCustomer(int $id): Customer|null;
}
