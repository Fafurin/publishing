<?php

namespace App\Http\Controllers\Admin\Format;

use App\Http\Handlers\Admin\Format\StoreHandler;
use Illuminate\Http\RedirectResponse;

class StoreController implements StoreControllerContract
{
    public function __construct(public StoreHandler $handler)
    {
    }

    public function __invoke(): RedirectResponse
    {
        $this->handler->handle();
        return redirect()->route('admin.format.index');
    }
}
