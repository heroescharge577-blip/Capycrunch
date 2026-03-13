<!DOCTYPE html>
<html>
<head>
<title>Clientes</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="bg-light">

<div class="container mt-5">

<h2 class="mb-4">Lista de Clientes</h2>

<a href="{{ route('clientes.create') }}" class="btn btn-primary mb-3">
Nuevo Cliente
</a>

<table class="table table-bordered table-striped">

<thead class="table-dark">

<tr>
<th>ID</th>
<th>Nombre</th>
<th>Telefono</th>
<th>Acciones</th>
</tr>

</thead>

<tbody>

@foreach($clientes as $cliente)

<tr>

<td>{{ $cliente->id }}</td>
<td>{{ $cliente->nombre }}</td>
<td>{{ $cliente->telefono }}</td>

<td>

<a href="{{ route('clientes.show',$cliente->id) }}" class="btn btn-info btn-sm">
Ver
</a>

<a href="{{ route('clientes.edit',$cliente->id) }}" class="btn btn-warning btn-sm">
Editar
</a>

<form action="{{ route('clientes.destroy',$cliente->id) }}" method="POST" style="display:inline;">

@csrf
@method('DELETE')

<button type="submit" class="btn btn-danger btn-sm">
Eliminar
</button>

</form>

</td>

</tr>

@endforeach

</tbody>

</table>

</div>

</body>
</html>