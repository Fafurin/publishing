<?php

namespace App\Http\Controllers\Admin\Type;

use App\Models\Type;
use Illuminate\View\View;

class EditController implements EditControllerContract
{

    public function __invoke(Type $type): View
    {
        return view('admin.type.edit', compact('type'));

    }
}
