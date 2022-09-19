<?php

namespace App\Http\Handlers\Admin\User;

use App\Http\Commands\Admin\User\CreateUserCommandHandlerContract;
use App\Http\Requests\UserRequest;

class StoreHandler implements StoreHandlerContract
{
    public function __construct(public UserRequest $request, public CreateUserCommandHandlerContract $handler)
    {
    }

    public function handle()
    {
        $data = $this->request->validated();
        $this->handler->handle($data);
    }
}
