<?php

namespace App\Http\Controllers\Admin\Role;

use App\Models\Role;
use Illuminate\View\View;

class ShowController implements ShowControllerContract
{

    public function __invoke(Role $role): View
    {
        return view('admin.role.show', compact('role'));
    }

}
