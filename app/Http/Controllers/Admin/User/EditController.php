<?php

namespace App\Http\Controllers\Admin\User;

use App\Models\Position;
use App\Models\Role;
use App\Models\User;
use Illuminate\View\View;

class EditController implements EditControllerContract
{

    public function __invoke(User $user): View
    {
        $positions = Position::all();
        $roles = Role::all();
        return view('admin.user.edit', compact('user', 'positions', 'roles'));
    }
}
