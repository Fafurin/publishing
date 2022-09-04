<?php

namespace App\Http\Controllers\Admin\Type;

use App\Models\Type;
use Illuminate\View\View;

interface UpdateControllerContract extends TypeControllerContract
{
    public function __invoke(Type $type): View;
}
