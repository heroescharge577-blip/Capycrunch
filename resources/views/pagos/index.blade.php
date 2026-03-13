<!DOCTYPE html>
<html>
<head>

<title>Pagos a Crédito</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<h2 class="mb-4">Pagos a Crédito</h2>

<a href="{{ route('pagos.create') }}" class="btn btn-primary mb-3">
Registrar Pago
</a>

@if(session('success'))
<div class="alert alert-success">
{{ session('success') }}
</div>
@endif

<table class="table table-bordered table-striped">

<thead class="table-dark">

<tr>
<th>ID</th>
<th>Venta</th>
<th>Monto</th>
<th>Acciones</th>
</tr>

</thead>

<tbody>

@foreach($pagos as $pago)

<tr>

<td>{{ $pago->id }}</td>
<td>{{ $pago->venta_id }}</td>
<td>${{ $pago->monto }}</td>

<td>

<a href="{{ route('pagos.show',$pago->id) }}" class="btn btn-info btn-sm">
Ver
</a>

<a href="{{ route('pagos.edit',$pago->id) }}" class="btn btn-warning btn-sm">
Editar
</a>

<form action="{{ route('pagos.destroy',$pago->id) }}" method="POST" style="display:inline;">

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