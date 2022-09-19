<?php

namespace App\Http\Controllers\Admin\Task;

use App\Http\Handlers\Admin\Task\StoreHandler;

class StoreController implements StoreControllerContract
{
    public function __construct(public StoreHandler $handler)
    {
    }

    public function __invoke()
    {
        $this->handler->handle();
        return redirect()->route('admin.task.index');
    }
}
