<!DOCTYPE html>
<html>
<head>

<title>Editar Inventario</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<div class="card">

<div class="card-header bg-warning">
<h3>Editar Inventario</h3>
</div>

<div class="card-body">

<form action="{{ route('inventario.update',$inventario->id) }}" method="POST">

@csrf
@method('PUT')

<div class="mb-3">
<label class="form-label">Producto ID</label>
<input type="number" name="producto_id" value="{{ $inventario->producto_id }}" class="form-control" required>
</div>

<div class="mb-3">
<label class="form-label">Cantidad</label>
<input type="number" name="cantidad" value="{{ $inventario->cantidad }}" class="form-control" required>
</div>

<button type="submit" class="btn btn-success">Actualizar</button>

<a href="{{ route('inventario.index') }}" class="btn btn-secondary">Volver</a>

</form>

</div>

</div>

</div>

</body>
</html>