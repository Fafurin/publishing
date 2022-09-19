<?php

namespace App\Http\Handlers\Admin\Task;

use App\Models\Task;

class ListHandler implements ListHandlerContract
{

    public function handle()
    {
        return Task::orderBy('created_at', 'DESC')->get();
    }
}
