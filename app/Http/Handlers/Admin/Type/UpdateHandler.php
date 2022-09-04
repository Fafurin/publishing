<?php

namespace App\Http\Handlers\Admin\Type;

use App\Http\Requests\TypeRequest;
use App\Models\Type;

class UpdateHandler implements UpdateHandlerContract
{
    public function __construct(public TypeRequest $request)
    {
    }

    public function handle(Type $format)
    {
        $data = $this->request->validated();
        $format->update($data);
    }

}
