<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedproTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedpro', function (Blueprint $table) {
            $table->increments('pedpro_id');
            $table->integer('pedpro_cant')->unsigned();
            $table->integer('pedido_id')->unsigned();
            $table->integer('producto_id')->unsigned()->nullable();
            $table->integer('paquete_id')->unsigned()->nullable();
            $table->foreign('producto_id')->references('producto_id')->on('producto');
            $table->foreign('paquete_id')->references('paquete_id')->on('paquete');
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
        Schema::dropIfExists('pedpro');
    }
}
