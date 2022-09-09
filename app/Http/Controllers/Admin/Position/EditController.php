<?php

namespace App\Http\Controllers\Admin\Position;

use App\Models\Position;
use Illuminate\View\View;

class EditController implements EditControllerContract
{

    public function __invoke(Position $position): View
    {
        return view('admin.position.edit', compact('position'));

    }
}
