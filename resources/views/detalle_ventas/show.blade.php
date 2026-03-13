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
<h3>Detalle de la Venta</h3>
</div>

<div class="card-body">

<p><strong>ID:</strong> {{ $detalle->id }}</p>

<p><strong>Venta:</strong> #{{ $detalle->venta->id }}</p>

<p><strong>Producto:</strong> {{ $detalle->producto->nombre }}</p>

<p><strong>Cantidad:</strong> {{ $detalle->cantidad }}</p>

<a href="{{ route('detalle-ventas.index') }}" class="btn btn-primary">
Volver
</a>

</div>

</div>

</div>

</body>
</html>