@extends('layouts.app')
@section('htmlheader_title')
  Home
@endsection
@section('main-content')
<body>

<div class="main-header" style="background:#eee">
    
 <div class="container">
  <div class="row">
    <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
      <div class="ui-block">
        <div class="top-header">
          <div class="top-header-thumb">
            <img src="https://directodefinca.com/public/imagenes/bgentweb.jpg" alt="nature">
          </div>
          <div class="profile-section">
            <div class="row">
              <div class="col col-lg-5 col-md-5 col-sm-12 col-12">
                <ul class="profile-menu">
                  <li>
                    <a href="{{ route('detalleconsulta', [$producto->slug]) }}" class="active">Publicaciones</a>
                  </li>
                </ul>
              </div>
              <div class="col col-lg-5 ml-auto col-md-5 col-sm-12 col-12">
                <ul class="profile-menu">
                  <li>
                    <a href="{{ route('detalleempresaofertas', [$producto->slug]) }}">Ofertas</a>
                  </li>
                 </ul>
              </div>
            </div>
        </div>
      </div>
           <div class="container">
  <div class="row"> 
          <div class="top-header-author">
                             <?php  if ($producto->imglogo==NULL) {   ?>
                                 
                          
                                  <a href="{{ route('detalleempresa', [$producto->slug]) }}" class="author-thumb"><img class="img-circle" src="https://www.agronielsen.com/encampo/public/imagenes/logo-agronielsen-presentacion.png" style="height: auto; width: 120px;"></a>

                    <?php } else {   ?>      
                         
            <a href="{{ route('detalleempresa', [$producto->slug]) }}" class="author-thumb"><img class="img-circle" src="https://www.directodefinca.com/storage/<?=$producto->imglogo?>" style="height: auto; width: 120px;" alt="<?=$producto->nombreempresa?>"></a>
             
                        <?php } ?>
            <div class="author-content">
              <a href="{{ route('detalleempresa', [$producto->slug]) }}" class="h4 author-name">{{$producto->nombreempresa}}</a>
       
            </div>
          </div>
        </div>
      </div>


       <div class="row sorting-container" id="clients-grid-1" data-layout="masonry">
                                    <?php foreach($productores as $productor){  ?>

                                     <div class="col col-lg-4 col-md-4 col-sm-12 col-4">
                                       <div class="ui-block">
                                                      <div class="post-thumb">
                                                        <img src="https://www.directodefinca.com/storage/<?=$productor->img1pdto?>" alt="photo">
                                                      </div>              
                                                      <div class="post-content">
                                                        <div class="post__author author vcard inline-items">
                                                                          <img src="https://www.directodefinca.com/storage/<?=$productor->img1pdto?>" alt="author">
                                                                      <div class="author-date">
                                                                            <a class="h6 post__author-name fn" href="{{asset('login')}}">Publicado por: <?=$productor->productor->nombres?>
                                                                            </a>
                                                                            <div class="post__date">
                                                                               <time class="published" datetime="">
                                                                                  <?=$productor->departamento->departamento;?>
                                                                                </time>
                                                                            </div>
                                                                            <div class="post__date">
                                                                                <time class="published" datetime="">
                                                                                  <?=$productor->created_at->diffForHumans();?>
                                                                                </time>
                                                                            </div>
                                                                      </div>
                                                        </div>   
                                                      </div>
                                       </div>
                                     </div>            
                                    <?php } ?>
                                 </div> </div></div></div>

</body>
@endsection
