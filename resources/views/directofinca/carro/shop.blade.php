@extends('directofinca.layouts.appdirecto')

@section('htmlheader_title')
  Home
@endsection


@section('main-content')

  <div class="stunning-header-content" style="
    background: #fff;
    top: 6px;
    height: 100%;
    padding-top: 77px;
    padding-bottom: 10px;">
        <h1 class="stunning-header-title">Plaza de mercado</h1>
        <h2 class="stunning-header-title">Inicialmente en Cali</h2>
         <!--  <a  href="proveedor" class="btn btn-primary btn-lg" style="font-size:15px; background:#FF5E3A; border-color:#FF5E3A; color:#fff">Eres un Agricultor que atiende el mercado de Cali? Haz Clíc Aquí
                                            <div class="ripple-container">
                                            </div>
                                        </a>-->
        <ul class="breadcrumbs">
            <!--<li class="breadcrumbs-item">
                 <span>Ir a:</span><a href="landing">Inicio</a>
                <span class="icon breadcrumbs-custom">/</span>
            </li>-->
            <li class="breadcrumbs-item active">
                <span>Carro de Compras</span>
            </li>
        </ul>
    </div>

<section class="pt120" style="background:#fff;padding-top:13px">
    <div class="container">
        <div class="row">
               @forelse ($products as $product)
            <div class="col col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">

                
                <!-- Product Item -->
     
            <div class="shop-product-item">
                    <div class="product-thumb">
                        <img src="<?=$product->imgpdt?>" alt="{{ $product->name }}">
                    </div>
                    <div class="product-content">
                        <div class="block-title">
                            <a href="#" class="product-category">{{ $product->name }}</a>
                            <a href="#" class="h5 title">{{ $product->name }}</a>
                        </div>
                        <div class="block-price">
                        
                            <div class="">${{ number_format($product->price, 0, ',', '.')}}</div>
                            
                             

                        </div>
                    </div>
             
           
                                        <form method="post" action="{{ url('/nuevo_carro') }}" class="">
                                              {{ csrf_field() }}
                                              <input type="hidden" name="product_id" value="{{ $product->id}}">
                                              <input type="hidden" name="product_name" value="{{ $product->name}}">
                                              <input type="hidden" name="product_price" value="{{ $product->price}}">
                                               <input type="hidden" name="product_cantmin" value="{{ $product->cantmin}}">
                                               
                                            <div class="more text-right">
                                              <div class="comments-shared">
                                                   <svg class="olymp-share-icon" data-toggle="tooltip" data-placement="right" data-original-title="Contacto Directo"><use xlink:href="http://localhost/directo/public/css/olympus/app/svg-icons/sprites/icons.svg#olymp-share-icon"></use></svg> <button type="submit" class="btn btn-md-2 btn-primary" style="font-size:15px;background:#76A82B">Comprar<div class="ripple-container"></div></button>
                                             </div>
                                            </div>
                                        </form>
            

 
            </div>

           </div>                @empty
                    <div style="text-align: left">No items found</div>
                @endforelse
        </div>
    </div>




</section>


@endsection

@section('extra-js')
    <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
    <script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
    <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
    <script src="{{ asset('js/algolia.js') }}"></script>
    <style>
    .landing-page .content-bg-wrap:before {
    content: '';
    display: block;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background-color: rgba(118,168,43,.95);
    opacity: 1;
    z-index: auto;
}

.btn-md-2 {
    padding: .8rem 2.1rem;
    font-size: 0.98rem;
}

.btn-primary {
    color: #fff;
    background-color: #76A82B;
    border-color: #76A82B;
}

.btn-lg:hover {
    color: #fff;
    background-color: #76A82B;
    border-color: #76A82B;
}

.header--standard.header--standard-full-width, .header--standard.header--standard-landing {
    width: 100%;
    left: 0;
    top: 0;
    background-color: #4167b2;
        position: relative;
}

.header--standard {
    background-color: #fff;
    width: 100%;
    position: relative;
    left: 0px;
   padding: 0;
    box-shadow: 0 0 34px 0 rgba(63,66,87,.1);
    z-index: 19;
    margin-bottom: -5px;
    height:100%;
    padding-bottom:20px;

}

