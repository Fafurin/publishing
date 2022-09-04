<?php

namespace App\Http\Handlers\Admin\Format;

use App\Http\Handlers\Admin\HandlerContract;
use App\Models\Format;

interface UpdateHandlerContract extends HandlerContract
{
    public function handle(Format $format);
}
