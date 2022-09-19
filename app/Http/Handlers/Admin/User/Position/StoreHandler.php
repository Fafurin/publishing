<?php

namespace App\Http\Handlers\Admin\User\Position;

use App\Http\Commands\Admin\User\CreatePositionCommandHandlerContract;
use App\Http\Requests\PositionRequest;

class StoreHandler implements StoreHandlerContract
{
    public function __construct(public PositionRequest $request, public CreatePositionCommandHandlerContract $handler)
    {
    }

    public function handle()
    {
        $data = $this->request->validated();
        $this->handler->handle($data);
    }
}
