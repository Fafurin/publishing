<?php

namespace App\Http\Handlers\Admin\Task;

use App\Models\Task;

class ListHandler implements ListHandlerContract
{

    public function handle()
    {
        return Task::orderBy('started_at', 'DESC')->get();
    }
}
