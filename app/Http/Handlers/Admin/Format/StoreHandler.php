<?php

namespace App\Http\Handlers\Admin\Format;

use App\Http\Commands\Admin\Format\CreateCommandHandlerContract;
use App\Http\Requests\FormatRequest;

class StoreHandler implements StoreHandlerContract
{
    public function __construct(public FormatRequest $request, public CreateCommandHandlerContract $handler)
    {
    }

    public function handle()
    {
        $data = $this->request->validated();
        $this->handler->handle($data);
    }
}
