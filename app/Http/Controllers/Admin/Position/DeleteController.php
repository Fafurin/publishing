<?php

namespace App\Http\Controllers\Admin\Position;

use App\Http\Handlers\Admin\User\Position\DeleteHandlerContract;
use App\Models\Position;
use Illuminate\Http\RedirectResponse;

class DeleteController implements DeleteControllerContract
{
    public function __construct(public DeleteHandlerContract $handler)
    {
    }

    public function __invoke(Position $position): RedirectResponse
    {
        $this->handler->handle($position);
        return redirect()->route('admin.position.index');
    }

}
