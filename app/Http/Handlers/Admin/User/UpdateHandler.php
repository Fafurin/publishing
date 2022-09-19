<?php

namespace App\Http\Handlers\Admin\User;

use App\Http\Commands\Admin\UpdateUserCommandHandlerContract;
use App\Http\Requests\UserRequest;
use App\Models\User;

class UpdateHandler implements UpdateHandlerContract
{
    public function __construct(public UserRequest $request, public UpdateUserCommandHandlerContract $handler)
    {
    }

    public function handle(User $user)
    {
        $data = $this->request->validated();
        $this->handler->handle($user, $data);
    }

}
