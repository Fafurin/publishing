<?php

namespace App\Http\Controllers\Admin\Order;

use App\Models\Order;
use Illuminate\Http\RedirectResponse;

interface DeleteControllerContract extends OrderControllerContract
{
    public function __invoke(Order $order): RedirectResponse;
}
