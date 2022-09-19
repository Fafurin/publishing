<?php

namespace App\Http\Commands\Admin\User;

use App\Jobs\StoreUserJob;

class CreateUserCommandHandler implements CreateUserCommandHandlerContract
{

    public function __construct(
//        public CreateProfileCommandHandlerContract $createProfileHandler,
    )
    {
    }

    public function handle(array $data)
    {
//        $profile = $this->createProfileHandler->handle($data);

        $userData = [
            'name' => $data['name'],
            'email' => $data['email'],
//            'profile_id' => $profile->id,
            'position_id' => $data['position_id'],
            'role_id' => $data['role_id'],
        ];

        StoreUserJob::dispatch($userData);
        unset($userData);
    }
}
