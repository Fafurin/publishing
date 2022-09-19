<?php

namespace App\Http\Handlers\Admin\Task;

use App\Http\Commands\Admin\CreateTaskCommandHandlerContract;
use App\Http\Requests\TaskRequest;

class StoreHandler implements StoreHandlerContract
{
    public function __construct(public TaskRequest $request, public CreateTaskCommandHandlerContract $handler)
    {
    }

    public function handle()
    {
        $data = $this->request->validated();
        $this->handler->handle($data);
    }
}
