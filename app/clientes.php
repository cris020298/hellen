<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    protected $primaryKey = 'id_cliente';
   protected $fillabel=['id_cliente','nombre','apellido_p','apellido_m','edad','sexo','direccion','telefono','correo'];
}
