<?php

namespace App\Http\Handlers\Admin\Position;

use App\Models\Position;

class DeleteHandler implements DeleteHandlerContract
{

    public function handle(Position $position)
    {
        $position->delete();
    }

}
