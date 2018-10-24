<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sucursales extends Model
{
    protected $primaryKey = 'id_sucursal';
   protected $fillabel=['id_sucursal','nombre','direccion','telefono','id_empleado'];
}
