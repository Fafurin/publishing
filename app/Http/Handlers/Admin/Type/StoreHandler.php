<?php

namespace App\Http\Handlers\Admin\Type;

use App\Http\Commands\Admin\Type\CreateCommandHandlerContract;
use App\Http\Requests\TypeRequest;

class StoreHandler implements StoreHandlerContract
{
    public function __construct(public TypeRequest $request, public CreateCommandHandlerContract $handler)
    {
    }

    public function handle()
    {
        $data = $this->request->validated();
        $this->handler->handle($data);
    }
}
