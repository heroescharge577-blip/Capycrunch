<!DOCTYPE html>
<html>
<head>

<title>Editar Venta</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<div class="card shadow">

<div class="card-header bg-warning">
<h3>Editar Venta</h3>
</div>

<div class="card-body">

<form action="{{ route('ventas.update',$venta->id) }}" method="POST">

@csrf
@method('PUT')

<div class="mb-3">
<label class="form-label">Cliente</label>

<select name="cliente_id" class="form-control" required>

@foreach($clientes as $cliente)

<option value="{{ $cliente->id }}"
{{ $cliente->id == $venta->cliente_id ? 'selected' : '' }}>

{{ $cliente->nombre }}

</option>

@endforeach

</select>

</div>

<div class="mb-3">
<label class="form-label">Forma de Pago</label>

<select name="forma_pago" class="form-control">

<option value="Efectivo" {{ $venta->forma_pago=='Efectivo' ? 'selected' : '' }}>Efectivo</option>

<option value="Nequi" {{ $venta->forma_pago=='Nequi' ? 'selected' : '' }}>Nequi</option>

<option value="Daviplata" {{ $venta->forma_pago=='Daviplata' ? 'selected' : '' }}>Daviplata</option>

<option value="Credito" {{ $venta->forma_pago=='Credito' ? 'selected' : '' }}>Credito</option>

</select>

</div>

<div class="mb-3">
<label class="form-label">Total</label>
<input type="number" name="total" value="{{ $venta->total }}" class="form-control" required>
</div>

<button type="submit" class="btn btn-success">Actualizar</button>

<a href="{{ route('ventas.index') }}" class="btn btn-secondary">Volver</a>

</form>

</div>

</div>

</div>

</body>
</html>