<?php

namespace App\Http\Controllers\Admin\Type;

use Illuminate\Http\RedirectResponse;

interface StoreControllerContract extends TypeControllerContract
{
    public function __invoke(): RedirectResponse;
}
