<!doctype html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<!-- Required meta tags -->
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{csrf_token()}}">
     <link rel="shortcut icon" href="{{ asset('front/images/carfav.png') }}" />
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('front2/css/bootstrap.min.css') }}">

	<link href="{{ asset('front/css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Oswald:200,300,400,500,600,700|Poiret+One&amp;subset=latin-ext"
	 rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	    .header-section {padding: 0 1rem 0.5rem 1rem;}
	</style>
	<title>Expatcarbuyres</title>
</head>

<body>
    <div id="app">
	<div class="header-3-style bg-grey">
		<div class="header py-lg-4">
			<div class="container">
				<div class="row header-section">
					<div class="col-lg-3">
						<div class="logo">
							<a href="/"><img src="{{ asset('front/images/logo.webp') }}" alt="" class="img-fluid" onerror="this.onerror=null; this.src='{{ asset('front/images/logo.png') }}'"></a>
						</div>
					</div>
					<div class="col-lg-9">
						<div class="navigation_bar text-right">
                            <button class="btn ml-3"><a href="tel:+97143337876" class="header-phone"><img src="{{ asset('front2/images/phone.png') }}" alt="" class="mr-2" />+971 4 333 7876</a></button>
                            <button class="custom-nav-button navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
						</div>
					</div>
					<button class="btn ml-3 head-btn-res"><img src="{{ asset('front2/images/phone.png') }}" alt="" class="mr-2" />+971 4 333 7876</button>
				</div>
			</div>
            @include('partials.menu')
		</div>
	</div>


	
	<div class="subscribe pt_ninty">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-md-10 mx-auto">
					<h3 class="text-uppercase font-poiret mb-5 text-center text-black">Page Not Found</h3>
					<div class="news_sub text-center">
						<button><a href="/" style="color:#fff;">Back to Homepage</a></button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<section class="brands py-5 d-none d-md-block">
         <div class="container py-3 ">
            <div class="row">
               <div class="col-md-12">
                  <h6 class="font-weight-bold mb-4">Brands</h6>
               </div>
               <div class="col-lg-2  col-6 col-sm-4 mb-3 mb-lg-0">
                  <ul class="list-unstyled brand-list">
                     <li><a href="{{ url('sell-acura') }}">Sell Your Acura</a></li>
                     <li><a href="{{ url('sell-bugatti') }}">Sell Your Bugatti</a></li>
                     <li><a href="{{ url('sell-ferrari') }}">Sell Your Ferrari</a></li>
                     <li><a href="{{ url('sell-infiniti') }}">Sell Your Infiniti</a></li>
                     <li><a href="{{ url('sell-land-rover') }}">Sell Your Land Rover</a></li>
                     <li><a href="{{ url('sell-mazda') }}">Sell Your Mazda</a></li>
                     <li><a href="{{ url('sell-opel') }}">Sell Your Opel</a></li>
                     <li><a href="{{ url('sell-subaru') }}">Sell Your Subaru</a></li>
                  </ul>
               </div>
               <div class="col-lg-2 col-6  col-sm-4 mb-3 mb-lg-0">
                  <ul class="list-unstyled brand-list">
                     <li><a href="{{ url('sell-alfa-romeo') }}">Sell Your Alfa Romeo</a></li>
                     <li><a href="#" class="non-click">Sell Your Buick</a></li>
                     <li><a href="{{ url('sell-fiat') }}">Sell Your Fiat</a></li>
                     <li><a href="{{ url('sell-jaguar') }}">Sell Your Jaguar</a></li>
                     <li><a href="{{ url('sell-lexus') }}">Sell Your Lexus</a></li>
                     <li><a href="{{ url('sell-mcLaren') }}">Sell Your McLaren</a></li>
                     <li><a href="{{ url('sell-peugeot') }}">Sell Your Peugeot</a></li>
                     <li><a href="{{ url('sell-suzuki') }}">Sell Your Suzuki</a></li>
                  </ul>
               </div>
               <div class="col-lg-2 col-6 col-sm-4 mb-3 mb-lg-0">
                  <ul class="list-unstyled brand-list">
                     <li><a href="{{ url('sell-aston-martin') }}">Sell Your Aston Martin</a></li>
                     <li><a href="{{ url('sell-cadillac') }}">Sell Your Cadillac</a></li>
                     <li><a href="{{ url('sell-ford') }}">Sell Your Ford</a></li>
                     <li><a href="{{ url('sell-jeep') }}">Sell Your Jeep</a></li>
                     <li><a href="{{ url('sell-lincoln') }}">Sell Your Lincoln</a></li>
                     <li><a href="{{ url('sell-mercedes-benz') }}">Sell Your Mercedes-Benz</a></li>
                     <li><a href="{{ url('sell-pontiac') }}">Sell Your Pontiac</a></li>
                     <li><a href="{{ url('sell-tesla') }}">Sell Your Tesla</a></li>
                  </ul>
               </div>
               <div class="col-lg-2  col-6 col-sm-4 mb-3 mb-lg-0">
                  <ul class="list-unstyled brand-list">
                     <li><a href="{{ url('sell-audi') }}">Sell Your Audi</a></li>
                     <li><a href="{{ url('sell-chevrolet') }}">Sell Your Chevrolet</a></li>
                     <li><a href="{{ url('sell-gmc') }}">Sell Your GMC</a></li>
                     <li><a href="{{ url('sell-kia') }}">Sell Your Kia</a></li>
                     <li><a href="{{ url('sell-lotus') }}">Sell Your Lotus</a></li>
                     <li><a href="{{ url('sell-mini') }}">Sell Your Mini</a></li>
                     <li><a href="{{ url('sell-porsche') }}">Sell Your Porsche</a></li>
                     <li><a href="{{ url('sell-toyota') }}">Sell Your Toyota</a></li>
                  </ul>
               </div>
               <div class="col-lg-2  col-6 col-sm-4 mb-3 mb-lg-0">
                  <ul class="list-unstyled brand-list">
                     <li><a href="{{ url('sell-bentley') }}">Sell Your Bentley</a></li>
                     <li><a href="{{ url('sell-chrysler') }}">Sell Your Chrysler</a></li>
                     <li><a href="{{ url('sell-honda') }}">Sell Your Honda</a></li>
                     <li><a href="#" class="non-click">Sell Your Koenigsegg</a></li>
                     <li><a href="{{ url('sell-maserati') }}">Sell Your Maserati</a></li>
                     <li><a href="{{ url('sell-mitsubishi') }}">Sell Your Mitsubishi</a></li>
                     <li><a href="{{ url('sell-renault') }}">Sell Your Renault</a></li>
                     <li><a href="{{ url('sell-volkswagen') }}">Sell Your Volkswagen</a></li>
                  </ul>
               </div>
               <div class="col-lg-2  col-6 col-sm-4  mb-3 mb-lg-0">
                  <ul class="list-unstyled brand-list">
                     <li><a href="{{ url('sell-bmw') }}">Sell Your BMW</a></li>
                     <li><a href="{{ url('sell-dodge') }}">Sell Your Dodge</a></li>
                     <li><a href="{{ url('sell-hyundai') }}">Sell Your Hyundai</a></li>
                     <li><a href="{{ url('sell-lamborghini') }}">Sell Your Lamborghini</a></li>
                     <li><a href="{{ url('sell-maybach') }}">Sell Your Maybach</a></li>
                     <li><a href="{{ url('sell-nissan') }}">Sell Your Nissan</a></li>
                     <li><a href="{{ url('sell-rolls-royce') }}">Sell Your Rolls Royce</a></li>
                     <li><a href="{{ url('sell-volvo') }}">Sell Your Volvo</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </section>
      <section class="footer pt-5">
         <div class="container py-3 px-0 px-md-3">
         <div class="row d-none d-md-flex">
            <div class="col-lg-4 col-md-12 mb-lg-0 mb-3">
               <div class="footer-abt">
                  <h6 class="font-weight-bold mb-3">About Us</h6>
                  <p>Many people would just call us a “car buying company,” but that’s just half of the story. Expat Car Buyers was
                     formed to make it easier for car-sellers to sell their used vehicles...
                     without traditional setbacks.
                  </p>
               </div>
            </div>
            <div class="col-lg-2 col-sm-6 mb-lg-0 mb-3">
               <div class="our-service">
                  <h6 class="font-weight-bold mb-3">Userful Links</h6>
                  <ul class="list-unstyled">
                     <li class="mb-2"><a href="{{ url('about') }}">
                        <img class="mr-2" src="{{ asset('front/images/Arrow.svg') }}"/>
                        About</a>
                     </li>
                     <!--<li class="mb-2"><a href="{{ url('car-service') }}">
                        <img class="mr-2" src="{{ asset('front/images/Arrow.svg') }}"/>
                        Car Services</a>
                     </li>-->
                     <li class="mb-2"><a href="{{ url('contact') }}">
                        <img class="mr-2" src="{{ asset('front/images/Arrow.svg') }}"/>
                        Contact</a>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="col-lg-2 col-sm-6 mb-lg-0 mb-3">
               <div class="follow">
                  <h6 class="font-weight-bold mb-3">Services</h6>
                  <ul class="list-unstyled">
                     <li class="mb-2">
                        <img class="mr-2" src="{{ asset('front/images/Arrow.svg') }}"/>
                        <a href="{{ url('change') }}">Change</a>
                     </li>
                     <li class="mb-2">
                        <img class="mr-2" src="{{ asset('front/images/Arrow.svg') }}"/><a href="{{ url('relpacement') }}">Replacement</a>
                     </li>
                     <li class="mb-2"><img class="mr-2" src="{{ asset('front/images/Arrow.svg') }}"/><a href="{{ url('contact') }}">Contact Us</a></li>
                  </ul>
               </div>
            </div>
            <div class="col-lg-4 col-md-12 mb-lg-0 mb-3">
               <div class="footer-abt">
                  <h6 class="font-weight-bold mb-3">Keep in touch</h6>
                  <ul class="list-unstyled">
                     <li class="mb-2 d-flex">
                        <span>
                        <img class="mr-2" src="{{ asset('front/images/map-marker-outline.svg') }}"/></span>
                        <span>Expatcarbuyers - Office No. 17, Sheikh <br> Zayed Road, Umm Al Sheif, Dubai, <br>United Arab Emirates</span>
                     </li>
                     <li class="mb-2  d-flex">
                        <span><img class="mr-2" src="{{ asset('front/images/phone.svg') }}"/></span>
                        <span><a href="tel:+97143337876" class="header-phone">+971 4 333 7876</a></span>
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
                                 <li><a href="{{ url('sell-acura') }}">Sell Your Acura</a></li>
                                 <li><a href="{{ url('sell-bugatti') }}">Sell Your Bugatti</a></li>
                                 <li><a href="{{ url('sell-ferrari') }}">Sell Your Ferrari</a></li>
                                 <li><a href="{{ url('sell-infiniti') }}">Sell Your Infiniti</a></li>
                                 <li><a href="{{ url('sell-land-rover') }}">Sell Your Land Rover</a></li>
                                 <li><a href="{{ url('sell-mazda') }}">Sell Your Mazda</a></li>
                                 <li><a href="{{ url('sell-opel') }}">Sell Your Opel</a></li>
                                 <li><a href="{{ url('sell-subaru') }}">Sell Your Subaru</a></li>
                              </ul>
                           </div>
                           <div class="col-lg-2 col-6  col-sm-4 mb-3 mb-lg-0">
                              <ul class="list-unstyled brand-list">
                                 <li><a href="{{ url('sell-alfa-romeo') }}">Sell Your Alfa Romeo</a></li>
                                 <li><a href="#" class="non-click">Sell Your Buick</a></li>
                                 <li><a href="{{ url('sell-fiat') }}">Sell Your Fiat</a></li>
                                 <li><a href="{{ url('sell-jaguar') }}">Sell Your Jaguar</a></li>
                                 <li><a href="{{ url('sell-lexus') }}">Sell Your Lexus</a></li>
                                 <li><a href="{{ url('sell-mcLaren') }}">Sell Your McLaren</a></li>
                                 <li><a href="{{ url('sell-peugeot') }}">Sell Your Peugeot</a></li>
                                 <li><a href="{{ url('sell-suzuki') }}">Sell Your Suzuki</a></li>
                              </ul>
                           </div>
                           <div class="col-lg-2 col-6 col-sm-4 mb-3 mb-lg-0">
                              <ul class="list-unstyled brand-list">
                                 <li><a href="{{ url('sell-aston-martin') }}">Sell Your Aston Martin</a></li>
                                 <li><a href="{{ url('sell-cadillac') }}">Sell Your Cadillac</a></li>
                                 <li><a href="{{ url('sell-ford') }}">Sell Your Ford</a></li>
                                 <li><a href="{{ url('sell-jeep') }}">Sell Your Jeep</a></li>
                                 <li><a href="{{ url('sell-lincoln') }}">Sell Your Lincoln</a></li>
                                 <li><a href="{{ url('sell-mercedes-benz') }}">Sell Your Mercedes-Benz</a></li>
                                 <li><a href="{{ url('sell-pontiac') }}">Sell Your Pontiac</a></li>
                                 <li><a href="{{ url('sell-tesla') }}">Sell Your Tesla</a></li>
                              </ul>
                           </div>
                           <div class="col-lg-2  col-6 col-sm-4 mb-3 mb-lg-0">
                              <ul class="list-unstyled brand-list">
                                 <li><a href="{{ url('sell-audi') }}">Sell Your Audi</a></li>
                                 <li><a href="{{ url('sell-chevrolet') }}">Sell Your Chevrolet</a></li>
                                 <li><a href="{{ url('sell-gmc') }}">Sell Your GMC</a></li>
                                 <li><a href="{{ url('sell-kia') }}">Sell Your Kia</a></li>
                                 <li><a href="{{ url('sell-lotus') }}">Sell Your Lotus</a></li>
                                 <li><a href="{{ url('sell-mini') }}">Sell Your Mini</a></li>
                                 <li><a href="{{ url('sell-porsche') }}">Sell Your Porsche</a></li>
                                 <li><a href="{{ url('sell-toyota') }}">Sell Your Toyota</a></li>
                              </ul>
                           </div>
                           <div class="col-lg-2  col-6 col-sm-4 mb-3 mb-lg-0">
                              <ul class="list-unstyled brand-list">
                                 <li><a href="{{ url('sell-bentley') }}">Sell Your Bentley</a></li>
                                 <li><a href="{{ url('sell-chrysler') }}">Sell Your Chrysler</a></li>
                                 <li><a href="{{ url('sell-honda') }}">Sell Your Honda</a></li>
                                 <li><a href="#" class="non-click">Sell Your Koenigsegg</a></li>
                                 <li><a href="{{ url('sell-maserati') }}">Sell Your Maserati</a></li>
                                 <li><a href="{{ url('sell-mitsubishi') }}">Sell Your Mitsubishi</a></li>
                                 <li><a href="{{ url('sell-renault') }}">Sell Your Renault</a></li>
                                 <li><a href="{{ url('sell-volkswagen') }}">Sell Your Volkswagen</a></li>
                              </ul>
                           </div>
                           <div class="col-lg-2  col-6 col-sm-4  mb-3 mb-lg-0">
                              <ul class="list-unstyled brand-list">
                                 <li><a href="{{ url('sell-bmw') }}">Sell Your BMW</a></li>
                                 <li><a href="{{ url('sell-dodge') }}">Sell Your Dodge</a></li>
                                 <li><a href="{{ url('sell-hyundai') }}">Sell Your Hyundai</a></li>
                                 <li><a href="{{ url('sell-lamborghini') }}">Sell Your Lamborghini</a></li>
                                 <li><a href="{{ url('sell-maybach') }}">Sell Your Maybach</a></li>
                                 <li><a href="{{ url('sell-nissan') }}">Sell Your Nissan</a></li>
                                 <li><a href="{{ url('sell-rolls-royce') }}">Sell Your Rolls Royce</a></li>
                                 <li><a href="{{ url('sell-volvo') }}">Sell Your Volvo</a></li>
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
                           <p>Many people would just call us a “car buying company,” but that’s just half of the story. Expat Car Buyers was
                              formed to make it easier for car-sellers to sell their used vehicles...
                              without traditional setbacks.
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card border-0 p-0">
                  <div class="card-header p-0" id="headingThree">
                     <h5 class="mb-0">
                        <button class="btn collapsed w-100 text-left py-2 text-body text-uppercase position-relative" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Userful Links
                        <span class="plus"></span>
                        </button>
                     </h5>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                     <div class="card-body">
                        <ul class="list-unstyled">
                           <li class="mb-2"><a href="{{ url('about') }}">
                              <img class="mr-2" src="{{ asset('front/images/Arrow.svg') }}">
                              About</a>
                           </li>
                           <!--<li class="mb-2"><a href="{{ url('car-service') }}">
                              <img class="mr-2" src="{{ asset('front/images/Arrow.svg') }}">
                              Car Services</a>
                           </li>-->
                           <li class="mb-2"><a href="{{ url('contact') }}">
                              <img class="mr-2" src="{{ asset('front/images/Arrow.svg') }}">
                              Contact</a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
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
                              <span><a href="tel:+97143337876">+971 4 333 7876</a></span>
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
   <img src="{{ asset('front2/images/arrow.png') }}" alt="" width="18px">
   Go to Top
</a>
</div>

</body>

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script> 
<script src="{{ asset('front2/js/bootstrap.min.js') }}"></script>
 <script src="{{ asset('front2/js/jquery.parallax-scroll.min.js') }}"></script>
<script src="{{ asset('js/menu.js') }}"></script>
<script type="text/javascript">
 	
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
    jQuery('.navbar-toggler').click(function(){
        jQuery('.navbar-collapse').toggle();
    });

});

 </script>


</body>
</html>