<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Empleados extends Migration
{

    public function up()
    {
        Schema::create('empleados', function (Blueprint $table){
            $table->increments('id_empleado');
            $table->string('tipo',10);
            $table->string('nombre',100);
            $table->string('apellido_p',100);
            $table->string('apellido_m',100);
            $table->integer('edad');
            $table->string('sexo',1);
            $table->string('direccion',200);
            $table->integer('telefono');
            $table->string('correo',100);
            $table->string('activo',2);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('empleados');
    }
}
