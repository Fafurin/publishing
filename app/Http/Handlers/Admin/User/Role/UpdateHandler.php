<?php

namespace App\Http\Handlers\Admin\User\Role;

use App\Http\Requests\RoleRequest;
use App\Models\Role;

class UpdateHandler implements UpdateHandlerContract
{
    public function __construct(public RoleRequest $request)
    {
    }

    public function handle(Role $role)
    {
        $data = $this->request->validated();
        $role->update($data);
    }

}
