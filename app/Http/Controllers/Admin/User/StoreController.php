<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Handlers\Admin\User\StoreHandlerContract;

class StoreController implements StoreControllerContract
{
    public function __construct(public StoreHandlerContract $handler)
    {
    }

    public function __invoke()
    {
        $this->handler->handle();
        return redirect()->route('admin.user.index');
    }
}
