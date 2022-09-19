<?php

namespace App\Http\Handlers\Admin\Customer;

use App\Models\Customer;
use Illuminate\Support\Facades\Cache;

class ListHandler implements ListHandlerContract
{
    public function handle()
    {
        return Cache::remember('customers', 60 * 60 * 24, function () {
            return Customer::all();
        });
    }
}
