<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Productos extends Migration
{

    public function up()
    {
            Schema::create('productos', function (Blueprint $table) {
            $table->increments('id_producto');
            $table->string('modelo',100);
            $table->string('color',100);
            $table->string('numero',100);
            $table->string('estilo',100);
            $table->string('precio',40);
            $table->integer('existencia');
            $table->string('activo',2);
            $table->rememberToken();
            $table->timestamps();
       });
    }

    public function down()
    {
        Schema::drop('productos');
    }
}
