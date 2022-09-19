<?php

namespace App\Http\Handlers\Admin\User\Position;

use App\Http\Requests\PositionRequest;
use App\Models\Position;

class UpdateHandler implements UpdateHandlerContract
{
    public function __construct(public PositionRequest $request)
    {
    }

    public function handle(Position $position)
    {
        $data = $this->request->validated();
        $position->update($data);
    }

}
