<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\TipoUsuario;
use App\TipoIntereses;
use App\Prospectos;
use App\Publicaciones;
use App\Eventos;
use App\Product;
use App\User;

class Cart extends Model
{
    //
 protected $table = 'cart';

  public function producto()
    {
        return $this->belongsTo('App\Product', 'product_id', 'id');
    }

     public function autor()
    {
        return $this->belongsTo('App\User', 'idComercial', 'id');
    } 

}