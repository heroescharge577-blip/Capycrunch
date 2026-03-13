<!DOCTYPE html>
<html>
<head>

<title>Ventas</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<h2 class="mb-4">Lista de Ventas</h2>

<a href="{{ route('ventas.create') }}" class="btn btn-primary mb-3">
Nueva Venta
</a>

<table class="table table-bordered table-striped">

<thead class="table-dark">

<tr>
<th>ID</th>
<th>Cliente</th>
<th>Forma de Pago</th>
<th>Total</th>
<th>Acciones</th>
</tr>

</thead>

<tbody>

@foreach($ventas as $venta)

<tr>

<td>{{ $venta->id }}</td>

<td>
{{ $venta->cliente ? $venta->cliente->nombre : 'Sin cliente' }}
</td>

<td>{{ $venta->forma_pago }}</td>

<td>${{ $venta->total }}</td>

<td>

<a href="{{ route('ventas.edit',$venta->id) }}" class="btn btn-warning btn-sm">
Editar
</a>

<form action="{{ route('ventas.destroy',$venta->id) }}" method="POST" style="display:inline;">

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