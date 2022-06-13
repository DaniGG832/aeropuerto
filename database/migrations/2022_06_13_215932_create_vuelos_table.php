<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vuelos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->foreignId('salida_id')->constrained('aeropuertos');
            $table->foreignId('llegada_id')->constrained('aeropuertos');
            $table->foreignId('compania_id')->constrained('companias');
            $table->integer('plazas_totales');
            $table->decimal('precio',8,2);
            $table->timestamp('llegada');
            $table->timestamp('salida');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vuelos');
    }
};
