<!DOCTYPE html>
<html lang="es">

<head>
    @include('/landing/partials.header')
</head>

<body id="home-version-2" class="home-version-2" data-style="default">
    <div class="page-loader">
        <div id="preloader">
            <span>{{ trans('messages.cargando') }}</span>
       
        </div>
    </div>
    <!-- /.page-loader -->

    <div id="">
        <div class="text-center" style="padding-bottom: 15px; padding-top: 4px; margin-bottom: -6px;">
            {{ trans('messages.consultademo') }}
            <a
                href="logindemo"
                target="_blank"
                class="read-btn1"
                style="
                    padding: 4px 12px;
                    background: #3224af;

                    color: #fff;
                    font-size: 12px;
                    text-transform: uppercase;
                    font-weight: 500;
                    border-radius: 30px;
                    display: inline-block;
                    border: 1px solid #3224af;
                "
            >
                {{ trans('messages.getdemo') }}
            </a>
            <a
                href="{{ url('lang', ['es']) }}"
                target="_blank"
                class="read-btn1"
                style="
                    padding: 4px 12px;
                    background: #3224af;

                    color: #fff;
                    font-size: 12px;
                    text-transform: uppercase;
                    font-weight: 500;
                    border-radius: 30px;
                    display: inline-block;
                    border: 1px solid #3224af;
                "
            >
                ES
            </a>
            <a
                href="{{ url('lang', ['en']) }}"
                target="_blank"
                class="read-btn1"
                style="
                    padding: 4px 12px;
                    background: #3224af;

                    color: #fff;
                    font-size: 12px;
                    text-transform: uppercase;
                    font-weight: 500;
                    border-radius: 30px;
                    display: inline-block;
                    border: 1px solid #3224af;
                "
            >
                EN
            </a>
        </div>

  
        <header id="site-header" class="header-two">
            <div class="header-main gp-header-sticky" style="padding-top: 0px; margin-top: 43px;">
                <div class="container">
                    <div class="header-inner clearfix">
                        <div class="site-logo">
                            <a href="landing" class="main-logo"><img src="{{url('css/appx/assets/img/agronielsen.png')}}" alt="Agronielsen en Campo" /></a>

                      
                        </div>
                  

                        <div class="mob-menu-open toggle-menu">
                            <span class="bar"></span>
                            <span class="bar"></span>
                            <span class="bar"></span>
                            <span class="bar"></span>
                        </div>

                        <nav class="site-nav">
                            <ul class="site-menu">
                                <li><a href="login">{{ trans('messages.ingresar1') }}</a></li>
                                <li class="menu-item-has-children" id="strange-1">
                                    <a href="{{asset('producto')}}">{{ trans('messages.pdto') }}</a>

                                    <div class="popoverContent" id="popoverContent2-1">
                                        <div class="featureLinks">
                                            <a class="featureLinksWrapper" href="{{asset('landing#prosess')}}">
                                                <span class="featureLinksIcon featureIconAllFeatures"></span>
                                                <span class="featureLinksDetails">
                                                    <h3 class="featureLinksTitle">{{trans('messages.engeneral')}}</h3>
                                                    <p class="featureLinksDescription">{{trans('messages.recorrido')}}</p>
                                                </span>
                                            </a>
                                            <a class="featureLinksWrapper" href="{{asset('landing#prosess1')}}">
                                                <span class="featureLinksIcon featureIconGantt"></span>
                                                <span class="featureLinksDetails">
                                                    <h3 class="featureLinksTitle">{{trans('messages.geoposicion')}}</h3>

                                                    <p class="featureLinksDescription">{{trans('messages.geomapa')}}</p>
                                                </span>
                                            </a>
                                            <a class="featureLinksWrapper" href="{{asset('landing#swape')}}">
                                                <span class="featureLinksIcon featureIconTracker"></span>
                                                <span class="featureLinksDetails">
                                                    <h3 class="featureLinksTitle">{{trans('messages.beneficios')}}</h3>
                                                    <p class="featureLinksDescription">{{trans('messages.midegestion')}}</p>
                                                </span>
                                            </a>
                                            <a class="featureLinksWrapper" href="{{asset('landing#feature-two')}}">
                                                <span class="featureLinksIcon featureIconTemplates"></span>
                                                <span class="featureLinksDetails">
                                                    <h3 class="featureLinksTitle">{{trans('messages.empreagri')}}</h3>
                                                    <p class="featureLinksDescription">{{trans('messages.empreagritext')}}</p>
                                                </span>
                                            </a>
                                            <a class="featureLinksWrapper" href="{{asset('producto#prosessvit')}}">
                                                <span class="featureLinksIcon featureIconRoles"></span>
                                                <span class="featureLinksDetails">
                                                    <h3 class="featureLinksTitle">{{trans('messages.reportautomaticos')}}</h3>
                                                    <p class="featureLinksDescription">{{trans('messages.mantengacontrol')}}</p>
                                                </span>
                                            </a>
                                            <a class="featureLinksWrapper" href="{{asset('producto#prosess')}}">
                                                <span class="featureLinksIcon featureIconWall"></span>
                                                <span class="featureLinksDetails">
                                                    <h3 class="featureLinksTitle">{{trans('messages.stmkt')}}</h3>
                                                    <p class="featureLinksDescription">{{trans('messages.stmktext')}}</p>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item-has-children" id="strange2-1">
                                    <a href="{{asset('ventainformes')}}">{{ trans('messages.informes') }}</a>
                                    <div class="popoverContentlang" id="popoverContent4-1">
                                        <div class="featureLinks">
                                            <a class="featureLinksWrapper" href="{{asset('demosector')}}">
                                                <span class="featureLinksIcon2 featureIconAllFeatures"></span>
                                                <span class="featureLinksDetails2">
                                                    <h3 class="featureLinksTitle" style="width: 500px;">Ventas Sector Agroquímicos</h3>
                                                </span>
                                            </a>
                                            <a class="featureLinksWrapper" href="{{asset('demoalmacenes')}}">
                                                <span class="featureLinksIcon2 featureIconAllFeatures"></span>
                                                <span class="featureLinksDetails2">
                                                    <h3 class="featureLinksTitle" style="width: 500px;">ICA Base datos Almacenes</h3>
                                                </span>
                                            </a>
                                            <a class="featureLinksWrapper" href="{{asset('analiticacultivos')}}">
                                                <span class="featureLinksIcon2 featureIconAllFeatures"></span>
                                                <span class="featureLinksDetails2">
                                                    <h3 class="featureLinksTitle" style="width: 500px;">Analítica de Cultivos</h3>
                                                </span>
                                            </a>
                                            <a class="featureLinksWrapper" href="{{asset('visor')}}">
                                                <span class="featureLinksIcon2 featureIconAllFeatures"></span>
                                                <span class="featureLinksDetails2">
                                                    <h3 class="featureLinksTitle" style="width: 500px;">Visor Agronielsen</h3>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </li>

                                <li><a href="{{asset('precios')}}">{{ trans('messages.precios') }}</a></li>
                            </ul>
                            <a href="login" class="nav-button nbtn-two">{{ trans('messages.ingresar') }}</a>
                            <a href="register" class="nav-button nbtn-two_1">{{ trans('messages.registrarme') }}</a>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <section id="blog-post-single" style="padding:100px 0px 0px 0px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <article class="post post-single">
                            <div class="features-image">
                                <a href="#">
                       
                        </a>
                              
                            </div>
                          

                            <div class="post-content">

                                <h3 class="post-title">
                                    <a href="#">1 mm de lluvia equivale a 1 Litro de agua en 1 m²</a>
                                </h3>

                           

                                <p style="color:#000;font-weight: 500">
                                    El milímetro (mm) -no mililitro (mL)- es la unidad como se mide la lluvia que llega al suelo, es igual a 1 litro por metro cuadrado. Para saber el volumen de lluvia caido (en litros), es necesario conocer la superficie o área (m2) y multiplicarla por el valor dado por el pluviómetro.
                                </p>

                                    <div>
                                        <img style="width: 370px;" class="responsive text-center" src="{{asset('blog/precipitacion.jpg')}}" alt="blog">
                                    </div>

                                <p style="color:#000;font-weight: 500">
                                    Precipitación pluvial (mm agua) Se utiliza para estudiar el efecto en la producción de cultivos, predecir posibles problemas de enfermedades y daños físicos en los cultivos. También puede utilizarse para calcular balances hídricos e índices de sequía y fechas de siembra, entre otras.
                                </p>

                              
                            </div>

                        
                        </article>
            


                        <div class="gp_appxbe_post_author_box clearfix">

                         
                   
                        </div>
                    </div>
                    <!-- /.col-lg-8 -->

                    <div class="col-lg-4">
                        <div class="sidebar">
                            <div id="search" class="widget widget_search">
     
                            </div>
                            <div id="gp-posts-widget-2" class="widget gp-posts-widget">
                                <h2 class="widget-title">Consulta en Línea</h2>
                                <div class="gp-posts-widget-wrapper">

                                    <div>
                                        <a href="consultaclima">
                                        <img style="width:340px" class="responsive text-center" src="{{asset('blog/ag_variables_prec.jpg')}}" alt="blog">
                                        </a>
                                    </div>

                                </div>  

    
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /#blog-post -->
    <!--========================-->
    <!--=        Footer        =-->
    <!--========================-->
    <footer id="site-footer-two" class="site-footer">
        <div class="container">
            <div class="footer-inner-two wow fadeInUp">
                <div class="row">
                    <div class="col-lg-4 col-md-7">
                        <div class="widget widget-about">
                            <div class="footer-logo">
                                <img src="{{url('css/appx/assets/img/sticky-logo.png')}}" alt="Agronielsen en Campo" />
                            </div>

                            <p class="content">
                                Ofrecemos soluciones empresariales que se integran a la estrategia de transformación digital, para una mayor productividad del sector agrícola en latinoamérica.
                            </p>
                        </div>
                        <!-- /.widget widget-about -->
                    </div>
                    <!-- /.col-lg-2 -->

                    <div class="col-lg-2 col-md-5">
                        <div class="widget widget-menu">
                            <h3 class="widget-title">Soporte</h3>

                            <ul class="footer-menu">
                                <li><a href="https://play.google.com/store/apps/details?id=io.ionic.agronielsen" target="_blank">Google Play</a></li>
                                <!--<li><a href="https://www.agronielsen.com/politica-privacidad/" target="_blank">Privacidad</a></li>-->
                                <!-- <li><a href="https://www.agronielsen.com/modelamiento-de-datos/" target="_blank">Modelo de datos</a></li>-->
                                <li><a href="register">Registrarme</a></li>
                                <li><a href="login">Cuenta</a></li>
                                <li><a href="password">Olvidé mi contraseña</a></li>
                            </ul>
                        </div>
                        <!-- /.widget widget-menu -->
                    </div>
                    <!-- /.col-lg-2 -->

                    <div class="col-lg-3 col-md-7">
                        <div class="widget widget-menu">
                            <h3 class="widget-title">Compañía</h3>

                            <ul class="footer-menu">
                                <li><a href="https://www.agronielsen.com/" target="_blank">Agronielsen</a></li>
                                <li><a href="{{asset('visor')}}" target="_blank">Analítica de datos</a></li>
                                <li><a href="{{asset('ventainformes')}}" target="_blank">Venta de Informes</a></li>
                                <!-- <li><a href="https://www.agronielsen.com/membresia-inteligencia-de-mercados-agricolas-colombia/?restricted=page" target="_blank">Membresía Inteligencia de Mercados</a></li>-->
                                <!-- <li><a href="https://www.agronielsen.com/blog/abre-tu-cuenta-gratis/" target="_blank">Demo de tablero de Análisis</a></li>-->
                                <!-- <li><a href="https://www.agronielsen.com/mineria" target="_blank">Míneria de Clientes</a></li>-->
                                <li><a href="https://directodefinca.com" target="_blank">Directo de Finca</a></li>
                                <li><a href="https://www.agronielsen.com/blog/contacto/" target="_blank">Contacto</a></li>
                                <li><a href="register" target="_blank">Suscribirse</a></li>
                            </ul>
                        </div>
                        <!-- /.widget widget-menu -->
                    </div>
                    <!-- /.col-lg-2 -->

                    <div class="col-lg-3 col-md-5">
                        <div class="widget widget-menu">
                            <h3 class="widget-title">Contacto</h3>

                            <ul class="footer-contact-info">
                                <!--<li><span>Oficina:</span> Calle 32A #2B-63, CALI</li>-->
                                <li><span>Contáctanos:</span><a href="tel:+573004339418"> +573004339418</a></li>
                                <li><span></span> info@agronielsen.com</li>
                            </ul>

                            <div class="follow-us">
                                <span>{{trans('messages.follower')}}</span>

                                <ul class="footer-social-two">
                                    <li>
                                        <a href="https://www.facebook.com/agronielsen" target="_blank"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/company/agronielsen" target="_blank"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/agronielsen" target="_blank"><i class="fa fa-youtube"></i></a>
                                    </li>
                                    <!-- <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    <li><a href="#"><i class="fa fa-vimeo"></i></a></li>-->

                                    <!-- <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    <li><a href="#"><i class="fa fa-vimeo"></i></a></li>-->
                                </ul>
                            </div>
                            <!-- /.follow-us -->
                        </div>
                        <!-- /.widget widget-menu -->
                    </div>
                    <!-- /.col-lg-3 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.footer-inner -->

            <div class="site-info">
                <div class="row">
                    <div class="col-lg-6">
                        <p class="copyright wow fadeInUp" data-wow-delay="0.3s">Todos los derechos reservados © 2020 Desarrollado por <a href="https://www.mktmedia.co" target="_blank">MKT Media | Transformación Digital 4.0</a></p>
                    </div>
                    <!-- /.col-lg-6 -->

                    <!--   <div class="col-lg-6">
              <ul class="footer-menu-bottom wow fadeInUp" data-wow-delay="0.3s">
                <li><a href="#">About</a></li>
                <li><a href="#">Help</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Terms</a></li>
                <li><a href="#">Privacy</a></li>
              </ul>-->
                    <!-- /.footer-menu -->
                    <!-- </div>-->
                    <!-- /.col-lg-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.site-info -->
        </div>
        <!-- /.container -->

        <div class="footer-animate-bubble"></div>
    </footer>
    <!-- /#site-footer -->

    <!-- /#site -->

   
    
    <!-- Dependency Scripts -->

    @include('landing/partials.footer')

    <!-- Start of  Zendesk Widget script -->
  
   <script>
       var marker; //variable del marcador
        var coords = {};
         var data = {};//coordenadas obtenidas con la geolocalización
        //var map, infowindow;
        //Funcion principal
         function initMap () {
            //usamos la API para geolocalizar el usuario
            navigator.geolocation.getCurrentPosition(
                function (position) {
                    coords = {
                        lng: position.coords.longitude,
                        lat: position.coords.latitude,
                    };
                     document.getElementById("coords").value = '{"lat":'+position.coords.latitude+',"lnt":'+ position.coords.longitude+'}';
                     document.getElementById("coords.lat").value = position.coords.latitude;
                     document.getElementById("coords.lng").value = position.coords.longitude;
                    var coords = coords;
                    console.log(coords.lat);
                    console.log(coords.lng);
                    setMapa(coords);
                    var OPEN_WEATHER_MAP_API_KEY = "d13eb18064cea8bae2ef7ee7c6478111";
                    var textoActivo="MDN";
                    const lat= coords.lat;
                    const lon=coords.lng;
                    //const lat= 31.2323;
                    //const lon=121.469;
                    var params1 = {
                            "ds1.lat": lat,
                            "ds1.lon": lon,
                            "ds8.lat": lat,
                            "ds8.lon": lon,
                            "ds6.lat": lat,
                            "ds6.lon": lon,
                            "ds9.lat": lat,
                            "ds9.lon": lon,
                            "ds18.lat": lat,
                            "ds18.lon": lon,
                            "ds114.lat": lat,
                            "ds114.lon": lon
                                    };
    var params1AsString = JSON.stringify(params1);
    var encodedParams1 = encodeURIComponent(params1AsString);
    var urlencode=(JSON.stringify(encodedParams1));
    console.log(JSON.stringify(encodedParams1));
//var URL="https://developer.mozilla.org/"
//https://datastudio.google.com/u/0/reporting/afeb864b-96f8-48bc-9b94-42948cd1d35f/page/SP3gB?params=%7B%22ds1.lat%22%3Acoords.lat,ds1.loncoords.lng
//var URL="https://api.openweathermap.org/data/2.5/onecall?lat=" + lat + "&lon=" + lon + "&units=metric"  + "&appid=" + OPEN_WEATHER_MAP_API_KEY
//var URL="https://datastudio.google.com/u/0/reporting/afeb864b-96f8-48bc-9b94-42948cd1d35f/page/SP3gB?params=%7B%22ds1.lat%22%3A" + lat + "%2C%22ds1.lon%22%3A" + lon
var URL="https://datastudio.google.com/u/0/reporting/afeb864b-96f8-48bc-9b94-42948cd1d35f/page/SP3gB?params=" + urlencode.replace(/\"/g, "");
var URL2="https://datastudio.google.com/embed/reporting/eec5d08b-1dee-4ef1-afaa-37d8d93082f7/page/SP3gB/?params=" + urlencode.replace(/\"/g, "");
//var URL2 = "https://datastudio.google.com/embed/reporting/eec5d08b-1dee-4ef1-afaa-37d8d93082f7/page/SP3gB";
 //var URL="https://datastudio.google.com/u/0/reporting/afeb864b-96f8-48bc-9b94-42948cd1d35f/page/SP3gB?params=%7B%22ds1.lat%22%3Alat%2C%22ds1.lon%22%3A-76.5%7D"


//console.log("Haga click para volver a " + textoActivo.link(URL));
console.log(coords.lat);
console.log(coords.lng);
//document.getElementById("enlace").value = textoActivo.link(URL);
document.getElementById("enlace").setAttribute('href',URL);
document.getElementById("enlace1").setAttribute('href',URL);
$('#historyframe').attr('src',URL2);
//var iframe = document.getElementById('historyframe');
//iframe.src = iframe.src + window.location.search;
// var search = window.location.search;
//$("#historyframe").attr("src", $("historyframe").attr("src")+search);

    //var lat= 3.40556;
//var lon=-76.53239;
    //const lat= coords.lat;
    //const lon=coords.lng;
    //console.log(lat + "," + lon);
    //https://api.openweathermap.org/data/2.5/onecall?lat=3.40556&lon=-76.53239&units=metric&appid=d13eb18064cea8bae2ef7ee7c6478111
    $.getJSON("https://api.openweathermap.org/data/2.5/onecall?lat=" + lat + "&lon=" + lon + "&units=metric"  + "&appid=" + OPEN_WEATHER_MAP_API_KEY,function(data) {
      var temp=(data.daily[0].temp);
      var uvi=(data.daily[0].uvi);
      var pop_origen=(data.daily[0].pop);
      var pob=pop_origen * 100;
      console.log("MaxTempOne: " + temp.max);
      console.log("MinTempOne: " + temp.min);
      console.log("UVI: " + uvi);
      console.log("pop: " + pop_origen * 100);
    $('#temp_max').html(temp.max);
    $('#temp_max').html(temp.max);
    $('#temp_min').html(temp.min);
    $('#uvi').html(uvi);
    $('#pop').html(pop_origen * 100);
});
    //https://api.openweathermap.org/data/2.5/weather?lat=3.40556&lon=-76.53239&units=metric&lang=es&appid=d13eb18064cea8bae2ef7ee7c6478111
    $.getJSON("https://api.openweathermap.org/data/2.5/weather?lat=" + lat + "&lon=" + lon + "&units=metric" + "&lang=es" + "&appid=" + OPEN_WEATHER_MAP_API_KEY,function(data) {
      console.log("Weather: " + (data.weather[0].description));
      console.log("icon: " + (data.weather[0].icon));
      console.log("Pais: " + (data.sys.country));
      console.log("Ciudad: " + (data.name));
      console.log("Temp Actual: " + (data.main.temp));
      console.log("Temp Maxima: " + (data.main.temp_max));
      console.log("Temp Mínima: " + (data.main.temp_min));
      console.log("Humidity: " + (data.main.humidity));
      console.log("Pressure: " + (data.main.pressure));
      console.log("Temp in F: " + (((data.main.temp-273.15) * 1.8) + 32));
    var today=Date.now();
    var myCurrentDate=new Date();
    var myPastDate=new Date(myCurrentDate);
    myPastDate.setDate(myPastDate.getDate() - 5);

    for (let step = 0; step < 5; step++) {
  // Se ejecuta 5 veces, con valores del paso 0 al 4.
  //console.log('Camina un paso hacia el este');
  console.log(myPastDate.setDate(myPastDate.getDate() - step));
    }
    //var anterior=today.setDate(today.getDate() - 1);
    //var todaystring=Date.now();
      console.log(today / 1000 | 0);
      console.log(myPastDate / 1000 | 0);
    var icon=data.weather[0].icon;
    var iconurl = "https://openweathermap.org/img/wn/" + "02n" + ".png";
    $('#pais').html(data.sys.country);
    $('#ciudad').html(data.name);
    $('#icon').attr('src',iconurl);
    $('#weather').html(data.weather[0].description);
    $('#temp_actual').html( (data.main.temp) );
    $('#humidity').html( (data.main.humidity + 0) );
    $('#pressure').html( (data.main.pressure + 0) );
    $('#tempF').html( (((data.main.temp-273.15) * 1.8) + 32) );
    });

    //https://api.openweathermap.org/data/2.5/forecast?lat=3.40556&lon=-76.53239&units=metric&appid=d13eb18064cea8bae2ef7ee7c6478111
 $.getJSON("https://api.openweathermap.org/data/2.5/forecast?lat=" + lat + "&lon=" + lon + "&units=metric"  + "&appid=" + OPEN_WEATHER_MAP_API_KEY,function(data) {
      var wind=data.list[0].wind;
      var temp_max=(data.list[0].main.temp_max);
      var temp_min=(data.list[0].main.temp_min);
      var rain = data.list[0].rain && data.list[0].rain["3h"] || 0
      console.log("Wind: " + data.list[0].wind);
      console.log("MaxTemp: " + temp_max);
      console.log("Rain: " + rain);
$('#wind').html(wind.speed);
$('#rain').html(rain);
    });
 //SOILAPI
 //API=6c421d18-f909-11ea-9025-0242ac130002-6c421e6c-f909-11ea-9025-0242ac130002

//const lat= coords.lat;
//const lon=coords.lng;
/*const lat1=3.40556;
const lon1= -76.53239;
fetch("https://api.stormglass.io/v2/bio/point?lat=${lat}&lng=${lon}&params=soilTemperature", {
  headers: {
    'Authorization': '6c421d18-f909-11ea-9025-0242ac130002-6c421e6c-f909-11ea-9025-0242ac130002'
  }
}).then((response) => response.json()).then((jsonData) => {
  // Do something with response data.
  //.then(result => console.log(result))
  console.log("SoilT: " + jsonData.hours[0].soilTemperature.noaa);
   $('#soilTemperature').html(jsonData.hours[0].soilTemperature.noaa);
  //console.log("SoilT: " + jsonData.meta.dailyQuota);
});*/

//const lat1 = 58.7984;
//const lng1 = 17.8081;
const params = 'soilTemperature';

fetch(`https://api.stormglass.io/v2/bio/point?lat=${lat}&lng=${lon}&params=${params}`, {
  headers: {
    'Authorization': '6c421d18-f909-11ea-9025-0242ac130002-6c421e6c-f909-11ea-9025-0242ac130002'
  }
}).then((response) => response.json()).then((jsonData) => {
  // Do something with response data.
   console.log("SoilT: " + jsonData.hours[0].soilTemperature.noaa);
   $('#soilTemperature').html(jsonData.hours[0].soilTemperature.noaa);
});
  //.then(result => console.log(result[0].hours))
  //.then(console.log("SoilT: " + data.hours.soilTemperature)
  //.then(result => console.log(result[0]))
  //.then(result => console.log(noaa))
  //.catch(error => console.log('error', error));

                
                },
                function (error) {
                    console.log(error);
                }
            );
        };
   
 function setMapa(coords) {
            //Se crea una nueva instancia del objeto mapa
            var map = new google.maps.Map(document.getElementById("map"), {
                // zoom: 13,
                zoom: 7,
                mapTypeId: google.maps.MapTypeId.HYBRID,
                center: new google.maps.LatLng(coords.lat, coords.lng),
            });

            var infowindow = new google.maps.InfoWindow({});

                      

            //Creamos el marcador en el mapa con sus propiedades
            //para nuestro obetivo tenemos que poner el atributo draggable en true
            //position pondremos las mismas coordenas que obtuvimos en la geolocalización
            // var markerLabel = 'YO!';
            marker = new google.maps.Marker({
                map: map,
                draggable: false,
                animation: google.maps.Animation.BOUNCE,
                map: map,
                //shape: shape,
                title: "Aquí estoy!",
                icon: "{{url('imagenes/maker-agronielsen.png')}}",
                label: {
                    text: "Ubicación",
                    color: "#fff",
                    fontSize: "16px",
                    fontWeight: "bold",
                    background: "#fff",
                    width: "100px",
                },

                position: new google.maps.LatLng(coords.lat, coords.lng),
            });
             infowindow.setContent(
                  
                  "latitud " + coords.lat + "<br>" + "longitud " + coords.lng //+"<br>" + "altitud " + coords.lng
                     
                );
      infowindow.open(map,marker); 

           
        }
        //callback al hacer clic en el marcador lo que hace es quitar y poner la animacion BOUNCE
        function toggleBounce() {
            if (marker.getAnimation() !== null) {
                marker.setAnimation(null);
            } else {
                marker.setAnimation(google.maps.Animation.BOUNCE);
            }
        }
        // Carga de la libreria de google maps
    </script>
    <!--Produccion-->
    <!--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD2O6NRzoS7rpQ4ftOgrrzOdPLHUcb1RJk&callback=initMap" async defer></script>-->
    <!--Produccion-->

    <!--Test-->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBRqOl8xvZAp8RvNW2OnJPFbe9XehcNyyY&callback=initMap" async defer></script>
    <!--Test-->

    <!-- Start of  Zendesk Widget script -->
<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=c5c1215c-ecf8-44af-b71c-210ea7a83f5a"> </script>
<!-- End of  Zendesk Widget script -->
    <!--informe-->

    <style>
        .home-version-2 {
            font-family: "Montserrat", sans-serif;
            color: #333;
            font-size: 15px;
            line-height: 26px;
            overflow-x: hidden;
        }

        /*#banner-two .banner-content {
    top: 93%;
    -webkit-transform: translateY(-40%);
    -ms-transform: translateY(-40%);
    transform: translateY(-40%);
    position: absolute;
    left: 0;
    width: 100%;
    padding: 0 10px;
    margin-top: 0;
    z-index: 1111;
}*/

        #banner-two {
            height: 80vh;
        }

        /*#banner-two .banner-content p {
    font-size: 15px;
    color: #fff;
    font-weight: 500;
    margin-bottom: 131px;
}*/

        /*#banner-two .banner-content {
    top: 68%;
    -webkit-transform: translateY(-40%);
    -ms-transform: translateY(-40%);
    transform: translateY(-40%);
    position: absolute;
    left: 0;
    width: 100%;
    padding: 32px 10px;
    margin-top: -35px;
    z-index: 1111;
    background: #4167b2;
}*/

        #banner-two {
            height: 82vh;
        }

        .punch-viewer-container {
            background: transparent;
            overflow: hidden;
            margin-bottom: -115px;
        }

        .punch-viewer-body,
        .punch-viewer-body-v2 {
            background: #fff;
            overflow: hidden;
        }

        .page-description {
            border: 0px solid #e6ecf5;
            background-color: #fff;
            margin-bottom: 0px;
            border-radius: 5px;
            overflow: hidden;
        }
    </style>

    <style>
        .banner-content {
            margin-top: 0px;
            /*background: :#eee;*/
        }

        #banner-two {
            height: 92vh;
            /*    background-image: -o-linear-gradient(50deg, #698F31 0%, #698F31 100%);
                        background-image: linear-gradient(40deg, #76A82B 0%, #76A82B 100%);
                        overflow: hidden;
                        padding-top: 100px;
                        /*background:url(https://www.agronielsen.com/encampo/public/imagenes/agct.jpg)*/
        }

        .site-nav {
            float: none;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .keepPopoverOpen {
            z-index: 10 !important;
            opacity: 1 !important;
            visibility: visible !important;
            display: flex !important;
            -webkit-transform: translate(0, -20px) !important;
            -moz-transform: translate(0, -20px) !important;
            -ms-transform: translate(0, -20px) !important;
            -o-transform: translate(0, -20px) !important;
            transform: translate(0, -20px) !important;
            -webkit-transition: all 0.5s cubic-bezier(0.75, -0.02, 0.2, 0.97) !important;
            -moz-transition: all 0.5s cubic-bezier(0.75, -0.02, 0.2, 0.97) !important;
            -ms-transition: all 0.5s cubic-bezier(0.75, -0.02, 0.2, 0.97) !important;
            -o-transition: all 0.5s cubic-bezier(0.75, -0.02, 0.2, 0.97) !important;
            transition: all 0.5s cubic-bezier(0.75, -0.02, 0.2, 0.97) !important;
        }
        .popoverContent {
            -webkit-transition: all 0.25s ease-out;
            -moz-transition: all 0.25s ease-out;
            -ms-transition: all 0.25s ease-out;
            -o-transition: all 0.25s ease-out;
            transition: all 0.25s ease-out;
            background: #fff;
            -webkit-border-radius: 8px;
            -moz-border-radius: 8px;
            -ms-border-radius: 8px;
            -o-border-radius: 8px;
            border-radius: 8px;
            box-shadow: 0 1px 3px 0 rgba(51, 51, 79, 0.1), 0 0 10px 0 rgba(51, 51, 79, 0.06);
            padding: 40px;
            box-sizing: border-box;
            text-align: left;
            opacity: 0;
            z-index: 100;
            transition-delay: 0.1s;
            display: none;
            visibility: hidden;
            position: fixed;
            right: 310px;
            margin-top: 35px;
            -webkit-transform: translate(0, 10px);
            -moz-transform: translate(0, 10px);
            -ms-transform: translate(0, 10px);
            -o-transform: translate(0, 10px);
            transform: translate(0, 10px);
            width: auto;
            max-width: 600px;
        }

        .popoverContentlang {
            -webkit-transition: all 0.25s ease-out;
            -moz-transition: all 0.25s ease-out;
            -ms-transition: all 0.25s ease-out;
            -o-transition: all 0.25s ease-out;
            transition: all 0.25s ease-out;
            background: #fff;
            -webkit-border-radius: 8px;
            -moz-border-radius: 8px;
            -ms-border-radius: 8px;
            -o-border-radius: 8px;
            border-radius: 8px;
            box-shadow: 0 1px 3px 0 rgba(51, 51, 79, 0.1), 0 0 10px 0 rgba(51, 51, 79, 0.06);
            padding: 20px;
            box-sizing: border-box;
            text-align: left;
            opacity: 0;
            z-index: 100;
            transition-delay: 0.1s;
            display: none;
            visibility: hidden;
            position: fixed;
            right: 410px;
            margin-top: 35px;
            -webkit-transform: translate(0, 10px);
            -moz-transform: translate(0, 10px);
            -ms-transform: translate(0, 10px);
            -o-transform: translate(0, 10px);
            transform: translate(0, 10px);
            width: auto;
            max-width: 294px;
            padding-bottom: 10px;
            height: 244px;
        }

        .popoverWrapper {
            position: relative;
        }

        .featureLinks {
            display: flex;
            flex-flow: row wrap;
        }

        .featurelinkswrapper: {
            padding: 0 30px 0 0;
        }

        .featureLinksIcon.featureIconAllFeatures {
            background: url(https://res.cloudinary.com/cegalvarez/image/upload/v1525735128/allFeatures_slgwdm.png);
            background-size: cover;
        }

        .featureLinksIcon {
            min-width: 55px;
            height: 55px;
        }

        .featureLinksDetails {
            padding: 0 0 0 15px;
        }

        .featureLinksWrapper {
            padding: 0 30px 0 0;
            -webkit-transition: all 0.25s ease-out;
            -moz-transition: all 0.25s ease-out;
            -ms-transition: all 0.25s ease-out;
            -o-transition: all 0.25s ease-out;
            transition: all 0.25s ease-out;
            display: flex;
            flex-basis: 50%;
            box-sizing: border-box;
            padding: 0 0 0 30px;
            align-items: center;
            margin: 0 0 40px;
        }

        .featureLinksDetails .featureLinksDescription {
            color: #78909c;
            -webkit-transition: all 0.25s ease-out;
            -moz-transition: all 0.25s ease-out;
            -ms-transition: all 0.25s ease-out;
            -o-transition: all 0.25s ease-out;
            transition: all 0.25s ease-out;
            text-transform: none;
        }

        .featureLinksDetails .featureLinksTitle {
            display: block;
            color: #455a64;
            margin: 0 0 5px;
            font-size: 15px;
            font-weight: 900;
            -webkit-transition: all 0.25s ease-out;
            -moz-transition: all 0.25s ease-out;
            -ms-transition: all 0.25s ease-out;
            -o-transition: all 0.25s ease-out;
            transition: all 0.25s ease-out;
            text-transform: none;
        }

        .featureLinksDetails2 .featureLinksTitle {
            display: block;
            color: #455a64;
            margin: 0 0 5px;
            font-size: 15px;
            font-weight: 500;
            -webkit-transition: all 0.25s ease-out;
            -moz-transition: all 0.25s ease-out;
            -ms-transition: all 0.25s ease-out;
            -o-transition: all 0.25s ease-out;
            transition: all 0.25s ease-out;
            text-transform: none;
        }

        .featureLinksIcon.featureIconTracker {
            background: url(https://res.cloudinary.com/cegalvarez/image/upload/v1519940788/featuresIcons/bigger/timetracker.png);
            background-size: cover;
        }

        .featureLinksIcon.featureIconRoles {
            background: url(https://res.cloudinary.com/cegalvarez/image/upload/v1519940788/featuresIcons/bigger/roles.png);
            background-size: cover;
        }

        .featureLinksIcon.featureIconGantt {
            background: url(https://res.cloudinary.com/cegalvarez/image/upload/v1519940789/featuresIcons/bigger/gantt.png);
            background-size: cover;
        }

        .featureLinksIcon.featureIconTemplates {
            background: url(https://res.cloudinary.com/cegalvarez/image/upload/v1519940788/featuresIcons/bigger/templates.png);
            background-size: cover;
        }

        .featureLinksIcon.featureIconWall {
            background: url(https://res.cloudinary.com/cegalvarez/image/upload/v1525720013/featuresIcons/bigger/wall.png);
            background-size: cover;
        }

        .modal {
            position: fixed;
            top: 0px;
            right: 0px;
            bottom: 0;
            left: 0;
            z-index: 105000;
            display: none;
            overflow: hidden;
            outline: 0;
        }

        .gp-header-fixed .site-logo {
            padding: 0;
            width: 13%;
        }

        .header-inner .site-logo .main-logo {
            display: block;
            width: 100%;
        }

        .site-nav .site-menu li {
            display: inline-block;
            margin-right: 28px;
            padding: 31px 0;
        }

        .container {
            max-width: 1000px;
        }

        .site-nav .site-menu {
            margin: 0;
            list-style: none;
            position: relative;
            width: auto;
            text-align: right;
        }

        .modal-dialog {
            position: relative;

            pointer-events: none;
            max-width: 451px;
        }

        .modal-body {
            position: relative;
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 0;
        }

        .fade {
            background-color: rgba(0, 2, 77, 0.5);
        }

        #banner-two .banner-content .btitle-top {
            font-size: 16px;
            letter-spacing: 0px;
            color: #fff;
            text-transform: capitalize;
            font-weight: 500;
        }

        .site-nav .nav-button.nbtn-two_1 {
            background: #f26d21;
            border-radius: 30px;
            -webkit-box-shadow: none;
            box-shadow: none;
            color: #fff;
            font-weight: 600;
            font-size: 12px;
            padding: 9px 28px;
            border: 1px solid transparent;
            width: 265px;
        }

        .header-inner .site-logo {
            float: left;
            padding: 13px 0;
            margin-left: -19px;
        }

        .site-nav .nav-button.nbtn-two {
            margin-right: -10px;
        }

        #banner-two .banner-content h1 {
            padding-top: 30px;
        }

        /*.header-main {
    border-bottom: 2px solid #ffffff;
    background:#ffffff;
    height:87px;
}*/

        .site-nav .site-menu li a {
            color: #76a82b;
            font-size: 15px;
        }

        .container {
            max-width: 1200px;
        }

        .site-nav .site-menu {
            width: 757px;
        }

        #banner-two .banner-content .banner-btn-light:hover {
            background: #ffffff;
            color: #fff;
        }

        #prosess {
            padding-top: 50px;
            padding-bottom: 0px;
            overflow: hidden;
        }
    </style>

    <style>
        .banner-content {
            margin-top: 0px;
        }

        #banner-two {
            height: 93vh;
            background-image: -o-linear-gradient(50deg, #698f31 0%, #698f31 100%);
            background-image: linear-gradient(40deg, #76a82b 0%, #76a82b 100%);
            overflow: hidden;
            padding-top: 120px;
        }
        /*  .site-nav .site-menu li {
                            display: block;
                            margin-right: 0;
                            text-align: left;
                        }*/

        .site-nav .site-menu li {
            display: inline-block;
            margin-right: 24px;
            padding: 31px 0;
        }

        .site-nav {
            float: none;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .keepPopoverOpen {
            z-index: 10 !important;
            opacity: 1 !important;
            visibility: visible !important;
            display: flex !important;
            -webkit-transform: translate(0, -20px) !important;
            -moz-transform: translate(0, -20px) !important;
            -ms-transform: translate(0, -20px) !important;
            -o-transform: translate(0, -20px) !important;
            transform: translate(0, -20px) !important;
            -webkit-transition: all 0.5s cubic-bezier(0.75, -0.02, 0.2, 0.97) !important;
            -moz-transition: all 0.5s cubic-bezier(0.75, -0.02, 0.2, 0.97) !important;
            -ms-transition: all 0.5s cubic-bezier(0.75, -0.02, 0.2, 0.97) !important;
            -o-transition: all 0.5s cubic-bezier(0.75, -0.02, 0.2, 0.97) !important;
            transition: all 0.5s cubic-bezier(0.75, -0.02, 0.2, 0.97) !important;
        }
        .popoverContent {
            -webkit-transition: all 0.25s ease-out;
            -moz-transition: all 0.25s ease-out;
            -ms-transition: all 0.25s ease-out;
            -o-transition: all 0.25s ease-out;
            transition: all 0.25s ease-out;
            background: #fff;
            -webkit-border-radius: 8px;
            -moz-border-radius: 8px;
            -ms-border-radius: 8px;
            -o-border-radius: 8px;
            border-radius: 8px;
            box-shadow: 0 1px 3px 0 rgba(51, 51, 79, 0.1), 0 0 10px 0 rgba(51, 51, 79, 0.06);
            padding: 40px;
            box-sizing: border-box;
            text-align: left;
            opacity: 0;
            z-index: 100;
            transition-delay: 0.1s;
            display: none;
            visibility: hidden;
            position: fixed;
            right: 310px;
            margin-top: 35px;
            -webkit-transform: translate(0, 10px);
            -moz-transform: translate(0, 10px);
            -ms-transform: translate(0, 10px);
            -o-transform: translate(0, 10px);
            transform: translate(0, 10px);
            width: auto;
            max-width: 600px;
        }

        .popoverWrapper {
            position: relative;
        }

        .featureLinks {
            display: flex;
            flex-flow: row wrap;
        }

        .featurelinkswrapper: {
            padding: 0 30px 0 0;
        }

        .featureLinksIcon.featureIconAllFeatures {
            background: url(https://res.cloudinary.com/cegalvarez/image/upload/v1525735128/allFeatures_slgwdm.png);
            background-size: cover;
        }

        .featureLinksIcon {
            min-width: 55px;
            height: 55px;
        }

        .featureLinksDetails {
            padding: 0 0 0 15px;
        }

        .featureLinksWrapper {
            padding: 0 30px 0 0;
            -webkit-transition: all 0.25s ease-out;
            -moz-transition: all 0.25s ease-out;
            -ms-transition: all 0.25s ease-out;
            -o-transition: all 0.25s ease-out;
            transition: all 0.25s ease-out;
            display: flex;
            flex-basis: 50%;
            box-sizing: border-box;
            padding: 0 0 0 30px;
            align-items: center;
            margin: 0 0 40px;
        }

        .featureLinksDetails .featureLinksDescription {
            color: #78909c;
            -webkit-transition: all 0.25s ease-out;
            -moz-transition: all 0.25s ease-out;
            -ms-transition: all 0.25s ease-out;
            -o-transition: all 0.25s ease-out;
            transition: all 0.25s ease-out;
            text-transform: none;
        }

        .featureLinksDetails .featureLinksTitle {
            display: block;
            color: #455a64;
            margin: 0 0 5px;
            font-size: 15px;
            font-weight: 900;
            -webkit-transition: all 0.25s ease-out;
            -moz-transition: all 0.25s ease-out;
            -ms-transition: all 0.25s ease-out;
            -o-transition: all 0.25s ease-out;
            transition: all 0.25s ease-out;
            text-transform: none;
        }

        .featureLinksIcon.featureIconTracker {
            background: url(https://res.cloudinary.com/cegalvarez/image/upload/v1519940788/featuresIcons/bigger/timetracker.png);
            background-size: cover;
        }

        .featureLinksIcon.featureIconRoles {
            background: url(https://res.cloudinary.com/cegalvarez/image/upload/v1519940788/featuresIcons/bigger/roles.png);
            background-size: cover;
        }

        .featureLinksIcon.featureIconGantt {
            background: url(https://res.cloudinary.com/cegalvarez/image/upload/v1519940789/featuresIcons/bigger/gantt.png);
            background-size: cover;
        }

        .featureLinksIcon.featureIconTemplates {
            background: url(https://res.cloudinary.com/cegalvarez/image/upload/v1519940788/featuresIcons/bigger/templates.png);
            background-size: cover;
        }

        .featureLinksIcon.featureIconWall {
            background: url(https://res.cloudinary.com/cegalvarez/image/upload/v1525720013/featuresIcons/bigger/wall.png);
            background-size: cover;
        }
    </style>

    <style>
        .banner-mobile img {
            max-width: 397px;
            float: right;
        }

        #site-banner1 {
            height: 80vh;
            padding-top: 210px;
            background-size: cover;
            background-position: center center;
            position: relative;
            overflow: hidden;
            background-image: -o-linear-gradient(50deg, #3224af 0%, #c96dd8 100%);
            background-image: linear-gradient(-74deg, #76a82b -6%, #2ba840 171%);
        }
    </style>

    <style>
        .login-box {
            background-color: #fff;
            opacity: 0.9;
        }
        .login-box:hover {
            background-color: #fff;
            opacity: 1;
        }

        .btn-primary {
            background: #3224af;
            border-radius: 30px;
            -webkit-box-shadow: none;
            box-shadow: none;
            color: #fff;
            font-weight: 600;
            font-size: 14px;
            padding: 9px 28px;
            border: 1px solid transparent;
        }

        .card-body {
            padding: 2.1rem;
            background: #fff;
            margin-top: -115px;
            border-radius: 4px;
        }
    </style>

    <style>
        .form-horizontal .form-group {
            margin-right: -15px;
            margin-left: -15px;
            margin-bottom: 3px;
        }

        .form-horizontal label {
            margin-bottom: 0px;
            float: left;
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
            border: 1px solid rgba(0, 0, 0, 0.125);
            border-radius: 0.25rem;
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
        .home-version-2 {
            font-family: "Montserrat", sans-serif;
            color: #333;
            font-size: 15px;
            line-height: 26px;
            overflow-x: hidden;
        }

        #banner-two .banner-content p {
            font-size: 15px;
            color: #fff;
            font-weight: 500;
            margin-bottom: 0px;
        }

        #banner-two {
            height: 90vh;
            background-image: -o-linear-gradient(50deg, #698f31 0%, #698f31 100%);
            background-image: linear-gradient(40deg, #76a82b 0%, #76a82b 100%);
            overflow: hidden;
            padding-top: 120px;
            background: #fff;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            /*height: 100px;
  width: 100px;
  outline: black;
  background-size: 100%, 100%;
  border-radius: 50%;
  border: 1px solid black;
  background-image: none;*/
        }

        .carousel-control-next-icon:after {
            content: ">";
            font-family: "Poppins", Poppins, Sans-serif;
            font-size: 55px;
            color: black;
        }

        .carousel-control-prev-icon:after {
            content: "<";
            font-family: "Poppins", Poppins, Sans-serif;
            font-size: 55px;
            color: black;
        }

        .newboton {
            font-family: "Poppins", Poppins, Sans-serif;
            font-size: 18px;
            font-weight: 600;
            background-color: #22d976;
            box-shadow: 0px 4px 15px 0px rgba(74, 210, 96, 0.47);
            padding: 24px 40px 24px 40px;
            color: #fff;
            width: auto;
            width: 100%;
            /*margin-top:50px;
   margin-left:150px;*/
        }

        .newboton:hover {
            color: #fff;
        }

        .fa-check {
            color: #009bf3;
            font-size: 19px;
            padding-right: 8px;
        }

        .carousel-indicators li {
            background-color: #000;
        }

        .btn-green {
            background-color: #22d976;
            font-family: "Poppins", Poppins, Sans-serif;
            font-size: 18px;
            font-weight: 600;
            width: 100%;
        }

        .carousel-indicators li {
            width: 10px;
            height: 10px;
            border-radius: 100%;
        }
        .carousel-indicators {
            /* bottom: -50px;*/
        }

        @media (max-width: 991px) {

    .prosess-tabs-inner {
        margin-top: 140px;
        margin-bottom: 0px;
    }}

    /*@media (max-width:768px) {

    #banner-two {
        .banner-content {
            top: 80%;
            transform: translateY(-40%);
            position: absolute;
            left: 0;
            width: 100%;
            padding: 0 10px;
            margin-top: 0;
            z-index: 1111;
        }}}*/

        .widget-user .widget-user-image {
    position: absolute;
    top: 17px;
    left: 50%;
    margin-left: 52px;
    width:109%;
    }

    .widget-user .widget-user-header {
    padding-left:15px;
    height: 117px;
    border-top-right-radius: 9px;
    border-top-left-radius: 9px;
}
.day-wethear-item {
    float: left;
    padding: 25px 0 20px;
    border-right: 1px solid #ffffff;
    border-bottom: 1px solid #eee;
    text-align: center;
    width: 33.32%;
    line-height: 13px;
}

@media (max-width: 992px) {
.banner-content .title {
    font-size: 30px;
    line-height: 40px;
    margin-top: -98px;
}}

@media (max-width: 991px){
.prosess-tabs-inner {
    margin-top: -52px;
    margin-bottom: 0px;
    padding-top: 27px;
}}

@media (max-width: 576px){
.prosess-feature-image {
    height: 450px;
    margin-bottom: -70px;
}}

.gm-style .gm-style-iw-c {
    position: absolute;
    box-sizing: border-box;
    overflow: hidden;
    top: 181px;
    left: 0;
    transform: translate(-50%,-100%);
    background-color: white;
    border-radius: 8px;
    padding: 12px;
    box-shadow: 0 2px 7px 1px rgba(0,0,0,0.3);
}

.gm-style .gm-style-iw-t::after {
    background: linear-gradient(45deg,rgba(255,255,255,1) 50%,rgba(255,255,255,0) 51%,rgba(255,255,255,0) 100%);
    box-shadow: -2px 2px 2px 0 rgba(178,178,178,.4);
    content: "";
    height: 15px;
    left: 0;
    position: absolute;
    top: 128px;
    transform: translate(-50%,-50%) rotate(-224deg);
    width: 21px;
}

.prosess-feature-image {
    position: relative;
    /* height: 497px; */
}

.wave-bg .wave {
    position: absolute;
    left: 0;
    bottom: 0;
    height: 202px;
    z-index: 0;
}

.btn-primary {
    background-color: #fff;
    border-color: #fff;
}

.day-wethear-item {
    float: left;
    padding: 12px 0 15px;
    border-right: 1px solid #e6ecf5;
    text-align: center;
    /*width: 16.5%;*/
    height: 60px;
}



    </style>
</body>
