<!DOCTYPE html>
<html>
<head>

<title>Crear Producto</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<div class="card">

<div class="card-header bg-primary text-white">
<h3>Nuevo Producto</h3>
</div>

<div class="card-body">

<form action="{{ route('productos.store') }}" method="POST">

@csrf

<div class="mb-3">
<label class="form-label">Nombre</label>
<input type="text" name="nombre" class="form-control" required>
</div>

<div class="mb-3">
<label class="form-label">Precio</label>
<input type="number" name="precio" class="form-control" required>
</div>

<button type="submit" class="btn btn-success">Guardar</button>

<a href="{{ route('productos.index') }}" class="btn btn-secondary">Volver</a>

</form>

</div>

</div>

</div>

</body>
</html>