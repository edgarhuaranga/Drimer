<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('worker_id')->nullable();
            $table->string('codigo');
            $table->string('frecuencia_visita');
            $table->string('ciudad');
            $table->string('distribuidora');
            $table->string('nombre_comercial_mercado');
            $table->string('giro_negocio');
            $table->string('tamanio_negocio');
            $table->string('direccion_mercado');
            $table->string('puesto');
            $table->string('marca');
            $table->string('nombre_comercial_puesto');
            $table->string('contacto_puesto');
            $table->string('impulso');
            $table->string('distrito');
            $table->string('referencia');
            $table->string('nombre_vendedor')->default('Sin asignar');
            $table->string('telefono_vendedor')->default('Sin asignar');
            $table->string('telefono_contacto')->default('Sin asignar');
            $table->string('motivo_impulso')->default('Desconocido');
            $table->string('motivo_mercaderista')->default('Desconocido');
            $table->string('latitude')->default('0.00');
            $table->string('longitude')->default('0.00');
            $table->string('accuracy')->default('0.00');
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
        Schema::dropIfExists('businesses');
    }
}
