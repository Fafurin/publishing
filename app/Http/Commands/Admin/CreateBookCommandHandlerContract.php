<?php

namespace App\Http\Commands\Admin;

interface CreateBookCommandHandlerContract extends CommandHandlerContract
{
    public function handle(array $data);
}
