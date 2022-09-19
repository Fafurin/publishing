<?php

namespace App\Http\Controllers\Admin\Task;

use App\Models\Task;
use Illuminate\Http\RedirectResponse;

interface DeleteControllerContract extends TaskControllerContract
{
    public function __invoke(Task $task): RedirectResponse;
}
