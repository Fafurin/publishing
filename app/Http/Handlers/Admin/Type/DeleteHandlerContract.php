<?php

namespace App\Http\Handlers\Admin\Type;

use App\Http\Handlers\Admin\HandlerContract;
use App\Models\Type;

interface DeleteHandlerContract extends HandlerContract
{
    public function handle(Type $type);
}
