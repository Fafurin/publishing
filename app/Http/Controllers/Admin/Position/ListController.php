<?php

namespace App\Http\Controllers\Admin\Position;

use App\Http\Handlers\Admin\User\Position\ListHandlerContract;
use Illuminate\View\View;

class ListController implements ListControllerContract
{
    public function __construct(public ListHandlerContract $handler)
    {
    }

    public function __invoke(): View
    {
        $positions = $this->handler->handle();
        return view('admin.position.index', compact('positions'));
    }
}
