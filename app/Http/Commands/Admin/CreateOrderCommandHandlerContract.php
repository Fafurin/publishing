<?php

namespace App\Http\Commands\Admin;

interface CreateOrderCommandHandlerContract extends CommandHandlerContract
{
    public function handle(array $data);
}
