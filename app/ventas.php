<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ventas extends Model
{
  protected $primaryKey = 'id_venta';
   protected $fillabel=['id_venta','fecha_venta','id_cliente','id_empleado'];    
}
