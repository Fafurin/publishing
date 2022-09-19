<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Handlers\Admin\User\CreateHandlerContract;
use Illuminate\View\View;

class CreateController implements CreateControllerContract
{
    public function __construct(public CreateHandlerContract $handler)
    {
    }

    public function __invoke(): View
    {
        $data = $this->handler->handle();
        return view('admin.user.create', compact('data'));
    }
}
