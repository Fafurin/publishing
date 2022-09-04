<?php

namespace App\Http\Controllers\Admin\Format;

use App\Models\Format;
use Illuminate\View\View;

class ShowController implements ShowControllerContract
{

    public function __invoke(Format $format): View
    {
        return view('admin.format.show', compact('format'));
    }

}
