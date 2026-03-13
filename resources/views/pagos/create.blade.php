<!DOCTYPE html>
<html>
<head>

<title>Registrar Pago</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<h2>Registrar Pago</h2>

<form action="{{ route('pagos.store') }}" method="POST">

@csrf

<div class="mb-3">
<label>Venta ID</label>
<input type="number" name="venta_id" class="form-control" required>
</div>

<div class="mb-3">
<label>Monto</label>
<input type="number" step="0.01" name="monto" class="form-control" required>
</div>

<button type="submit" class="btn btn-success">
Guardar
</button>

<a href="{{ route('pagos.index') }}" class="btn btn-secondary">
Cancelar
</a>

</form>

</div>

</body>
</html>