<?php

namespace App\Http\Controllers\Admin\Type;

use Illuminate\View\View;

interface ListControllerContract extends TypeControllerContract
{
    public function __invoke(): View;
}
