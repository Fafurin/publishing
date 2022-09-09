<?php

namespace App\Http\Controllers\Admin\Position;

use App\Models\Position;
use Illuminate\View\View;

interface ShowControllerContract extends PositionControllerContract
{
    public function __invoke(Position $position): View;
}
