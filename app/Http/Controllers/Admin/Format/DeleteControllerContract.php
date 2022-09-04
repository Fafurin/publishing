<?php

namespace App\Http\Controllers\Admin\Format;

use App\Models\Format;
use Illuminate\Http\RedirectResponse;

interface DeleteControllerContract extends FormatControllerContract
{
    public function __invoke(Format $format): RedirectResponse;
}
