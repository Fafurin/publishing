<?php

namespace App\Http\Handlers\Admin\User;

use App\Models\User;
use Illuminate\Support\Facades\Cache;

class ListHandler implements ListHandlerContract
{

    public function handle()
    {
        return Cache::remember('users', 60 * 60 * 24, function () {
            return User::all();
        });
    }
}
