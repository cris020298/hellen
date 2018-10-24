<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Ventas extends Migration
{

    public function up()
    {
        Schema::create('ventas', function(Blueprint $table){
            $table->increments('id_venta');
            $table->datetime('fecha_venta');
            $table->integer('id_empleado')->unsigned();
            $table->foreign('id_empleado')->references('id_empleado')->on('empleados');
            $table->integer('id_cliente')->unsigned();
            $table->foreign('id_cliente')->references('id_cliente')->on('clientes');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('ventas');
    }
}
