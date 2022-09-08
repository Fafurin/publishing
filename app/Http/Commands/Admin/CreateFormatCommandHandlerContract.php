<?php

namespace App\Http\Commands\Admin;

interface CreateFormatCommandHandlerContract extends CommandHandlerContract
{
    public function handle(array $data);
}
