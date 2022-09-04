<?php

namespace App\Http\Controllers\Admin\Format;

use App\Models\Format;
use Illuminate\View\View;

interface EditControllerContract extends FormatControllerContract
{
    public function __invoke(Format $format): View;
}
