<?php

namespace App\Http\Controllers\Admin\User;

use App\Models\User;
use Illuminate\View\View;

class ShowController implements ShowControllerContract
{

    public function __invoke(User $user): View
    {
        return view('admin.user.show', compact('user'));
    }

}
