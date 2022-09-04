<?php

namespace App\Http\Controllers\Admin\Customer;

use App\Models\Customer;
use Illuminate\View\View;

interface ShowControllerContract extends CustomerControllerContract
{
    public function __invoke(Customer $customer): View;
}
