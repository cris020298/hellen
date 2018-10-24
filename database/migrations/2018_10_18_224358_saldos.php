<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Saldos extends Migration
{

    public function up()
    {   
            Schema::create('saldos', function(Blueprint $table){
            $table->increments('id_saldo');
            $table->datetime('fecha_saldo');
            $table->string('tipo',50);
            $table->string('observacion',200);
            $table->integer('cantidad');
            $table->integer('id_producto')->unsigned();
            $table->foreign('id_producto')->references('id_producto')->on('productos');
            $table->integer('id_empleado')->unsigned();
            $table->foreign('id_empleado')->references('id_empleado')->on('empleados');
            $table->rememberToken();
            $table->timestamps();
            });
    }

    public function down()
    {
        Schema::drop('saldos');
    }
}
