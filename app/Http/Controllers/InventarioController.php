<?php

namespace App\Http\Controllers;

use App\Models\Inventario;
use Illuminate\Http\Request;

class InventarioController extends Controller
{

    public function index()
    {
        $inventarios = Inventario::all();
        return view('inventario.index', compact('inventarios'));
    }

    public function create()
    {
        return view('inventario.create');
    }

    public function store(Request $request)
    {
        Inventario::create($request->all());

        return redirect()->route('inventario.index')
                         ->with('success','Inventario registrado correctamente');
    }

    public function show($id)
    {
        $inventario = Inventario::findOrFail($id);
        return view('inventario.show', compact('inventario'));
    }

    public function edit($id)
    {
        $inventario = Inventario::findOrFail($id);
        return view('inventario.edit', compact('inventario'));
    }

    public function update(Request $request, $id)
    {
        $inventario = Inventario::findOrFail($id);
        $inventario->update($request->all());

        return redirect()->route('inventario.index')
                         ->with('success','Inventario actualizado');
    }

    public function destroy($id)
    {
        Inventario::destroy($id);

        return redirect()->route('inventario.index')
                         ->with('success','Inventario eliminado');
    }

}