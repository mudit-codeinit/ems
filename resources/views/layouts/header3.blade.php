<!doctype html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Google Tag Manager -->
<script>!function(e,t,a,n,g){e[n]=e[n]||[],e[n].push({"gtm.start":(new Date).getTime(),event:"gtm.js"});var m=t.getElementsByTagName(a)[0],r=t.createElement(a);r.async=!0,r.src="https://www.googletagmanager.com/gtm.js?id=GTM-KWHZJRK",m.parentNode.insertBefore(r,m)}(window,document,"script","dataLayer");</script>
<!-- End Google Tag Manager -->
	<!-- Required meta tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="csrf-token" content="{{csrf_token()}}">
	@if( isset($meta_description) && isset($meta_title) )
		<meta name="title" content="{{ $meta_title }}"/>
	    <meta name="description" content="{{ $meta_description }}"/>
	@else
	<meta name="title" content="Sell Any Car in Dubai | Sell My Car in Dubai, UAE - Expat Car Buyers"/>
	<meta name="description" content="Expat Car Buyers is the trusted and reliable auto trader in Dubai. You can sell any car in Dubai, UAE with no-obligation & free valuation with instant cash offer."/>
	<meta name="keywords" content=""/>
	@endif
	
	<?php if(Request::segment(1)) {  ?>
           <link rel="canonical" href="<?php  echo URL::current(); ?>" />
           
     <?php  }
       else
       { ?>
	  <link rel="canonical" href="https://www.expatcarbuyers.com/sell-my-car-dubai" />
      <?php } ?>
	<title>	@if( isset($meta_title) ){{$meta_title}} @else Sell Any Car in Dubai | Sell My Car in Dubai, UAE - Expat Car Buyers @endif</title>
     <link rel="shortcut icon" href="{{ asset('front/images/carfav.png') }}" />
	<!-- Bootstrap CSS -->
	<link async rel="stylesheet" href="{{ asset('front2/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
	<link href="{{ asset('front/css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<link defer href="{{ asset('front/css/mob_res25.css') }}" rel="stylesheet" media="all">
	<link defer href="{{ asset('front/css/icon-list.css') }}" rel="stylesheet" media="all">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Oswald:200,300,400,500,600,700|Poiret+One&amp;subset=latin-ext"
	 rel="stylesheet">
	
<style>
    

.custom-nav-button {
    display: none !important;
}

#custom-navbar a {
    color: #fff !important;
}

#custom-navbar i {
    margin-left: 5px !important;
    margin-right: 5px !important;
    font-size: 17px !important;
}

#custom-navbar .sub-menu {
    z-index: 1000 !important;
    top: 98% !important;
    min-width: 10rem !important;
    padding: 0.5rem 0 !important;
    margin: 0.125rem 0 0 !important;
    font-size: 1rem !important;
    list-style: none !important;
    background-clip: padding-box !important;
    border: 1px solid rgba(0, 0, 0, 0.15) !important;
    border-radius: 0.25rem !important;
    background: #fff !important;
}

#custom-navbar .sub-menu a {
    color: #000 !important;
}

#custom-navbar .sub-menu a:hover {
    color: #f24026 !important;
    background: transparent !important;
}

#custom-navbar .dropdown-item:active {
    background: transparent !important;
}

