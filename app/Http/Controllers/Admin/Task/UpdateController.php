<?php

namespace App\Http\Controllers\Admin\Task;

use App\Http\Handlers\Admin\Task\UpdateHandlerContract;
use App\Models\Task;
use Illuminate\View\View;

class UpdateController implements UpdateControllerContract
{
    public function __construct(public UpdateHandlerContract $handler)
    {
    }

    public function __invoke(Task $task): View
    {
        $this->handler->handle($task);
        return view('admin.task.show', compact('task'));
    }

}
