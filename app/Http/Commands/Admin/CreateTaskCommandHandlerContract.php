<?php

namespace App\Http\Commands\Admin;

interface CreateTaskCommandHandlerContract extends CommandHandlerContract
{
    public function handle(array $data);
}
