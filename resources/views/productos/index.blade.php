<!DOCTYPE html>
<html>
<head>

<title>Productos</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<h2 class="mb-4">Lista de Productos</h2>

<a href="{{ route('productos.create') }}" class="btn btn-primary mb-3">
Crear Producto
</a>

<table class="table table-bordered table-striped">

<thead class="table-dark">

<tr>
<th>ID</th>
<th>Nombre</th>
<th>Precio</th>
<th>Acciones</th>
</tr>

</thead>

<tbody>

@foreach($productos as $producto)

<tr>

<td>{{ $producto->id }}</td>
<td>{{ $producto->nombre }}</td>
<td>{{ $producto->precio }}</td>

<td>

<a href="{{ route('productos.edit',$producto->id) }}" class="btn btn-warning btn-sm">
Editar
</a>

<form action="{{ route('productos.destroy',$producto->id) }}" method="POST" style="display:inline;">

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