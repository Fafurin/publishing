<?php

namespace App\Http\Controllers\Admin\Position;

use Illuminate\View\View;

class CreateController implements CreateControllerContract
{
    public function __invoke(): View
    {
        return view('admin.user.position.create');
    }
}
