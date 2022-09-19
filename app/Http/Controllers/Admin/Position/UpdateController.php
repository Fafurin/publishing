<?php

namespace App\Http\Controllers\Admin\Position;

use App\Http\Handlers\Admin\User\Position\UpdateHandlerContract;
use App\Models\Position;
use Illuminate\View\View;

class UpdateController implements UpdateControllerContract
{
    public function __construct(public UpdateHandlerContract $handler)
    {
    }

    public function __invoke(Position $position): View
    {
        $this->handler->handle($position);
        return view('admin.position.show', compact('position'));
    }

}
