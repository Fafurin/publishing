<?php

namespace App\Http\Commands\Admin;

use App\Models\Task;

class CreateTaskCommandHandler implements CreateTaskCommandHandlerContract
{

    public function handle(array $data)
    {
        Task::firstOrCreate($data);
        unset($data);
    }
}
