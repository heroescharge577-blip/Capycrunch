<?php

namespace App\Http\Controllers;

use App\Models\DetalleVenta;
use App\Models\Venta;
use App\Models\Producto;
use Illuminate\Http\Request;

class DetalleVentaController extends Controller
{
    public function index()
    {
        $detalles = DetalleVenta::with(['venta','producto'])->get();
        // Cambiado a guion bajo para coincidir con tu carpeta
        return view('detalle_ventas.index', compact('detalles'));
    }

    public function create()
    {
        $ventas = Venta::all();
        $productos = Producto::all();

        return view('detalle_ventas.create', compact('ventas','productos'));
    }

    public function store(Request $request)
    {
        DetalleVenta::create($request->all());

        return redirect()->route('detalle-ventas.index')
            ->with('success','Detalle de venta registrado');
    }

    public function show($id)
    {
        $detalle = DetalleVenta::with(['venta','producto'])->findOrFail($id);

        return view('detalle_ventas.show', compact('detalle'));
    }

    public function edit($id)
    {
        $detalle = DetalleVenta::findOrFail($id);
        $ventas = Venta::all();
        $productos = Producto::all();

        return view('detalle_ventas.edit', compact('detalle','ventas','productos'));
    }

    public function update(Request $request, $id)
    {
        $detalle = DetalleVenta::findOrFail($id);
        $detalle->update($request->all());

        return redirect()->route('detalle-ventas.index')
            ->with('success','Detalle actualizado');
    }

    public function destroy($id)
    {
        DetalleVenta::destroy($id);

        return redirect()->route('detalle-ventas.index')
            ->with('success','Detalle eliminado');
    }
}