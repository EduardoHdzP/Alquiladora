<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResurtidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resurtido', function (Blueprint $table) {
            $table->increments('resurtido_id');
            $table->date('resurtido_dest');
            $table->integer('resurtido_cant')->unsigned();
            $table->integer('producto_id')->unsigned();
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
        Schema::dropIfExists('resurtido');
    }
}
