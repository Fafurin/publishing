<?php

namespace App\Http\Controllers\Admin\Position;

use App\Models\Position;
use Illuminate\Http\RedirectResponse;

interface DeleteControllerContract extends PositionControllerContract
{
    public function __invoke(Position $position): RedirectResponse;
}
