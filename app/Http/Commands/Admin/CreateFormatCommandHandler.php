<?php

namespace App\Http\Commands\Admin;

use App\Models\Format;

class CreateFormatCommandHandler implements CreateFormatCommandHandlerContract
{

    public function handle(array $data)
    {
        Format::firstOrCreate($data);
    }
}
