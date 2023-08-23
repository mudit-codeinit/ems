<!doctype html>
<html lang="en">
   <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Google Tag Manager -->
    <script>!function(e,t,a,n,g){e[n]=e[n]||[],e[n].push({"gtm.start":(new Date).getTime(),event:"gtm.js"});var m=t.getElementsByTagName(a)[0],r=t.createElement(a);r.async=!0,r.src="https://www.googletagmanager.com/gtm.js?id=GTM-KWHZJRK",m.parentNode.insertBefore(r,m)}(window,document,"script","dataLayer");</script>
    
    <!-- End Google Tag Manager -->
   <meta name="google-site-verification" content="Y8pTOL08agFF2nBE0BknLdxNgZem6SVPZVafFiXRY4Q" />
    <!-- Required meta tags -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<meta name="csrf-token" content="">
	@if( isset($meta_description) && isset($meta_title) )
		<meta name="title" content="{{ $meta_title }}"/>
	    <meta name="description" content="{{ $meta_description }}"/>
	@else
	<meta name="title" content="Sell Any Car | Sell My Car in Dubai, UAE - Expat Car Buyers"/>
	<meta name="description" content="Expat Car Buyers is the trusted and reliable auto trader in Dubai. You can sell any car in Dubai, UAE with no-obligation & free valuation with instant cash offer."/>
	<meta name="keywords" content=""/>
	@endif
	  <link rel="shortcut icon" href="{{ asset('front/images/carfav.png') }}" />
      <!-- Bootstrap CSS -->
      <link defer href="{{ asset('front/css/bootstrap.css') }}" rel="stylesheet" media="all">
      <link defer href="{{ asset('front/css/style.css') }}" rel="stylesheet" media="all">   
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
      <?php if(Request::segment(1)) {  ?>
           
           
     <?php  }
       else
       { ?>
	  
      <?php } ?>
      <?php
        if(Request::get('page') == '' || Request::get('page') == 1){
            ?>
                <link rel="next" href="https://expatcarbuyers.com/blog?page=2">
            <?php
        }else if(Request::get('page') == $blog->lastPage() ){
            ?>
                <link rel="prev" href="https://expatcarbuyers.com/blog?page={{Request::get('page')-1}}">
                
            <?php
        }
        else if(Request::get('page')){
            ?>
                <link rel="next" href="https://expatcarbuyers.com/blog?page={{Request::get('page')+1}}">
                <link rel="prev" href="https://expatcarbuyers.com/blog?page={{Request::get('page')-1}}">
            <?php
        }
      ?>
      <title>	@if( isset($meta_title) ){{$meta_title}} @else Sell Any Car | Sell My Car Dubai, UAE - Expat Car Buyers @endif</title>
      <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-124061654-1"></script>
        <script>function gtag(){dataLayer.push(arguments)}window.dataLayer=window.dataLayer||[],gtag("js",new Date),gtag("config","UA-124061654-1");</script>
        
    <!-- schema start --->
    
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BlogPosting",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "<?php  echo URL::current(); ?>"
  },
  "headline": "{{ $meta_title }}",
  "description": "{{ $meta_description }}",
  "author": {
    "@type": "Organization",
    "name": "ExpatCarBuyers"
  }
  }
}
</script>

<style>@media only screen and (max-width:425px){a.float.d-md-none{display:none}div#_hj-f5b2a1eb-9b07_feedback{display:none}div#wh-widget-send-button-wrapper-list{display:none}.wh-widget-button-icon.wh-messenger-bg-whatsapp{display:none!important}}.header-section {padding: 0.5rem 1rem;}</style>
<style>
.custom-nav-button {
    display: none;
}

#custom-navbar a {
    color: #fff !important;
}

#custom-navbar i {
    margin-left: 5px;
    margin-right: 5px;
    font-size: 17px;
}

#custom-navbar .sub-menu {
    z-index: 1000;
    top: 98%;
    min-width: 10rem;
    padding: 0.5rem 0;
    margin: 0.125rem 0 0;
    font-size: 1rem;
    list-style: none;
    background-clip: padding-box;
    border: 1px solid rgba(0, 0, 0, 0.15);
    border-radius: 0.25rem;
    background: #fff;
}

#custom-navbar .sub-menu a {
    color: #000 !important;
}

#custom-navbar .sub-menu a:hover {
    color: #f24026 !important;
    background: transparent !important;
}

