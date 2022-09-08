<?php

namespace App\Http\Controllers\Admin\Order;

use Illuminate\View\View;

interface ListControllerContract extends OrderControllerContract
{
    public function __invoke(): View;
}
