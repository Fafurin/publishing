<?php

namespace App\Http\Handlers\Admin\Task;

use App\Http\Handlers\Admin\HandlerContract;

interface CreateHandlerContract extends HandlerContract
{
    public function handle(): array;
}
