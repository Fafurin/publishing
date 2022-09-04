<?php

namespace App\Http\Handlers\Admin\Type;

use App\Http\Handlers\Admin\HandlerContract;

interface ListHandlerContract extends HandlerContract
{
    public function handle();
}
