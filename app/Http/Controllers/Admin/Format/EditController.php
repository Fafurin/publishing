<?php

namespace App\Http\Controllers\Admin\Format;

use App\Models\Format;
use Illuminate\View\View;

class EditController implements EditControllerContract
{

    public function __invoke(Format $format): View
    {
        return view('admin.format.edit', compact('format'));

    }
}
