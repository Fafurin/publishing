<?php

namespace App\Http\Handlers\Admin\User\Role;

use App\Http\Commands\Admin\User\CreateRoleCommandHandlerContract;
use App\Http\Requests\RoleRequest;

class StoreHandler implements StoreHandlerContract
{
    public function __construct(public RoleRequest $request, public CreateRoleCommandHandlerContract $handler)
    {
    }

    public function handle()
    {
        $data = $this->request->validated();
        $this->handler->handle($data);
    }
}
