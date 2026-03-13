<!DOCTYPE html>
<html>
<head>

<title>Detalle Venta</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<div class="card">

<div class="card-header bg-info text-white">
<h3>Detalle de Venta</h3>
</div>

<div class="card-body">

<p><b>ID:</b> {{ $venta->id }}</p>
<p><b>Cliente:</b> {{ $venta->cliente_id }}</p>
<p><b>Forma de Pago:</b> {{ $venta->forma_pago }}</p>
<p><b>Total:</b> ${{ $venta->total }}</p>

<a href="{{ route('ventas.index') }}" class="btn btn-secondary">
Volver
</a>

</div>

</div>

</div>

</body>
</html>