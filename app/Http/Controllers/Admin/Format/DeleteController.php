<?php

namespace App\Http\Controllers\Admin\Format;

use App\Http\Handlers\Admin\Format\DeleteHandlerContract;
use App\Models\Format;
use Illuminate\Http\RedirectResponse;

class DeleteController implements DeleteControllerContract
{
    public function __construct(public DeleteHandlerContract $handler)
    {
    }

    public function __invoke(Format $format): RedirectResponse
    {
        $this->handler->handle($format);
        return redirect()->route('admin.format.index');
    }

}
