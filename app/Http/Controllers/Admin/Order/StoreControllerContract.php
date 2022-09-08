<?php

namespace App\Http\Controllers\Admin\Order;

use Illuminate\Http\RedirectResponse;

interface StoreControllerContract extends OrderControllerContract
{
    public function __invoke();
}
