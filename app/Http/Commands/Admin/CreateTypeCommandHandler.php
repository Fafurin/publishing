<?php

namespace App\Http\Commands\Admin;

use App\Models\Type;

class CreateTypeCommandHandler implements CreateTypeCommandHandlerContract
{

    public function handle(array $data)
    {
        Type::firstOrCreate($data);
    }
}
