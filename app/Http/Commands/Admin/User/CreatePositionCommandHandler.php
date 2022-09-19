<?php

namespace App\Http\Commands\Admin\User;

use App\Models\Position;

class CreatePositionCommandHandler implements CreatePositionCommandHandlerContract
{

    public function handle(array $data)
    {
        Position::firstOrCreate($data);
    }
}
