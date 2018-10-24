<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sucursales extends Migration
{

    public function up()
    {
        Schema::create('sucursales', function(Blueprint $table){
            $table->increments('id_sucursal');
            $table->string('nombre',100);
            $table->string('direccion',100);
            $table->integer('telefono');
            $table->string('activo',2);
            $table->integer('id_empleado')->unsigned();
            $table->foreign('id_empleado')->references('id_empleado')->on('empleados');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('sucursales');
    }
}
