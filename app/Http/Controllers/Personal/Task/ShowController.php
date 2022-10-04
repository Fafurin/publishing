<?php

namespace App\Http\Controllers\Personal\Task;

use App\Models\Task;
use Illuminate\View\View;

class ShowController implements ShowControllerContract
{

    public function __invoke(Task $task): View
    {
        return view('personal.task.show', compact('task'));
    }

}
