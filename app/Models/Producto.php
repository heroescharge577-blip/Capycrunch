<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';

    protected $fillable = [
        'nombre',
        'precio'
    ];

    public $timestamps = false;

    public function inventarios()
    {
        return $this->hasMany(Inventario::class);
    }

    public function detallesVenta()
    {
        return $this->hasMany(DetalleVenta::class);
    }
}