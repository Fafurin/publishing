<?php

namespace App\Http\Handlers\Admin\User\Position;

use App\Models\Position;
use Illuminate\Support\Facades\Cache;

class ListHandler implements ListHandlerContract
{

    public function handle()
    {
        return Cache::remember('positions', 60 * 60 * 24, function () {
            return Position::all();
        });
    }
}
