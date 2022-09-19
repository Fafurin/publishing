<?php

namespace App\Http\Handlers\Admin\User\Position;

use App\Models\Position;

class DeleteHandler implements DeleteHandlerContract
{

    public function handle(Position $position)
    {
        $position->delete();
    }

}
