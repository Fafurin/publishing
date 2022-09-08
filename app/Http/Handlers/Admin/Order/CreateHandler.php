<?php

namespace App\Http\Handlers\Admin\Order;

use App\Models\Format;
use App\Models\Type;

class CreateHandler implements CreateHandlerContract
{

    public function handle(): array
    {
        $formats = Format::all();
        $types = Type::all();
        return compact('formats', 'types');
    }
}
