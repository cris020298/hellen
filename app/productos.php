<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    protected $primaryKey = 'id_producto';
   protected $fillabel=['id_producto','modelo','color','numero','estilo','precio','existencia','archivo','activo'];
}
