<!DOCTYPE html>
<html lang="es">

<head>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>En Campo | Log in</title>




    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('css/pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" href="{{url('css/material/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{url('css/appx/dependencies/simple-line-icons/css/simple-line-icons.css')}}" type="text/css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url('dist/css/AdminLTE.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{url('plugins/iCheck/square/blue.css')}}">
    <link rel="stylesheet" href="{{url('css/sistemalaravel.css')}}">
    <link href="{{url('css/main.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{url('css/material/style.css')}}">
    <link rel="stylesheet" href="{{url('css/appx/dependencies/font-awesome/css/font-awesome.min.css')}}" type="text/css')}}">
    <link rel="stylesheet" href="{{url('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('css/pe-icon-7-stroke.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
  
  <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
</head>

   <body class="mini-sidebar">
 
<section id="wrapper" class="login-register" style="background-image: url(./imagenes/field-min.jpg)">

        <div class="login-box card">

            <div class="card-body">



      <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 mt-2 text-center">
              <div class="social" style="margin-top:-28px">

        <a  class="text-center db" href="landing"><img src="{{url('css/appx/assets/img/agronielsen.png')}}" alt="Home"></a> 



          <form action="register" method="post" class="form-horizontal form-material">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
       
            <h3 class="box-title text-center" style="padding: 5px 0 5px 0;background: #00A859;/*margin-bottom: 28px;*/color:#fff;border-radius: .25rem;font-size:13px">Empieza la centralización!</h3>
              
              <div style="color: #a94442; font-size:13px;border-color: #ebccd1;line-height:19px;border-radius: .25rem;">
                  <?php if( isset($errors) ){ ?>
                  <ul>
                       
                        <?php foreach($errors->all() as $error){ ?>
                                <li style="color:#FA206A;" ><?= $error  ?></li>
                        <?php }  ?>

                  </ul>

                  <?php }  ?> </div> 
                    </div></div></div>
          
          <div class="row">
          <div class="col-md-6">
          <div class="form-group has-feedback">
            <label>Nombre</label>
            <input type="text" class="form-control" name="name" >
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          </div>

             <div class="col-md-6">
           <div class="form-group has-feedback">
             <label>Email (válido)</label>
            <input type="email" class="form-control" name="email" >
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          </div>
          </div>
        
        <div class="row">
          <div class="col-md-6">
          <div class="form-group has-feedback">
            <label>Contraseña</label>
            <input type="password" class="form-control" name="password" >
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          </div>

          <div class="col-md-6">
          <div class="form-group has-feedback">
            <label>Confirmar</label>
            <input type="password" class="form-control" name="cpassword" placeholder="Contraseña" >
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          </div>
          </div>
         
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 mt-2 text-center">
              <div class="social">
                
                  <button type="submit" class="btn btn-primary">Registrarme</button>
                  <a href="landing" class="btn btn-primary">Volver</a>
               
             </div>
             </div>
           </div>
          
         
          
          <style>
              .or {
    position: relative;
    width: 100%;
    height: 1px;
    margin: 1rem 0 2rem;
    background-color: #e6ecf5;
    color:#000;
}
          </style>
          
           <div class="row">
                <div class="or"></div>
                             <div class="col-xs-12 col-sm-12 col-md-12 mt-2 text-center">
                                 <label>Ó Registrate con Facebook</label>
                                <div class="social">
              <a href="redirect" class="btn btn-facebook" data-toggle="tooltip" title="" data-original-title="Login with Facebook"> <i aria-hidden="true" class="fa fa-facebook"></i> </a>
                                </div>
                            </div>
            </div>
        </form>
      </div>
    </div>
    </div>

      </section>

      </body>
</html>

    <!-- jQuery 2.1.4 -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>

    <!-- Bootstrap 3.3.5 -->
    <script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="{{url('plugins/iCheck/icheck.min.js')}}"></script> 
   



    <style>
.login-box{
    background-color: #fff;
    opacity: 0.9;
}
.login-box:hover{
    background-color: #fff;
    opacity: 1;
}


.card-body {
    padding: 1.8rem; 
background:#fff;
margin-top:-115px;}


<style>
.form-horizontal .form-group {
    margin-right: -15px;
    margin-left: -15px;
    margin-bottom: 3px;
}
</style>

<style>

.card {

    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: .25rem;

}
</style>

<style>
.form-material .form-group {
    /* overflow: hidden; */
}

.form-group {
    /* margin-bottom: 25px; */
}
</style>



<style>
   body {
    margin: 0;
    font-size: 0.9rem;
    font-weight: 400;
    line-height: 0.7;
    color: #000;
    text-align: left;
    background-color: #fff;
}
</style>

    

