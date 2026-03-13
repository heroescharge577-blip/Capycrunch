<!DOCTYPE html>
<html>
<head>

<title>Detalle del Pago</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<h2>Detalle del Pago</h2>

<div class="card">

<div class="card-body">

<p><strong>ID:</strong> {{ $pago->id }}</p>

<p><strong>Venta:</strong> {{ $pago->venta_id }}</p>

<p><strong>Monto:</strong> ${{ $pago->monto }}</p>

</div>

</div>

<br>

<a href="{{ route('pagos.index') }}" class="btn btn-secondary">
Volver
</a>

</div>

</body>
</html>