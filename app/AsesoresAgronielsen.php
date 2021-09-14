<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AsesoresAgronielsen extends Model
{
     protected $table = 'agroniel_campo.users';


         public function users()
      {
        return $this->hasMany('App\User', 'pais', 'id');
      }
}
