<?php

namespace App\Http\Commands\Admin\Customer;

use App\Models\Customer;

class CreateCommandHandler implements CreateCommandHandlerContract
{

    public function handle(array $data)
    {
        Customer::firstOrCreate($data);
    }
}
