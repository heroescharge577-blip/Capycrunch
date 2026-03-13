<!DOCTYPE html>
<html>
<head>

<title>Inventario</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<h2 class="mb-4">Inventario</h2>

<a href="{{ route('inventario.create') }}" class="btn btn-primary mb-3">
Agregar Inventario
</a>

<table class="table table-bordered table-striped">

<thead class="table-dark">

<tr>
<th>ID</th>
<th>Producto ID</th>
<th>Cantidad</th>
<th>Acciones</th>
</tr>

</thead>

<tbody>

@foreach($inventarios as $inventario)

<tr>

<td>{{ $inventario->id }}</td>
<td>{{ $inventario->producto_id }}</td>
<td>{{ $inventario->cantidad }}</td>

<td>

<a href="{{ route('inventario.edit',$inventario->id) }}" class="btn btn-warning btn-sm">
Editar
</a>

<form action="{{ route('inventario.destroy',$inventario->id) }}" method="POST" style="display:inline;">

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