<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido', function (Blueprint $table) {
            $table->increments('pedido_id');
            $table->date('pedido_fecha');
            $table->date('pedido_fechaent');
            $table->time('pedido_horaent');
            $table->date('pedido_fecharet');
            $table->time('pedido_horaret');
            $table->integer('pedido_status')->unsigned();
            $table->integer('destino_id')->unsigned();
            $table->foreign('destino_id')->references('destino_id')->on('destino');
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
        Schema::dropIfExists('pedido');
    }
}
