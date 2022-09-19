<?php

namespace App\Http\Controllers\Admin\Task;

use App\Models\Task;
use Illuminate\View\View;

interface EditControllerContract extends TaskControllerContract
{
    public function __invoke(Task $task): View;
}
