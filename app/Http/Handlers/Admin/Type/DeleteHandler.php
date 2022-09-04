<?php

namespace App\Http\Handlers\Admin\Type;

use App\Models\Type;

class DeleteHandler implements DeleteHandlerContract
{

    public function handle(Type $type)
    {
        $type->delete();
    }

}
