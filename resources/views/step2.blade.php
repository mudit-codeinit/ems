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
	   
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<meta name="csrf-token" content="{{csrf_token()}}">
	  <link rel="shortcut icon" href="{{ asset('front/images/carfav.png') }}" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{ asset('front/css/bootstrap.css') }}">
      <link href="{{ asset('front/css/style.css') }}" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
         rel="stylesheet">
       <link rel="stylesheet" href="{{ asset('backend/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
      <title>Expatcarbuyers</title>
	  
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  	<style>
	      label.error{color:red;text-align:left;font-size:12px;line-height:130%;width:100%;display:inline-block!important;padding-left:5px;margin-top:3px;}
	      .form-inline {align-items: flex-start;}
	      .datepicker-inline {display: none!important;}
	  </style>
   </head>
   <body>
       <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KWHZJRK');</script>
<!-- End Google Tag Manager -->
       <div id="app">
      <div class="header-main bg-white d-block position-relative" {{ $current_url = Route::getCurrentRoute()->uri() }}>

         <div class="header">

            <div class="col-12 text-right d-inline-block d-lg-none py-2">

            <button class="btn btn-danger"><img src="{{ asset('front/images/phone.png') }}" alt="" class="mr-2" />+971 56 1774555</button>   
         </div>
            <nav class="navbar navbar-expand-lg navbar-light">
               <div class="container">
                  <a href="/" class="d-inline-block logo"><img src="{{ asset('front/images/logo.webp') }}" alt="" class="img-fluid logocompany" onerror="this.onerror=null; this.src='{{ asset('front/images/logo.png') }}'"></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>

					<div class="collapse navbar-collapse mt-3 mt-lg-0" id="navbarsExample05">
                     <ul class="navbar-nav ml-auto navigation_bar">
                        <!--<li class="nav-item {{ preg_match('/^(car-service)/',$current_url)?'active':''  }}">
                           <a class="nav-link " href="{{ url('/car-service') }}">CAR SERVICES</a>
                        </li>-->
                        <li class="nav-item">
                           <a class="nav-link {{ preg_match('/^(about)/',$current_url)?'active':''  }}" href="{{ url('/about') }}">ABOUT</a>
                        </li>
                        <li class="nav-item  {{ preg_match('/^(faqs)/',$current_url)?'active':''  }}">
                           <a class="nav-link" href="{{ url('/faqs') }}">FAQS</a>
                        </li>
						 <li class="nav-item {{ preg_match('/^(contact)/',$current_url)?'active':''  }}">
                           <a class="nav-link " href="{{ url('/contact') }}">CONTACT</a>
                        </li>
                        <button class="btn btn-danger ml-3 px-3 py-2 btn-phone d-none d-lg-inline-block"><img src="{{ asset('front/images/phone.png') }}" alt="" class="mr-2" />+971 56 1774555</button>
                     </ul>
                  </div>
               </div>
            </nav>
         </div>
      </div>

	  <section class="py-sm-5 py-4 second-easy-steps"  id="step-2">
			<div class="spacing py-md-4 my-sm-2 my-3 w-100">
	  			<div class="container">
	  				
	  			
                    <h4 class="font-poiret font-weight-semi-bold mb-0 text-center"><span class="theme-color">You are Almost Done!</span> Continue below easy steps </h4>
	  				

	  				<div class="row pt-md-5 pt-4">

	  						<div class="col-sm-6 col-12"> 
  								<figure class="mb-0 text-sm-right text-center  mt-3 mt-sm-0">
  									<div class="hw-32 d-inline-block align-middle mb-0">
  										<img src="images/key.svg" class="img-fluid" alt="car-kery">
  									</div>
  									<span class="h6 d-inline-block align-middle mb-0 phone_get">{{ isset($value['number'])?$value['number'] :'+971561774555' }}</span>
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

						    <form method="post" id="myform" action="{{ url('car-selling-confirmation') }}"  class="form-inline banner-form w-100  pt-4 px-sm-5 px-3 mx-sm-5 bg-transparent border-0 shadow-none from-easy-step mt-0 "  enctype="">
						        @csrf
						  <input type="hidden" name="id" value="{{ $booking_id }}"  >
						  <input type="hidden" name="year" value="{{ $value['year'] }}"  >
						  <input type="hidden" name="brand_name" value="{{ $value['brand_name'] }}" > 
			    		 <input type="hidden" name="model_name" value="{{ $value['model_name'] }}" >
			    		 <input type="hidden" name="number" value="{{ $value['number'] }}" >

                          <div class="dropdown  car_date input-append date col-12  col-md-6 col-lg-3 px-xl-2 mb-3 mb-lg-0">
                              <input class="span2 dropdown-toggle form-control form-control w-100 d-block datepicker" placeholder="Select date" name="app_date" type="text" id="datepicker" autocomplete="off" readonly>
                           </div>

                           <div class="dropdown  select-time  col-12 col-md-6 col-lg-3 px-xl-2 mb-3 mb-lg-0">
                            <select class="form-control dropdown-toggle form-control w-100 d-block" name="app_time" id="app_time">
                                <option value="" >Select time</option>
                               
                                 
                                <option value="09:00 AM">09:00 AM</option>
                                
                                
                                <option value="09:30 AM">09:30 AM</option>
                                
                                
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
                               
                                <option value="07:00 PM">07:00 PM</option>
                                
                            </select>
                           </div>

                           <div class="dropdown  preferred-branch col-12 col-md-6 col-lg-3 px-xl-2 mb-3 mb-lg-0">
                                <select class="form-control dropdown-toggle" style="width: 100%;" id="fetched_branch" name="branch" >
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
                    
                    	<hr class="mb-0" / style="padding-bottom:20px">
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
      <a href="#" class="go-to-top font-mons" id="go-to-top" style="">
   <img src="{{ asset('front/images/arrow.png') }}" alt="" width="18px">
   Go to Top