#custom-navbar .dropdown-item:active {
    background: transparent;
}

@media only screen and (max-width : 991.5px) and (min-width: 375px) {
    .custom-nav-button {
        margin: 5px;
    }
}

@media only screen and (max-width : 991.5px) {
    #custom-navbar .navbar-collapse {
        background-color: #f24026;
        border-color: #f24026;
    }

    .custom-nav-button {
        display: block !important;
        color: rgba(0,0,0,.5);
        border-color: rgba(0,0,0,.1);
        background: transparent !important;
        float: right;
    }

    .custom-nav-button .navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
    }

    #custom-navbar .nav-item {
        margin-left: 20px;
        margin-right: 20px;
    }

    #custom-navbar .nav-item .open-sub-menu i {
        float: right;
    }
}

@media (min-width: 992px) {
    #custom-navbar {
        background-color: #f24026;
        border-color: #f24026;
    }

    #custom-navbar .nav-item {
        margin-left: auto;
        margin-right: auto;
    }

    #custom-navbar .sub-menu {
        position: absolute;
    }
}
</style>
@if(Request::segment(1) == 'blog' && !empty(Request::segment(2)))
    <style>.single-content-row a{color:#f24026}</style>
@endif
    <!-- end schema -->
	</head>
	<body>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KWHZJRK"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div id="fb-root"></div>
<script async defer src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.2"></script>
      <div id="app">
      <div class="header-main bg-white d-block position-relative" {{ $current_url = Route::getCurrentRoute()->uri() }}>
         <div class="header">
            <div class="row d-lg-none py-2 mr-0">
                <div class="col-sm-12 col-xs-12 pr-0">
                    <ul class="nav navbar float-left pr-0">
                        <li class="pr-2 pt-2 pb-2 pl-0"><a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/ExpatCarBuyers/"><span class="icon-social-facebook theme-color"></span></a></li>
                        <li class="pr-2 pt-2 pb-2 pl-0"><a target="_blank" rel="noopener noreferrer" href="https://twitter.com/expatcarbuyers"><span class="icon-social-twitter theme-color"></span></a></li>
                        <li class="pr-2 pt-2 pb-2 pl-0"><a target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/expatcarbuyers/"><span class="icon-social-instagram theme-color"></span></a></li>
                        <li class="pr-2 pt-2 pb-2 pl-0"><a target="_blank" rel="noopener noreferrer" href="#"><span class="icon-social-linkedin theme-color"></span></a></li>
                        <li class="pl-0 pt-2 pb-2 pr-0"><a target="_blank" rel="noopener noreferrer" href="#"><span class="icon-social-youtube theme-color"></span></a></li>
                    </ul>
                     <ul class="nav navbar float-right pl-0">
                        <li class="float-left pl-2 pr-2 mt-2 mb-2 border-right"><a href="tel:+971561774555"><span class="icon-phone theme-color"></span></a></li>
                        <li class="float-left pl-2 pr-2 mt-2 mb-2 border-right"><a target="_blank" rel="noopener noreferrer" href="https://wa.me/+971561774555">
                        <img src="{{ asset('images/whatsapp-logo.webp') }}" alt="whatsapp-logo" width="14" onerror="this.onerror=null; this.src='{{ asset('images/whatsapp-logo.png') }}'"/>
                        </a></li>
                        <li class="float-left pl-2 pr-0 mt-2 mb-2"><a href="https://goo.gl/maps/ytU29m5AggL8sgJ98" target="_blank"><span class="icon-location-pin theme-color"></span></a></li>
                    </ul>
                </div>
				<!--<button class="btn btn-danger"><a href="tel:+97143337876" class="header-phone">-->
				    <!--<img src="{{ asset('front/images/phone.webp') }}" alt="phone" class="mr-2" onerror="this.onerror=null; this.src='{{ asset('front/images/phone.png') }}'">-->
				    <!--<img src="{{ asset('front/images/phone.png') }}" alt="phone" class="mr-2" /> +971 4 333 7876</a></button>   -->
			</div>
            <div class="header-section">
                <div class="container">
                   <div class="row">
                      <div class="col-lg-3 col-9">
                         <a href="/" class="d-inline-block logo"><img src="{{ asset('front/images/logo.webp') }}" alt="" class="img-fluid logocompany" onerror="this.onerror=null; this.src='{{ asset('front/images/logo.png') }}'"></a>
                      </div>
                      <div class="col-lg-9 col-3 text-right">
                            <button class="btn btn-danger ml-3 px-3 py-2 btn-phone d-none d-lg-inline-block"><a href="tel:+971561774555" class="header-phone"><img src="{{ asset('front/images/phone.png') }}" alt="" class="mr-2" />+971 56 1774555</a></button>
                            <button class="custom-nav-button navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                      </div>
                   </div>
                </div>
            </div>
            <nav id="custom-navbar" class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav w-100">
                            <li class="nav-item">
                                <a class="nav-link open-sub-menu" href="#" data-id="sell-car">SELL CAR<i class="fa fa-angle-down"></i></a>
                                <div id="sell-car" class="sub-menu" style="display:none;">
                                    <a class="dropdown-item" href="{{ url('/sell-cars') }}">Sell Cars</a>
                                    <a class="dropdown-item" href="{{ url('/we-buy-any-car') }}">We Buy Any Car</a>
                                    <a class="dropdown-item" href="{{ url('/we-cash-any-car') }}">We Cash Any Car</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link open-sub-menu" href="#" data-id="by-city">BY CITY<i class="fa fa-angle-down"></i></a>
                                <div id="by-city" class="sub-menu" style="display:none;">
                                    <a class="dropdown-item" href="{{ url('/sell-cars/dubai') }}">Sell Cars In Dubai</a>
                                    <a class="dropdown-item" href="{{ url('/sell-cars/abu-dhabi') }}">Sell Cars In Abu-Dubai</a>
                                    <a class="dropdown-item" href="{{ url('/sell-cars/sharjah') }}">Sell Cars In Sharjah</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link open-sub-menu" href="#" data-id="by-model">BY MODEL<i class="fa fa-angle-down"></i></a>
                                <div id="by-model" class="sub-menu" style="display:none;">
                                    <a class="dropdown-item" href="{{ url('/sell-cars/audi') }}">Sell Audi</a>
                                    <a class="dropdown-item" href="{{ url('/sell-cars/bmw') }}">Sell BMW</a>
                                    <a class="dropdown-item" href="{{ url('/sell-cars/chevrolet') }}">Sell Chevrolet</a>
                                    <a class="dropdown-item" href="{{ url('/sell-cars/ford') }}">Sell Ford</a>
                                    <a class="dropdown-item" href="{{ url('/sell-cars/honda') }}">Sell Honda</a>
                                    <a class="dropdown-item" href="{{ url('/sell-cars/lexus') }}">Sell Lexus</a>
                                    <a class="dropdown-item" href="{{ url('/sell-cars/jeep') }}">Sell Jeep</a>
                                    <a class="dropdown-item" href="{{ url('/sell-cars/nissan') }}">Sell Nissan</a>
                                    <a class="dropdown-item" href="{{ url('/sell-cars/porsche') }}">Sell Porsche</a>
                                    <a class="dropdown-item" href="{{ url('/sell-cars/mitsubishi') }}">Sell Mitsubishi</a>
                                    <a class="dropdown-item" href="{{ url('/sell-cars/toyota') }}">Sell Toyota</a>
                                    <a class="dropdown-item" href="{{ url('/sell-cars/volkswagen') }}">Sell Volkswagen</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/sell-cars/evaluate-your-car') }}">EVALUATE YOUR CAR</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/about') }}">ABOUT US</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/blog') }}">BLOGS</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
         </div>
      </div>
		@yield('content')
      <section class="footer pt-5">
         <div class="container py-3 px-0 px-md-3">
         <div class="row d-none d-md-flex">
            <div class="col-lg-6 col-md-12 mb-lg-0 mb-3">
               <div class="footer-abt">
                  <h6 class="font-weight-bold mb-3">About Us</h6>
                  <p>Many people would just call us a car buying company, but that’s just half of the story. Expat Car Buyers was
                     formed to make it easier for car sellers to sell used cars...
                     without traditional setbacks.
                  </p>
               </div>
               <div class="footer-social-global">
                   <ul>
					    <li><a href="https://www.facebook.com/ExpatCarBuyers/" target="_blank"><img src="{{ asset('images/facebook.svg') }}"></a></li>
						<li><a href="https://twitter.com/expatcarbuyers" target="_blank"><img src="{{ asset('images/twitter.svg') }}"></a></li>
						<li><a href="https://www.instagram.com/expatcarbuyers/" target="_blank"><img src="{{ asset('images/instagram.svg') }}"></a></li>
					</ul>
               </div>
            </div>
            <!--<div class="col-lg-2 col-sm-6 mb-lg-0 mb-3">-->
            <!--   <div class="our-service">-->
            <!--      <h6 class="font-weight-bold mb-3">Userful Links</h6>-->
            <!--      <ul class="list-unstyled">-->
            <!--         <li class="mb-2"><a href="{{ url('sell-any-car') }}">-->
            <!--            <img class="mr-2" src="{{ asset('front/images/Arrow.svg') }}"/>-->
            <!--            Sell Any Car</a>-->
            <!--         </li>-->
            <!--         <li class="mb-2"><a href="{{ url('we-buy-any-car') }}">-->
            <!--            <img class="mr-2" src="{{ asset('front/images/Arrow.svg') }}"/>-->
            <!--            We Buy Any Car</a>-->
            <!--         </li>-->
            <!--         <li class="mb-2"><a href="{{ url('we-cash-any-car') }}">-->
            <!--            <img class="mr-2" src="{{ asset('front/images/Arrow.svg') }}"/>-->
            <!--            We Cash Any Car</a>-->
            <!--         </li>-->
            <!--      </ul>-->
            <!--   </div>-->
            <!--</div>-->
            <!--<div class="col-lg-2 col-sm-6 mb-lg-0 mb-3">-->
            <!--   <div class="follow">-->
            <!--      <h6 class="font-weight-bold mb-3" style="opacity:0;">Userful Links</h6>-->
            <!--      <ul class="list-unstyled">-->
            <!--         <li class="mb-2">-->
            <!--            <img class="mr-2" src="{{ asset('front/images/Arrow.svg') }}"/><a href="{{ url('sell-my-car-dubai') }}"> Sell My Car Dubai</a>-->
            <!--         </li>-->
            <!--         <li class="mb-2">-->
            <!--            <img class="mr-2" src="{{ asset('front/images/Arrow.svg') }}"/><a href="{{ url('sell-my-car-sharjah') }}"> Sell Any Car Sharjah</a>-->
            <!--         </li>-->
            <!--         <li class="mb-2"><img class="mr-2" src="{{ asset('front/images/Arrow.svg') }}"/><a href="{{ url('sell-my-car-abudhabi') }}"> Sell Any Car Abu Dhabi</a></li>-->
            <!--      </ul>-->
            <!--   </div>-->
            <!--</div>-->
            <div class="col-lg-6 col-md-12 mb-lg-0 mb-3">
               <div class="footer-abt">
                  <h6 class="font-weight-bold mb-3">Keep in touch</h6>
                  <ul class="list-unstyled">
                     <li class="mb-2 d-flex">
                        <span>
                        <img class="mr-2" src="{{ asset('front/images/map-marker-outline.svg') }}"/></span>
                        <span>Near FAB Metrostation, <br>Al Asmawi Building, Sheikh Zayed Road,<br> office No. G17 - Dubai - United Arab Emirates
                         
                        </span>
                     </li>
                     <li class="mb-2  d-flex">
                        <span><img class="mr-2" src="{{ asset('front/images/phone.svg') }}"/></span>
                        <span><a href="tel:+971561774555" class="header-phone">+971 56 1774555</a></span>
                     </li>
                     <li class="mb-2  d-flex">
                        <span><img class="mr-2" src="{{ asset('front/images/email-outline.svg') }}"/></span>
                        <span><a href="mailto:contact@expatcarbuyers.com">contact@expatcarbuyers.com</a></span>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <section class="d-block d-md-none">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
            <div id="accordion">
               <!--<div class="card border-0 p-0">-->
               <!--   <div class="card-header p-0" id="headingOne">-->
               <!--      <h5 class="mb-0">-->
               <!--         <button class="btn collapsed w-100 text-left py-2 text-body text-uppercase position-relative" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">-->
               <!--         Brands-->
               <!--         <span class="plus"></span>-->
               <!--         </button>-->
               <!--      </h5>-->
               <!--   </div>-->
               <!--   <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">-->
               <!--      <div class="card-body">-->
               <!--         <div class="row">-->
               <!--            <div class="col-lg-2  col-6 col-sm-4 mb-3 mb-lg-0">-->
               <!--               <ul class="list-unstyled brand-list">-->
               <!--                  <li><a href="{{ url('sell-my-car/acura') }}">Sell My Acura</a></li>-->
               <!--                  <li><a href="{{ url('sell-my-car/bugatti') }}">Sell My Bugatti</a></li>-->
               <!--                  <li><a href="{{ url('sell-my-car/ferrari') }}">Sell My Ferrari</a></li>-->
               <!--                  <li><a href="{{ url('sell-my-car/infiniti') }}">Sell My Infiniti</a></li>-->
               <!--                  <li><a href="{{ url('sell-my-car/land-rover') }}">Sell My Land Rover</a></li>-->
               <!--                  <li><a href="{{ url('sell-my-car/mazda') }}">Sell My Mazda</a></li>-->
               <!--                  <li><a href="{{ url('sell-my-car/opel') }}">Sell My Opel</a></li>-->
               <!--                  <li><a href="{{ url('sell-my-car/subaru') }}">Sell My Subaru</a></li>-->
               <!--               </ul>-->
               <!--            </div>-->
               <!--            <div class="col-lg-2 col-6  col-sm-4 mb-3 mb-lg-0">-->
               <!--               <ul class="list-unstyled brand-list">-->
               <!--                  <li><a href="{{ url('sell-my-car/alfa-romeo') }}">Sell My Alfa Romeo</a></li>-->
               <!--                  <li><a href="#" class="non-click">Sell My Buick</a></li>-->
               <!--                  <li><a href="{{ url('sell-my-car/fiat') }}">Sell My Fiat</a></li>-->
               <!--                  <li><a href="{{ url('sell-my-car/jaguar') }}">Sell My Jaguar</a></li>-->
               <!--                  <li><a href="{{ url('sell-my-car/lexus') }}">Sell My Lexus</a></li>-->
               <!--                  <li><a href="{{ url('sell-my-car/mclaren') }}">Sell My McLaren</a></li>-->
               <!--                  <li><a href="{{ url('sell-my-car/peugeot') }}">Sell My Peugeot</a></li>-->
               <!--                  <li><a href="{{ url('sell-my-car/suzuki') }}">Sell My Suzuki</a></li>-->
               <!--               </ul>-->
               <!--            </div>-->
               <!--            <div class="col-lg-2 col-6 col-sm-4 mb-3 mb-lg-0">-->
               <!--               <ul class="list-unstyled brand-list">-->
               <!--                  <li><a href="{{ url('sell-my-car/aston-martin') }}">Sell My Aston Martin</a></li>-->
               <!--                  <li><a href="{{ url('sell-my-car/Cadillac') }}">Sell My Cadillac</a></li>-->
               <!--                  <li><a href="{{ url('sell-my-car/ford') }}">Sell My Ford</a></li>-->
               <!--                  <li><a href="{{ url('sell-my-car/jeep') }}">Sell My Jeep</a></li>-->
               <!--                  <li><a href="{{ url('sell-my-car/lincoln') }}">Sell My Lincoln</a></li>-->
               <!--                  <li><a href="{{ url('sell-my-car/mercedes-benz') }}">Sell My Mercedes-Benz</a></li>-->
               <!--                  <li><a href="{{ url('sell-my-car/pontiac') }}">Sell My Pontiac</a></li>-->
               <!--                  <li><a href="{{ url('sell-my-car/tesla') }}">Sell My Tesla</a></li>-->
               <!--               </ul>-->
               <!--            </div>-->
               <!--            <div class="col-lg-2  col-6 col-sm-4 mb-3 mb-lg-0">-->
               <!--               <ul class="list-unstyled brand-list">-->
               <!--                  <li><a href="{{ url('sell-my-car/audi') }}">Sell My Audi</a></li>-->
               <!--                  <li><a href="{{ url('sell-my-car/chevrolet') }}">Sell My Chevrolet</a></li>-->
               <!--                  <li><a href="{{ url('sell-my-car/gmc') }}">Sell My GMC</a></li>-->
               <!--                 <li><a href="{{ url('sell-my-car/kia') }}">Sell My Kia</a></li>-->
               <!--                  <li><a href="{{ url('sell-my-car/lotus') }}">Sell My Lotus</a></li>-->
               <!--                  <li><a href="{{ url('sell-my-car/mini') }}">Sell My Mini</a></li>-->
               <!--                  <li><a href="{{ url('sell-my-car/porsche') }}">Sell My Porsche</a></li>-->
               <!--                  <li><a href="{{ url('sell-my-car/toyota') }}">Sell My Toyota</a></li>-->
               <!--               </ul>-->
               <!--            </div>-->
               <!--            <div class="col-lg-2  col-6 col-sm-4 mb-3 mb-lg-0">-->
               <!--               <ul class="list-unstyled brand-list">-->
               <!--                  <li><a href="{{ url('sell-my-car/bentley') }}">Sell My Bentley</a></li>-->
               <!--                  <li><a href="{{ url('sell-my-car/chrysler') }}">Sell My Chrysler</a></li>-->
               <!--                  <li><a href="{{ url('sell-my-car/honda') }}">Sell My Honda</a></li>-->
               <!--                  <li><a href="#" class="non-click">Sell My Koenigsegg</a></li>-->
               <!--                  <li><a href="{{ url('sell-my-car/maserati') }}">Sell My Maserati</a></li>-->
               <!--                  <li><a href="{{ url('sell-my-car/mitsubishi') }}">Sell My Mitsubishi</a></li>-->
               <!--                  <li><a href="{{ url('sell-my-car/renault') }}">Sell My Renault</a></li>-->
               <!--                  <li><a href="{{ url('sell-my-car/volkswagen') }}">Sell My Volkswagen</a></li>-->
               <!--               </ul>-->
               <!--            </div>-->
               <!--            <div class="col-lg-2  col-6 col-sm-4  mb-3 mb-lg-0">-->
               <!--               <ul class="list-unstyled brand-list">-->
               <!--                  <li><a href="{{ url('sell-my-car/bmw') }}">Sell My BMW</a></li>-->
               <!--                  <li><a href="{{ url('sell-my-car/dodge') }}">Sell My Dodge</a></li>-->
               <!--                  <li><a href="{{ url('sell-my-car/hyundai') }}">Sell My Hyundai</a></li>-->
               <!--                  <li><a href="{{ url('sell-my-car/lamborghini') }}">Sell My Lamborghini</a></li>-->
               <!--                  <li><a href="{{ url('sell-my-car/maybach') }}">Sell My Maybach</a></li>-->
               <!--                  <li><a href="{{ url('sell-my-car/nissan') }}">Sell My Nissan</a></li>-->
               <!--                  <li><a href="{{ url('sell-my-car/rolls-royce') }}">Sell My Rolls Royce</a></li>-->
               <!--                  <li><a href="{{ url('sell-my-car/volvo') }}">Sell My Volvo</a></li>-->
               <!--               </ul>-->
               <!--            </div>-->
               <!--         </div>-->
               <!--      </div>-->
               <!--   </div>-->
               <!--</div>-->
               <div class="card border-0 p-0">
                  <div class="card-header p-0" id="headingTwo">
                     <h5 class="mb-0">
                        <button class="btn collapsed w-100 text-left py-2 text-body text-uppercase position-relative" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        About Us
                        <span class="plus"></span>
                        </button>
                     </h5>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                     <div class="card-body">
                        <div class="footer-abt">
                           <p>Many people would just call us a car buying company, but that’s just half of the story. Expat Car Buyers was
                              formed to make it easier for car sellers to sell used cars...
                              without traditional setbacks.
                           </p>
                        </div>
                        <div class="footer-social-global">
                            <ul>
        					    <li><a href="https://www.facebook.com/ExpatCarBuyers/" target="_blank"><img src="{{ asset('images/facebook.svg') }}"></a></li>
        						<li><a href="https://twitter.com/expatcarbuyers" target="_blank"><img src="{{ asset('images/twitter.svg') }}"></a></li>
        						<li><a href="https://www.instagram.com/expatcarbuyers/" target="_blank"><img src="{{ asset('images/instagram.svg') }}"></a></li>
        					  </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <!--<div class="card border-0 p-0">-->
               <!--   <div class="card-header p-0" id="headingThree">-->
               <!--      <h5 class="mb-0">-->
               <!--         <button class="btn collapsed w-100 text-left py-2 text-body text-uppercase position-relative" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">-->
               <!--         Userful Links-->
               <!--         <span class="plus"></span>-->
               <!--         </button>-->
               <!--      </h5>-->
               <!--   </div>-->
               <!--   <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">-->
               <!--      <div class="card-body">-->
               <!--         <ul class="list-unstyled">-->
               <!--           <li class="mb-2"><a href="{{ url('sell-any-car') }}">-->
               <!--             <img class="mr-2" src="{{ asset('front/images/Arrow.svg') }}"/>-->
               <!--             Sell Any Car</a>-->
               <!--          </li>-->
               <!--          <li class="mb-2"><a href="{{ url('we-buy-any-car') }}">-->
               <!--             <img class="mr-2" src="{{ asset('front/images/Arrow.svg') }}"/>-->
               <!--             We Buy Any Car</a>-->
               <!--          </li>-->
               <!--          <li class="mb-2"><a href="{{ url('we-cash-any-car') }}">-->
               <!--             <img class="mr-2" src="{{ asset('front/images/Arrow.svg') }}"/>-->
               <!--             We Cash Any Car</a>-->
               <!--          </li>-->
               <!--          <li class="mb-2">-->
               <!--         <img class="mr-2" src="{{ asset('front/images/Arrow.svg') }}"/><a href="{{ url('sell-my-car-dubai') }}"> Sell My Car Dubai</a>-->
               <!--      </li>-->
               <!--      <li class="mb-2">-->
               <!--         <img class="mr-2" src="{{ asset('front/images/Arrow.svg') }}"/><a href="{{ url('sell-my-car-sharjah') }}"> Sell Car Dubai Sharjah</a>-->
               <!--      </li>-->
               <!--      <li class="mb-2"><img class="mr-2" src="{{ asset('front/images/Arrow.svg') }}"/><a href="{{ url('sell-my-car-abudhabi') }}"> Sell car Abu Dhabi</a></li>-->
               <!--         </ul>-->
               <!--      </div>-->
               <!--   </div>-->
               <!--</div>-->
               <div class="card border-0 p-0">
                  <div class="card-header p-0" id="headingThree">
                     <h5 class="mb-0">
                        <button class="btn collapsed w-100 text-left py-2 text-body text-uppercase position-relative" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                        Keep in touch
                        <span class="plus"></span>
                        </button>
                     </h5>
                  </div>
                  <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                     <div class="card-body">
                        <ul class="list-unstyled">
                           <li class="mb-2 d-flex">
                              <span>
                              <img class="mr-2" src="{{ asset('front/images/map-marker-outline.svg') }}"></span>
                               <span>Expatcarbuyers - Office No. 17, Sheikh <br> Zayed Road, Umm Al Sheif, Dubai, <br>United Arab Emirates</span>
                           </li>
                           <li class="mb-2  d-flex">
                              <span><img class="mr-2" src="{{ asset('front/images/phone.svg') }}"></span>
                              <span><a href="tel:+0561774555">+056 1774555</a></span>
                           </li>
                           <li class="mb-2  d-flex">
                              <span><img class="mr-2" src="{{ asset('front/images/email-outline.svg') }}"></span>
                              <span><a href="mailto:contact@expatcarbuyers.com">contact@expatcarbuyers.com</a></span>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
         </section>
         <hr>
         <div class="row py-3 m-0 footer-bottom">
            <div class="col-md-6 text-center text-md-left mb-2 mb-md-0">
               © Copyright {{ date('Y') }} expatcarbuyers
            </div>
            <div class="col-md-6 text-center text-md-right">
              <a href="{{ url('about') }}">About </a>|
               <a href="{{ url('blog') }}">News </a>|
               <a href="{{ url('faqs') }}">FAQS </a>|
               <a href="{{ url('privacy-policy') }}">Privacy Policy </a>|<a href="{{ url('terms-conditions') }}"> Terms & Conditions</a> | <a href="{{ url('contact') }}">Contact Us</a>
            </div>
         </div>
      </section>
      <a href="#" class="go-to-top font-mons" id="go-to-top" style="">
   <img src="{{ asset('front/images/arrow.png') }}" alt="" width="18px">
   Go to Top
</a>
</div>

<script> var baseUrl = "{{ url('/') }}"; </script>
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js"></script>
<script async>
 WebFont.load({
    google: {
      families: ['Montserrat:300,400,500,600,700', 'Open+Sans:300,400,600,700']
    }
  });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script async src="{{ asset('front/js/bootstrap.min.js') }}"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script defer src="{{ asset('front/js/wow.js') }}"></script>
<script defer src="{{ mix('js/app.js') }}"></script>
<script defer src="{{ asset('front/js/animate.js?v=0.9') }}"></script>
<script defer src="{{ asset('js/menu.js') }}"></script>
</body>
</html>
