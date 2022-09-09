<?php

namespace App\Http\Controllers\Admin\Position;

use Illuminate\Http\RedirectResponse;

interface StoreControllerContract extends PositionControllerContract
{
    public function __invoke(): RedirectResponse;
}
