<?php

namespace App\Http\Controllers\Admin\Task;

use App\Http\Handlers\Admin\Task\DeleteHandlerContract;
use App\Models\Task;
use Illuminate\Http\RedirectResponse;

class DeleteController implements DeleteControllerContract
{
    public function __construct(public DeleteHandlerContract $handler)
    {
    }

    public function __invoke(Task $task): RedirectResponse
    {
        $this->handler->handle($task);
        return redirect()->route('admin.task.index');
    }

}
