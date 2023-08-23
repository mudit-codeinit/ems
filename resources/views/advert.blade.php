<!doctype html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <!-- Google Tag Manager -->
    <script>!function(e,t,a,n,g){e[n]=e[n]||[],e[n].push({"gtm.start":(new Date).getTime(),event:"gtm.js"});var m=t.getElementsByTagName(a)[0],r=t.createElement(a);r.async=!0,r.src="https://www.googletagmanager.com/gtm.js?id=GTM-KWHZJRK",m.parentNode.insertBefore(r,m)}(window,document,"script","dataLayer");</script>
    <!-- End Google Tag Manager -->
	<!-- Required meta tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{csrf_token()}}">
	@if( isset($meta_description) && isset($meta_title) )
		<title><?php echo $meta_title; ?></title>
	    <meta name="description" content="{{ $meta_description }}"/>
	    <meta name="keywords" content="{{ $meta_keywords }}"/>
	@else
		<meta name="title" content="Sell My Car Online Sharjah, Selling Car UAE, Used Car Dealers Sharjah"/>
	<meta name="description" content="Expat Car Buyers is the trusted and reliable auto trader in Sharjah. You can sell any car in Sharjah, UAE with no-obligation & free valuation with instant cash offer."/>
	<meta name="keywords" content=""/>
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
	<link href="{{ asset('css/theme2.css') }}" rel="stylesheet">
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
				<div class="row">
					<div class="col-lg-3">
						<div class="logo">
							<a href="/"><img src="{{ asset('front/images/logo.webp') }}" alt="expatcarbuyers" class="img-fluid" onerror="this.onerror=null; this.src='{{ asset('front/images/logo.png') }}'"/></a>
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
										<li class="nav-item d-flex {{ preg_match('/^(we-buy-any-car)/',$current_url)?'active':''  }}">
											<a href="{{ url('/we-buy-any-car') }}" class="nav-link font-mons position-relative px-0 ">WE BUY ANY CAR</a>
										</li>
										<li class="nav-item d-flex {{ preg_match('/^(sell-my-car-dubai)/',$current_url)?'active':''  }}">
											<a class="nav-link font-mons position-relative px-0 " href="{{ url('/sell-my-car-dubai') }}">SELL MY CAR DUBAI</a>
										</li>
										<li class="nav-item d-flex">
											<button class="btn ml-3"><a href="tel:++971561774555" class="header-phone">
										    <img src="{{ asset('front/images/phone.webp') }}" alt="phone" class="mr-2" onerror="this.onerror=null; this.src='{{ asset('front/images/phone.png') }}'">
										    +971 56 1774555</a></button>
										</li>
									</ul>
								</div>
							</nav>
						</div>
					</div>
					<!--<button class="btn ml-3 head-btn-res"><a href="tel:+97143337876" class="header-phone">-->
					    <!--<img src="{{ asset('front2/images/phone.png') }}" alt="" class="mr-2" />-->
					<!--    <img src="{{ asset('front/images/phone.webp') }}" alt="phone" class="mr-2" onerror="this.onerror=null; this.src='{{ asset('front/images/phone.png') }}'">-->
					<!--    +971 4 333 7876</a></button>-->
				</div>
			</div>

		</div>
  <a href="tel:+97143337876" class="float d-md-none">
<i class="fa fa-phone my-float"></i>
</a>

		<div class="banner position-relative">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 p-lg-0">
						<div class="banner_left">
							<img src="{{ asset('front2/images/banner-car.webp') }}" alt="Sell My Car Sharjah" class="img-fluid" onerror="this.onerror=null; this.src='{{ asset('front2/images/banner-car.png') }}'">
						</div>
					</div>

					<div class="col-lg-5">
						<div class="banner-form position-relative">
							<h4 class="mb-0 font-Oswald">UAE's No. 1</h4>
							<p class="h3 text-uppercase font-poiret" style="font-size: 36px;">CAR BUYING SERVICE</p>
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
            <select class="form-control" style="width: 100%;" id="brand_val" name="brand_name" aria-label="brand val">
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
                <select class="modl-model form-control" id="fetched_model" style="width: 100%;" name="model_name" aria-label="model" selected>
                <option value="" selected disabled="disabled">Select Model</option>
</select>
								</div>
							</div>
							<div class="form-group w-fift car_year">
								<label class="font-weight-bold text-uppercase font-mons">year of manufacturing</label>

								<div class="dropdown">
								  <select class="modl-year form-control" style="width: 100%;" id="year" name="year" aria-label="year">
               <option value="" disabled="disabled" selected style="padding: 0px;">Select Year</option>
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
								<input class="numberinput w-100" name="number" type="tel" placeholder="Phone Numer" aria-label="Phone Numer" pattern="[0-9]*"/>
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
				<img src="{{ asset('front/images/front-loader.webp') }}" alt="loader" style="width:35px;" onerror="this.onerror=null; this.src='{{ asset('front/images/front-loader.svg') }}'"/></div>
		</div>
		</div>
	</div>
    </div>
	@yield('content')



</body>

<!--script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script-->

<script defer src="{{ asset('front/js/jquery.validate.js') }}"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script defer src="{{ asset('front2/js/bootstrap.min.js') }}"></script>
 <script defer src="{{ asset('front2/js/jquery.parallax-scroll.min.js') }}"></script>

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
