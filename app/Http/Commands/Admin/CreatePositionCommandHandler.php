<?php

namespace App\Http\Commands\Admin;

use App\Models\Position;

class CreatePositionCommandHandler implements CreatePositionCommandHandlerContract
{

    public function handle(array $data)
    {
        Position::firstOrCreate($data);
    }
}
