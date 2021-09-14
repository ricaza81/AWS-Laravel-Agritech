<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Input;
use DB;
use Excel;
use Storage;
use App\User;
use App\UsuariosEmpresas;
use App\Pais;
use App\TipoUsuario;
use App\Educacion;
use App\TipoEducacion;
use App\Publicaciones;
use App\TipoPublicaciones;
use App\Proyectos;
use App\Prospectos;
use App\AgriFincas;
use App\AgriAgricultores;
use App\AgriVisitasTecnicas;
use App\AgroCensoDane;
use App\DirectoAgricultor;
use App\DirectoAgricultorSolicitudes;
use App\Productos;
use App\ProductosLineas;
use App\ProductosTipo;
use App\AgriVisitasTecnicasProductos;
use App\Ciudades;
use App\TipoIntereses;
use App\TipoStatus;
use App\Visitas;
use App\Eventos;
use App\Interes;
use App\Cultivos;
use App\Zonas;
use App\Canales;
use App\Departamentos;
use Carbon\Carbon;
use Mail;
use Response;



class DirectoProductorController extends Controller {
    /*
    |--------------------------------------------------------------------------
    | Home Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders your application's "dashboard" for users that
    | are authenticated. Of course, you are free to change or remove the
    | controller as you wish. It is just here to get your app started!
    |
    */
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        Carbon::setLocale('es');
    }


  

            public function id_ciudad_agri($id)
    {
       
       $id_ciudad=AgriAgricultores::where("id","=",$id)->get();
      //$prospecto=User::all();
        return response ()->json($id_ciudad);
      
          }


                public function id_fincas_agri($id)
    {
       
       $id_fincas_agri=Agrifincas::where("id_agricultor","=",$id)->get();
      //$prospecto=User::all();
        return response ()->json($id_fincas_agri);
      
          }



/*function productoresoferta()
    { 
          $msj="";
          $usuarioactual=\Auth::user();
          $idusuario=\Auth::user()->id;
          $productores=DirectoAgricultor::orderBy('id', 'desc')->get();
          $usuarioactual=\Auth::user();


          /*Variables notificacion tareas/seguimientos del dia*/
  /*        $fecha=date('Y-m-d');
          $events= Eventos::where('idUsuario','=',$idusuario)->where('fecha_inicio','=',$fecha)->get();
          $events_day=count($events);
          $date = Carbon::now();
          $officialDate = Carbon::now()->toRfc2822String();
    

       
          return view("directofinca.productoresoferta")

          ->with("msj",$msj)
          ->with("productores",$productores)
          ->with("date",$date)
          ->with("officialDate",$officialDate)
          ->with("usuario", $usuarioactual )
          ->with("events_day",$events_day)
          ->with("fecha",$fecha);
 
    }*/

/*function tiendaweb()
    { 
          $msj="";
          $usuarioactual=\Auth::user();
          $idusuario=\Auth::user()->id;
          $productores=DirectoAgricultor::orderBy('id', 'desc')->get();
          $usuarioactual=\Auth::user();


          /*Variables notificacion tareas/seguimientos del dia*/
  /*        $fecha=date('Y-m-d');
          $events= Eventos::where('idUsuario','=',$idusuario)->where('fecha_inicio','=',$fecha)->get();
          $events_day=count($events);
          $date = Carbon::now();
          $officialDate = Carbon::now()->toRfc2822String();
    

       
          return view("carro.shop")

          ->with("msj",$msj)
          ->with("productores",$productores)
          ->with("date",$date)
          ->with("officialDate",$officialDate)
          ->with("usuario", $usuarioactual )
          ->with("events_day",$events_day)
          ->with("fecha",$fecha);
 
    }*/

