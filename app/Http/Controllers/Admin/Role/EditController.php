<?php

namespace App\Http\Controllers\Admin\Role;

use App\Models\Role;
use Illuminate\View\View;

class EditController implements EditControllerContract
{

    public function __invoke(Role $role): View
    {
        return view('admin.role.edit', compact('role'));

    }
}
