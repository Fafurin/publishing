<?php

namespace App\Http\Controllers\Admin\Position;

use Illuminate\View\View;

interface ListControllerContract extends PositionControllerContract
{
    public function __invoke(): View;
}
