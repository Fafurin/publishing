<?php

namespace App\Http\Handlers\Admin\Type;

use App\Http\Commands\Admin\Type\CreateTypeCommandHandlerContract;
use App\Http\Requests\TypeRequest;

class StoreHandler implements StoreHandlerContract
{
    public function __construct(public TypeRequest $request, public CreateTypeCommandHandlerContract $handler)
    {
    }

    public function handle()
    {
        $data = $this->request->validated();
        $this->handler->handle($data);
    }
}
