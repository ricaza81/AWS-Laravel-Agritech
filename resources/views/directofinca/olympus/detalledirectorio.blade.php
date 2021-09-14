@extends('layouts.app')

@section('htmlheader_title')
  Home
@endsection


@section('main-content')

<body class="landing-page">

<div class="content-bg-wrap" style="background: #fff"></div>




        


    <div class="stunning-header-content" style="background: #fff;
    top: 6px;
    height: 100%;
    padding-top: 20px;
    padding-bottom: 10px;">
        <h1 class="stunning-header-title">Directorio DirectodeFinca.com</h1>
        <h2 class="stunning-header-title">Directorio de Usuarios Activos</h2>
         <!--  <a  href="landing" class="btn btn-primary btn-lg" style="font-size:15px; background:#FF5E3A; border-color:#FF5E3A; color:#fff">Regresar
                                            <div class="ripple-container">
                                            </div>
                                        </a>-->
      <!--  <ul class="breadcrumbs">
            <li class="breadcrumbs-item">
                 <span>Ir a:</span><a href="landing">Inicio</a>
                <span class="icon breadcrumbs-custom">/</span>
            </li>
            <li class="breadcrumbs-item active">
                <span>Directorio de Empresas</span>
            </li>
        </ul>-->
    </div>

  

<section class="pt120" style="background:#fff;padding-top:13px">
    <div class="container">
        <div class="row">
     @forelse ($products as $product)
            <div class="col col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
          <div class="top-header-thumb">
            <img src="https://directodefinca.com/public/imagenes/bgentweb.jpg" alt="nature">
          </div>
       <div class="profile-section">
            <div class="row">
              <div class="col col-lg-5 col-md-5 col-sm-12 col-12">
                <ul class="profile-menu">
                  <li>
                    <a href="" class="active"></a>
                  </li>
                </ul>
              </div>
              <div class="col col-lg-5 ml-auto col-md-5 col-sm-12 col-12">
                <ul class="profile-menu">
                  <li>
                    <a href=""></a>
                  </li>
                 </ul>
              </div>
          </div>
         </div>       <!-- Product Item -->
     
           <div class="top-header-author">
             <div class="product-thumb">
                 <?php if ($product->imagenurl==NULL){   ?>
                        <img src="{{asset('imagenes/logotico.png')}}"  data-toggle="tooltip"data-original-title="<?=$product->nombres?>">
                        <?php } else {   ?>
                        <img src="<?=$product->imagenurl?>"  data-toggle="tooltip"data-original-title="<?=$product->nombres?>">
                <?php }  ?>
             </div>
                    <div class="product-content">
                        <div class="block-title">
                            <a href="#" class="product-category"></a>
                            <a href="#" class="h5 title">{{ $product->nombres }}</a>
                        </div>
                        <div class="block-price">
                        
                             <div class="block-price">
                        
                            <div class=""><a href="{{ route('detalleconsulta', [$product->empresa->slug]) }}" target="_blank"><span class="btn btn-secondary1 ">Visitar</span></a></div>

      <style>
        .btn-secondary1 {
    color: #fff;
    background-color: #4267b2;
    border-color: #4267b2;
    margin: 0;
    height: 8px;
    font-size: 0.75rem;
    padding: 2px 4px 18px 3px;
    width:50px;
}
    </style>                    
                        
                        
                        
                         </div>

                        </div>
                    </div>
             
           
            

 
            </div>

           </div>                @empty
                    <div style="text-align: left">No items found</div>
                @endforelse
        </div>
    </div>




</section>
</body>
@endsection