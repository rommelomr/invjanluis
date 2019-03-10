<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTipoProductoProducto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_producto_producto', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('id_tipo_producto');

            $table->foreign('id_tipo_producto')->references('id')->on('tipo_productos');

            $table->unsignedInteger('id_producto');

            $table->foreign('id_producto')->references('id')->on('productos');
            
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
        Schema::dropIfExists('tipo_producto_producto');
    }
}
