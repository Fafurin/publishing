<?php

namespace App\Http\Controllers\Personal;

use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function __invoke()
    {
        return view('personal.main.index');
    }
}
