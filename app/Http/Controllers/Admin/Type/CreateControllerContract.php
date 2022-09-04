<?php

namespace App\Http\Controllers\Admin\Type;

use Illuminate\View\View;

interface CreateControllerContract extends TypeControllerContract
{
    public function __invoke(): View;
}