.google_icon {
    width: 23px;
    height:23px;
    background-image: url(https://cdn.trustindex.io/assets/platform/Google/icon.svg);
    background-color:#fff;
    background-size: 20px 20px;
    background-repeat:no-repeat;
    background-position:center;
    position:absolute;
    bottom:-15px;
    right:5px;
    border-radius:50%;
}
    .carousel-control-next, .carousel-control-prev {
        position: absolute;
        top: -50px;
        bottom: 0;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        -ms-flex-pack: center;
        justify-content: center;
        color: #fff;
        text-align: center;
        width:2%;
    }

        .carousel-control-next:focus, .carousel-control-next:hover, .carousel-control-prev:focus, .carousel-control-prev:hover {
            color: #fff;
            text-decoration: none;
            outline: 0;
            transform: scale(1.2);
            opacity: .9
        }

        .carousel-control-prev {
            left: -18px
        }

        .carousel-control-next {
            right: -18px
        }

        .carousel-control-next-icon, .carousel-control-prev-icon {
            display: inline-block;
            width: 20px;
            height: 20px;
            background: center center no-repeat;
            background-size: 100% 100%
        }

        .carousel-control-prev-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E")
        }

        .carousel-control-next-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E")
        }
        
         .arrow-prev-icon, .arrow-next-icon  {
            position: absolute;
            z-index: 1000;
        }
        
        .Profile-alpha-i {
            top:0;
            left:50%;
            transform:translate(-50%, -50%);
            overflow:visible;
        }
         .userProfile {
            width: 64px;
            height: 64px;
            border-radius: 50%;
            color: #fff;
            /*padding-top: 17px*/
        }
        
          .userProfile {
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
            white-space: nowrap;
            /*overflow: hidden;*/
            text-overflow: ellipsis;
            text-align: left;
            margin: 0 !important;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .userName {
            padding-top:27px;
        }
        
        
        
    @media only screen and (max-width : 991.5px) and (min-width: 375px) {
    .custom-nav-button {
        margin: 5px !important;
    }
}

@media only screen and (max-width : 991.5px) {
    #custom-navbar .navbar-collapse {
        background-color: #f24026 !important;
        border-color: #f24026 !important;
    }

    .custom-nav-button {
        display: block !important;
        color: rgba(0,0,0,.5) !important;
        border-color: rgba(0,0,0,.1) !important;
        background: transparent !important;
        float: right;
    }

    .custom-nav-button .navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
    }

    #custom-navbar .nav-item {
        margin-left: 20px !important;
        margin-right: 20px !important;
    }

    #custom-navbar .nav-item .open-sub-menu i {
        float: right !important;
    }
}

