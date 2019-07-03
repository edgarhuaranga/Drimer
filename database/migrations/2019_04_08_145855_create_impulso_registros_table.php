<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImpulsoRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('impulso_registros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("user_id");
            $table->string("business_id");
            $table->string("is_canje");
            $table->string("merch")->nullable();
            $table->string("q_merch")->nullable();
            $table->string("producto")->nullable();
            $table->string("q_producto")->nullable();
            $table->date('fecha_gestion');
            $table->string('turno');
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
        Schema::dropIfExists('impulso_registros');
    }
}
