<!DOCTYPE html>
<html>
<head>

<title>Editar Producto</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<div class="card">

<div class="card-header bg-warning">
<h3>Editar Producto</h3>
</div>

<div class="card-body">

<form action="{{ route('productos.update',$producto->id) }}" method="POST">

@csrf
@method('PUT')

<div class="mb-3">
<label class="form-label">Nombre</label>
<input type="text" name="nombre" value="{{ $producto->nombre }}" class="form-control" required>
</div>

<div class="mb-3">
<label class="form-label">Precio</label>
<input type="number" name="precio" value="{{ $producto->precio }}" class="form-control" required>
</div>

<button type="submit" class="btn btn-success">Actualizar</button>

<a href="{{ route('productos.index') }}" class="btn btn-secondary">Volver</a>

</form>

</div>

</div>

</div>

</body>
</html>