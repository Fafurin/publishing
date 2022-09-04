<?php

namespace App\Http\Controllers\Admin\Customer;

use Illuminate\View\View;

interface CreateControllerContract extends CustomerControllerContract
{
    public function __invoke(): View;
}
