<?php

namespace App\Http\Controllers\Admin\Customer;

use App\Models\Customer;
use Illuminate\Http\RedirectResponse;

interface DeleteControllerContract extends CustomerControllerContract
{
    public function __invoke(Customer $customer): RedirectResponse;
}
