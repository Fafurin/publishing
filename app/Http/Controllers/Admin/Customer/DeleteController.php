<?php

namespace App\Http\Controllers\Admin\Customer;

use App\Http\Handlers\Admin\Customer\DeleteHandlerContract;
use App\Models\Customer;
use Illuminate\Http\RedirectResponse;

class DeleteController implements DeleteControllerContract
{
    public function __construct(public DeleteHandlerContract $handler)
    {
    }

    public function __invoke(Customer $customer): RedirectResponse
    {
        $this->handler->handle($customer);
        return redirect()->route('admin.customer.index');
    }

}
