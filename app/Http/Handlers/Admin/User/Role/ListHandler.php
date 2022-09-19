<?php

namespace App\Http\Handlers\Admin\User\Role;

use App\Models\Role;
use Illuminate\Support\Facades\Cache;

class ListHandler implements ListHandlerContract
{

    public function handle()
    {
        return Cache::remember('roles', 60 * 60 * 24, function () {
            return Role::all();
        });
    }
}
