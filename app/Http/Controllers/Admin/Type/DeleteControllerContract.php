<?php

namespace App\Http\Controllers\Admin\Type;

use App\Models\Type;
use Illuminate\Http\RedirectResponse;

interface DeleteControllerContract extends TypeControllerContract
{
    public function __invoke(Type $type): RedirectResponse;
}
