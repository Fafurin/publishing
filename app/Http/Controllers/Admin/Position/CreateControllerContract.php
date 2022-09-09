<?php

namespace App\Http\Controllers\Admin\Position;

use Illuminate\View\View;

interface CreateControllerContract extends PositionControllerContract
{
    public function __invoke(): View;
}
