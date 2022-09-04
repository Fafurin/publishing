<?php

namespace App\Http\Controllers\Admin\Format;

use Illuminate\View\View;

interface CreateControllerContract extends FormatControllerContract
{
    public function __invoke(): View;
}
