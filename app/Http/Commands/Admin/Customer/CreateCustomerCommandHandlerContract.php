<?php

namespace App\Http\Commands\Admin\Customer;

interface CreateCustomerCommandHandlerContract
{
    public function handle(array $data);
}
