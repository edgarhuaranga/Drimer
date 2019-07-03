<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromotorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tienda_id');
            $table->string('nombre_completo');
            $table->string('numero_documento');
            $table->date('fecha_ingreso');
            $table->string('rol');
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
        Schema::dropIfExists('promotors');
    }
}
