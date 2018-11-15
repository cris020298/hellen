<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class empleados extends Model
{
        protected $primaryKey = 'id_empleado';
   protected $fillabel=['id_empleado','tipo','nombre','apellido_p','apellido_m','edad','sexo','calle','numeroint','numeroext','colonia','municipio','estado','estado','codigopostal','telefono','correo','id_sucursal','activo','archivo']; 

}
