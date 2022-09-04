<?php

namespace App\Http\Commands\Admin\Format;

use App\Models\Format;

class CreateCommandHandler implements CreateCommandHandlerContract
{

    public function handle(array $data)
    {
        Format::firstOrCreate($data);
    }
}
