<!DOCTYPE html>
<html>
<head>

<title>Registrar Venta</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<div class="card shadow">

<div class="card-header bg-primary text-white">
<h3>Registrar Venta</h3>
</div>

<div class="card-body">

<form action="{{ route('ventas.store') }}" method="POST">

@csrf

<div class="mb-3">
<label class="form-label">Cliente</label>

<select name="cliente_id" class="form-control" required>

<option value="">Seleccione un cliente</option>

@foreach($clientes as $cliente)

<option value="{{ $cliente->id }}">
{{ $cliente->nombre }}
</option>

@endforeach

</select>

</div>

<div class="mb-3">
<label class="form-label">Forma de Pago</label>

<select name="forma_pago" class="form-control">

<option value="Efectivo">Efectivo</option>
<option value="Nequi">Nequi</option>
<option value="Daviplata">Daviplata</option>
<option value="Credito">Credito</option>

</select>

</div>

<div class="mb-3">
<label class="form-label">Total</label>
<input type="number" name="total" class="form-control" required>
</div>

<button type="submit" class="btn btn-success">Guardar</button>

<a href="{{ route('ventas.index') }}" class="btn btn-secondary">Volver</a>

</form>

</div>

</div>

</div>

</body>
</html>