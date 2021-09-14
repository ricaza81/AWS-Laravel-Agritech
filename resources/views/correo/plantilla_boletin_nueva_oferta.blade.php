<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Notificaci&oacute;n de Eventos</title>
   <style>

   .titulo {
    color: #1e80b6;
    padding-top: 20px;
    padding-bottom: 10px;
    padding-left: 20px;
    padding-right: 20px;
    }

    .body{
     background-color: #fff;    
    }


    .div_contenido{
    color: #1e80b6;
    padding-top: 20px;
    padding-bottom: 10px;
    padding-left: 20px;
    padding-right: 20px;
    background-color: #ffffff !important;
   }

   .ui-block {
    background-color: #fff;
    border-radius: 5px;
    border: 1px solid #e6ecf5;
    margin-bottom: 15px;
}

.btn-primary {
    color: #fff;
    background-color: #4167b2;
    border-color: #4167b2;
    display: inline-block;
    text-align: center;
    vertical-align: middle;
    user-select: none;
    border: 1px solid transparent;
    padding: .375rem .75rem;
    font-size: .812rem;
    line-height: 1.5;
    border-radius: .25rem;
    transition: all .15s ease-in-out;
}

.post-thumb img {
    width: 30%;
    object-fit: cover;
    height: 59px;
}



   </style>

</head> 

<body class="body">
<hr>

<div class="label label-warning">¡Hola <b></b>!</div>
<br>
<div class="label label-warning">Te compartimos la nueva oferta publicada por:<?=$oferta->productor->nombres?>.</div>
<br>
<br>

    <a href="http://www.directodefinca.com"><img src="http://www.directodefinca.com/public/imagenes/logot.png" style="height: auto; width: auto; max-width: 300px; max-height: 300px;">
    </a>


<div align="center" style="background: #4267b2; color:#fff;
    line-height: 6px;
    padding: 20px 20px 20px 20px;border-radius: 8px 8px 8px 8px;width: 90%;margin: auto;"><h2>Nueva Oferta Publicada:</h2></div>
    <br>
    <br>

  <div class="container">
    <div class="row">
        <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

              <div class="ui-block">

                
                <div class="birthday-item inline-items badges">
                    <div class="author-thumb">
                        
                         <div class="h6 author-name">Agricultor:</div>
                         <div class="h6 author-name"><?=$oferta->productor->nombres?></div>
                        
                    </div>
                    
                        <div class="post-thumb">
                        <img src="http://www.directodefinca.com/storage/<?=$oferta->img1pdto;?>" alt="author" style="width:50%;height:auto">
                        
                    </div>
       
                    <div class="birthday-author-name">
                        <div class="h6 author-name">Producto</div>
                        <div class="birthday-date"><?=$oferta->producto?>.</div>
                    </div>
                
                   <div class="birthday-author-name">
                        <div class="h6 author-name">Detalles</div>
                        <div class="birthday-date"><?=$oferta->descripcion?>.</div>
                    </div>
                      <div class="skills-item">
                        <div class="skills-item-meter">
                          <a href="http://www.directodefinca.com/public/login" class="btn-primary" style="color:#fff">Contactar<div class="ripple-container"></div></a>
                        </div>
                    </div>
                
                </div>

            </div>

</div>
</div>
</div>

<br/>
<hr>
<div class=".div_contenido" ><br/><b>http://www.directodefinca.com</b></div>
    
</body>
</html>