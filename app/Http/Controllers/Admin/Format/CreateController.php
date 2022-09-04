<?php

namespace App\Http\Controllers\Admin\Format;

use Illuminate\View\View;

class CreateController implements CreateControllerContract
{
    public function __invoke(): View
    {
        return view('admin.format.create');
    }
}
