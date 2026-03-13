<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    protected $table = 'detalle_venta';

    // AÑADE ESTA LÍNEA PARA SOLUCIONAR EL ERROR
    public $timestamps = false; 

    protected $fillable = [
        'venta_id',
        'producto_id',
        'cantidad',
        'precio',
        'subtotal'
    ];

    public function venta()
    {
        return $this->belongsTo(Venta::class);
    }

    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }
}