<?php

namespace App\Http\Controllers\Admin\Format;

use App\Http\Handlers\Admin\Format\ListHandlerContract;
use Illuminate\View\View;

class ListController implements ListControllerContract
{
    public function __construct(public ListHandlerContract $handler)
    {
    }

    public function __invoke(): View
    {
        $formats = $this->handler->handle();
        return view('admin.format.index', compact('formats'));
    }
}
