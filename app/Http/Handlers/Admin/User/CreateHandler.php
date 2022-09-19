<?php

namespace App\Http\Handlers\Admin\User;

use App\Models\Position;
use App\Models\Role;

class CreateHandler implements CreateHandlerContract
{

    public function handle(): array
    {
        $positions = Position::all();
        $roles = Role::all();
        return compact('positions', 'roles');
    }
}
