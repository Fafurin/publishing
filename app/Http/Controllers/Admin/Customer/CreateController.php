<?php

namespace App\Http\Controllers\Admin\Customer;

use Illuminate\View\View;

class CreateController implements CreateControllerContract
{
    public function __invoke(): View
    {
        return view('admin.customer.create');
    }
}
