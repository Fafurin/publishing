<?php

namespace App\Http\Controllers\Admin\Type;

use App\Models\Type;
use Illuminate\View\View;

class ShowController implements ShowControllerContract
{

    public function __invoke(Type $type): View
    {
        return view('admin.type.show', compact('type'));
    }

}
