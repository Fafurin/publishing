<?php

namespace App\Http\Handlers\Admin\Customer;

use App\Http\Handlers\Admin\HandlerContract;
use App\Models\Customer;

interface UpdateHandlerContract extends HandlerContract
{
    public function handle(Customer $customer);
}
