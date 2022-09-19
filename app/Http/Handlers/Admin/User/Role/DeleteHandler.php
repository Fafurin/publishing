<?php

namespace App\Http\Handlers\Admin\User\Role;

use App\Models\Role;

class DeleteHandler implements DeleteHandlerContract
{

    public function handle(Role $role)
    {
        $role->delete();
    }

}