</a>
<!--script src="{{ asset('front/js/jquery.js') }}"></script-->

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
jQuery(document).ready(function() {
    jQuery("#go-to-top").click(function(event) {
        event.preventDefault();
        jQuery("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });
    jQuery(".navbar-toggler").click(function(){
        jQuery(".navigation_bar").toggle();
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
});
$('.clickme').click(function() {
   if(confirm("Are you sure you want to navigate away from this page?"))
   {
      history.go(-1);
   }        
   return false;
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
    }).on('changeDate', function(e) {
        var dt = new Date();
        var time = dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();
        var todaydate = Date.parse(dt);
         
        var sdt = new Date(e.date);
        var selecteddateformat = sdt.getFullYear()+"-"+(sdt.getMonth() + 1)+"-"+sdt.getDate()+" "+time;
        var selecteddate = new Date(selecteddateformat);
        var selected_date = Date.parse(selecteddate);
        
        if(dt.getMinutes() > 29){
            dt.setHours(dt.getHours()+1);
        }
        var ctime = dt.getHours() + "" + (dt.getMinutes() > 0 && dt.getMinutes() <= 29 ? '30' : '00' );
        //console.log(ctime);
        
        jQuery('#app_time').empty();
        var options = '<option value="">Select time</option>';
        var app_times = [
            {'index':"900", 'value':"09:00 AM"}, 
            {'index':"930", 'value':"09:30 AM"}, 
            {'index':"1000", 'value':"10:00 AM"}, 
            {'index':"1030", 'value':"10:30 AM"},
            {'index':"1100", 'value':"11:00 AM"},
            {'index':"1130", 'value':"11:30 AM"},
            {'index':"1200", 'value':"12:00 PM"},
            {'index':"1230", 'value':"12:30 PM"},
            {'index':"1300", 'value':"01:00 PM"},
            {'index':"1330", 'value':"01:30 PM"},
            {'index':"1400", 'value':"02:00 PM"},
            {'index':"1430", 'value':"02:30 PM"},
            {'index':"1500", 'value':"03:00 PM"},
            {'index':"1530", 'value':"03:30 PM"},
            {'index':"1600", 'value':"04:00 PM"},
            {'index':"1630", 'value':"04:30 PM"},
            {'index':"1700", 'value':"05:00 PM"},
            {'index':"1730", 'value':"05:30 PM"},
            {'index':"1800", 'value':"06:00 PM"},
            {'index':"1830", 'value':"06:30 PM"},
            {'index':"1900", 'value':"07:00 PM"}, 
        ];
        
        if(todaydate == selected_date){
            jQuery.each(app_times, function(index, value){
                //console.log(ctime, value.index);
                if(Number(ctime) <= Number(value.index)){
                   // console.log(ctime, value.index, 'yes');
                    options += '<option value="'+value.value+'">'+value.value+'</option>';
                }
            });
        }else{
            jQuery.each(app_times, function(index, value){
                options += '<option value="'+value.value+'">'+value.value+'</option>';
            });
        }
        jQuery('#app_time').html(options);
    });
    
    
 </script>
 </body>
</html>