.header-spacer--standard {
    height: 140px;
        position: relative;
}

.page-description {
    border: 0px solid #e6ecf5;
    background-color: #fff;
  /*  margin-bottom: 25px;*/
    border-radius: 5px;
    overflow: hidden;
  
}

.page-description .icon {
    padding: 15px 18px;
    fill: #fff;
    background-color: #4167b2;
    border-right: 1px solid #e6ecf5;
    display: inline-block;
    vertical-align: middle;
    margin-right: 25px;
}

.logo .logo-title {
    text-transform: none;
    margin: 0;
    color: inherit;
    transition: all .3s ease;
    font-weight: 600;
}

body {
    margin: 0;
    font-family: Roboto;
    font-size: 1.1812rem;
    font-weight: 350;
    line-height: 1.1;
    color: #888da8;
    background-color: #edf2f6;
}

.form-control {
    display: block;
    width: 100%;
    padding: 1.1rem;
    font-size: .812rem;
    line-height: 1.5;
    color: #fff;
    background-color: #fff;
    border: 1px solid #e6ecf5;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}

label.control-label {
    color: #000;
}

.btn-secondary {
    color: #fff;
    background-color: #76A82B;
    border-color: #76A82B;
    margin-left: 15px;
}

.main-header {
   padding: 110px 0 0px;
    max-width: calc(100%);
    margin: 0 auto 30px;
    position: relative;
    background-position: 50% 50%;
}

.header {
    height: 81px;
    background-color: #4167b2;
    padding-right: 0px;
    position: relative;
    top: 103px;
    left: 0;
    right: 0;
    z-index: 3;
    padding-top: 42px;
        position: absolute;
    width: 65%;
    margin-left: 93px;
}

.header--standard-landing.headroom--not-top .logo, .header--standard-landing.headroom--not-top .logo .logo-title {
    color: #fff;
}

.header--standard-wrap {
    /* display: -webkit-box; */
    display: -ms-flexbox;
    /* display: flex; */
    /* -webkit-box-align: center; */
    -ms-flex-align: center;
    align-items: center;
    /* position: absolute; */
   /* width: 65%;*/
    margin-left: 93px;
}

input, p, select {
    font-size: 1.775rem;
    line-height: 26px;
    color: #000;
}

.post__author {
    margin-bottom: 20px;
    font-size: 15px;
}

.landing-content>:first-child {
    font-weight: 300;
    padding-top: 22px;
    line-height: 29px;
}

.landing-content {
    color: #fff;
    margin-bottom: 30px;
    margin-top: 48px;
}

.cat-list-bg-style {
    margin-top: 50px;
    height: 107px;
    padding: 0;
    list-style: none;
}


.logo .logo-title {
    text-transform: none;
    margin-left: 0px;
    color: inherit;
    transition: all .3s ease;
    font-weight: 600; }

.logo .img-wrap {
    position: relative;
    padding-left: 0px;
    padding-right:12px;
}

.teammembers-thumb img {
    transition: all 1s ease-out;
     -webkit-filter: grayscale(0%); 
     filter: grayscale(0%); 
    display: block;
    margin: 0 auto;
}



.teammembers-thumb img {
    width: 100%;
    object-fit: cover;
    height: 297px;
}

.post-video {
    /* border: 1px solid #e6ecf5; */
    /* border-radius: 3px; */
    /* overflow: hidden; */
    margin-left: -26px;
    margin-right: -26px;
        margin-bottom: -76px;
    margin-top: -17px;
     border: 0px solid #e6ecf5;
}

.post-additional-info {
    padding: 86px 0 0;
    border-top: 1px solid #e6ecf5;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;

}

.ui-block {

    border: 0px solid #e6ecf5;
}

.shop-product-item .product-thumb {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    background-color: #f2f4f8;
    margin-bottom: 10px;
    margin-right: 0;
    height: 256px;
    width: auto;
    position: relative;
}
</style>
@endsection
