<!DOCTYPE html>
<html>
<head>

<title>Detalle de Ventas</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<h2>Detalle de Ventas</h2>

<a href="{{ route('detalle-ventas.create') }}" class="btn btn-primary mb-3">
Agregar Detalle
</a>

<table class="table table-bordered table-striped">

<thead class="table-dark">

<tr>
<th>ID</th>
<th>Venta</th>
<th>Producto</th>
<th>Cantidad</th>
<th>Acciones</th>
</tr>

</thead>

<tbody>

@foreach($detalles as $detalle)

<tr>

<td>{{ $detalle->id }}</td>

<td>Venta #{{ $detalle->venta->id }}</td>

<td>{{ $detalle->producto->nombre }}</td>

<td>{{ $detalle->cantidad }}</td>

<td>

<a href="{{ route('detalle-ventas.show',$detalle->id) }}" class="btn btn-info btn-sm">
Ver
</a>

<a href="{{ route('detalle-ventas.edit',$detalle->id) }}" class="btn btn-warning btn-sm">
Editar
</a>

<form action="{{ route('detalle-ventas.destroy',$detalle->id) }}" method="POST" style="display:inline;">

@csrf
@method('DELETE')

<button class="btn btn-danger btn-sm">
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