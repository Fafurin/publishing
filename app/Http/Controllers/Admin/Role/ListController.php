<?php

namespace App\Http\Controllers\Admin\Role;

use App\Http\Handlers\Admin\User\Role\ListHandlerContract;
use Illuminate\View\View;

class ListController implements ListControllerContract
{
    public function __construct(public ListHandlerContract $handler)
    {
    }

    public function __invoke(): View
    {
        $roles = $this->handler->handle();
        return view('admin.role.index', compact('roles'));
    }
}
