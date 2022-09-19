<?php

namespace App\Http\Controllers\Admin\Task;

use App\Http\Handlers\Admin\Task\ListHandlerContract;
use Illuminate\View\View;

class ListController implements ListControllerContract
{
    public function __construct(public ListHandlerContract $handler)
    {
    }

    public function __invoke(): View
    {
        $tasks = $this->handler->handle();
        return view('admin.task.index', compact('tasks'));
    }
}
