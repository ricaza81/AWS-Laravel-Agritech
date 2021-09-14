<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;
use Illuminate\Database\Eloquent\Model;
use App\AgriFincas;
use App\AgriVisitasTecnicas;
use App\User;
use App\Departamentos;
use App\DirectoAgricultorSolicitudes;

class DirectoAgricultor extends Model
{
    //
 protected $table = 'directo_productor_productos';

 


        public function finca()
      {
        return $this->hasMany('App\AgriFincas', 'id', 'id_agricultor');
      }

             public function visitatecnica()
      {
        return $this->hasOne('App\AgriVisitasTecnicas', 'id', 'id_agricultor');
      }
                     public function cuenta_fincas($idagricultor)
      {
        $resul=AgriFincas::where("id_agricultor","=",$idagricultor)->get();
        if(isset($resul)){
         return count($resul);
        }
        else
        {
          return "sin definir";
        }
        }

        public function suma_hectareas_fincas($idagricultor)
        {
              $result=AgriFincas::where("id_agricultor","=",$idagricultor)->get();
        if(isset($result)){

             $subtotal_numero_hectareas=0;

             foreach($result as $resul){
             	$subtotal_numero_hectareas+=($resul->hectareas);  }

         return ($subtotal_numero_hectareas);
        }
        else
        {
          return "sin definir";
        }
        }

                public function cant_visitas_fincas($idagricultor)
        {
              $resul=AgriVisitasTecnicas::where("id_agricultor","=",$idagricultor)->get();
        if(isset($resul)){
         return count($resul);
        }
        else
        {
          return "sin definir";
        }
        }

               public function productor()
      {
        return $this->belongsTo('App\User', 'idproductor', 'id');
      }

                    public function departamento()
      {
        return $this->belongsTo('App\Departamentos', 'id_departamento', 'id');
      }
      
                       public function cant_solicitudes_recibidas($idagricultor)
        {
              $resul=DirectoAgricultorSolicitudes::where("idsolicitado","=",$idagricultor)->get();
        if(isset($resul)){
         return count($resul);
        }
        else
        {
          return "sin definir";
        }
        }

                              public function cant_solicitudes_enviadas($idagricultor)
        {
              $resul=DirectoAgricultorSolicitudes::where("idsolicitante","=",$idagricultor)->get();
        if(isset($resul)){
         return count($resul);
        }
        else
        {
          return "sin definir";
        }
        }

        }