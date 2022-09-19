<?php

namespace App\Http\Commands\Admin\User;

use App\Models\Role;

class CreateRoleCommandHandler implements CreateRoleCommandHandlerContract
{

    public function handle(array $data)
    {
        Role::firstOrCreate($data);
    }
}
