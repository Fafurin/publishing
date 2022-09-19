<?php

namespace App\Http\Controllers\Admin\Role;

use App\Http\Handlers\Admin\User\Role\DeleteHandlerContract;
use App\Models\Role;
use Illuminate\Http\RedirectResponse;

class DeleteController implements DeleteControllerContract
{
    public function __construct(public DeleteHandlerContract $handler)
    {
    }

    public function __invoke(Role $role): RedirectResponse
    {
        $this->handler->handle($role);
        return redirect()->route('admin.role.index');
    }

}
