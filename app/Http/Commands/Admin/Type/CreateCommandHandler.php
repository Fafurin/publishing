<?php

namespace App\Http\Commands\Admin\Type;

use App\Models\Type;

class CreateCommandHandler implements CreateCommandHandlerContract
{

    public function handle(array $data)
    {
        Type::firstOrCreate($data);
    }
}
