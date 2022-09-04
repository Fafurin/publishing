<?php

namespace App\Http\Controllers\Admin\Format;

use App\Http\Handlers\Admin\Format\UpdateHandlerContract;
use App\Models\Format;
use Illuminate\View\View;

class UpdateController implements UpdateControllerContract
{
    public function __construct(public UpdateHandlerContract $handler)
    {
    }

    public function __invoke(Format $format): View
    {
        $this->handler->handle($format);
        return view('admin.format.show', compact('format'));
    }

}
