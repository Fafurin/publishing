<?php

namespace App\Http\Handlers\Admin\Type;

use App\Models\Type;
use Illuminate\Support\Facades\Cache;

class ListHandler implements ListHandlerContract
{

    public function handle()
    {
        return Cache::remember('types', 60 * 60 * 24, function () {
            return Type::all();
        });
    }
}
