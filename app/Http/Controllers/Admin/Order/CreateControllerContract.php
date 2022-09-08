<?php

namespace App\Http\Controllers\Admin\Order;

use Illuminate\View\View;

interface CreateControllerContract extends OrderControllerContract
{
    public function __invoke(): View;
}
