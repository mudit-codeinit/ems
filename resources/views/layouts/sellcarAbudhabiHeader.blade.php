<!doctype html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <!-- Google Tag Manager -->
    <script>!function(e,t,a,n,g){e[n]=e[n]||[],e[n].push({"gtm.start":(new Date).getTime(),event:"gtm.js"});var m=t.getElementsByTagName(a)[0],r=t.createElement(a);r.async=!0,r.src="https://www.googletagmanager.com/gtm.js?id=GTM-KWHZJRK",m.parentNode.insertBefore(r,m)}(window,document,"script","dataLayer");</script>
    <!-- End Google Tag Manager -->
	<!-- Required meta tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{csrf_token()}}">
	@if(isset($meta_title) )
	    <title>{{ $meta_title }}</title>
	@else
    	<title>Sell Any Car Abu Dhabi | Sell your Car to Expat Car Buyers</title>
	@endif
	
	@if( isset($meta_description))
	    <meta name="description" content="{{ $meta_description }}"/>
	@else
	    <meta name="description" content="Sell Any Car in Abu Dhabi to trusted & reliable used car dealers. Sell your Car with Expat Car Buyers & Get Cash Instantly. We offer the best price to sell any car in Abu Dhabi"/>
	@endif
	
	@if( isset($meta_keywords))
	    <meta name="keywords" content="{{ $meta_keywords }}"/>
	@else
	    <meta name="keywords" content="Sell any car in Abu Dhabi, Sell your car in Abu Dhabi, Sell my car in Abu Dhabi"/>
	@endif

	<?php if(Request::segment(1)) {  ?>
           <link rel="canonical" href="<?php  echo URL::current(); ?>" />
     <?php  }
       else
       { ?>
	  <link rel="canonical" href="https://www.expatcarbuyers.com/sell-my-car-dubai" />
      <?php } ?>
    <link rel="shortcut icon" href="{{ asset('front/images/carfav.png') }}" />
	<!-- Bootstrap CSS -->
	<link async rel="stylesheet" href="{{ asset('front2/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<link defer href="{{ asset('front/css/icon-list.css') }}" rel="stylesheet" media="all">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Oswald:200,300,400,500,600,700|Poiret+One&amp;subset=latin-ext"
	 rel="stylesheet">
	  <link href="{{ asset('front/css/style.css') }}" rel="stylesheet" media="all">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<style>.help-block.help-block-error{color:red;text-align:left;font-size:12px;line-height:130%;width:100%;display:inline-block!important;padding-left:5px}@media only screen and (max-width:425px){a.float.d-md-none{display:none}div#_hj-f5b2a1eb-9b07_feedback{display:none}div#wh-widget-send-button-wrapper-list{display:none}.wh-widget-button-icon.wh-messenger-bg-whatsapp{display:none!important}}.header-section {padding: 0 1rem 0.5rem 1rem;}</style>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KWHZJRK"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <div id="app">
	<div class="header-main header-main-2 bg-grey" {{ $current_url = Route::getCurrentRoute()->uri() }}>
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
							<a href="/"><img src="{{ asset('front/images/logo.webp') }}" alt="Expat Car Buyers" class="img-fluid" onerror="this.onerror=null; this.src='{{ asset('front/images/logo.png') }}'"></a>
						</div>
					</div>
					<div class="col-lg-9">
						<div class="navigation_bar text-right">
                            <button class="btn ml-3"><a href="tel:+971561774555" class="header-phone"><img src="{{ asset('front2/images/phone.png') }}" alt="phone" class="mr-2" />+971 56 1774555</a></button>
                            <button class="custom-nav-button navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
						</div>
					</div>
					<!--<button class="btn ml-3 head-btn-res"><a href="tel:+97143337876" class="header-phone"><img src="{{ asset('front2/images/phone.png') }}" alt="phone" class="mr-2" />+971 4 333 7876</a></button>-->
				</div>
			</div>
            @include('partials.menu')
		</div>

  <a href="tel:+971561774555" class="float d-md-none">
<i class="fa fa-phone my-float"></i>
</a>
		<div class="banner position-relative">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 p-lg-0">
						<div class="banner_left">
							<img src="{{ asset('front2/images/banner-car.png') }}" alt="Sell My Car UAE" class="img-fluid">
						</div>
					</div>
					
					<div class="col-lg-5">
						<div class="banner-form position-relative">
							<h4 class="mb-0 font-Oswald">UAE's No. 1</h4>
							<h3 class="text-uppercase font-poiret" style="font-size: 36px;">Car Cashing Service</h3>
							<h6 class="font-mons">People trust us because we provide Fast,<br>
								easy and honest service.</h6>
					<form id="booking_form_step_1" method="Post" action="{{ url('step-2') }}" >
                            @csrf
							<div class="form-group">
								<label class="font-weight-bold text-uppercase font-mons">Enter car company name</label>
								<!-- <select class="w-100 position-relative">
									<option>Select Make</option>
									<option>Select Make</option>
									<option>Select Make</option>
								</select> -->

								<div class="dropdown">
								  @php
            $brands = \App\Models\Brand::where('top','<','2')->get();
            $top_brands = \App\Models\Brand::where('top','1')->get();
            @endphp
            <select class="form-control" style="width: 100%;" id="brand_val" name="brand_name" aria-label="brand">
               <option value="" selected disabled="disabled" style="padding: 0px;">Select Make</option>
               
               @foreach($top_brands as $brandss)
               <option value="{{ $brandss->name }}" style="padding: 0px;">{{ $brandss->name }}</option>
                @endforeach
                <option disabled="disabled">-------------------</option>
                @foreach($brands as $brand)
               <option value="{{ $brand->name }}" style="padding: 0px;">{{ $brand->name }}</option>
                @endforeach
            </select>
							</div></div>
							<div class="form-group w-fift car_modl">
								<label class="font-weight-bold text-uppercase font-mons">Car Model</label>

								<div class="dropdown">
                <select class="modl-model form-control" id="fetched_model" style="width: 100%;" name="model_name" selected aria-label="model">
                <option value="" selected disabled="disabled">Select Model</option>
</select>
								</div>
							</div>
							<div class="form-group w-fift car_year">
								<label class="font-weight-bold text-uppercase font-mons">year of manufacturing</label>
							
								<div class="dropdown">
								  <select class="modl-year form-control" style="width: 100%;" id="year" name="year" aria-label="year">
               <option value="" disabled="disabled" selected style="padding: 0px;">Select Year</option>
               
                                                    <option value="2023" style="padding: 0px;">2023</option>
               <option value="2022" style="padding: 0px;">2022</option>
               <option value="2021" style="padding: 0px;">2021</option>
           <option value="2020" style="padding: 0px;">2020</option>
				<option value="2019" style="padding: 0px;">2019</option>
				<option value="2018" style="padding: 0px;">2018</option>
				<option value="2017" style="padding: 0px;">2017</option>
				<option value="2016" style="padding: 0px;">2016</option>
				<option value="2015" style="padding: 0px;">2015</option> 
				<option value="2014" style="padding: 0px;">2014</option>
				<option value="2013" style="padding: 0px;">2013</option>
				<option value="2012" style="padding: 0px;">2012</option>
				<option value="2011" style="padding: 0px;">2011</option>
				<option value="2010" style="padding: 0px;">2010</option>
				<option value="2009" style="padding: 0px;">2009</option>
				<option value="2008" style="padding: 0px;">2008</option>
				<option value="2007" style="padding: 0px;">2007</option>
				<option value="2006" style="padding: 0px;">2006</option>
				<option value="2006" style="padding: 0px;">2006</option>
				<option value="2006" style="padding: 0px;">2006</option>
				<option value="2005" style="padding: 0px;">2005</option>
				<option value="2004" style="padding: 0px;">2004</option>
				<option value="2003" style="padding: 0px;">2003</option>
				<option value="2002" style="padding: 0px;">2002</option>
				<option value="2001" style="padding: 0px;">2001</option>
				<option value="2000" style="padding: 0px;">2000</option>
				<option value="1999" style="padding: 0px;">1999</option>
				<option value="1998" style="padding: 0px;">1998</option>
				<option value="1997" style="padding: 0px;">1997</option>
				<option value="1996" style="padding: 0px;">1996</option>
				<option value="1995" style="padding: 0px;">1995</option>
				<option value="1994" style="padding: 0px;">1994</option>
				<option value="1993" style="padding: 0px;">1993</option>
				<option value="1992" style="padding: 0px;">1992</option>
				<option value="1991" style="padding: 0px;">1991</option>
				<option value="1990" style="padding: 0px;">1990</option>
				<option value="1989" style="padding: 0px;">1989</option>
				<option value="1988" style="padding: 0px;">1988</option>
				<option value="1987" style="padding: 0px;">1987</option>
				<option value="1986" style="padding: 0px;">1986</option>
				<option value="1985" style="padding: 0px;">1985</option>
				<option value="1984" style="padding: 0px;">1984</option>
				<option value="1983" style="padding: 0px;">1983</option>
				<option value="1982" style="padding: 0px;">1982</option>
				<option value="1981" style="padding: 0px;">1981</option>
				<option value="1980" style="padding: 0px;">1980</option>
            </select>
								</div>
							</div>

							<div class="form-group modl-phone">
								<label 	class="font-weight-bold text-uppercase font-mons">Contact Number </label>
								<input class="numberinput w-100" name="number" type="tel" placeholder="Phone Numer" aria-label="Phone" pattern="[0-9]*"/>
								 <span class="err_msg error_phone" style="display:none;color:red;">Please enter a valid phone number.e.g ( 05xxxxxxxx / +9715xxxxxxxx )<span>
							</div>
							<div class="form-group bannr_frm_btn d-inline-block">
								<button type="submit" class="d-block w-100 border-0 font-weight-bold btn-primary myform">EVALUATE YOUR CAR</button>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="ajax-loader" style="display:none;position: absolute;width: 100%;height: 100%;z-index: 11;background: rgba(238, 238, 238, 0.4);top:0px;left:0px;"><div class="loader-inner" style="display: flex;align-items: center;position: relative;height: 100%;justify-content: center;">
				<img src="{{ asset('front/images/front-loader.svg') }}" alt="loader" style="width:35px;"></div>
		</div>
		</div>
	</div>
    </div>
	@yield('content')

<!--<section class="brands py-5 d-none d-md-block">-->
<!--         <div class="container py-3 ">-->
<!--            <div class="row">-->
<!--               <div class="col-md-12">-->
<!--                  <h6 class="font-weight-bold mb-4">Brands</h6>-->
<!--               </div>-->
<!--               <div class="col-lg-2  col-6 col-sm-4 mb-3 mb-lg-0">-->
<!--                  <ul class="list-unstyled brand-list">-->
<!--                     <li><a href="{{ url('sell-my-car/acura') }}">Sell My Acura</a></li>-->
<!--                     <li><a href="{{ url('sell-my-car/bugatti') }}">Sell My Bugatti</a></li>-->
<!--                     <li><a href="{{ url('sell-my-car/ferrari') }}">Sell My Ferrari</a></li>-->
<!--                     <li><a href="{{ url('sell-my-car/infiniti') }}">Sell My Infiniti</a></li>-->
<!--                     <li><a href="{{ url('sell-my-car/land-rover') }}">Sell My Land Rover</a></li>-->
<!--                     <li><a href="{{ url('sell-my-car/mazda') }}">Sell My Mazda</a></li>-->
<!--                     <li><a href="{{ url('sell-my-car/opel') }}">Sell My Opel</a></li>-->
<!--                     <li><a href="{{ url('sell-my-car/subaru') }}">Sell My Subaru</a></li>-->
<!--                  </ul>-->
<!--               </div>-->
<!--               <div class="col-lg-2 col-6  col-sm-4 mb-3 mb-lg-0">-->
<!--                  <ul class="list-unstyled brand-list">-->
<!--                     <li><a href="{{ url('sell-my-car/alfa-romeo') }}">Sell My Alfa Romeo</a></li>-->
<!--                     <li><a href="#" class="non-click">Sell My Buick</a></li>-->
<!--                     <li><a href="{{ url('sell-my-car/fiat') }}">Sell My Fiat</a></li>-->
<!--                     <li><a href="{{ url('sell-my-car/jaguar') }}">Sell My Jaguar</a></li>-->
<!--                     <li><a href="{{ url('sell-my-car/lexus') }}">Sell My Lexus</a></li>-->
<!--                     <li><a href="{{ url('sell-my-car/mcLaren') }}">Sell My McLaren</a></li>-->
<!--                     <li><a href="{{ url('sell-my-car/peugeot') }}">Sell My Peugeot</a></li>-->
<!--                     <li><a href="{{ url('sell-my-car/suzuki') }}">Sell My Suzuki</a></li>-->
<!--                  </ul>-->
<!--               </div>-->
<!--               <div class="col-lg-2 col-6 col-sm-4 mb-3 mb-lg-0">-->
<!--                  <ul class="list-unstyled brand-list">-->
<!--                     <li><a href="{{ url('sell-my-car/aston-martin') }}">Sell My Aston Martin</a></li>-->
<!--                     <li><a href="{{ url('sell-my-car/cadillac') }}">Sell My Cadillac</a></li>-->
<!--                     <li><a href="{{ url('sell-my-car/ford') }}">Sell My Ford</a></li>-->
<!--                     <li><a href="{{ url('sell-my-car/jeep') }}">Sell My Jeep</a></li>-->
<!--                     <li><a href="{{ url('sell-my-car/lincoln') }}">Sell My Lincoln</a></li>-->
<!--                     <li><a href="{{ url('sell-my-car/mercedes-benz') }}">Sell My Mercedes-Benz</a></li>-->
<!--                     <li><a href="{{ url('sell-my-car/pontiac') }}">Sell My Pontiac</a></li>-->
<!--                     <li><a href="{{ url('sell-my-car/tesla') }}">Sell My Tesla</a></li>-->
<!--                  </ul>-->
<!--               </div>-->
<!--               <div class="col-lg-2  col-6 col-sm-4 mb-3 mb-lg-0">-->
<!--                  <ul class="list-unstyled brand-list">-->
<!--                     <li><a href="{{ url('sell-my-car/audi') }}">Sell My Audi</a></li>-->
<!--                     <li><a href="{{ url('sell-my-car/chevrolet') }}">Sell My Chevrolet</a></li>-->
<!--                     <li><a href="{{ url('sell-my-car/gmc') }}">Sell My GMC</a></li>-->
<!--                     <li><a href="{{ url('sell-my-car/kia') }}">Sell My Kia</a></li>-->
<!--                     <li><a href="{{ url('sell-my-car/lotus') }}">Sell My Lotus</a></li>-->
<!--                     <li><a href="{{ url('sell-my-car/mini') }}">Sell My Mini</a></li>-->
<!--                     <li><a href="{{ url('sell-my-car/porsche') }}">Sell My Porsche</a></li>-->
<!--                     <li><a href="{{ url('sell-my-car/toyota') }}">Sell My Toyota</a></li>-->
<!--                  </ul>-->
<!--               </div>-->
<!--               <div class="col-lg-2  col-6 col-sm-4 mb-3 mb-lg-0">-->
<!--                  <ul class="list-unstyled brand-list">-->
<!--                     <li><a href="{{ url('sell-my-car/bentley') }}">Sell My Bentley</a></li>-->
<!--                     <li><a href="{{ url('sell-my-car/chrysler') }}">Sell My Chrysler</a></li>-->
<!--                     <li><a href="{{ url('sell-my-car/honda') }}">Sell My Honda</a></li>-->
<!--                     <li><a href="#" class="non-click">Sell My Koenigsegg</a></li>-->
<!--                     <li><a href="{{ url('sell-my-car/maserati') }}">Sell My Maserati</a></li>-->
<!--                     <li><a href="{{ url('sell-my-car/mitsubishi') }}">Sell My Mitsubishi</a></li>-->
<!--                     <li><a href="{{ url('sell-my-car/renault') }}">Sell My Renault</a></li>-->
<!--                     <li><a href="{{ url('sell-my-car/volkswagen') }}">Sell My Volkswagen</a></li>-->
<!--                  </ul>-->
<!--               </div>-->
<!--               <div class="col-lg-2  col-6 col-sm-4  mb-3 mb-lg-0">-->
<!--                  <ul class="list-unstyled brand-list">-->
<!--                     <li><a href="{{ url('sell-my-car/bmw') }}">Sell My BMW</a></li>-->
<!--                     <li><a href="{{ url('sell-my-car/dodge') }}">Sell My Dodge</a></li>-->
<!--                     <li><a href="{{ url('sell-my-car/hyundai') }}">Sell My Hyundai</a></li>-->
<!--                     <li><a href="{{ url('sell-my-car/lamborghini') }}">Sell My Lamborghini</a></li>-->
<!--                     <li><a href="{{ url('sell-my-car/maybach') }}">Sell My Maybach</a></li>-->
<!--                     <li><a href="{{ url('sell-my-car/nissan') }}">Sell My Nissan</a></li>-->
<!--                     <li><a href="{{ url('sell-my-car/rolls-royce') }}">Sell My Rolls Royce</a></li>-->
<!--                     <li><a href="{{ url('sell-my-car/volvo') }}">Sell My Volvo</a></li>-->
<!--                  </ul>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
<!--      </section>-->
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
					    <li><a href="https://www.facebook.com/ExpatCarBuyers/" target="_blank"><img src="{{ asset('images/facebook.svg') }}" alt="facebook"></a></li>
						<li><a href="https://twitter.com/expatcarbuyers" target="_blank"><img src="{{ asset('images/twitter.svg') }}" alt="twitter"></a></li>
						<li><a href="https://www.instagram.com/expatcarbuyers/" target="_blank"><img src="{{ asset('images/instagram.svg') }}" alt="instagram"></a></li>
					</ul>
               </div>
            </div>
            <!--<div class="col-lg-2 col-sm-6 mb-lg-0 mb-3">-->
            <!--   <div class="our-service">-->
            <!--      <h6 class="font-weight-bold mb-3">Userful Links</h6>-->
            <!--      <ul class="list-unstyled">-->
            <!--         <li class="mb-2"><a href="{{ url('sell-any-car') }}">-->
            <!--            <img class="mr-2" src="{{ asset('front/images/Arrow.svg') }}" alt="Arrow"/>-->
            <!--            Sell Any Car</a>-->
            <!--         </li>-->
            <!--         <li class="mb-2"><a href="{{ url('we-buy-any-car') }}">-->
            <!--            <img class="mr-2" src="{{ asset('front/images/Arrow.svg') }}" alt="Arrow"/>-->
            <!--            We Buy Any Car</a>-->
            <!--         </li>-->
            <!--         <li class="mb-2"><a href="{{ url('we-cash-any-car') }}">-->
            <!--            <img class="mr-2" src="{{ asset('front/images/Arrow.svg') }}" alt="Arrow"/>-->
            <!--           We Cash Any Car</a>-->
            <!--         </li>-->
            <!--      </ul>-->
            <!--   </div>-->
            <!--</div>-->
            <!--<div class="col-lg-2 col-sm-6 mb-lg-0 mb-3">-->
            <!--   <div class="follow">-->
            <!--      <h6 class="font-weight-bold mb-3" style="opacity:0;">Userful Links</h6>-->
            <!--      <ul class="list-unstyled">-->
            <!--         <li class="mb-2">-->
            <!--            <img class="mr-2" src="{{ asset('front/images/Arrow.svg') }}" alt="Arrow"/><a href="{{ url('sell-my-car-dubai') }}"> Sell My Car Dubai</a>-->
            <!--         </li>-->
            <!--         <li class="mb-2">-->
            <!--            <img class="mr-2" src="{{ asset('front/images/Arrow.svg') }}" alt="Arrow"/><a href="{{ url('sell-my-car-sharjah') }}"> Sell Car Sharjah</a>-->
            <!--         </li>-->
            <!--         <li class="mb-2"><img class="mr-2" src="{{ asset('front/images/Arrow.svg') }}" alt="Arrow"/><a href="{{ url('sell-my-car-abudhabi') }}"> Sell car Abu Dhabi</a></li>-->
            <!--      </ul>-->
            <!--   </div>-->
            <!--</div>-->
            <div class="col-lg-6 col-md-12 mb-lg-0 mb-3">
               <div class="footer-abt">
                  <h6 class="font-weight-bold mb-3">Keep in touch</h6>
                  <ul class="list-unstyled">
                     <li class="mb-2 d-flex">
                        <span>
                        <img class="mr-2" src="{{ asset('front/images/map-marker-outline.svg') }}" alt="map-marker"/></span>
                        <span>Near FAB Metrostation, <br>Al Asmawi Building, Sheikh Zayed Road,<br> office No. G17 - Dubai - United Arab Emirates
                         
                        </span>
                     </li>
                     <li class="mb-2  d-flex">
                        <span><img class="mr-2" src="{{ asset('front/images/phone.svg') }}" alt="phone"/></span>
                        <span><a href="tel:+971561774555" class="header-phone">+971 56 1774555</a></span>
                     </li>
                     <li class="mb-2  d-flex">
                        <span><img class="mr-2" src="{{ asset('front/images/email-outline.svg') }}" alt="email-outline"/></span>
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
        					    <li><a href="https://www.facebook.com/ExpatCarBuyers/" target="_blank"><img src="{{ asset('images/facebook.svg') }}" alt="facebook"></a></li>
        						<li><a href="https://twitter.com/expatcarbuyers" target="_blank"><img src="{{ asset('images/twitter.svg') }}" alt="twitter"></a></li>
        						<li><a href="https://www.instagram.com/expatcarbuyers/" target="_blank"><img src="{{ asset('images/instagram.svg') }}" alt="instagram"></a></li>
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
               <!--          <li class="mb-2"><a href="{{ url('we-buy-any-car') }}">-->
               <!--             <img class="mr-2" src="{{ asset('front/images/Arrow.svg') }}"/>-->
               <!--             Sell Your Car</a>-->
               <!--          </li>-->
               <!--          <li class="mb-2">-->
               <!--         <img class="mr-2" src="{{ asset('front/images/Arrow.svg') }}"/><a href="{{ url('sell-my-car-dubai') }}"> Sell My Car</a>-->
               <!--      </li>-->
               <!--      <li class="mb-2">-->
               <!--         <img class="mr-2" src="{{ asset('front/images/Arrow.svg') }}"/><a href="{{ url('sell-my-car-sharjah') }}"> Sell Car Dubai</a>-->
               <!--      </li>-->
               <!--      <li class="mb-2"><img class="mr-2" src="{{ asset('front/images/Arrow.svg') }}"/><a href="{{ url('sell-my-car-abudhabi') }}"> Sell car UAE</a></li>-->
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
   <img src="{{ asset('front2/images/arrow.png') }}" alt="" width="18px">
   Go to Top
</a>
</div>

</body>

<!--script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script-->
<script defer src="{{ asset('front/js/jquery.validate.js') }}"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script> 
<script defer src="{{ asset('front2/js/bootstrap.min.js') }}"></script>
 <script defer src="{{ asset('front2/js/jquery.parallax-scroll.min.js') }}"></script>
<script defer src="{{ asset('js/menu.js') }}"></script>
<script type="text/javascript">
	jQuery(document).ready(function() {
    jQuery(".book-now-btn").click(function(event) {
        event.preventDefault();
        jQuery("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });
    });
</script>
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
    jQuery('.non-click').click(function(){
	return false;
    });
});
var baseUrl = "{{ url('/') }}";
jQuery(document).ready(function() {
	
	$.validator.addMethod('regex', function(value, element, param) {
        return this.optional(element) ||
            value.match(typeof param == 'string' ? new RegExp(param) : param);
    },
    'Please enter a value in the correct format.');

	$('#booking_form_step_1').validate({ // initialize the plugin
		errorElement: 'span', //default input error message container
		errorClass: 'help-block help-block-error', // default input error message class
		focusInvalid: false, // do not focus the last invalid input
		ignore: "", // validate all fields including form hidden input
        rules: {
            year: {
                required: true
            },
			brand_name: {
                required: true
            },
			model_name: {
                required: true
            },
			number: {
                required: true,
				regex: /^(?:\971|00971|0)(?:2|3|4|6|7|9|50|52|54|55|56|58)[0-9]{7}$/
				/* regex: "^(?:\+971|00971|0)?(?:50|51|52|55|56|2|3|4|6|7|9)\d{7}$" */
            },
        },
		messages: {
			number: {
				regex: "Please enter a valid phone number.e.g ( 05xxxxxxxx / 9715xxxxxxxx )"
			}
		},
		highlight: function (element) { // hightlight error inputs
			$(element)
					.closest('.form-group').addClass('has-error'); // set error class to the control group
		},
		unhighlight: function (element) { // revert the change done by hightlight
			$(element)
					.closest('.form-group').removeClass('has-error'); // set error class to the control group
		},
		success: function (label) {
			label
					.closest('.form-group').removeClass('has-error'); // set success class to the control group
		},
		submitHandler: function (form) {

			form.submit();
		}
    });
	
	
    jQuery("#brand_val").on('change', function(e) {
    var brand_id = jQuery("#brand_val").val();
    $.ajax({
        url: baseUrl+'/homemodel/'+brand_id,
        type: 'GET',
        beforeSend: function(){
        jQuery(".ajax-loader").show();
        },
        success:function(data) {
            jQuery(".ajax-loader").hide();
            if(data.success){
                    jQuery('#fetched_model').html(data.pro_top).text();
                    console.log(data.pro_top);
                    jQuery('#fetched_model').html(data.pro).text();
                    jQuery('#fetched_branch').html(data.pro1).text();
            }else{
                
            }                
        }
    });
    });
    
    /* jQuery('.myform').on('click', function()
    {
       var y = jQuery('#year').val();
    var phone = jQuery('input[name="number"]').val();
    var brand_name = jQuery("#brand_val").val(); 
    var model_name = jQuery("#fetched_model").val(); 
    var date = jQuery('input[name="app_date"]').val(); 
    var time = jQuery('input[name="app_time"]').val(); 
    var branch = jQuery('#app_branch').val(); 
    var email = jQuery('input[name="app_email"]').val(); 
    var phone_reg = /^(?:\+971|00971|0)?(?:50|51|52|55|56|2|3|4|6|7|9)\d{7}$/;
    var msg;
    
    
    if(phone == '' || phone.trim().length < 1){
    	jQuery('.error_phone').show();
    		msg=false;
    }
    else if(!phone_reg.test(phone.trim())){
    	jQuery('.error_phone').show();
    		msg=false;
    }
    else{
    	jQuery('.error_msg_online').hide();
        jQuery('#home-content').hide();
       jQuery('.phone_get').text(phone);
       jQuery('.y_b_m_get').text(y +' '+ brand_name+ ' ' + model_name + ' ');
    }
    return msg;
    }); */
     
});
function IsEmail(email) {
  var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if(!regex.test(email)) {
    return false;
  }else{
    return true;
  }
}
 </script>
<script type="text/javascript">
 // forceNumeric() plug-in implementation
 jQuery.fn.forceNumeric = function () {
     return this.each(function () {
         jQuery(this).keydown(function (e) {
             var key = e.which || e.keyCode;

             if (!e.shiftKey && !e.altKey && !e.ctrlKey &&
             // numbers   
                 key >= 48 && key <= 57 ||
             // Numeric keypad
                 key >= 96 && key <= 105 ||
             // comma, period and minus, . on keypad
                key == 190 || key == 187 || key == 109 || key == 110 ||
             // Backspace and Tab and Enter
                key == 8 || key == 9 || key == 13 ||
             // Home and End
                key == 35 || key == 36 ||
             // left and right arrows
                key == 37 || key == 39 ||
             // Del and Ins
                key == 46 || key == 45)
                 return true;

             return false;
         });
     });
 }
 jQuery(document).ready(function () {
     jQuery(".numberinput").forceNumeric();
 });
</script>
</body>
</html>