<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index()
    {
        $types = Type::all();
        return view('admin.types.index', compact('types'));
    }

    public function create()
    {
        return view('admin.types.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string'
        ]);

        Type::create($validatedData);

        return redirect()->route('admin.types.index')->with('success', 'Type created successfully.');
    }

    public function show($id)
    {
        $type = Type::findOrFail($id);
        return view('admin.types.show', compact('type'));
    }

    public function edit($id)
    {
        $type = Type::findOrFail($id);
        return view('admin.types.edit', compact('type'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string'
        ]);

        $type = Type::findOrFail($id);
        $type->update($validatedData);

        return redirect()->route('admin.types.index')->with('success', 'Type updated successfully.');
    }

    public function destroy($id)
    {
        $type = Type::findOrFail($id);
        $type->delete();

        return redirect()->route('admin.types.index')->with('success', 'Type deleted successfully.');
    }
}
