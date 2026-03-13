<!DOCTYPE html>
<html>
<head>

<title>Ver Inventario</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<div class="card">

<div class="card-header bg-info text-white">
<h3>Detalle de Inventario</h3>
</div>

<div class="card-body">

<p><b>ID:</b> {{ $inventario->id }}</p>
<p><b>Producto ID:</b> {{ $inventario->producto_id }}</p>
<p><b>Cantidad:</b> {{ $inventario->cantidad }}</p>

<a href="{{ route('inventario.index') }}" class="btn btn-secondary">
Volver
</a>

</div>

</div>

</div>

</body>
</html>