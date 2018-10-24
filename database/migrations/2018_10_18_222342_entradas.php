<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Entradas extends Migration
{

    public function up()
    {
            Schema::create('entradas', function(Blueprint $table){
            $table->increments('id_entrada');
            $table->string('modelo',100);
            $table->string('color',100);
            $table->integer('numero');
            $table->string('estilo',100);
            $table->string('precio',100);
            $table->integer('cantidad');
            $table->datetime('fecha_entrega');
            $table->integer('id_empleado')->unsigned();
            $table->foreign('id_empleado')->references('id_empleado')->on('empleados');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('entradas');
    }
}
