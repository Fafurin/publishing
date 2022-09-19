<?php

namespace App\Http\Controllers\Admin\Task;

use App\Models\Order;
use Illuminate\View\View;

interface CreateControllerContract extends TaskControllerContract
{
    public function __invoke(Order $order): View;
}
