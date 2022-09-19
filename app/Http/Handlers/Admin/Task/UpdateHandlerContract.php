<?php

namespace App\Http\Handlers\Admin\Task;

use App\Http\Handlers\Admin\HandlerContract;
use App\Models\Task;

interface UpdateHandlerContract extends HandlerContract
{
    public function handle(Task $task);
}
