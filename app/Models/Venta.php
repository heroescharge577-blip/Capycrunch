<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table = 'ventas';

    protected $fillable = [
        'cliente_id',
        'forma_pago',
        'total',
        'fecha',
        'estado'
    ];

    public $timestamps = false;

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function detalles()
    {
        return $this->hasMany(DetalleVenta::class);
    }

    public function pagosCredito()
    {
        return $this->hasMany(PagoCredito::class);
    }
}