<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use App\Models\Cliente;
use Illuminate\Http\Request;

class VentaController extends Controller
{

    public function index()
    {
        $ventas = Venta::with('cliente')->get();
        return view('ventas.index', compact('ventas'));
    }

    public function create()
    {
        $clientes = Cliente::all();
        return view('ventas.create', compact('clientes'));
    }

    public function store(Request $request)
    {
        Venta::create($request->all());

        return redirect()->route('ventas.index')
        ->with('success','Venta registrada correctamente');
    }

    public function show($id)
    {
        $venta = Venta::findOrFail($id);
        return view('ventas.show', compact('venta'));
    }

    public function edit($id)
    {
        $venta = Venta::findOrFail($id);
        $clientes = Cliente::all();

        return view('ventas.edit', compact('venta','clientes'));
    }

    public function update(Request $request, $id)
    {
        $venta = Venta::findOrFail($id);
        $venta->update($request->all());

        return redirect()->route('ventas.index')
        ->with('success','Venta actualizada');
    }

    public function destroy($id)
    {
        Venta::destroy($id);

        return redirect()->route('ventas.index')
        ->with('success','Venta eliminada');
    }

}