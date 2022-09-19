<?php

namespace App\Http\Handlers\Admin\User;

use App\Models\User;

class DeleteHandler implements DeleteHandlerContract
{

    public function handle(User $user): void
    {
        $user->delete();
    }

}
