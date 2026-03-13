<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ventas', function (Blueprint $table) {

            $table->id();
            $table->foreignId('cliente_id')->nullable()->constrained('clientes');
            $table->string('forma_pago',50)->nullable();
            $table->integer('total')->nullable();
            $table->date('fecha')->nullable();
            $table->string('estado',20)->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ventas');
    }
};