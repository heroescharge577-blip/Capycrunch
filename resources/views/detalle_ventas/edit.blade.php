<!DOCTYPE html>
<html>
<head>

<title>Editar Detalle Venta</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<div class="card">

<div class="card-header bg-warning">
<h3>Editar Detalle Venta</h3>
</div>

<div class="card-body">

<form action="{{ route('detalle-ventas.update',$detalle->id) }}" method="POST">

@csrf
@method('PUT')

<div class="mb-3">
<label class="form-label">Venta</label>

<select name="venta_id" class="form-control">

@foreach($ventas as $venta)

<option value="{{ $venta->id }}"
{{ $venta->id == $detalle->venta_id ? 'selected' : '' }}>

Venta #{{ $venta->id }}

</option>

@endforeach

</select>

</div>

<div class="mb-3">
<label class="form-label">Producto</label>

<select name="producto_id" class="form-control">

@foreach($productos as $producto)

<option value="{{ $producto->id }}"
{{ $producto->id == $detalle->producto_id ? 'selected' : '' }}>

{{ $producto->nombre }}

</option>

@endforeach

</select>

</div>

<div class="mb-3">
<label class="form-label">Cantidad</label>

<input type="number" name="cantidad"
value="{{ $detalle->cantidad }}"
class="form-control">

</div>

<button class="btn btn-success">Actualizar</button>

<a href="{{ route('detalle-ventas.index') }}" class="btn btn-secondary">Volver</a>

</form>

</div>

</div>

</div>

</body>
</html>