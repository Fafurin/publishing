<?php

namespace App\Http\Controllers\Admin\Customer;

use App\Http\Handlers\Admin\Customer\StoreHandler;
use Illuminate\Http\RedirectResponse;

class StoreController implements StoreControllerContract
{
    public function __construct(public StoreHandler $handler)
    {
    }

    public function __invoke(): RedirectResponse
    {
        $this->handler->handle();
        return redirect()->route('admin.customer.index');
    }
}
