<?php

namespace App\Http\Controllers\Admin\Format;

use Illuminate\View\View;

interface ListControllerContract extends FormatControllerContract
{
    public function __invoke(): View;
}
