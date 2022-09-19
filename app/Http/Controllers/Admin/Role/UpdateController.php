<?php

namespace App\Http\Controllers\Admin\Role;

use App\Http\Handlers\Admin\User\Role\UpdateHandlerContract;
use App\Models\Role;
use Illuminate\View\View;

class UpdateController implements UpdateControllerContract
{
    public function __construct(public UpdateHandlerContract $handler)
    {
    }

    public function __invoke(Role $role): View
    {
        $this->handler->handle($role);
        return view('admin.role.show', compact('role'));
    }

}
