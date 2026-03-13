<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Ventas - CapyCrunch</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .btn-custom {
            padding: 1.5rem;
            font-weight: bold;
            font-size: 1.1rem;
            margin-bottom: 1rem;
            transition: transform 0.2s;
        }
        .btn-custom:hover {
            transform: scale(1.02);
        }
    </style>
</head>
<body class="bg-light">

<div class="container mt-5">
    <h1 class="text-center fw-bold mb-4">Sistema de Ventas</h1>
    <hr>

    <div class="row">
        <div class="col-md-4">
            <a href="{{ route('productos.index') }}" class="btn btn-primary w-100 btn-custom">Productos</a>
        </div>
        <div class="col-md-4">
            <a href="{{ route('clientes.index') }}" class="btn btn-success w-100 btn-custom">Clientes</a>
        </div>
        <div class="col-md-4">
            <a href="{{ route('inventario.index') }}" class="btn btn-warning w-100 btn-custom text-white">Inventario</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <a href="{{ route('ventas.index') }}" class="btn btn-info w-100 btn-custom text-white">Ventas</a>
        </div>
        <div class="col-md-4">
            <a href="{{ route('detalle-ventas.index') }}" class="btn btn-dark w-100 btn-custom">Detalle Ventas</a>
        </div>
        <div class="col-md-4">
            <a href="{{ route('pagos.index') }}" class="btn btn-danger w-100 btn-custom">Pagos Crédito</a>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-12">
            <a href="{{ route('catalogo.index') }}" class="btn btn-outline-primary w-100 py-3 fw-bold shadow-sm border-2">
                📖 VER CATÁLOGO VISUAL DE PRODUCTOS
            </a>
        </div>
    </div>

</div>

</body>
</html>