@media (min-width: 992px) {
    #custom-navbar {
        background-color: #f24026 !important;
        border-color: #f24026 !important;
    }

    #custom-navbar .nav-item {
        margin-left: auto !important;
        margin-right: auto !important;
    }

    #custom-navbar .sub-menu {
        position: absolute !important;
    }
}
        
    
    
    
    
    
    @media only screen and (max-width:425px){a.float.d-md-none{display:none}div#_hj-f5b2a1eb-9b07_feedback{display:none}div#wh-widget-send-button-wrapper-list{display:none}.wh-widget-button-icon.wh-messenger-bg-whatsapp{display:none!important}}.header-section {padding: 0 1rem 0.5rem 1rem;}</style>	
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KWHZJRK"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <div id="app">
	<div class="header-3-style bg-grey" {{ $current_url = Route::getCurrentRoute()->uri() }}>
		<div class="header pt-0 py-lg-4 mr-0">
			<div class="container">
			    <div class="row d-lg-none py-2">
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
				<div class="row header-section">
					<div class="col-lg-3">
						<div class="logo">
							<a href="/"><img class="img-fluid" src="{{ asset('front/images/logo.webp') }}" alt="logo" onerror="this.onerror=null; this.src='{{ asset('front/images/logo.png') }}'"></a>
						</div>
					</div>
					<div class="col-lg-9">
						<div class="navigation_bar text-right">
                            <button class="btn ml-3"><a href="tel:+971561774555" class="header-phone">
								<img class="mr-2" src="{{ asset('front2/images/phone.webp') }}" alt="logo" onerror="this.onerror=null; this.src='/public/front2/images/phone.png'">+971 56 1774555</a></button>
                            <button class="custom-nav-button navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
						</div>
					</div>
					<!--<button class="btn ml-3 head-btn-res"><a href="tel:+97143337876" class="header-phone">-->
					<!--    <img class="mr-2" src="{{ asset('front2/images/phone.webp') }}" alt="phone" onerror="this.onerror=null; this.src='/public/front2/images/phone.png'">+971 4 333 7876</a></button>-->
				</div>
			</div>
            @include('partials.menu')
		</div>
	</div>
	
	  <a href="tel:+971561774555" class="float d-md-none">
<i class="fa fa-phone my-float"></i>
</a>

	@yield('content')
	
	<div class="subscribe pt_ninty">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-md-10 mx-auto">
					<h3 class="text-uppercase font-poiret mb-5 text-center text-black">Subscribe for Newsletter</h3>
					<!-- Begin Mailchimp Signup Form -->
					<div id="mc_embed_signup">
                        <form action="https://expatcarbuyers.us20.list-manage.com/subscribe/post?u=bb130dc27c4d426571a7d2056&amp;id=6a921b8a53" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                            <div id="mc_embed_signup_scroll">
                            <div class="mc-field-group">
				            <div class="news_sub d-sm-flex d-block">
                            	<div class="input-group mr-4 shadow-sm">
        						  <div class="input-group-prepend ">
        						    <span class="input-group-text border-right-0 bg-white" id="basic-addon1">
        						        <img src="{{ asset('front2/images/em1.webp') }}" alt="" onerror="this.onerror=null; this.src='/public/front2/images/em1.png'">
        						    </span>
        						  </div>
        						  	<input type="email" value="" name="EMAIL" class="required email form-control h-100 border-left-0 pl-1" placeholder="Email address" id="mce-EMAIL" required aria-label="email"/>
        						</div>
        						<div id="mce-responses" class="clear">
                        		<div class="response" id="mce-error-response" style="display:none"></div>
                        		<div class="response" id="mce-success-response" style="display:none"></div>
                        	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_bb130dc27c4d426571a7d2056_6a921b8a53" tabindex="-1" value=""></div>
                            <div class="clear"><input type="submit" value="Subscribe Now" name="subscribe" id="mc-embedded-subscribe" class="btn btn-dark signButton text-uppercase"></div>
                            </div>
                        	
                            </div>
                        </form>
                        </div>
                        <!--End mc_embed_signup-->
                        </div>
				</div>
			</div>
		</div>
	</div>
	<!--<section class="brands py-5 d-none d-md-block">-->
 <!--        <div class="container py-3 ">-->
 <!--           <div class="row">-->
 <!--              <div class="col-md-12">-->
 <!--                 <h6 class="font-weight-bold mb-4">Brands</h6>-->
 <!--              </div>-->
 <!--              <div class="col-lg-2  col-6 col-sm-4 mb-3 mb-lg-0">-->
 <!--                 <ul class="list-unstyled brand-list">-->
 <!--                    <li><a href="{{ url('sell-my-car/acura') }}">Sell My Acura</a></li>-->
 <!--                    <li><a href="{{ url('sell-my-car/bugatti') }}">Sell My Bugatti</a></li>-->
 <!--                    <li><a href="{{ url('sell-my-car/ferrari') }}">Sell My Ferrari</a></li>-->
 <!--                    <li><a href="{{ url('sell-my-car/infiniti') }}">Sell My Infiniti</a></li>-->
 <!--                    <li><a href="{{ url('sell-my-car/land-rover') }}">Sell My Land Rover</a></li>-->
 <!--                    <li><a href="{{ url('sell-my-car/mazda') }}">Sell My Mazda</a></li>-->
 <!--                    <li><a href="{{ url('sell-my-car/opel') }}">Sell My Opel</a></li>-->
 <!--                    <li><a href="{{ url('sell-my-car/subaru') }}">Sell My Subaru</a></li>-->
 <!--                 </ul>-->
 <!--              </div>-->
 <!--              <div class="col-lg-2 col-6  col-sm-4 mb-3 mb-lg-0">-->
 <!--                 <ul class="list-unstyled brand-list">-->
 <!--                    <li><a href="{{ url('sell-my-car/alfa-romeo') }}">Sell My Alfa Romeo</a></li>-->
 <!--                    <li><a href="#" class="non-click">Sell My Buick</a></li>-->
 <!--                    <li><a href="{{ url('sell-my-car/fiat') }}">Sell My Fiat</a></li>-->
 <!--                    <li><a href="{{ url('sell-my-car/jaguar') }}">Sell My Jaguar</a></li>-->
 <!--                    <li><a href="{{ url('sell-my-car/lexus') }}">Sell My Lexus</a></li>-->
 <!--                    <li><a href="{{ url('sell-my-car/mcLaren') }}">Sell My McLaren</a></li>-->
 <!--                    <li><a href="{{ url('sell-my-car/peugeot') }}">Sell My Peugeot</a></li>-->
 <!--                    <li><a href="{{ url('sell-my-car/suzuki') }}">Sell My Suzuki</a></li>-->
 <!--                 </ul>-->
 <!--              </div>-->
 <!--              <div class="col-lg-2 col-6 col-sm-4 mb-3 mb-lg-0">-->
 <!--                 <ul class="list-unstyled brand-list">-->
 <!--                    <li><a href="{{ url('sell-my-car/aston-martin') }}">Sell My Aston Martin</a></li>-->
 <!--                    <li><a href="{{ url('sell-my-car/cadillac') }}">Sell My Cadillac</a></li>-->
 <!--                    <li><a href="{{ url('sell-my-car/ford') }}">Sell My Ford</a></li>-->
 <!--                    <li><a href="{{ url('sell-my-car/jeep') }}">Sell My Jeep</a></li>-->
 <!--                    <li><a href="{{ url('sell-my-car/lincoln') }}">Sell My Lincoln</a></li>-->
 <!--                    <li><a href="{{ url('sell-my-car/mercedes-benz') }}">Sell My Mercedes-Benz</a></li>-->
 <!--                    <li><a href="{{ url('sell-my-car/pontiac') }}">Sell My Pontiac</a></li>-->
 <!--                    <li><a href="{{ url('sell-my-car/tesla') }}">Sell My Tesla</a></li>-->
 <!--                 </ul>-->
 <!--              </div>-->
 <!--              <div class="col-lg-2  col-6 col-sm-4 mb-3 mb-lg-0">-->
 <!--                 <ul class="list-unstyled brand-list">-->
 <!--                    <li><a href="{{ url('sell-my-car/audi') }}">Sell My Audi</a></li>-->
 <!--                    <li><a href="{{ url('sell-my-car/chevrolet') }}">Sell My Chevrolet</a></li>-->
 <!--                    <li><a href="{{ url('sell-my-car/gmc') }}">Sell My GMC</a></li>-->
 <!--                    <li><a href="{{ url('sell-my-car/kia') }}">Sell My Kia</a></li>-->
 <!--                    <li><a href="{{ url('sell-my-car/lotus') }}">Sell My Lotus</a></li>-->
 <!--                    <li><a href="{{ url('sell-my-car/mini') }}">Sell My Mini</a></li>-->
 <!--                    <li><a href="{{ url('sell-my-car/porsche') }}">Sell My Porsche</a></li>-->
 <!--                    <li><a href="{{ url('sell-my-car/toyota') }}">Sell My Toyota</a></li>-->
 <!--                 </ul>-->
 <!--              </div>-->
 <!--              <div class="col-lg-2  col-6 col-sm-4 mb-3 mb-lg-0">-->
 <!--                 <ul class="list-unstyled brand-list">-->
 <!--                    <li><a href="{{ url('sell-my-car/bentley') }}">Sell My Bentley</a></li>-->
 <!--                    <li><a href="{{ url('sell-my-car/chrysler') }}">Sell My Chrysler</a></li>-->
 <!--                    <li><a href="{{ url('sell-my-car/honda') }}">Sell My Honda</a></li>-->
 <!--                    <li><a href="#" class="non-click">Sell My Koenigsegg</a></li>-->
 <!--                    <li><a href="{{ url('sell-my-car/maserati') }}">Sell My Maserati</a></li>-->
 <!--                    <li><a href="{{ url('sell-my-car/mitsubishi') }}">Sell My Mitsubishi</a></li>-->
 <!--                    <li><a href="{{ url('sell-my-car/renault') }}">Sell My Renault</a></li>-->
 <!--                    <li><a href="{{ url('sell-my-car/volkswagen') }}">Sell My Volkswagen</a></li>-->
 <!--                 </ul>-->
 <!--              </div>-->
 <!--              <div class="col-lg-2  col-6 col-sm-4  mb-3 mb-lg-0">-->
 <!--                 <ul class="list-unstyled brand-list">-->
 <!--                    <li><a href="{{ url('sell-my-car/bmw') }}">Sell My BMW</a></li>-->
 <!--                    <li><a href="{{ url('sell-my-car/dodge') }}">Sell My Dodge</a></li>-->
 <!--                    <li><a href="{{ url('sell-my-car/hyundai') }}">Sell My Hyundai</a></li>-->
 <!--                    <li><a href="{{ url('sell-my-car/lamborghini') }}">Sell My Lamborghini</a></li>-->
 <!--                    <li><a href="{{ url('sell-my-car/maybach') }}">Sell My Maybach</a></li>-->
 <!--                    <li><a href="{{ url('sell-my-car/nissan') }}">Sell My Nissan</a></li>-->
 <!--                    <li><a href="{{ url('sell-my-car/rolls-royce') }}">Sell My Rolls Royce</a></li>-->
 <!--                    <li><a href="{{ url('sell-my-car/volvo') }}">Sell My Volvo</a></li>-->
 <!--                 </ul>-->
 <!--              </div>-->
 <!--           </div>-->
 <!--        </div>-->
 <!--     </section>-->
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
					    <li><a href="https://www.facebook.com/ExpatCarBuyers/" target="_blank"><img src="{{ asset('images/facebook.webp') }}" alt="facebook" onerror="this.onerror=null; this.src='/public/images/facebook.svg'">
					    </a></li>
						<li><a href="https://twitter.com/expatcarbuyers" target="_blank"><img src="{{ asset('images/twitter.webp') }}" alt="twitter" onerror="this.onerror=null; this.src='/public/images/twitter.svg'"></a></li>
						<li><a href="https://www.instagram.com/expatcarbuyers/" target="_blank"><img src="{{ asset('images/instagram.webp') }}" alt="instagram" onerror="this.onerror=null; this.src='/public/images/instagram.svg'"></a></li>
					</ul>
               </div>
            </div>
            <!--<div class="col-lg-2 col-sm-6 mb-lg-0 mb-3">-->
            <!--   <div class="our-service">-->
            <!--      <h6 class="font-weight-bold mb-3">Userful Links</h6>-->
            <!--      <ul class="list-unstyled">-->
            <!--         <li class="mb-2"><a href="{{ url('sell-any-car') }}">-->
            <!--             <img class="mr-2" src="{{ asset('front/images/Arrow.webp') }}" alt="Arrow" onerror="this.onerror=null; this.src='/public/front/images/Arrow.svg'">-->
                        <!--<img class="mr-2" src="{{ asset('front/images/Arrow.svg') }}"/>-->
            <!--            Sell Any Car</a>-->
            <!--         </li>-->
            <!--         <li class="mb-2"><a href="{{ url('we-buy-any-car') }}">-->
            <!--              <img class="mr-2" src="{{ asset('front/images/Arrow.webp') }}" alt="Arrow" onerror="this.onerror=null; this.src='/public/front/images/Arrow.svg'">-->
                        <!--<img class="mr-2" src="{{ asset('front/images/Arrow.svg') }}"/>-->
            <!--            We Buy Any Car</a>-->
            <!--         </li>-->
            <!--         <li class="mb-2"><a href="{{ url('we-cash-any-car') }}">-->
            <!--              <img class="mr-2" src="{{ asset('front/images/Arrow.webp') }}" alt="Arrow" onerror="this.onerror=null; this.src='/public/front/images/Arrow.svg'">-->
                        <!--<img class="mr-2" src="{{ asset('front/images/Arrow.svg') }}"/>-->
            <!--              We Cash Any Car</a>-->
            <!--         </li>-->
            <!--      </ul>-->
            <!--   </div>-->
            <!--</div>-->
            <!--<div class="col-lg-2 col-sm-6 mb-lg-0 mb-3">-->
            <!--   <div class="follow">-->
            <!--      <h6 class="font-weight-bold mb-3" style="opacity:0;">Userful Links</h6>-->
            <!--      <ul class="list-unstyled">-->
            <!--         <li class="mb-2">-->
            <!--             <img class="mr-2" src="{{ asset('front/images/Arrow.webp') }}" alt="Arrow" onerror="this.onerror=null; this.src='/public/front/images/Arrow.svg'"><a href="{{ url('sell-my-car-dubai') }}"> Sell My Car Dubai</a>-->
            <!--         </li>-->
            <!--         <li class="mb-2">-->
            <!--             <img class="mr-2" src="{{ asset('front/images/Arrow.webp') }}" alt="Arrow" onerror="this.onerror=null; this.src='/public/front/images/Arrow.svg'"><a href="{{ url('sell-my-car-sharjah') }}"> Sell Any Car Sharjah</a>-->
            <!--         </li>-->
            <!--         <li class="mb-2"> <img class="mr-2" src="{{ asset('front/images/Arrow.webp') }}" alt="Arrow" onerror="this.onerror=null; this.src='/public/front/images/Arrow.svg'"><a href="{{ url('sell-my-car-abudhabi') }}"> Sell Any Car Abu Dhabi</a></li>-->
            <!--      </ul>-->
            <!--   </div>-->
            <!--</div>-->
            <div class="col-lg-6 col-md-12 mb-lg-0 mb-3">
               <div class="footer-abt">
                  <h6 class="font-weight-bold mb-3">Keep in touch</h6>
                  <ul class="list-unstyled">
                     <li class="mb-2 d-flex">
                        <span>
                        <img class="mr-2" src="{{ asset('front/images/map-marker-outline.webp') }}" alt="Map Marker" onerror="this.onerror=null; this.src='/public/front/images/map-marker-outline.svg'">
                        </span>
                        <span>Near FAB Metrostation, <br>Al Asmawi Building, Sheikh Zayed Road,<br> office No. G17 - Dubai - United Arab Emirates
                         
                        </span>
                     </li>
                     <li class="mb-2  d-flex">
                        <span>
                            <img class="mr-2" src="{{ asset('front/images/phone.webp') }}" alt="phone" onerror="this.onerror=null; this.src='/public/front/images/phone.svg'">
                            <!--<img class="mr-2" src="{{ asset('front/images/phone.svg') }}"/>-->
                        </span>
                        <span><a href="tel:+971561774555" class="header-phone">+971 56 1774555</a></span>
                     </li>
                     <li class="mb-2  d-flex">
                        <span><img class="mr-2" src="{{ asset('front/images/email-outline.webp') }}" alt="email" onerror="this.onerror=null; this.src='/public/front/images/email-outline.svg'"></span>
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
        					    <li><a href="https://www.facebook.com/ExpatCarBuyers/" target="_blank"><img src="{{ asset('images/facebook.webp') }}" alt="facebook" onerror="this.onerror=null; this.src='/public/images/facebook.svg'"></a></li>
        						<li><a href="https://twitter.com/expatcarbuyers" target="_blank"><img src="{{ asset('images/twitter.webp') }}" alt="twitter" onerror="this.onerror=null; this.src='/public/images/twitter.svg'"></a></li>
        						<li><a href="https://www.instagram.com/expatcarbuyers/" target="_blank"><img src="{{ asset('images/instagram.webp') }}" alt="instagram" onerror="this.onerror=null; this.src='/public/images/instagram.svg'"></a></li>
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
               <!--               <img class="mr-2" src="{{ asset('front/images/Arrow.webp') }}" alt="Arrow" onerror="this.onerror=null; this.src='/public/front/images/Arrow.svg'">-->
                            <!--<img class="mr-2" src="{{ asset('front/images/Arrow.svg') }}"/>-->
               <!--             Sell Any Car</a>-->
               <!--          </li>-->
               <!--          <li class="mb-2"><a href="{{ url('we-buy-any-car') }}">-->
               <!--              <img class="mr-2" src="{{ asset('front/images/Arrow.webp') }}" alt="Arrow" onerror="this.onerror=null; this.src='/public/front/images/Arrow.svg'">-->
                            <!--<img class="mr-2" src="{{ asset('front/images/Arrow.svg') }}"/>-->
               <!--             We Buy Any Car</a>-->
               <!--          </li>-->
               <!--          <li class="mb-2"><a href="{{ url('we-cash-any-car') }}">-->
               <!--              <img class="mr-2" src="{{ asset('front/images/Arrow.webp') }}" alt="Arrow" onerror="this.onerror=null; this.src='/public/front/images/Arrow.svg'">-->
                            <!--<img class="mr-2" src="{{ asset('front/images/Arrow.svg') }}"/>-->
               <!--             We Cash Any Car</a>-->
               <!--          </li>-->
               <!--          <li class="mb-2">-->
               <!--              <img class="mr-2" src="{{ asset('front/images/Arrow.webp') }}" alt="Arrow" onerror="this.onerror=null; this.src='/public/front/images/Arrow.svg'">-->
                        <!--<img class="mr-2" src="{{ asset('front/images/Arrow.svg') }}"/>-->
               <!--         <a href="{{ url('sell-my-car-dubai') }}"> Sell My Car Dubai</a>-->
               <!--      </li>-->
               <!--      <li class="mb-2">-->
               <!--          <img class="mr-2" src="{{ asset('front/images/Arrow.webp') }}" alt="Arrow" onerror="this.onerror=null; this.src='/public/front/images/Arrow.svg'">-->
                        <!--<img class="mr-2" src="{{ asset('front/images/Arrow.svg') }}"/>-->
               <!--         <a href="{{ url('sell-my-car-sharjah') }}"> Sell Any Car Sharjah</a>-->
               <!--      </li>-->
               <!--      <li class="mb-2">-->
               <!--          <img class="mr-2" src="{{ asset('front/images/Arrow.webp') }}" alt="Arrow" onerror="this.onerror=null; this.src='/public/front/images/Arrow.svg'">-->
                         <!--<img class="mr-2" src="{{ asset('front/images/Arrow.svg') }}"/>-->
               <!--          <a href="{{ url('sell-my-car-abudhabi') }}"> Sell Any Car Abu Dhabi</a></li>-->
               <!--         </ul>-->
               <!--      </div>-->
               <!--   </div>-->
               <!--</div>-->
               <div class="card border-0 p-0">
                  <div class="card-header p-0" id="headingFour">
                     <h5 class="mb-0">
                        <button class="btn collapsed w-100 text-left py-2 text-body text-uppercase position-relative" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                        Keep in touch
                        <span class="plus"></span>
                        </button>
                     </h5>
                  </div>
                  <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                     <div class="card-body">
                        <ul class="list-unstyled">
                           <li class="mb-2 d-flex">
                              <span>
                              <img class="mr-2" src="{{ asset('front/images/map-marker-outline.webp') }}" alt="Map Marker" onerror="this.onerror=null; this.src='/public/front/images/map-marker-outline.svg'">
                              </span>
                               <span>Expatcarbuyers - Office No. 17, Sheikh <br> Zayed Road, Umm Al Sheif, Dubai, <br>United Arab Emirates</span>
                           </li>
                           <li class="mb-2  d-flex">
                              <span>
                                  <img class="mr-2" src="{{ asset('front/images/phone.webp') }}" alt="phone" onerror="this.onerror=null; this.src='/public/front/images/phone.svg'">
                                  <!--<img class="mr-2" src="{{ asset('front/images/phone.svg') }}">-->
                                  </span>
                              <span><a href="tel:+971561774555">+971 56 1774555</a></span>
                           </li>
                           <li class="mb-2  d-flex">
                              <span>
                                  <img class="mr-2" src="{{ asset('front/images/email-outline.webp') }}" alt="email" onerror="this.onerror=null; this.src='/public/front/images/email-outline.svg'">
                                  <!--<img class="mr-2" src="{{ asset('front/images/email-outline.svg') }}">-->
                                 </span>
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
   <!--<img src="{{ asset('front2/images/arrow.png') }}" alt="" width="18px">-->
   <img src="{{ asset('front2/images/arrow.webp') }}" alt="expatcarbuyers" width="18px" onerror="this.onerror=null; this.src='{{ asset('front2/images/arrow.png') }}'">
   Go to Top
</a>
</div>

</body>
<script> var baseUrl = "{{ url('/') }}"; </script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script> 
<script defer src="{{ asset('front2/js/bootstrap.min.js') }}"></script>
 <script defer src="{{ asset('front2/js/jquery.parallax-scroll.min.js') }}"></script>
<!--<script src="{{ mix('js/app.js') }}"></script>-->
<script defer src="{{ asset('js/menu.js') }}"></script>
<script type="text/javascript">
 	
 	jQuery(window).scroll(function() {
    var height = jQuery(window).scrollTop();
    if (height > 300) {
        jQuery('#go-to-top').fadeIn();
    } else {
       jQuery('#go-to-top').fadeOut();
    }
});
jQuery(document).ready(function() {
    jQuery("#go-to-top").click(function(event) {
        event.preventDefault();
        jQuery("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });
    jQuery('.navbar-toggler').click(function(){
        jQuery('.navbar-collapse').toggle();
    });

});
jQuery(document).ready(function(){
    
            var CSRF_TOKEN = jQuery('meta[name="csrf-token"]').attr('content');
            var email = $('input[name=email]').val();
            jQuery("#send").click(function(){
                 jQuery.ajax({
                    /* the route pointing to the post function */
                    url: '{{ url("contact-us") }}',
                   	type:"post",
					async:false,
					data:{	
					    '_token':$('input[name=_token]').val(),
					    'name':$('input[name=name]').val(),
					    'email':$('input[name=email]').val(),
					    'phone':$('input[name=phone]').val(),
					    'subject':$('input[name=subject]').val(),
					    'message':$('#message').val(),
					},
                    success:function(data){
					    console.log(data);
					    $('#myModal').show();
					}
                }); 
            });
            jQuery('.myform').on('click', function ()
            {
            var msg;
            if ($('input[name=name]').val() == '') {
            jQuery('.error_name').show();
            } else if (IsEmail(email) == false) {
            jQuery('.error_email').show();
            } else if ($('input[name=phone]').val() == '') {
            jQuery('.error_phone').show();
           
            } else {
             jQuery('.error_phone').hide();   
            }
            return msg;
            });
            });
       function IsEmail(email) {
    var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (!regex.test(email)) {
        return false;
    } else {
        return true;
    }
}
 
/* lazy loading */
$('img,iframe').attr('loading','lazy');
 </script>


</body>
</html>