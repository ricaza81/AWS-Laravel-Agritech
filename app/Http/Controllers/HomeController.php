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
use App\DirectoAgricultor;
use App\AgriFincas;
use App\AgriFincasCompartidas;
use App\AgriFincasMedicion;
use App\AgriAgricultores;
use App\AgriVisitasTecnicas;
use App\AgroCensoDane;
use App\ProductoRecomendado;
use App\Productos;
use App\ProductosLineas;
use App\ProductosTipo;
use App\Category;
use App\Product;
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



class HomeController extends Controller {

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
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 //* @return Response
	 */
	public function productoresoferta()
	{

     $msj="";
     $productorecomendado = ProductoRecomendado::where('id','=',2)->latest()->first();
     $usuarioactual=\Auth::user();
     $fecha=date('Y-m-d');
     $idusuario=\Auth::user()->id;
     $events= Eventos::where('idUsuario','=',$idusuario)->where('fecha_inicio','=',$fecha)->get();
     $events_day=count($events);
     $productorecomendado = ProductoRecomendado::where('id','=',2)->latest()->first();
     $paises=Pais::all();
     $cultivos=Cultivos::all();
     $zonas=Zonas::all();
     $canales=Canales::all();
     $departamentos=Departamentos::all();
     $agricultores=AgriAgricultores::all();
     $productoresfull=AgriAgricultores::all();
     //$productores=User::orderby('id','desc')->get();
     //$productores=DirectoAgricultor::all();
     $productores=DirectoAgricultor::orderby('id','desc')->get();

	 return view('directofinca.productoresoferta')
		->with("usuario",  $usuarioactual)
        ->with("productorecomendado",  $productorecomendado)
        ->with("msj",$msj)
        ->with("productoresfull",$productoresfull)
        ->with("productores",$productores)
        ->with("fecha",$fecha)
		->with("events",$events)
        ->with("events_day",$events_day)
        ->with("fecha",$fecha);
	}




	function shop()
    { 
         $pagination = 9;
        $categories = Category::all();
        
         //   $events= Eventos::where('idUsuario','=',$idusuario)->where('fecha_inicio','=',$fecha)->get();
         // $events_day=count($events);
          $usuarioactual=\Auth::user();


        if (request()->category) {
            $products = Product::with('categories')->whereHas('categories', function ($query) {
                $query->where('slug', request()->category);
            });
            $categoryName = optional($categories->where('slug', request()->category)->first())->name;
        } else {
            $products = Product::where('featured', true);
            $categoryName = 'Featured';
        }

        if (request()->sort == 'low_high') {
            $products = $products->orderBy('price')->paginate($pagination);
        } elseif (request()->sort == 'high_low') {
            $products = $products->orderBy('price', 'desc')->paginate($pagination);
        } else {
            $products = $products->paginate($pagination);
        }

        return view('directofinca.carro.shop')->with([
            'products' => $products,
            'categories' => $categories,
            'categoryName' => $categoryName,
            'usuario' =>  $usuarioactual,
        ]);
 
    }

       public function publicacionproducto(Request $request)
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
        $departamentos=Departamentos::all();
        
        
        return view('directofinca.forms.empresa.productos.publicacionproducto')
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

