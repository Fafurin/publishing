<?php

namespace App\Http\Handlers\Admin\User;

use App\Http\Handlers\Admin\HandlerContract;

interface CreateHandlerContract extends HandlerContract
{
    public function handle(): array;
}
