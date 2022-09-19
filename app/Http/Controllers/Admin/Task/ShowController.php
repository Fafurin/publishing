<?php

namespace App\Http\Controllers\Admin\Task;

use App\Models\Task;
use Illuminate\View\View;

class ShowController implements ShowControllerContract
{

    public function __invoke(Task $task): View
    {
        return view('admin.task.show', compact('task'));
    }

}
