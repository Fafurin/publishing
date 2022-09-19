<?php

namespace App\Http\Handlers\Admin\Task;

use App\Http\Handlers\Admin\HandlerContract;

interface StoreHandlerContract extends HandlerContract
{
    public function handle();
}
