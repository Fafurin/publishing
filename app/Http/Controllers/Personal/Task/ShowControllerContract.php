<?php

namespace App\Http\Controllers\Personal\Task;

use App\Models\Task;
use Illuminate\View\View;

interface ShowControllerContract extends TaskControllerContract
{
    public function __invoke(Task $task): View;
}
