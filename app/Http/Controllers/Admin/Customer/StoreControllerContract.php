<?php

namespace App\Http\Controllers\Admin\Customer;

use Illuminate\Http\RedirectResponse;

interface StoreControllerContract extends CustomerControllerContract
{
    public function __invoke(): RedirectResponse;
}
