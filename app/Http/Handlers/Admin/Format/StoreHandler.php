<?php

namespace App\Http\Handlers\Admin\Format;

use App\Http\Commands\Admin\Format\CreateFormatCommandHandlerContract;
use App\Http\Requests\FormatRequest;

class StoreHandler implements StoreHandlerContract
{
    public function __construct(public FormatRequest $request, public CreateFormatCommandHandlerContract $handler)
    {
    }

    public function handle()
    {
        $data = $this->request->validated();
        $this->handler->handle($data);
    }
}
