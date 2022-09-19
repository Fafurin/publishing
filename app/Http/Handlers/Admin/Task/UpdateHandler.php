<?php

namespace App\Http\Handlers\Admin\Task;

use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;

class UpdateHandler implements UpdateHandlerContract
{
    public function __construct(public UpdateTaskRequest $request)
    {
    }

    public function handle(Task $task)
    {
        $data = $this->request->validated();
        $task->update($data);
    }

}
