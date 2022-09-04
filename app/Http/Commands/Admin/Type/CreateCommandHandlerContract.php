<?php

namespace App\Http\Commands\Admin\Type;

interface CreateCommandHandlerContract
{
    public function handle(array $data);
}
