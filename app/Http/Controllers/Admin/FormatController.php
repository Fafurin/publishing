<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FormatRequest;
use App\Models\Format;

class FormatController extends Controller
{
    public function index()
    {
        $formats = Format::all();
        return view('admin.format.index', compact('formats'));
    }

    public function create()
    {
        return view('admin.format.create');
    }

    public function store(FormatRequest $request)
    {
        $data = $request->validated();
        Format::firstOrCreate($data);
        return redirect()->route('admin.format.index');
    }

    public function show(Format $format)
    {
        return view('admin.format.show', compact('format'));
    }

    public function edit(Format $format)
    {
        return view('admin.format.edit', compact('format'));
    }

    public function update(FormatRequest $request, Format $format)
    {
        $data = $request->validated();
        $format->update($data);
        return view('admin.format.show', compact('format'));
    }

    public function delete (Format $format)
    {
        $format->delete();
        return redirect()->route('admin.format.index');
    }

}
