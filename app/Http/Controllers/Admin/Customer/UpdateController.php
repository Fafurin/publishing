<?php

namespace App\Http\Controllers\Admin\Customer;

use App\Http\Handlers\Admin\Customer\UpdateHandlerContract;
use App\Models\Customer;
use Illuminate\View\View;

class UpdateController implements UpdateControllerContract
{
    public function __construct(public UpdateHandlerContract $handler)
    {
    }

    public function __invoke(Customer $customer): View
    {
        $this->handler->handle($customer);
        return view('admin.customer.show', compact('customer'));
    }

}
