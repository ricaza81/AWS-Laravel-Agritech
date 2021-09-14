@extends('layouts.app')

@section('htmlheader_title')
  Home
@endsection


@section('main-content')


<div class="header-spacer--standard"></div>

    <div class="stunning-header-content">
        <h1 class="stunning-header-title">Resumen de la Compra</h1>
        <ul class="breadcrumbs">
            <li class="breadcrumbs-item">
                <a href="shop">Tienda</a>
                <span class="icon breadcrumbs-custom">/</span>
            </li>
            <li class="breadcrumbs-item active">
                <span>Carro de Compras</span>
            </li>
        </ul>
    </div>

    
</div>

<!-- End Stunning header -->


<section>
    <div class="container">
        <div class="row">
            <div class="col col-xl-10 m-auto col-lg-10 col-md-12 col-sm-12 col-12 cart-main">
            <!--    <form action="#" method="post" class="cart-main">-->

                    
                    <!-- Shop Table Cart -->
                    
                    <table class="shop_table cart">
                        <thead>
                        <tr>
                            <th class="product-thumbnail">PRODUCTO</th>
                            <th class="product-price">PRECIO UNITARIO</th>
                            <th class="product-quantity">CANTIDAD</th>
                            <th class="product-subtotal">TOTAL</th>
                          <!--  <th class="product-remove">ELIMINAR</th>-->
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="cart_item">
                    
                            <td class="product-thumbnail">
                    
                                <div class="cart-product__item">
                                    <a href="{{ $carro->producto->imgpdt }}" class="product-thumb js-zoom-image">
                                        <img src="{{ $carro->producto->imgpdt }}" alt="product" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image">
                                    </a>
                                    <div class="cart-product-content">
                                        <a href="#" class="product-category">{{ $carro->product_name }}</a>
                                        <a href="#" class="h6 cart-product-title">{{ $carro->product_name }}</a>
                                        <ul class="rait-stars">
                                            <li>
                                                <i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
                                            </li>
                    
                                            <li>
                                                <i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
                                            </li>
                                            <li>
                                                <i class="far fa-star star-icon" aria-hidden="true"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                    
                            <td class="product-price">
                                <h6 class="price amount">${{number_format($carro->price, 0, ',', '.')}}</h6>
                            </td>
                    
                            <td class="product-quantity">
                                <h6 class="product-quantity">{{ $carro->cantidad }}</h6>
                            </td>
                                  
                                </div>
   <?php

           

            $total=  $carro->cantidad*$carro->price;

       

        ?>                   
                           
                    
                            <td class="product-subtotal">
                                <h6 class="total amount">${{number_format($total, 0, ',', '.')}}</h6>
                            </td>
                    <!--
                            <td class="product-remove">
                                <a href="#" class="product-del remove" title="Remove this item">
                                    <svg class="olymp-close-icon"><use xlink:href="{{url('/css/olympus/app/svg-icons/sprites/icons.svg#olymp-close-icon')}}"></use></svg>
                                </a>
                            </td>-->
                        </tr>
                    </tbody>
                </table>
          <!--  </form>-->

      <form method="post" action="https://checkout.payulatam.com/ppp-web-gateway-payu" class="form-group">    

<input name="merchantId"    type="hidden"  value="501985"   >
  <input name="ApiKey"    type="hidden"  value="5donsg19veccjrqrpuhaqp571a"   >
  <input name="ApiLogin"    type="hidden"  value="56c65541d9c7b23"   >
  <input name="accountId"     type="hidden"  value="502805" >
  <input name="description"   type="hidden"  value="Pago DirectodeFinca <?=$empresa->nombreempresa?>"  >

  
   <input name="extra1" type="hidden"  value="<?=$empresa->id?> " >
   <input name="extra2" type="hidden"  value="<?=$usuario->id?> " >
  
  
     <?php
      $tax=  $carro->cantidad*$carro->price*0;
       $taxReturnBase=  $carro->cantidad*$carro->price*0;
        ?>    

  <input name="tax"           type="hidden"  value="<?=$tax?>"  >
  <input name="taxReturnBase" type="hidden"  value="<?=$taxReturnBase?>" >
  <input name="currency"      type="hidden"  value="COP" >
  
  <?php

            $amount=$carro->cantidad*$carro->price;
            $referenceCode='Pago DirectodeFinca ';

            $signature=  md5("5donsg19veccjrqrpuhaqp571a~501985~$referenceCode~$amount~COP");

       

        ?>
        
          <input name="amount"        type="hidden"  value="<?=$amount?>"  >
            <input name="referenceCode" type="hidden"  value="<?=$referenceCode?>" >
  <input name="signature"     type="hidden"  value="<?=$signature; ?>"  >


  <input name="buyerEmail"    type="hidden"  value="<?=$usuario->email?>" >
  <input name="responseUrl"    type="hidden"  value="https://www.directodefinca.com/public/respuestapago" >

  <div class="more text-right">
            <button type="submit" class="btn btn-purple btn-lg text-right">Confirmar Comprar</button>