function detalledirectorio()
    { 
          $msj="";
          $usuarioactual=\Auth::user();
          $idusuario=\Auth::user()->id;
          $productores=DirectoAgricultor::orderBy('id', 'desc')->get();
          $usuarioactual=\Auth::user();
          $products=User::all();


          /*Variables notificacion tareas/seguimientos del dia*/
          $fecha=date('Y-m-d');
          $events= Eventos::where('idUsuario','=',$idusuario)->where('fecha_inicio','=',$fecha)->get();
          $events_day=count($events);
          $date = Carbon::now();
          $officialDate = Carbon::now()->toRfc2822String();
    

       
          return view("listados.olympus.detalledirectorio")

          ->with("msj",$msj)
          ->with("products",$products)
          ->with("productores",$productores)
          ->with("date",$date)
          ->with("officialDate",$officialDate)
          ->with("usuario", $usuarioactual )
          ->with("events_day",$events_day)
          ->with("fecha",$fecha);
 
    }


  function misproductos()
    { 
          $msj="";
          $idusuario=\Auth::user()->id;
          $productores=DirectoAgricultor::orderBy('id', 'desc')->where('idproductor','=',$idusuario)->get();
          $usuarioactual=\Auth::user();


          /*Variables notificacion tareas/seguimientos del dia*/
          $fecha=date('Y-m-d');
          $events= Eventos::where('idUsuario','=',$idusuario)->where('fecha_inicio','=',$fecha)->get();
          $events_day=count($events);
          $date = Carbon::now();
          $officialDate = Carbon::now()->toRfc2822String();
    

       
          return view("listados.olympus.misproductos")

          ->with("msj",$msj)
          ->with("productores",$productores)
          ->with("date",$date)
          ->with("officialDate",$officialDate)
          ->with("usuario", $usuarioactual )
          ->with("events_day",$events_day)
          ->with("fecha",$fecha);
 
    }


      function pronostclima()
    { 
          $msj="";
          $idusuario=\Auth::user()->id;
          $productores=DirectoAgricultor::orderBy('id', 'desc')->where('idproductor','=',$idusuario)->get();
          $usuarioactual=\Auth::user();


          /*Variables notificacion tareas/seguimientos del dia*/
          $fecha=date('Y-m-d');
          $events= Eventos::where('idUsuario','=',$idusuario)->where('fecha_inicio','=',$fecha)->get();
          $events_day=count($events);
          $date = Carbon::now();
          $officialDate = Carbon::now()->toRfc2822String();
    

       
          return view("listados.clima.pronostclima")

          ->with("msj",$msj)
          ->with("productores",$productores)
          ->with("date",$date)
          ->with("officialDate",$officialDate)
          ->with("usuario", $usuarioactual )
          ->with("events_day",$events_day)
          ->with("fecha",$fecha);
 
    }


  public function contactardirecto(Request $request)
 {

        $data=$request->all();
        $id = $data["idAgricultor"];
        $idproducto = $data["idproducto"];
        $agricultor=User::find($id);
        $usuarioactual=\Auth::user();
        $fecha=date('Y-m-d');
        $idusuario_agri=\Auth::user()->id;
        $idusuario=\Auth::user()->id;
        $idEmpresa=$usuarioactual->idEmpresa;
        $events= Eventos::where('idUsuario','=',$idusuario)->where('fecha_inicio','=',$fecha)->get();
        $events_day=count($events);
        $tipointeres=Interes::all();
        $status=TipoStatus::all();
        $paises=Pais::all();
        $cultivos=Cultivos::all();
        $zonas=Zonas::all();
        $canales=Canales::all();
        $productos=Productos::where('idEmpresa','=',$idEmpresa)->get();
        $productoslineas=ProductosLineas::all();
        $productostipo=ProductosTipo::all();
        $departamentos=Departamentos::where('id_pais','=',1)->get();

     return view('formularios.empresa.solicitudes.contactodirecto')

      ->with("usuario",  $usuarioactual)
        ->with("idEmpresa",  $idEmpresa)
        ->with("idusuario",  $idusuario)
        ->with("events",$events)
        ->with("events_day",$events_day)
        ->with("tipointeres",$tipointeres)
        ->with("status",$status)
        ->with("fecha",$fecha)
        ->with("productos",$productos)
        ->with("productoslineas",$productoslineas)
        ->with("productostipo",$productostipo)
        ->with("paises",$paises)
        ->with("zonas",$zonas)
        ->with("canales",$canales)
        ->with("departamentos",$departamentos)
        ->with("cultivos",$cultivos)
        ->with("agricultor",$agricultor)
        ->with("idproducto",  $idproducto)
        ->with("id",  $id);
        } 

           public function contactodirecto($id)
        {
         
        $usuarioactual=\Auth::user();
        $fecha=date('Y-m-d');
        $idusuario_agri=\Auth::user()->id;
        $idusuario=\Auth::user()->id;
        $idEmpresa=$usuarioactual->idEmpresa;
        $events= Eventos::where('idUsuario','=',$idusuario)->where('fecha_inicio','=',$fecha)->get();
        $events_day=count($events);
        $tipointeres=Interes::all();
        $status=TipoStatus::all();
        $paises=Pais::all();
        $cultivos=Cultivos::all();
        $zonas=Zonas::all();
        $canales=Canales::all();
        $productos=Productos::where('idEmpresa','=',$idEmpresa)->get();
        $productoslineas=ProductosLineas::all();
        $productostipo=ProductosTipo::all();
        $departamentos=Departamentos::where('id_pais','=',1)->get();
        
        
        return view('formularios.empresa.solicitudes.contactodirecto')
        ->with("usuario",  $usuarioactual)
        ->with("idEmpresa",  $idEmpresa)
        ->with("idusuario",  $idusuario)
        ->with("events",$events)
        ->with("events_day",$events_day)
        ->with("tipointeres",$tipointeres)
        ->with("status",$status)
        ->with("fecha",$fecha)
        ->with("productos",$productos)
        ->with("productoslineas",$productoslineas)
        ->with("productostipo",$productostipo)
        ->with("paises",$paises)
        ->with("zonas",$zonas)
        ->with("canales",$canales)
        ->with("departamentos",$departamentos)
         ->with("cultivos",$cultivos);

    }


      public function agregar_solicitud_agricultor(Request $request)
 
    {

        $data=$request->all();

           $reglas = array(//'nombre_finca' => 'required',
                     // 'hectareas' => 'required|Numeric|min:1',
                     // 'departamento' => 'required|Numeric|min:1',
                     // 'email' => 'required|Email|Unique:prospectos',
                     // 'cultivo' => 'required',
                      );
        $mensajes= array(//'nombre_finca.required' =>  'El nombre es obligatorio',
                      // 'apellidos.required' =>  'Ingresar Apellidos es obligatorio',
                     //  'email.required' =>  'Ingresar un email es obligatorio',
                      // 'email.email' =>  'el email debe tener un formato válido',
                    //   'email.unique' =>  'El email ya existe',
                    //   'telefono.required' => 'Debe Ingresar un teléfono',
                    //   'departamento.required' => 'Por favor selecciona un departamento',
                     //    'departamento.numeric' =>  'Selecciona un departamento'
                       );
        

        $validacion = Validator::make($data, $reglas, $mensajes);
        if ($validacion->fails()){
        $errores = $validacion->errors(); 
        $usuarioactual=\Auth::user();
        $fecha=date('Y-m-d');
        $idusuario=\Auth::user()->id;
        $events= Eventos::where('idUsuario','=',$idusuario)->where('fecha_inicio','=',$fecha)->get();
        $events_day=count($events);
        $cultivos=Cultivos::all();
        $msj="";
        $paises=Pais::all();
        $departamentos=Departamentos::all();
   
       
    return view('formularios.empresa.solicitudes.contactodirecto')
    ->with("usuario",  $usuarioactual)
    ->with("events",$events)
    ->with("paises",$paises)
    ->with("canales",$canales)
    ->with("events_day",$events_day)
    ->with("fecha",$fecha)
    ->with("errors",$errores)
    ->with("departamentos",$departamentos)
    ->with("msj","Existen errores de validación");

                                  }
        $solicitud= new DirectoAgricultorSolicitudes;   
        $solicitud->idsolicitante  = \Auth::user()->id;
        $solicitud->idproducto  = $data["idproducto"];
        $solicitud->idsolicitado  = $data["idAgricultor"];
        $solicitud->asunto  = $data["asunto"];
        $solicitud->detalles  = $data["detalles"];       
        $resul= $solicitud->save();

$asunto=$data["asunto"];
$detalles=$data["detalles"];
$solicitante=$data["solicitante"];
$destinatario=$data["emailsolicitado"];
$origen=$data["emailsolicitante"];
$fechasolicitud=$solicitud->created_at;


 $data = array(
    'asunto' => $asunto,
    'detalles' => $detalles,
    'destinatario' => $destinatario,
    'origen' => $origen,
    'solicitante' => $solicitante,
    'fechasolicitud' => $fechasolicitud,
    
  );

  Mail::send('correo.plantilla_contacto_directo', $data, function ($message) use ($asunto,$destinatario,$origen,$solicitante,$fechasolicitud,$detalles) {
        $message->from('info@agronielsen.com', 'DirectodeFinca.com');
        $message->to($destinatario)
        ->cc($origen,'ricaza81@gmail.com')->subject($asunto);
          });


         return redirect('productoresoferta');

}


 function missolicitudes()
    { 
          $msj="";
          $idusuario=\Auth::user()->id;
          $solicitudes=DirectoAgricultorSolicitudes::orderBy('id', 'desc')->where('idsolicitado','=',$idusuario)->get();
          $usuarioactual=\Auth::user();


          /*Variables notificacion tareas/seguimientos del dia*/
          $fecha=date('Y-m-d');
          $events= Eventos::where('idUsuario','=',$idusuario)->where('fecha_inicio','=',$fecha)->get();
          $events_day=count($events);
          $date = Carbon::now();
          $officialDate = Carbon::now()->toRfc2822String();
    

       
          return view("listados.empresas.solicitudes.missolicitudes")

          ->with("msj",$msj)
          ->with("solicitudes",$solicitudes)
          ->with("date",$date)
          ->with("officialDate",$officialDate)
          ->with("usuario", $usuarioactual )
          ->with("events_day",$events_day)
          ->with("fecha",$fecha);
 
    }




     function missolicitudesenviadas()
    { 
          $msj="";
          $idusuario=\Auth::user()->id;
          $solicitudes=DirectoAgricultorSolicitudes::orderBy('id', 'desc')->where('idsolicitante','=',$idusuario)->get();
          $usuarioactual=\Auth::user();


          /*Variables notificacion tareas/seguimientos del dia*/
          $fecha=date('Y-m-d');
          $events= Eventos::where('idUsuario','=',$idusuario)->where('fecha_inicio','=',$fecha)->get();
          $events_day=count($events);
          $date = Carbon::now();
          $officialDate = Carbon::now()->toRfc2822String();
    

       
          return view("listados.empresas.solicitudes.missolicitudesenviadas")

          ->with("msj",$msj)
          ->with("solicitudes",$solicitudes)
          ->with("date",$date)
          ->with("officialDate",$officialDate)
          ->with("usuario", $usuarioactual )
          ->with("events_day",$events_day)
          ->with("fecha",$fecha);
 
    }

}
