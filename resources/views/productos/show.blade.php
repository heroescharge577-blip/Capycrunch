<!DOCTYPE html>
<html>
<head>

<title>Ver Producto</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<div class="card">

<div class="card-header bg-info text-white">
<h3>Detalle del Producto</h3>
</div>

<div class="card-body">

<p><b>ID:</b> {{ $producto->id }}</p>
<p><b>Nombre:</b> {{ $producto->nombre }}</p>
<p><b>Precio:</b> ${{ $producto->precio }}</p>

<a href="{{ route('productos.index') }}" class="btn btn-secondary">
Volver
</a>

</div>

</div>

</div>

</body>
</html>