</div>
</form>

<!--
<div class="row medium-padding100">
                    <div class="col col-xl-5 mr-auto col-lg-5 col-md-6 col-sm-12 col-12">

                        
                         Form Calculate Shiping -->
                        <!--
                        <form>
                            <div class="crumina-module crumina-heading with-title-decoration">
                                <h5 class="heading-title">Calculate Shipping</h5>
                            </div>
                            <div class="row">
                                <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group label-floating is-select">
                                        <label class="control-label">Select your Country</label>
                                        <div class="btn-group bootstrap-select form-control"><button type="button" class="btn dropdown-toggle btn-secondary" data-toggle="dropdown" role="button" title="United States" aria-expanded="false"><span class="filter-option pull-left">United States</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span><div class="ripple-container"></div></button><div class="dropdown-menu open" role="combobox" x-placement="bottom-start" style="max-height: 90px; overflow: hidden; min-height: 0px; position: absolute; transform: translate3d(0px, 58px, 0px); top: 0px; left: 0px; will-change: transform;"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false" style="max-height: 72px; overflow-y: auto; min-height: 0px;"><li data-original-index="0" class="selected"><a tabindex="0" class=" dropdown-item" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">United States</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class=" dropdown-item" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Argentina</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="selectpicker form-control" tabindex="-98">
                                            <option value="US">United States</option>
                                            <option value="AR">Argentina</option>
                                        </select></div>
                                    <span class="material-input"></span></div>
                                </div>
                                <div class="col col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                                    <div class="form-group label-floating is-select">
                                        <label class="control-label">Select Your State</label>
                                        <div class="btn-group bootstrap-select form-control"><button type="button" class="btn dropdown-toggle btn-secondary" data-toggle="dropdown" role="button" title="California"><span class="filter-option pull-left">California</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0" class="selected"><a tabindex="0" class=" dropdown-item" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">California</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class=" dropdown-item" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Arizona</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="selectpicker form-control" tabindex="-98">
                                            <option value="CA">California</option>
                                            <option value="AR">Arizona</option>
                                        </select></div>
                                    <span class="material-input"></span></div>
                                </div>
                                <div class="col col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                                    <div class="form-group is-empty">
                                        <input class="form-control" placeholder="Zip Code" type="text">
                                    <span class="material-input"></span></div>
                                </div>
                                <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <button class="btn btn-blue btn-lg full-width">Calculate Shipping</button>
                                </div>
                            </div>
                        </form>-->
                        
                        <!-- ... end Form Calculate Shiping
                    </div>

                    <div class="col col-xl-5 ml-auto col-lg-5 col-md-6 col-sm-12 col-12">
                        <div class="crumina-module crumina-heading with-title-decoration">
                            <h5 class="heading-title">Total de la Compra</h5>
                        </div>

                        
                        Order Totals List
                        
                        <ul class="order-totals-list">
                            <li>
                                Subtotal <span>$80</span>
                            </li>
                            <li>
                                Shipping &amp; Handling  <span>$20</span>
                            </li>
                            <li>
                                Coupon / Discount <span>-$5</span>
                            </li>
                            <li class="total">
                                Total <span>$95</span>
                            </li>
                        </ul>
                        
                        ... end Order Totals List

                        <a href="#" class="btn btn-purple btn-lg full-width">Pagar</a>
                    </div>
                </div>

        </div>-->



    </div>
</div>
</section>
         
@endsection

@section('extra-js')
    <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
    <script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
    <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
    <script src="{{ asset('js/algolia.js') }}"></script>
@endsection