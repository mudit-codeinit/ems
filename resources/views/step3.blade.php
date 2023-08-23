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
      <title>Expatcarbuyers</title>
      
   </head>
   <body>
       <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KWHZJRK"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
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
                        <button class="btn btn-danger ml-3 px-3 py-2 btn-phone d-none d-lg-inline-block" id="book_appon"><img src="{{ asset('front/images/phone.png') }}" alt="" class="mr-2" /><a href="tel:+971561774555" class="header-phone">+971 56 1774555</a></button>
                     </ul>
                  </div>
               </div>
            </nav>
         </div>
      </div>
      	<section class="py-sm-5 py-4 final-easy-step"  id="step-3">
			<div class="spacing py-md-4 my-sm-2 my-3 w-100">
	  			<div class="container">
	  				<h4 class="font-poiret font-weight-semi-bold mb-0 text-center"><span class="theme-color">Congratulation! </span> Your appointment is Scheduled!</h4>
	  				<div class="inner-div py-md-5 py-4">	
	  					<div class="row justify-content-center">
	  							
	  								<div class="col-lg-2 col-md-3  col-sm-4 text-center step mb-3 mb-sm-0">
	  									<figure class="d-inline-block position-relative my-2  w-100  first">
	  										<img src="images/tick.jpg" class="img-fluid" alt="Step Completed">
	  									</figure>
	  									<h6 class="font-weight-semi-bold mt-2 mb-0">Car & Contact <br/>Detail</h6>
	  									<div class="dots active d-sm-block d-none">
		  									<span class="dot"></span>
		  									<span class="dot"></span>
		  									<span class="dot"></span>
	  									</div>
	  								</div>
	  								<div class="col-lg-2 col-md-3  col-sm-4 text-center active step mb-3 mb-sm-0">
	  									<figure class="d-inline-block position-relative my-2 w-100  second">
	  										<img src="images/tick.jpg" class="img-fluid" alt="Step Completed">
	  									</figure>
	  									<h6 class="font-weight-semi-bold mt-2 mb-0">Schedule an <br/>Appointment</h6>
	  									<div class="dots active d-sm-block d-none">
		  									<span class="dot"></span>
		  									<span class="dot"></span>
		  									<span class="dot"></span>
	  									</div>
	  								</div>
	  								<div class="col-lg-2 col-md-3 col-sm-4 text-center step">
	  									<figure class="d-inline-block position-relative my-2  w-100  last">
	  										<img src="images/tick.jpg" class="img-fluid" alt="Step Completed">
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
  									<span class="h6 d-inline-block align-middle mb-0 phone_get">{{ isset($value['number'])?$value['number'] :'+971561774555' }}</span>
  								</figure>
	  						</div>

	  						<div class="col-sm-6 col-12">
  								<figure class="mb-0 text-sm-left text-center  mt-3 mt-sm-0">
  									<div class="hw-32 d-inline-block align-middle mb-0">
  										<img src="images/call.svg" class="img-fluid" alt="mobile-icon">
  									</div>
  									<span class="h6 d-inline-block align-middle mb-0 y_b_m_get">{{ isset($value['year'])?$value['year'] :'' }} {{ isset($value['brand_name'])?$value['brand_name'] :'' }} {{ isset($value['model_name'])?$value['model_name'] :'' }}</span>
  								</figure>
	  						</div>
	  						<div class="text-center col-12 mt-4 pt-1 ">
		  						<h6 class="mb-3">We've scheduled your appointment on, <strong>{{ isset($value['app_date'])?$value['app_date'] :'19/11/2018' }}, {{ isset($value['app_time'])?$value['app_time'] :'06:00 PM' }}</strong>, to evaluate your <strong class="y_b_m_get">{{ isset($value['year'])?$value['year'] :'' }} {{ isset($value['brand_name'])?$value['brand_name'] :'' }} {{ isset($value['model_name'])?$value['model_name'] :'' }}</strong> </h6>
								<h6 class="mb-3">We will give you a call to confirm your Appointment.</h6>
								<h6 class="">Please check your email <strong class="email_get">{{ isset($value['app_email'])?$value['app_email'] :'demo@gmail.com' }}</strong> to confirm your appointment. Or call now <strong><a href="tel:+97143337876">+971 4 333 7876</a></strong></h6>
							</div>




	  				</div>
                    
                    <div class="row pt-md-5 pt-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3612.2839561779465!2d55.2029790150081!3d25.126089083929315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6b44e5d599e5%3A0x5ef0fe7dd34ca4bc!2sExpat+Car+Buyers!5e0!3m2!1sen!2sin!4v1554722182072!5m2!1sen!2sin" width="100%" height=350" frameborder="0" style="border:0" allowfullscreen></iframe>
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
      </div>
      <a href="#" class="go-to-top font-mons" id="go-to-top" style="">
   <img src="{{ asset('front/images/arrow.png') }}" alt="" width="18px">
   Go to Top
</a>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	   <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
	  <script src="{{ mix('js/app.js') }}"></script>
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
    jQuery('.myform').on('click', function()
    {
       var y = jQuery('#year').val();
    var phone = jQuery('input[name="number"]').val();
    var brand_name = jQuery("#brand_val").val(); 
    var model_name = jQuery("#fetched_model").val(); 
    var date = jQuery('input[name="app_date"]').val(); 
    var time = jQuery('input[name="app_time"]').val(); 
    var branch = jQuery('#app_branch').val(); 
    var email = jQuery('input[name="app_email"]').val(); 
    var phone_reg = /^(?:\+971|00971|0)?(?:50|51|52|54|55|56|58|2|3|4|6|7|9)\d{7}$/;
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
    });
    jQuery('.myform1').on('click', function()
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
        jQuery.ajax({
				    url: baseUrl+'/booking',
					type:"post",
					async:false,
					data:{
						'_token':$('input[name=_token]').val(),
						'y': y,
						'brand_name': brand_name,
						'model_name': model_name,
						'phone': phone,
						'date': date,
						'time': time,
						'branch': branch,
						'email': email,
					},
					success:function(data){
						//console.log(data);						
						//$("#p").text(data[0]);
					}
				});

       jQuery('.error_email').hide();
       
       jQuery('.email_get').text(email);
       
    }
    return msg;
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
 </body>
</html>