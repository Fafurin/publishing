<?php

namespace App\Http\Controllers\Admin\Type;

use App\Http\Handlers\Admin\Type\ListHandlerContract;
use Illuminate\View\View;

class ListController implements ListControllerContract
{
    public function __construct(public ListHandlerContract $handler)
    {
    }

    public function __invoke(): View
    {
        $types = $this->handler->handle();
        return view('admin.type.index', compact('types'));
    }
}
