@extends('directofinca.layouts.appdirecto')

@section('htmlheader_title')
  Home
@endsection


@section('main-content')
<div class="main-header" style="background:#eee">
 <div class="content-bg-wrap bg-account"></div>
   <div class="container">
                <div class="row">
                  <div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
                    <div class="main-header-content">
                      <h1>Hola: <b><?=$usuario->nombres?></b></h1>
                         <p >Crea tu producto a continuación
                        </p><br/>
                    </div>
                  </div>
                </div>
              </div>

  <div class="container">
    <div class="row">
        <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="page-description">
                <div class="icon">
                  <svg class="olymp-star-icon left-menu-icon" data-toggle="tooltip" data-placement="right" data-original-title="OFERTAS"><use xlink:href="{{url('/css/olympus/app/svg-icons/sprites/icons.svg#olymp-star-icon')}}"></use></svg>
                </div>
                <span>Publica un Nuevo Producto.</span>
              </div>
                <div class="clients-grid">
          <div class="row sorting-container" id="clients-grid-1" data-layout="masonry">
            <div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12  sorting-item ecommerce natural" style="position: absolute; left: 0%; top: 0px;">

    <div class="ui-block">
                        <div class="ui-block-title">
                          <h6 class="title">Publicar Nuevo Producto</h6>
                                                <div class="small-box">
                                                          <div class="inner">
                                                            <p>Tu Número de Productos Creados es:</p>
                                                            <h3><?=count($productos)?></h3>
                                                          </div>
                                                          <div class="icon">
                                                            <i class="fa fa-shopping-cart"></i>
                                                          </div>
                                                </div>
                        </div>
        <div class="ui-block-content">
                         <?php  if (count($productos)<=0){   ?>
                          <div class="callout callout-danger">Para iniciar por favor publica los productos que quieres comercializar</div>
                         <?php } else if (count($productos)>0){   ?>      
                          <span class="label pull-right bg-green"></span>  
                          <?php } ?>
                  <form  id=""  method="post"  action="{{url('agregarpublicaciondirectofinca')}}" class="" enctype="multipart/form-data" >
                     <div class="row">
                        <div id="notificacion_resul_fanu"></div>
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                            <input type="hidden" name="idEmpresa" value="<?=$idEmpresa;?>">
                          
                        
                      
                      <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Título de la oferta</label>
                                    <input type="text" class="form-control" id="titulo" name="titulo" required>
                                </div>
                       </div> 
                                 
                      <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                              <div class="form-group label-floating">
                                  <label class="control-label">Producto</label>
                                  <input type="text" class="form-control" id="producto" name="producto" required>
                              </div>
                  
                              <div class="form-group label-floating">
                                <label class="control-label">Precio de Referencia</label>
                                <input type="text" class="form-control" id="precio" name="precio" required>
                              </div>
                              <div class="form-group label-floating">
                                <label class="control-label">Descripción</label>
                                <textarea name="descripcion" class="form-control" placeholder=""></textarea>
                              </div>
                              <div class="form-group label-floating">
                                <img src="https://www.agronielsen.com/encampo/public/imagenes/avatar.jpg"  alt=""  style="width:60px;height:60px;" id="" >
                                                    <label for="foto1">Foto 1 del Producto:</label>
                                                    <input  id="foto1" name="foto1" type="file">
                               </div>
                       </div>
                       
                       
                       
                       
                       
                       <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Enlace a la oferta (si tiene)</label>
                                    <input type="text" class="form-control" id="enlace" name="enlace">
                                </div>
              
                    
                                <div class="form-group label-floating is-select">
                                   <label class="control-label">Ubicación/Departamento</label>
                                    <select class="selectpicker form-control" tabindex="-98" name="departamento" id="departamento">
                                         <option>Departamento:</option>
                                                                   
                                                            <?php  for($i=0;$i<=count($departamentos)-1;$i++){  if($departamentos[$i]->id !=$i){ ?>

                                                                  <option value="<?= $departamentos[$i]->id  ?>" ><?= $departamentos[$i]->departamento ?></option>
                                                                  <?php   }} ?>
                                      </select>
                                   </div>
                                    <div class="form-group label-floating">
                                      <label class="control-label">Observaciones</label>
                                     <textarea name="observaciones" class="form-control" placeholder=""></textarea>
                                    </div>
                                   <div class="form-group label-floating">
                                      <img src="https://www.agronielsen.com/encampo/public/imagenes/avatar.jpg"  alt=""  style="width:60px;height:60px;" id="" >
                                                          <label for="foto2">Foto 2 del Producto:</label>
                                                          <input  id="foto2" name="foto2" type="file">  
                                                          </div>                              
                                          <button type="submit" class="btn btn-primary btn-lg full-width">Publicar<div class="ripple-container"></div></button>
                                   </div>
                          </div>
                    </div>
                 </form>
          </div>
      </div>


          <div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12  sorting-item worlds family politics" style="position: absolute; left: 50%; top: 0px;">
                <div class="ui-block">
                        <div class="ui-block-title">
                          <h6 class="title">Estado del Tiempo</h6>
                          <a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
                        </div>
                         <div class="conteMapa" style="height:500px">
                                  <div id="map">
                                  </div>  
                                   <script src="https://unpkg.com/leaflet@1.3.3/dist/leaflet.js"
                                     integrity="sha512-tAGcCfR4Sc5ZP5ZoVz0quoZDYX5aCtEm/eu1KhSLj2c9eFrylXZknQYmxUssFaVJKvvc0dJQixhGjG2yXWiV9Q=="
                                     crossorigin="">                   
                                   </script>
                </div>
            </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>




<style>
.nbtn-two {
    background: #3224af;
    border-radius: 6px;
    -webkit-box-shadow: none;
    box-shadow: none;
    color: #fff;
    font-weight: 600;
    font-size: 20px;
    padding: 9px 28px;
    border: 1px solid transparent;
    
}

.bg-account {
    background-image: url(https://www.agronielsen.com/encampo/public/css/olympus/app/img/bg-group.png);
}

</style>


@endsection

    



