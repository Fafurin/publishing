<?php

namespace App\Http\Handlers\Admin\Order;

use App\Models\Order;
use Illuminate\Support\Facades\Cache;

class ListHandler implements ListHandlerContract
{
    // выводим все заказы со статусом 1 == ожидание
    public function handle()
    {
        return Order::orderBy('started_at', 'DESC')->where('status_id', 1)->get();
//        return Cache::remember('orders', 60 * 60 * 24, function () {
//            return Order::orderBy('created_at', 'DESC')->get();
//        });
    }
}
