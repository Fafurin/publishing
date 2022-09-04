<?php

namespace App\Http\Controllers\Admin\Format;

use Illuminate\Http\RedirectResponse;

interface StoreControllerContract extends FormatControllerContract
{
    public function __invoke(): RedirectResponse;
}
