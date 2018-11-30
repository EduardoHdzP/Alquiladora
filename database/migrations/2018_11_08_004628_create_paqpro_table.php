<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaqproTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paqpro', function (Blueprint $table) {
            $table->increments('paqpro_id');
            $table->integer('paqpro_cant')->unsigned();
            $table->integer('paquete_id')->unsigned();
            $table->integer('producto_id')->unsigned();
            $table->foreign('paquete_id')->references('paquete_id')->on('paquete');
            $table->foreign('producto_id')->references('producto_id')->on('producto');
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
        Schema::dropIfExists('paqpro');
    }
}
