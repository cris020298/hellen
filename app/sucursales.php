<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sucursales extends Model
{
    protected $primaryKey = 'id_sucursal';
   protected $fillabel=['id_sucursal','nombre','calle','numeroint','numeroext','colonia','municipio','estado','codigopostal','telefono','activo'];
}
