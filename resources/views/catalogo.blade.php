@php
    // Datos actualizados con las rutas de tus imágenes reales
    $productos = [
        [
            'nombre' => 'Nutella', 
            'precio' => '10,000', 
            'desc' => 'Deliciosa galleta rellena de crema de avellanas.',
            'imagen' => 'images/galletas/nutella.jpg'
        ],
        [
            'nombre' => 'Red Velvet', 
            'precio' => '10,000', 
            'desc' => 'Clásico sabor Red Velvet con un toque de vainilla.',
            'imagen' => 'images/galletas/redvelvet.jpg'
        ],
        [
            'nombre' => 'Klim', 
            'precio' => '10,000', 
            'desc' => 'Sabor tradicional inspirado en la leche en polvo.',
            'imagen' => 'images/galletas/klim.jpg'
        ],
        [
            'nombre' => 'Pie de Limón', 
            'precio' => '10,000', 
            'desc' => 'Equilibrio perfecto entre dulce y cítrico.',
            'imagen' => 'images/galletas/piedelimon.jpg'
        ],
        [
            'nombre' => 'Nucita', 
            'precio' => '10,000', 
            'desc' => 'Combinación cremosa de chocolate y leche.',
            'imagen' => 'images/galletas/nucita.jpg'
        ],
        [
            'nombre' => 'Bowl de Galletas', 
            'precio' => '10,000', 
            'desc' => 'Mezcla surtida de nuestras mejores galletas.',
            'imagen' => 'images/galletas/bowl.jpg'
        ],
        [
            'nombre' => 'Wafer', 
            'precio' => '10,000', 
            'desc' => 'Textura crujiente ideal para acompañar cafés.',
            'imagen' => 'images/galletas/wafer.jpg'
        ],
    ];
@endphp

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo CapyCrunch</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card-producto { 
            transition: transform 0.3s, box-shadow 0.3s; 
            border: none; 
            overflow: hidden;
        }
        .card-producto:hover { 
            transform: translateY(-8px); 
            box-shadow: 0 10px 20px rgba(0,0,0,0.15) !important;
        }
        .img-container {
            height: 200px;
            overflow: hidden;
        }
        .img-container img {
            object-fit: cover;
            width: 100%;
            height: 100%;
        }
        .bg-capy { background-color: #2c3e50; color: white; }
    </style>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-3">
            <h1 class="fw-bold">🍪 Catálogo CapyCrunch</h1>
            <a href="{{ url('/') }}" class="btn btn-dark shadow-sm">Volver al Menú</a>
        </div>

        <div class="row">
            @foreach($productos as $p)
                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="card h-100 shadow-sm card-producto">
                        <div class="img-container">
                            <img src="{{ asset($p['imagen']) }}" class="card-img-top" alt="{{ $p['nombre'] }}">
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold text-primary">{{ $p['nombre'] }}</h5>
                            <p class="card-text text-muted small flex-grow-1">{{ $p['desc'] }}</p>
                            <div class="mt-3">
                                <span class="badge bg-success fs-6 w-100 py-2 shadow-sm">${{ $p['precio'] }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>