        public function agregarpublicaciondirectofinca(Request $request)
           {

          $data=$request->all();

          $reglas = array( /*'marca_producto' => 'required',
                           'productolinea' => 'required|Numeric|min:1',
                           'precio' => 'required|Numeric|min:1',
                           'productotipo' => 'required|Numeric|min:1',  */                         
                                 );
          $mensajes= array(/*'marca_producto.required' =>  'Ingresa una marca del producto',
                        'productolinea.numeric' =>  'Selecciona una línea',
                        'precio.required' => 'Ingresa el precio',
                        'precio.numeric' =>  'El precio debe ser mayor a 1',
                        'productotipo.numeric' =>  'Producto Líquido, Sólido?',*/
                       );
        

        $validacion = Validator::make($data, $reglas, $mensajes);
        if ($validacion->fails())
           {
        $errores = $validacion->errors(); 
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
        $msj="";
        $zonas=Zonas::all();
        $canales=Canales::all();
        $productos=DirectoAgricultor::where('idempresa','=',$idEmpresa)->get();
        $productoslineas=ProductosLineas::all();
        $productostipo=ProductosTipo::all();
        $departamentos=Departamentos::where('id_pais','=',1)->get();
        
        return view("directofinca.forms.empresa.productos.formnuevoproductoempresa")
        ->with("usuario",  $usuarioactual)
        ->with("idEmpresa",  $idEmpresa)
        ->with("idusuario",  $idusuario)
        ->with("events",$events)
        ->with("errors",$errores)
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
        ->with("msj","Existen errores de validación")
        ->with("cultivos",$cultivos); }

        $foto1 = $request->file('foto1');
        $foto2 = $request->file('foto2');
        $input  = array('image' => $foto1) ;
        $input  = array('image' => $foto2) ;
        $reglas = array('image' => 'required|image|mimes:jpeg,jpg,bmp,png,gif|max:8900');
        $validacion = Validator::make($input,  $reglas);
        if ($validacion->fails())
        {
          return view("mensajes.msj_rechazado")->with("msj","El archivo no es una imagen valida");
        }
        else
        {
        $id=str_random(2);
         $nombre_original=$foto1->getClientOriginalName();
        $extension=$foto1->getClientOriginalExtension();
        $nuevo_nombre="foto1visita-".$id.".".$extension;
        $r1=Storage::disk('fotografias')->put($nuevo_nombre,  \File::get($foto1) );
        $rutadelaimagen="/storage/fotografias/".$nuevo_nombre;

        $nombre_original=$foto2->getClientOriginalName();
        $extension=$foto2->getClientOriginalExtension();
        $nuevo_nombre="foto2visita-".$id.".".$extension;
        $r1=Storage::disk('fotografias')->put($nuevo_nombre,  \File::get($foto2) );
        $rutadelaimagen2="/storage/fotografias/".$nuevo_nombre;
      
      }

        $data=$request->all();
        $empresa_producto= new DirectoAgricultor;
        $empresa_producto->idproductor  =  \Auth::user()->id;
        $empresa_producto->idproducto  =  1;
        $empresa_producto->id_departamento  =  $data["departamento"];
        $empresa_producto->producto  =  $data["producto"];
        $empresa_producto->descripcion  =  $data["descripcion"];
        $empresa_producto->titulo  =  $data["titulo"];
        $var1=$data["titulo"]."-".\Auth::user()->id."-".str_random(2);
        $empresa_producto->slug = str_slug($var1);
        if ($data["enlace"]=='0')
        $empresa_producto->enlace=='0';
        if ($data["enlace"]!='0')
        $empresa_producto->enlace  =  $data["enlace"];
        $empresa_producto->precio  =  $data["precio"];
        $empresa_producto->observaciones  =  $data["observaciones"];
        $empresa_producto->img1pdto  =  $rutadelaimagen;
        $empresa_producto->img2pdto  =  $rutadelaimagen2;
        $empresa_producto->activo  =  1;
        $resul= $empresa_producto->save();
        

        if($resul)

          //  $usuarios = User::all();
          //      foreach ($usuarios as $usuario) 
        {

        $asunto='Nueva Oferta Publicada';
        $ofertaid=$empresa_producto->id;
        $oferta=DirectoAgricultor::find($ofertaid);
        $destinatario = 'ricaza81@gmail.com';
        //$destinatario = $usuario->email;

       /* $agricultor=$data["agricultor"];
        $producto=$data["producto"];
        $detalles=$data["descripcion"];
        $origen=$data["emailsolicitante"];
        $fechasolicitud=$solicitud->created_at;*/
         $data = array(
            'asunto' => $asunto,
            'oferta' => $oferta,
            'destinatario' => $destinatario
            );

        Mail::send('correo.plantilla_boletin_nueva_oferta', $data, function ($message) use ($asunto,$destinatario,$oferta) {
              $message->from('info@agronielsen.com', 'DirectodeFinca.com');
              $message->to($destinatario)->subject($asunto);
             // ->cc($origen,'ricaza81@gmail.com')->subject($asunto);
                });
      }

       $msj='Notificación: Producto publicado correctamente';
       return redirect('misproductos')
        ->with("msj",$msj);
    

 
    
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
          //$date = Carbon::now();
          //$officialDate = Carbon::now()->toRfc2822String();
    

       
          return view("directofinca.misproductos")

          ->with("msj",$msj)
          ->with("productores",$productores)
          //->with("date",$date)
          //->with("officialDate",$officialDate)
          ->with("usuario", $usuarioactual )
          ->with("events_day",$events_day)
          ->with("fecha",$fecha);
 
    }

		public function listMap()
	{
		$user = Auth::user();

		$fecha=date('Y-m-d');

		$events= Eventos::where('idUsuario','=',$user->id)->where('fecha_inicio','=',$fecha)->get();
        $events_day=count($events);
        $idusuario=\Auth::user()->id;
        $agricultores=AgriAgricultores::where('idUsuario','=',$idusuario)->get();
        $cant_agricultores=count($agricultores);
		$fincas=Agrifincas::where('idUsuario','=',$idusuario)->get();
		$visitastecnicas=AgriVisitasTecnicas::where('id_usuario','=',$idusuario)->get();
		$cant_visitas=count($visitastecnicas);
		$cant_fincas=count($fincas);
		$cant_agricultores=count($agricultores);
		return view('map', [
			'usuario' => $user,
			'events_day' => $events_day,
			'agricultores' =>$agricultores,
			'cant_agricultores' => $cant_agricultores,
			'cant_visitas' =>$cant_visitas,
			'cant_fincas' =>$cant_fincas,
			'cant_agricultores' =>$cant_agricultores,
		]);
	}
	
	/*ORI		public function listMapvisitas()
	{
		$user = Auth::user();

		$fecha=date('Y-m-d');

		$events= Eventos::where('idUsuario','=',$user->id)->where('fecha_inicio','=',$fecha)->get();
        $events_day=count($events);

		return view('mapavisitastecnicas', [
			'usuario' => $user,
			'events_day' => $events_day
		]);
	}*/
	
			public function listMapvisitas()
	{
		$user = Auth::user();

		$fecha=date('Y-m-d');

		$events= Eventos::where('idUsuario','=',$user->id)->where('fecha_inicio','=',$fecha)->get();
        $events_day=count($events);
        $idusuario=\Auth::user()->id;
        $agricultores=AgriAgricultores::where('idUsuario','=',$idusuario)->get();
        $cant_agricultores=count($agricultores);
		$fincas=Agrifincas::where('idUsuario','=',$idusuario)->get();
		$visitastecnicas=AgriVisitasTecnicas::where('id_usuario','=',$idusuario)->get();
		$cant_visitas=count($visitastecnicas);
		$cant_fincas=count($fincas);
		$cant_agricultores=count($agricultores);
		return view('mapavisitastecnicas', [
			'usuario' => $user,
			'events_day' => $events_day,
			'agricultores' =>$agricultores,
			'cant_agricultores' => $cant_agricultores,
			'cant_visitas' =>$cant_visitas,
			'cant_fincas' =>$cant_fincas,
			'cant_agricultores' =>$cant_agricultores,
		]);
	}

}