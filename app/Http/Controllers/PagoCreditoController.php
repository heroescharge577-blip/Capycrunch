<?php

namespace App\Http\Controllers;

use App\Models\PagoCredito;
use Illuminate\Http\Request;

class PagoCreditoController extends Controller
{

    public function index()
    {
        $pagos = PagoCredito::all();
        return view('pagos.index', compact('pagos'));
    }


    public function create()
    {
        return view('pagos.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'venta_id' => 'required|integer',
            'monto' => 'required|numeric'
        ]);

        PagoCredito::create($request->all());

        return redirect()->route('pagos.index')
        ->with('success','Pago registrado correctamente');
    }


    public function show($id)
    {
        $pago = PagoCredito::findOrFail($id);
        return view('pagos.show', compact('pago'));
    }


    public function edit($id)
    {
        $pago = PagoCredito::findOrFail($id);
        return view('pagos.edit', compact('pago'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'venta_id' => 'required|integer',
            'monto' => 'required|numeric'
        ]);

        $pago = PagoCredito::findOrFail($id);
        $pago->update($request->all());

        return redirect()->route('pagos.index')
        ->with('success','Pago actualizado correctamente');
    }


    public function destroy($id)
    {
        PagoCredito::destroy($id);

        return redirect()->route('pagos.index')
        ->with('success','Pago eliminado');
    }

}