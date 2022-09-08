<?php

namespace App\Http\Commands\Admin;

interface CreateTypeCommandHandlerContract extends CommandHandlerContract
{
    public function handle(array $data);
}
