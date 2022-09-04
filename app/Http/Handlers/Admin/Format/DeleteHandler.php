<?php

namespace App\Http\Handlers\Admin\Format;

use App\Models\Format;

class DeleteHandler implements DeleteHandlerContract
{

    public function handle(Format $format)
    {
        $format->delete();
    }

}
