<?php

namespace App\Http\Controllers\Admin\Order;

use App\Models\Format;
use App\Models\Order;
use App\Models\Type;
use Illuminate\View\View;

class EditController implements EditControllerContract
{

    public function __invoke(Order $order): View
    {
        $formats = Format::all();
        $types = Type::all();
        return view('admin.order.edit', compact('order', 'formats', 'types'));
    }
}
