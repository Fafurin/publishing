<?php

namespace App\Http\Handlers\Admin\Task;

use App\Models\Task;

class DeleteHandler implements DeleteHandlerContract
{

    public function handle(Task $task): void
    {
        $task->delete();
    }

}
