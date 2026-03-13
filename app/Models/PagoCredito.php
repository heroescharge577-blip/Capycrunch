<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PagoCredito extends Model
{
    protected $table = 'pagos_credito';

    // Desactiva los timestamps automáticos de Laravel
    public $timestamps = false;

    protected $fillable = [
        'venta_id',
        'monto',
        'fecha'
    ];

    public function venta()
    {
        return $this->belongsTo(Venta::class);
    }
}