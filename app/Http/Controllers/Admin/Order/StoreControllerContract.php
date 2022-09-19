<?php

namespace App\Http\Controllers\Admin\Order;

interface StoreControllerContract extends OrderControllerContract
{
    public function __invoke();
}
