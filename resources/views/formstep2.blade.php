<!doctype html>
<html lang="en">

<head>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KWHZJRK');</script>
<!-- End Google Tag Manager -->
<!-- Hotjar Tracking Code for https://expatcarbuyers.com/ -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:1448350,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{csrf_token()}}">
    <link rel="shortcut icon" href="{{ asset('front/images/carfav.png') }}" />
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('front2/css/bootstrap.min.css') }}">
	<link href="{{ asset('front/css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Oswald:200,300,400,500,600,700|Poiret+One&amp;subset=latin-ext"
	 rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('backend/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
	<title>Expatcarbuyres</title>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<style>
	      label.error{color:red;text-align:left;font-size:12px;line-height:130%;width:100%;display:inline-block!important;padding-left:5px;margin-top:3px;}
	      .form-inline {align-items: flex-start;}
	      .datepicker-inline {display: none!important;}
	  </style>
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KWHZJRK"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <div id="app">
	<div class="bg-grey" {{ $current_url = Route::getCurrentRoute()->uri() }}>
		<div class="header py-lg-4">
			<div class="container">
				<div class="row">
					<div class="col-lg-3">
						<div class="logo">
							<a href="/"><img src="{{ asset('front/images/logo.webp') }}" alt="" class="img-fluid" onerror="this.onerror=null; this.src='{{ asset('front/images/logo.png') }}'"></a>
						</div>
					</div>
					<div class="col-lg-9">
						<div class="navigation_bar">
							<nav class="navbar navbar-expand-lg navbar-light pr-lg-0 pt-0">
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
								 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon"></span>
								</button>

								<div class="collapse navbar-collapse" id="navbarSupportedContent">
									<ul class="navbar-nav ml-auto">
										<!--<li class="nav-item d-flex {{ preg_match('/^(car-service)/',$current_url)?'active':''  }}">
											<a class="nav-link font-mons position-relative px-0 " href="{{ url('/car-service') }}">CAR SERVICES</a>
										</li>-->
										<li class="nav-item d-flex {{ preg_match('/^(about)/',$current_url)?'active':''  }}">
											<a href="{{ url('/about') }}" class="nav-link font-mons position-relative px-0 ">ABOUT</a>
										</li>
										<li class="nav-item d-flex {{ preg_match('/^(faqs)/',$current_url)?'active':''  }}">
											<a class="nav-link font-mons position-relative px-0 " href="{{ url('/faqs') }}">FAQS</a>
										</li>
										<li class="nav-item d-flex {{ preg_match('/^(contact)/',$current_url)?'active':''  }}">
											<a class="nav-link font-mons position-relative px-0 " href="{{ url('/contact') }}">CONTACT</a>
										</li>
										<button class="btn ml-3"><img src="{{ asset('front2/images/phone.png') }}" alt="" class="mr-2" />+971 56 1774555</button>
									</ul>
								</div>
							</nav>
						</div>
					</div>
					<button class="btn ml-3 head-btn-res"><img src="{{ asset('front2/images/phone.png') }}" alt="" class="mr-2" />+971 56 1774555</button>
				</div>
			</div>

		</div>
</div>
	   <section class="py-sm-5 py-4 second-easy-steps"  id="step-2">
			<div class="spacing py-md-4 my-sm-2 my-3 w-100">
	  			<div class="container">
	  				<h4 class="font-poiret font-weight-semi-bold mb-0 text-center"><span class="theme-color">You are Almost Done!</span> Continue below easy steps </h4>
	  				<div class="inner-div py-md-5 py-4">	
	  					<div class="row justify-content-center">
	  							
	  								<div class="col-lg-2 col-md-3  col-sm-4 text-center step mb-3 mb-sm-0">
	  									<figure class="d-inline-block position-relative my-2  hw-64  first">
	  										<img src="images/tick.svg" class="img-fluid" alt="Step Completed">
	  									</figure>
	  									<h6 class="font-weight-semi-bold mt-2 mb-0">Car & Contact <br/>Detail</h6>
	  									<div class="dots active d-sm-block d-none">
		  									<span class="dot"></span>
		  									<span class="dot"></span>
		  									<span class="dot"></span>
	  									</div>
	  								</div>
	  								<div class="col-lg-2 col-md-3  col-sm-4 text-center active step mb-3 mb-sm-0">
	  									<figure class="d-inline-block position-relative my-2 hw-64  second">
	  										<img src="images/tick.svg" class="img-fluid" alt="Step Completed">
	  									</figure>
	  									<h6 class="font-weight-semi-bold mt-2 mb-0">Schedule an <br/>Appointment</h6>
	  									<div class="dots d-sm-block d-none">
		  									<span class="dot"></span>
		  									<span class="dot"></span>
		  									<span class="dot"></span>
	  									</div>
	  								</div>
	  								<div class="col-lg-2 col-md-3 col-sm-4 text-center step">
	  									<figure class="d-inline-block position-relative my-2  hw-64  last">
	  										<img src="images/text-3.svg" class="img-fluid" alt="Step Completed">
	  									</figure>
	  									<h6 class="font-weight-semi-bold mt-2 mb-0 ">Confirm</h6>
	  								</div>

	  					</div>
	  				</div>
	  				<hr class="mb-0" />


	  				<div class="row pt-md-5 pt-4">

	  						<div class="col-sm-6 col-12"> 
  								<figure class="mb-0 text-sm-right text-center  mt-3 mt-sm-0">
  									<div class="hw-32 d-inline-block align-middle mb-0">
  										<img src="images/key.svg" class="img-fluid" alt="car-kery">
  									</div>
  									<span class="h6 d-inline-block align-middle mb-0 phone_get">{{ isset($value['number'])?$value['number'] :'++971561774555' }}</span>
  								</figure>
	  						</div>

	  						<div class="col-sm-6 col-12">
  								<figure class="mb-0 text-sm-left text-center  mt-3 mt-sm-0">
  									<div class="hw-32 d-inline-block align-middle mb-0">
  										<img src="images/call.svg" class="img-fluid" alt="mobile-icon">
  									</div>
  									<span class="h6 d-inline-block align-middle mb-0 y_b_m_get">{{ isset($value['year'])?$value['year'] :'' }} {{ isset($value['brand_name'])?$value['brand_name'] :'' }} {{ isset($value['model_name'])?$value['model_name'] :'' }} </span>
  								</figure>
	  						</div>

						    <form id="myform" method="post" action="{{ url('car-selling-confirmation') }}"  class="form-inline banner-form w-100  pt-4 px-sm-5 px-3 mx-sm-5 bg-transparent border-0 shadow-none from-easy-step mt-0 "  enctype="">
						        @csrf
			    		 <input type="hidden" name="id" value="{{ $booking_id }}"  >
						  <input type="hidden" name="year" value="{{ $value['year'] }}"  >
						  <input type="hidden" name="brand_name" value="{{ $value['brand_name'] }}" > 
			    		 <input type="hidden" name="model_name" value="{{ $value['model_name'] }}" >
			    		 <input type="hidden" name="number" value="{{ $value['number'] }}" >

                          <div class="dropdown  car_date input-append date col-12  col-md-6 col-lg-3 px-xl-2 mb-3 mb-lg-0">
                              <input class="span2 dropdown-toggle form-control form-control w-100 d-block" placeholder="Select date" name="app_date" type="text" id="datepicker" autocomplete="off" readonly>
                           </div>

                           <div class="dropdown  select-time  col-12 col-md-6 col-lg-3 px-xl-2 mb-3 mb-lg-0">
                            <select  class="form-control dropdown-toggle form-control w-100 d-block"  name="app_time" id="app_time">
                                <option value="" >Select time</option>
                                <option value="09:30 AM" >09:00 AM</option>
                                <option value="09:30 AM" >09:30 AM</option>
                                <option value="10:00 AM">10:00 AM</option>
                                <option value="10:30 AM">10:30 AM</option>
                                <option value="11:00 AM">11:00 AM</option>
                                <option value="11:30 AM">11:30 AM</option>
                                <option value="12:00 PM">12:00 PM</option>
                                <option value="12:30 PM">12:30 PM</option>
                                <option value="01:00 PM">01:00 PM</option>
                                <option value="01:30 PM">01:30 PM</option>
                                <option value="02:00 PM">02:00 PM</option>
                                <option value="02:30 PM">02:30 PM</option>
                                <option value="03:00 PM">03:00 PM</option>
                                <option value="03:30 PM">03:30 PM</option>
                                <option value="04:00 PM">04:00 PM</option>
                                <option value="04:30 PM">04:30 PM</option>
                                <option value="05:00 PM">05:00 PM</option>
                                <option value="05:30 PM">05:30 PM</option>
                                <option value="06:00 PM">06:00 PM</option>
                                <option value="06:30 PM">06:30 PM</option>
                                <option value="07:00 PM" >07:00 PM</option>
                            </select>
                           </div>

                           <div class="dropdown  preferred-branch col-12 col-md-6 col-lg-3 px-xl-2 mb-3 mb-lg-0">
                                <select class="form-control dropdown-toggle" style="width: 100%;" id="fetched_branch" name="app_branch" >
                                <option value="" selected disabled="disabled" style="padding: 0px;">Select branch</option>
                                @foreach($branches as $branch)
                                    <option value="{{ $branch->name }}" >{{ $branch->name }}</option>
                                @endforeach
                                </select>
                           </div>
						   <div class="dropdown  car_call col-12 col-md-6 col-lg-3 px-xl-2 mb-3 mb-lg-0">
							<div class="input-group">
							   <div class="input-group-prepend bg-transparent">
								  <span class="input-group-text bg-transparent " id="basic-addon1"><img src="images/email.svg" class="img-fluid width-24"></span>
							   </div>
							   <input type="email" class="form-control border-left-0 pl-0" placeholder="Add Your Email" aria-label="Username" name="app_email" aria-describedby="basic-addon1">
							   <span class="err_msg error_email" style="display:none;color:red;">Please enter a valid email<span>
							</div>
						 </div>

								<h6 class="text-center pt-md-5 pt-4 w-100">You are only 30 seconds away from booking your appointment </h6>
								<div class="w-100 text-center pt-4">
									<button type="submit" class="btn btn-danger px-5 py-2 rounded-corners myform1" type="button"><span class="px-4 py-1 float-left w-100" id="continue-step-btn">Continue</span></button>
									<a class="d-block pt-3 h6 mb-0 clickme" href="#" class=""> < <span class="go-back">Go Back</span></a>
								</div>
						    </form>



	  				</div>


	  			</div>
	  		</div></section>
      <section class="brands py-5 d-none d-md-block">
         <div class="container py-3 ">
            <div class="row">
               <div class="col-md-12">
                  <h6 class="font-weight-bold mb-4">Brands</h6>
               </div>
               <div class="col-lg-2  col-6 col-sm-4 mb-3 mb-lg-0">
                  <ul class="list-unstyled brand-list">
                     <li><a href="{{ url('sell-my-car/acura') }}">Sell My Acura</a></li>
                     <li><a href="{{ url('sell-my-car/bugatti') }}">Sell My Bugatti</a></li>
                     <li><a href="{{ url('sell-my-car/ferrari') }}">Sell My Ferrari</a></li>
                     <li><a href="{{ url('sell-my-car/infiniti') }}">Sell My Infiniti</a></li>
                     <li><a href="{{ url('sell-my-car/land-rover') }}">Sell My Land Rover</a></li>
                     <li><a href="{{ url('sell-my-car/mazda') }}">Sell My Mazda</a></li>
                     <li><a href="{{ url('sell-my-car/opel') }}">Sell My Opel</a></li>
                     <li><a href="{{ url('sell-my-car/subaru') }}">Sell My Subaru</a></li>
                  </ul>
               </div>
               <div class="col-lg-2 col-6  col-sm-4 mb-3 mb-lg-0">
                  <ul class="list-unstyled brand-list">
                     <li><a href="{{ url('sell-my-car/alfa-romeo') }}">Sell My Alfa Romeo</a></li>
                     <li><a href="#" class="non-click">Sell My Buick</a></li>
                     <li><a href="{{ url('sell-my-car/fiat') }}">Sell My Fiat</a></li>
                     <li><a href="{{ url('sell-my-car/jaguar') }}">Sell My Jaguar</a></li>
                     <li><a href="{{ url('sell-my-car/lexus') }}">Sell My Lexus</a></li>
                     <li><a href="{{ url('sell-my-car/mcLaren') }}">Sell My McLaren</a></li>
                     <li><a href="{{ url('sell-my-car/peugeot') }}">Sell My Peugeot</a></li>
                     <li><a href="{{ url('sell-my-car/suzuki') }}">Sell My Suzuki</a></li>
                  </ul>
               </div>
               <div class="col-lg-2 col-6 col-sm-4 mb-3 mb-lg-0">
                  <ul class="list-unstyled brand-list">
                     <li><a href="{{ url('sell-my-car/aston-martin') }}">Sell My Aston Martin</a></li>
                     <li><a href="{{ url('sell-my-car/cadillac') }}">Sell My Cadillac</a></li>
                     <li><a href="{{ url('sell-my-car/ford') }}">Sell My Ford</a></li>
                     <li><a href="{{ url('sell-my-car/jeep') }}">Sell My Jeep</a></li>
                     <li><a href="{{ url('sell-my-car/lincoln') }}">Sell My Lincoln</a></li>
                     <li><a href="{{ url('sell-my-car/mercedes-benz') }}">Sell My Mercedes-Benz</a></li>
                     <li><a href="{{ url('sell-my-car/pontiac') }}">Sell My Pontiac</a></li>
                     <li><a href="{{ url('sell-my-car/tesla') }}">Sell My Tesla</a></li>
                  </ul>
               </div>
               <div class="col-lg-2  col-6 col-sm-4 mb-3 mb-lg-0">
                  <ul class="list-unstyled brand-list">
                     <li><a href="{{ url('sell-my-car/audi') }}">Sell My Audi</a></li>
                     <li><a href="{{ url('sell-my-car/chevrolet') }}">Sell My Chevrolet</a></li>
                     <li><a href="{{ url('sell-my-car/gmc') }}">Sell My GMC</a></li>
                     <li><a href="{{ url('sell-my-car/kia') }}">Sell My Kia</a></li>
                     <li><a href="{{ url('sell-my-car/lotus') }}">Sell My Lotus</a></li>
                     <li><a href="{{ url('sell-my-car/mini') }}">Sell My Mini</a></li>
                     <li><a href="{{ url('sell-my-car/porsche') }}">Sell My Porsche</a></li>
                     <li><a href="{{ url('sell-my-car/toyota') }}">Sell My Toyota</a></li>
                  </ul>
               </div>
               <div class="col-lg-2  col-6 col-sm-4 mb-3 mb-lg-0">
                  <ul class="list-unstyled brand-list">
                     <li><a href="{{ url('sell-my-car/bentley') }}">Sell My Bentley</a></li>
                     <li><a href="{{ url('sell-my-car/chrysler') }}">Sell My Chrysler</a></li>
                     <li><a href="{{ url('sell-my-car/honda') }}">Sell My Honda</a></li>
                     <li><a href="#" class="non-click">Sell My Koenigsegg</a></li>
                     <li><a href="{{ url('sell-my-car/maserati') }}">Sell My Maserati</a></li>
                     <li><a href="{{ url('sell-my-car/mitsubishi') }}">Sell My Mitsubishi</a></li>
                     <li><a href="{{ url('sell-my-car/renault') }}">Sell My Renault</a></li>
                     <li><a href="{{ url('sell-my-car/volkswagen') }}">Sell My Volkswagen</a></li>
                  </ul>
               </div>
               <div class="col-lg-2  col-6 col-sm-4  mb-3 mb-lg-0">
                  <ul class="list-unstyled brand-list">
                     <li><a href="{{ url('sell-my-car/bmw') }}">Sell My BMW</a></li>
                     <li><a href="{{ url('sell-my-car/dodge') }}">Sell My Dodge</a></li>
                     <li><a href="{{ url('sell-my-car/hyundai') }}">Sell My Hyundai</a></li>
                     <li><a href="{{ url('sell-my-car/lamborghini') }}">Sell My Lamborghini</a></li>
                     <li><a href="{{ url('sell-my-car/maybach') }}">Sell My Maybach</a></li>
                     <li><a href="{{ url('sell-my-car/nissan') }}">Sell My Nissan</a></li>
                     <li><a href="{{ url('sell-my-car/rolls-royce') }}">Sell My Rolls Royce</a></li>
                     <li><a href="{{ url('sell-my-car/volvo') }}">Sell My Volvo</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </section>
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
            <!--         <li class="mb-2"><a href="{{ url('we-buy-any-car') }}">-->
            <!--            <img class="mr-2" src="{{ asset('front/images/Arrow.svg') }}"/>-->
            <!--            Sell Your Car</a>-->
            <!--         </li>-->
            <!--      </ul>-->
            <!--   </div>-->
            <!--</div>-->
            <!--<div class="col-lg-2 col-sm-6 mb-lg-0 mb-3">-->
            <!--   <div class="follow">-->
            <!--      <h6 class="font-weight-bold mb-3" style="opacity:0;">Userful Links</h6>-->
            <!--      <ul class="list-unstyled">-->
            <!--         <li class="mb-2">-->
            <!--            <img class="mr-2" src="{{ asset('front/images/Arrow.svg') }}"/><a href="{{ url('sell-my-car-dubai') }}">Sell My Car</a>-->
            <!--         </li>-->
            <!--         <li class="mb-2">-->
            <!--            <img class="mr-2" src="{{ asset('front/images/Arrow.svg') }}"/><a href="{{ url('sell-my-car-sharjah') }}">Sell Car Dubai</a>-->
            <!--         </li>-->
            <!--         <li class="mb-2"><img class="mr-2" src="{{ asset('front/images/Arrow.svg') }}"/><a href="{{ url('sell-my-car-abudhabi') }}">Sell car UAE</a></li>-->
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
               <div class="card border-0 p-0">
                  <div class="card-header p-0" id="headingOne">
                     <h5 class="mb-0">
                        <button class="btn collapsed w-100 text-left py-2 text-body text-uppercase position-relative" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        Brands
                        <span class="plus"></span>
                        </button>
                     </h5>
                  </div>
                  <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                     <div class="card-body">
                        <div class="row">
                           <div class="col-lg-2  col-6 col-sm-4 mb-3 mb-lg-0">
                              <ul class="list-unstyled brand-list">
                                 <li><a href="{{ url('sell-my-car/acura') }}">Sell My Acura</a></li>
                                 <li><a href="{{ url('sell-my-car/bugatti') }}">Sell My Bugatti</a></li>
                                 <li><a href="{{ url('sell-my-car/ferrari') }}">Sell My Ferrari</a></li>
                                 <li><a href="{{ url('sell-my-car/infiniti') }}">Sell My Infiniti</a></li>
                                 <li><a href="{{ url('sell-my-car/land-rover') }}">Sell My Land Rover</a></li>
                                 <li><a href="{{ url('sell-my-car/mazda') }}">Sell My Mazda</a></li>
                                 <li><a href="{{ url('sell-my-car/opel') }}">Sell My Opel</a></li>
                                 <li><a href="{{ url('sell-my-car/subaru') }}">Sell My Subaru</a></li>
                              </ul>
                           </div>
                           <div class="col-lg-2 col-6  col-sm-4 mb-3 mb-lg-0">
                              <ul class="list-unstyled brand-list">
                                 <li><a href="{{ url('sell-my-car/alfa-romeo') }}">Sell My Alfa Romeo</a></li>
                                 <li><a href="#" class="non-click">Sell My Buick</a></li>
                                 <li><a href="{{ url('sell-my-car/fiat') }}">Sell My Fiat</a></li>
                                 <li><a href="{{ url('sell-my-car/jaguar') }}">Sell My Jaguar</a></li>
                                 <li><a href="{{ url('sell-my-car/lexus') }}">Sell My Lexus</a></li>
                                 <li><a href="{{ url('sell-my-car/mclaren') }}">Sell My McLaren</a></li>
                                 <li><a href="{{ url('sell-my-car/peugeot') }}">Sell My Peugeot</a></li>
                                 <li><a href="{{ url('sell-my-car/suzuki') }}">Sell My Suzuki</a></li>
                              </ul>
                           </div>
                           <div class="col-lg-2 col-6 col-sm-4 mb-3 mb-lg-0">
                              <ul class="list-unstyled brand-list">
                                 <li><a href="{{ url('sell-my-car/aston-martin') }}">Sell My Aston Martin</a></li>
                                 <li><a href="{{ url('sell-my-car/Cadillac') }}">Sell My Cadillac</a></li>
                                 <li><a href="{{ url('sell-my-car/ford') }}">Sell My Ford</a></li>
                                 <li><a href="{{ url('sell-my-car/jeep') }}">Sell My Jeep</a></li>
                                 <li><a href="{{ url('sell-my-car/lincoln') }}">Sell My Lincoln</a></li>
                                 <li><a href="{{ url('sell-my-car/mercedes-benz') }}">Sell My Mercedes-Benz</a></li>
                                 <li><a href="{{ url('sell-my-car/pontiac') }}">Sell My Pontiac</a></li>
                                 <li><a href="{{ url('sell-my-car/tesla') }}">Sell My Tesla</a></li>
                              </ul>
                           </div>
                           <div class="col-lg-2  col-6 col-sm-4 mb-3 mb-lg-0">
                              <ul class="list-unstyled brand-list">
                                 <li><a href="{{ url('sell-my-car/audi') }}">Sell My Audi</a></li>
                                 <li><a href="{{ url('sell-my-car/chevrolet') }}">Sell My Chevrolet</a></li>
                                 <li><a href="{{ url('sell-my-car/gmc') }}">Sell My GMC</a></li>
                                <li><a href="{{ url('sell-my-car/kia') }}">Sell My Kia</a></li>
                                 <li><a href="{{ url('sell-my-car/lotus') }}">Sell My Lotus</a></li>
                                 <li><a href="{{ url('sell-my-car/mini') }}">Sell My Mini</a></li>
                                 <li><a href="{{ url('sell-my-car/porsche') }}">Sell My Porsche</a></li>
                                 <li><a href="{{ url('sell-my-car/toyota') }}">Sell My Toyota</a></li>
                              </ul>
                           </div>
                           <div class="col-lg-2  col-6 col-sm-4 mb-3 mb-lg-0">
                              <ul class="list-unstyled brand-list">
                                 <li><a href="{{ url('sell-my-car/bentley') }}">Sell My Bentley</a></li>
                                 <li><a href="{{ url('sell-my-car/chrysler') }}">Sell My Chrysler</a></li>
                                 <li><a href="{{ url('sell-my-car/honda') }}">Sell My Honda</a></li>
                                 <li><a href="#" class="non-click">Sell My Koenigsegg</a></li>
                                 <li><a href="{{ url('sell-my-car/maserati') }}">Sell My Maserati</a></li>
                                 <li><a href="{{ url('sell-my-car/mitsubishi') }}">Sell My Mitsubishi</a></li>
                                 <li><a href="{{ url('sell-my-car/renault') }}">Sell My Renault</a></li>
                                 <li><a href="{{ url('sell-my-car/volkswagen') }}">Sell My Volkswagen</a></li>
                              </ul>
                           </div>
                           <div class="col-lg-2  col-6 col-sm-4  mb-3 mb-lg-0">
                              <ul class="list-unstyled brand-list">
                                 <li><a href="{{ url('sell-my-car/bmw') }}">Sell My BMW</a></li>
                                 <li><a href="{{ url('sell-my-car/dodge') }}">Sell My Dodge</a></li>
                                 <li><a href="{{ url('sell-my-car/hyundai') }}">Sell My Hyundai</a></li>
                                 <li><a href="{{ url('sell-my-car/lamborghini') }}">Sell My Lamborghini</a></li>
                                 <li><a href="{{ url('sell-my-car/maybach') }}">Sell My Maybach</a></li>
                                 <li><a href="{{ url('sell-my-car/nissan') }}">Sell My Nissan</a></li>
                                 <li><a href="{{ url('sell-my-car/rolls-royce') }}">Sell My Rolls Royce</a></li>
                                 <li><a href="{{ url('sell-my-car/volvo') }}">Sell My Volvo</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
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
               <!--          <li class="mb-2"><a href="{{ url('we-buy-any-car') }}">-->
               <!--             <img class="mr-2" src="{{ asset('front/images/Arrow.svg') }}"/>-->
               <!--             Sell Your Car</a>-->
               <!--          </li>-->
               <!--          <li class="mb-2">-->
               <!--         <img class="mr-2" src="{{ asset('front/images/Arrow.svg') }}"/><a href="{{ url('sell-my-car-dubai') }}">Sell My Car</a>-->
               <!--      </li>-->
               <!--      <li class="mb-2">-->
               <!--         <img class="mr-2" src="{{ asset('front/images/Arrow.svg') }}"/><a href="{{ url('sell-my-car-sharjah') }}">Sell Car Dubai</a>-->
               <!--      </li>-->
               <!--      <li class="mb-2"><img class="mr-2" src="{{ asset('front/images/Arrow.svg') }}"/><a href="{{ url('sell-my-car-abudhabi') }}">Sell car UAE</a></li>-->
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
                              <span><a href="tel:+971561774555">+971 56 1774555</a></span>
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
               <a href="{{ url('privacy-policy') }}">Privacy Policy </a>|<a href="{{ url('terms-conditions') }}"> Terms & Conditions</a> | <a href="{{ url('contact') }}">Contact Us</a>
            </div>
         </div>
      </section>
      </div>
      <a href="#" class="go-to-top font-mons" id="go-to-top" style="">
   <img src="{{ asset('front2/images/arrow.png') }}" alt="" width="18px">
   Go to Top
</a>
      <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script-->
	  <script src="{{ asset('front/js/jquery.validate.js') }}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	   <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
	  <!--script src="{{ mix('js/app.js') }}"></script-->
	  <script src="{{ asset('backend/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<script>
jQuery(window).scroll(function() {
    var height = jQuery(window).scrollTop();
    if (height > 100) {
        jQuery('#go-to-top').fadeIn();
    } else {
       jQuery('#go-to-top').fadeOut();
    }
});
jQuery('.input-append').datepicker()
jQuery(document).ready(function() {
    jQuery("#go-to-top").click(function(event) {
        event.preventDefault();
        jQuery("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });
     jQuery(".navbar-toggler").click(function(){
        jQuery(".navbar-collapse").toggle();
    });
     jQuery('.non-click').click(function(){
	return false;
    });
});
</script>
<script>
if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
$("#slide1").addClass("active");
}


var baseUrl = "{{ url('/') }}";
jQuery(document).ready(function() {
	
	$('#myform').validate({ // initialize the plugin
        rules: {
            app_date: {
                required: true
            },
			app_time: {
                required: true
            },
			app_email: {
                required: true
            },
            
        }
    });
	
    jQuery("#brand_val").on('change', function(e) {
    var brand_id = jQuery("#brand_val").val();
    $.ajax({
        url: baseUrl+'/homemodel/'+brand_id,
        type: 'GET',
        success:function(data) {
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
    jQuery('.continue-step-btn').on('click', function()
    {
    var y = jQuery('#year').val();
    var phone = jQuery('input[name="number"]').val();
    var brand_name = jQuery("#brand_val").val(); 
    var model_name = jQuery("#fetched_model").val(); 
    var date = jQuery('input[name="app_date"]').val(); 
    var time = jQuery('#app_time').val(); 
    var phone_reg = /^(?:\+971|00971|0)?(?:50|51|52|54|55|56|58|2|3|4|6|7|9)\d{7}$/;
    var branch = jQuery('#fetched_branch').val(); 
    var email = jQuery('input[name="app_email"]').val(); 
    var msg;
    if(phone == '' || phone.trim().length < 1){
    	jQuery('.error_phone').show();
    		msg=false;
    }
    else if(!phone_reg.test(phone.trim())){
    	jQuery('.error_phone').show();
    		msg=false;
    }
    if(email== ''){
      jQuery('.error_email').show();
        msg=false;
    }else if(IsEmail(email)==false){
      jQuery('.error_email').show();
      return false;
    }else{
       jQuery('.error_email').hide();
       
       jQuery('.email_get').text(email);
       
    }
    return msg;
    });
     
});
function IsEmail(email) {
  var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if(!regex.test(email)) {
    return false;
  }else{
    return true;
  }
}
var date = new Date();
date.setDate(date.getDate());
 jQuery('#datepicker').datepicker({
      autoclose: true,
      todayHighlight: true,
      minDate:0,
      startDate: date,
      daysOfWeekDisabled: "5",
    });
 </script>
 </body>
</html>