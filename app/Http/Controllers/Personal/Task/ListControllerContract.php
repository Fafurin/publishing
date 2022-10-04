<?php

namespace App\Http\Controllers\Personal\Task;

use Illuminate\View\View;

interface ListControllerContract extends TaskControllerContract
{
    public function __invoke(): View;
}
