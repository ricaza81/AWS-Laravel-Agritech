<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductoRecomendado extends Model
{
     protected $table = 'productos';


         public function users()
      {
        return $this->hasMany('App\User', 'pais', 'id');
      }
}
