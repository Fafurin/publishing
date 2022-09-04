<?php

namespace App\Http\Controllers\Admin\Customer;

use Illuminate\View\View;

interface ListControllerContract extends CustomerControllerContract
{
    public function __invoke(): View;
}
