<?php

namespace App\Http\Handlers\Admin\User\Position;

use App\Http\Handlers\Admin\HandlerContract;
use App\Models\Position;

interface DeleteHandlerContract extends HandlerContract
{
    public function handle(Position $position);
}
