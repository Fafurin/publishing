<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Handlers\Admin\User\ListHandlerContract;
use Illuminate\View\View;

class ListController implements ListControllerContract
{
    public function __construct(public ListHandlerContract $handler)
    {
    }

    public function __invoke(): View
    {
        $users = $this->handler->handle();
        return view('admin.user.index', compact('users'));
    }
}
