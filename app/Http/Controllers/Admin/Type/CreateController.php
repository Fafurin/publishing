<?php

namespace App\Http\Controllers\Admin\Type;

use Illuminate\View\View;

class CreateController implements CreateControllerContract
{
    public function __invoke(): View
    {
        return view('admin.type.create');
    }
}
