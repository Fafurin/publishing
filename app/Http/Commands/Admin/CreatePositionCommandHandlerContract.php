<?php

namespace App\Http\Commands\Admin;

interface CreatePositionCommandHandlerContract extends CommandHandlerContract
{
    public function handle(array $data);
}
