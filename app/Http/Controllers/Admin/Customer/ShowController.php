<?php

namespace App\Http\Controllers\Admin\Customer;

use App\Models\Customer;
use Illuminate\View\View;

class ShowController implements ShowControllerContract
{

    public function __invoke(Customer $customer): View
    {
        return view('admin.customer.show', compact('customer'));
    }

}
