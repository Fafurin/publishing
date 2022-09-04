<?php

namespace App\Http\Handlers\Admin\Format;

use App\Http\Requests\FormatRequest;
use App\Models\Format;

class UpdateHandler implements UpdateHandlerContract
{
    public function __construct(public FormatRequest $request)
    {
    }

    public function handle(Format $format)
    {
        $data = $this->request->validated();
        $format->update($data);
    }

}
