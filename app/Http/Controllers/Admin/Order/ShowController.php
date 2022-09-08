<?php

namespace App\Http\Controllers\Admin\Order;

use App\Models\Order;
use Illuminate\View\View;

class ShowController implements ShowControllerContract
{

    public function __invoke(Order $order): View
    {
        return view('admin.order.show', compact('order'));
    }

}
