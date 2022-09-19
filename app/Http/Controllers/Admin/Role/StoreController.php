<?php

namespace App\Http\Controllers\Admin\Role;

use App\Http\Handlers\Admin\User\Role\StoreHandler;
use Illuminate\Http\RedirectResponse;

class StoreController implements StoreControllerContract
{
    public function __construct(public StoreHandler $handler)
    {
    }

    public function __invoke(): RedirectResponse
    {
        $this->handler->handle();
        return redirect()->route('admin.role.index');
    }
}
