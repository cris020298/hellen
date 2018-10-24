<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetalleVentas extends Migration
{

    public function up()
    {
            Schema::create('detalle_ventas', function(Blueprint $table){
            $table->increments('id_detalle');
            $table->integer('cantidad');
            $table->string('costo',50);
            $table->string('descuento',50);
            $table->string('total',100);
            $table->string('precio',100);
            $table->integer('id_producto')->unsigned();
            $table->foreign('id_producto')->references('id_producto')->on('productos');
            $table->integer('id_venta')->unsigned();
            $table->foreign('id_venta')->references('id_venta')->on('ventas');
            $table->string('activo',2);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('detalle_ventas');
    }
}
