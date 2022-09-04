<?php

namespace App\Http\Controllers\Admin\Customer;

use App\Models\Customer;
use Illuminate\View\View;

class EditController implements EditControllerContract
{

    public function __invoke(Customer $customer): View
    {
        return view('admin.customer.edit', compact('customer'));

    }
}
