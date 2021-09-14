@extends('layouts.app')

@section('htmlheader_title')
  Home
@endsection


@section('main-content')
<body>
  <div class="main-header">
  <div class="content-bg-wrap bg-account"></div>
               <div class="container">
                <div class="row">
                  <div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
                    <div class="main-header-content">
                      <h1>Hola: <b><?=$usuario->nombres?></b></h1>
                         <h3>Envíale un mensaje directo a: <b><?=$agricultor->nombres." ".$agricultor->apellidos?></b>
                        </h3><br/>
                    </div>
                  </div>
                </div>
              </div>
  </div>




<div class="container">
  <div class="row">

              <div class="col col-xl-9 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12" >
                                <div class="page-description" style="background:#4167b2">
                                          <div class="icon">
                                            <svg class="olymp-star-icon left-menu-icon" data-toggle="tooltip" data-placement="right" data-original-title="Mejores Posibilidades"><use xlink:href="{{url('/css/olympus/app/svg-icons/sprites/icons.svg#olymp-star-icon')}}"></use></svg>
                                          </div>
                                          <span style="color: #fff"><b><?=$usuario->nombres?></b>, Escribe por favor los detalles de contacto.</span>
                              </div>



 
      <div class="ui-block">
        <div class="ui-block-title">
          <h6 class="title">CONTACTO DIRECTO CON EL AGRICULTOR</h6>
        </div>
        <div class="ui-block-content">
          <form action="{{ url('/agregar_solicitud_agricultor') }}" method="post">
            <div class="row">
                                 <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                 <input type="hidden" name="idAgricultor" value="<?=$id;?>">
                                 <input type="hidden" name="idproducto" value="<?=$idproducto;?>">
                                 <input type="hidden" name="emailsolicitado" value="<?=$agricultor->email;?>">
                                 <input type="hidden" name="emailsolicitante" value="<?=$usuario->email;?>">
                           <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                              <div class="form-group label-floating">
                                  <label class="control-label">Tu Nombre es:</label>
                                  <input type="text" class="form-control" id="solicitante" name="solicitante" value="<?=$usuario->nombres." ".$usuario->apellidos;?>">
                              </div>
                           </div>
                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                              <div class="form-group label-floating">
                                  <label class="control-label">Tu Email es::</label>
                               <input type="text" class="form-control" id="solicitanteemail" name="solicitanteemail" value="<?=$usuario->email;?>">
                              </div>
                            </div>
                             <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                              <div class="form-group label-floating">
                                  <label class="control-label">Tu Teléfono es:</label>
                                  <input type="text" class="form-control" id="solicitantetelefono" name="solicitantetelefono" value="<?=$usuario->telefono;?>">
                              </div>
                            </div>
                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                              <div class="form-group label-floating">
                                <label class="control-label">Tema Central:</label>
                                <input type="text" class="form-control" id="asunto" name="asunto" required>
                              </div>
                            </div>
                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                              <div class="form-group label-floating">
                                <label class="control-label">Describe por favor tu solicitud de contacto.</label>
                                <textarea name="detalles" class="form-control" placeholder="" required></textarea>
                              </div>
                            </div>
                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                <button type="submit" class="btn btn-primary btn-lg full-width">Enviar mensaje<div class="ripple-container"></div></button>
                            </div>
              </div>
          </form>
        </div>
                </div>
              </div>

     </main>        




   <aside class="col col-xl-3 order-xl-1 col-lg-6 order-lg-2 col-md-6 col-sm-12 col-12">
    
      <div class="ui-block">
        <div class="your-profile">
          <div class="ui-block-title ui-block-title-small">
            <h6 class="title">PERFIL DEL AGRICULTOR</h6>
          </div>
          <div id="accordion" role="tablist" aria-multiselectable="true">
            <div class="card">
                <div class="card-header" role="tab" id="headingOne">
                  <h6 class="mb-0">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Datos de Contacto
                      <svg class="olymp-dropdown-arrow-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
                    </a>
                  </h6>
                </div>
        
              <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                <ul class="your-profile-menu">
                      <div class="author-date">
                        <a class="h6 post__author-name fn" href="02-ProfilePage.html">Nombre:</a>
                        <div class="post__date">
                          <time class="published" datetime="2004-07-24T18:18">
                            <?=$agricultor->nombres." ".$agricultor->apellidos?>
                          </time>
                        </div>
                      </div>
                      <hr>
                       <div class="author-date">
                        <a class="h6 post__author-name fn" href="02-ProfilePage.html">Email:</a>
                        <div class="post__date">
                          <time class="published" datetime="2004-07-24T18:18">
                             <?=$agricultor->email?>
                          </time>
                        </div>
                      </div>
                      <hr>
                       <div class="author-date">
                        <a class="h6 post__author-name fn" href="02-ProfilePage.html">Teléfono::</a>
                        <div class="post__date">
                          <time class="published" datetime="2004-07-24T18:18">
                             <?=$agricultor->telefono?>
                          </time>
                        </div>
                      </div>
                      <hr>
                       <div class="author-date">
                        <a class="h6 post__author-name fn" href="02-ProfilePage.html">Departamento:</a>
                        <div class="post__date">
                          <time class="published" datetime="2004-07-24T18:18">
                           <?=$agricultor->departamento?>
                          </time>
                        </div>
                      </div>
                </ul>
              </div>
          </div>
        </div>
   </aside>
     

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

.header--standard.header--standard-full-width, .header--standard.header--standard-landing {
    width: 100%;
    left: auto;
    top: 0;
    background-color: #4167b2;
}


.bg-account {
    background-image: url(https://www.directodefinca.com/public/css/olympus/app/img/top-header7.png);
}

.main-header {
   padding: 110px 0 0px;
    max-width: calc(100%);
    margin: 0 auto 30px;
    position: relative;
    background-position: 50% 50%;
}

</style>



@endsection
    



