<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
   protected $primaryKey = 'id';
   protected $fillabel=['id','name','email','password'];

}
