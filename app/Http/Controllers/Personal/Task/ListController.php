<?php

namespace App\Http\Controllers\Personal\Task;

use Illuminate\View\View;

class ListController implements ListControllerContract
{
    public function __invoke(): View
    {
        $tasks = auth()->user()->tasks;
        return view('personal.task.index', compact('tasks'));
    }
}
