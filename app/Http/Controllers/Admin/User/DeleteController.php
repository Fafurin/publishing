<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Handlers\Admin\User\DeleteHandlerContract;
use App\Models\User;
use Illuminate\Http\RedirectResponse;

class DeleteController implements DeleteControllerContract
{
    public function __construct(public DeleteHandlerContract $handler)
    {
    }

    public function __invoke(User $user): RedirectResponse
    {
        $this->handler->handle($user);
        return redirect()->route('admin.user.index');
    }

}
