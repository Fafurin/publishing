<?php

namespace App\Http\Controllers\Admin\Role;

use Illuminate\View\View;

class CreateController implements CreateControllerContract
{
    public function __invoke(): View
    {
        return view('admin.role.create');
    }
}
