<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMerchMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merch_materials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ciudad');
            $table->string('tipo_cliente');
            $table->string('marca');
            $table->string('codigo');
            $table->string('descripcion');
            $table->string('mecanica');
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
        Schema::dropIfExists('merch_materials');
    }
}
