<?php

namespace App\Http\Commands\Admin\User;

use App\Models\Profile;

class CreateProfileCommandHandler implements CreateProfileCommandHandlerContract
{
    public function handle(array $data)
    {
        $profileData = [
            'date_of_birth' => $data['date_of_birth'],
            'started_at' => $data['started_at'],
            'phone' => $data['phone'],
            'address' => $data['address'],
        ];

        $profile = Profile::firstOrCreate($profileData);
        unset($profileData);

        return $profile;
    }
}
