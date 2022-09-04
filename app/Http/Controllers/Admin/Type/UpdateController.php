<?php

namespace App\Http\Controllers\Admin\Type;

use App\Http\Handlers\Admin\Type\UpdateHandlerContract;
use App\Models\Type;
use Illuminate\View\View;

class UpdateController implements UpdateControllerContract
{
    public function __construct(public UpdateHandlerContract $handler)
    {
    }

    public function __invoke(Type $type): View
    {
        $this->handler->handle($type);
        return view('admin.type.show', compact('type'));
    }

}
