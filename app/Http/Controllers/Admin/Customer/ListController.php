<?php

namespace App\Http\Controllers\Admin\Customer;

use App\Http\Handlers\Admin\Customer\ListHandlerContract;
use Illuminate\View\View;

class ListController implements ListControllerContract
{
    public function __construct(public ListHandlerContract $handler)
    {
    }

    public function __invoke(): View
    {
        $customers = $this->handler->handle();
        return view('admin.customer.index', compact('customers'));
    }
}
