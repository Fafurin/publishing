<?php

namespace App\Http\Commands\Admin;

interface CreateCustomerCommandHandlerContract extends CommandHandlerContract
{
    public function handle(array $data);
}
