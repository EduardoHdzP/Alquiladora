<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->increments('producto_id');
            $table->string('producto_nom');
            $table->integer('producto_status')->unsigned();
            $table->float('producto_costo');
            $table->integer('producto_gana')->unsigned();
            $table->string('producto_desc');
            $table->string('producto_imag');
            $table->string('producto_medida');
            $table->integer('categoria_id')->unsigned();
            $table->foreign('categoria_id')->references('categoria_id')->on('categoria');
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
        Schema::dropIfExists('producto');
    }
}
