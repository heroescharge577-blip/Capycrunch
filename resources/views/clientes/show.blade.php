<!DOCTYPE html>
<html>
<head>
<title>Ver Cliente</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="bg-light">

<div class="container mt-5">

<div class="card">

<div class="card-header bg-info text-white">
<h3>Datos del Cliente</h3>
</div>

<div class="card-body">

<p><b>ID:</b> {{ $cliente->id }}</p>
<p><b>Nombre:</b> {{ $cliente->nombre }}</p>
<p><b>Telefono:</b> {{ $cliente->telefono }}</p>

<a href="{{ route('clientes.index') }}" class="btn btn-secondary">
Volver
</a>

</div>
</div>

</div>

</body>
</html>