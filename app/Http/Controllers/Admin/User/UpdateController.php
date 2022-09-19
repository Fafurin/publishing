<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Handlers\Admin\User\UpdateHandlerContract;
use App\Models\User;
use Illuminate\View\View;

class UpdateController implements UpdateControllerContract
{
    public function __construct(public UpdateHandlerContract $handler)
    {
    }

    public function __invoke(User $user): View
    {
        $this->handler->handle($user);
        return view('admin.user.show', compact('user'));
    }

}
