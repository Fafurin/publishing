<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TypeRequest;
use App\Models\Type;

class TypeController extends Controller
{
    public function index()
    {
        $types = Type::all();
        return view('admin.type.index', compact('types'));
    }

    public function create()
    {
        return view('admin.type.create');
    }

    public function store(TypeRequest $request)
    {
        $data = $request->validated();
        Type::firstOrCreate($data);
        return redirect()->route('admin.type.index');
    }

    public function show(Type $type)
    {
        return view('admin.type.show', compact('type'));
    }

    public function edit(Type $type)
    {
        return view('admin.type.edit', compact('type'));
    }

    public function update(TypeRequest $request, Type $type)
    {
        $data = $request->validated();
        $type->update($data);
        return view('admin.type.show', compact('type'));
    }

    public function delete (Type $type)
    {
        $type->delete();
        return redirect()->route('admin.type.index');
    }

}
