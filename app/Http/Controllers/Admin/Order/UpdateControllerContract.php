<?php

namespace App\Http\Controllers\Admin\Order;

use App\Models\Order;
use Illuminate\View\View;

interface UpdateControllerContract extends OrderControllerContract
{
    public function __invoke(Order $order): View;
}
