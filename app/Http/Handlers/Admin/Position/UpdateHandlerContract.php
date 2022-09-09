<?php

namespace App\Http\Handlers\Admin\Position;

use App\Http\Handlers\Admin\HandlerContract;
use App\Models\Position;

interface UpdateHandlerContract extends HandlerContract
{
    public function handle(Position $format);
}
