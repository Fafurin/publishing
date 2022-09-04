<?php

namespace App\Http\Controllers\Admin\Type;

use App\Http\Handlers\Admin\Type\DeleteHandlerContract;
use App\Models\Type;
use Illuminate\Http\RedirectResponse;

class DeleteController implements DeleteControllerContract
{
    public function __construct(public DeleteHandlerContract $handler)
    {
    }

    public function __invoke(Type $type): RedirectResponse
    {
        $this->handler->handle($type);
        return redirect()->route('admin.type.index');
    }

}
