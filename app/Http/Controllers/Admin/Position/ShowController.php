<?php

namespace App\Http\Controllers\Admin\Position;

use App\Models\Position;
use Illuminate\View\View;

class ShowController implements ShowControllerContract
{

    public function __invoke(Position $position): View
    {
        return view('admin.position.show', compact('position'));
    }

}
