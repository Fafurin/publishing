<?php

namespace App\Http\Handlers\Admin\Format;

use App\Models\Format;
use Illuminate\Support\Facades\Cache;

class ListHandler implements ListHandlerContract
{

    public function handle()
    {
        return Cache::remember('formats', 60 * 60 * 24, function () {
            return Format::all();
        });
    }
}
