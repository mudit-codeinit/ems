@extends('layouts.header2')

@section('content')

	<div class="how_does_work_section pt_ninty">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2 class="text-center text-uppercase font-poiret">How does it work?</h2>
				</div>
			</div>
			<div class="row pt-md-5 pt-3">
				<div class="col-lg-3 col-md-6">
					<div class="work_box text-center">
						<img src="{{ asset('front2/images/Book-an-appointment.svg') }}" alt="" />
						<h6 class="pt-4 mb-0">Book an appointment</h6>
						<p class="mb-0 mt-1">Online or at our office.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="work_box text-center">
						<img src="{{ asset('front2/images/Bring-your-Vehicle.svg') }}" alt="" />
						<h6 class="pt-4 mb-0">Bring your vehicle</h6>
						<p class="mb-0 mt-1">On the date of your booking, &
							we’ll perform a FULL inspection.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="work_box text-center">
						<img src="{{ asset('front2/images/get-obligation-quote.svg') }}" alt="" />
						<h6 class="pt-4 mb-0">Get a no-obligation quote</h6>
						<p class="mb-0 mt-1">Based on your car’s current
							condition & market price.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="work_box text-center">
						<img src="{{ asset('front2/images/Happy-with-the-price.svg') }}" alt="" />
						<h6 class="pt-4 mb-0">Happy with the price?</h6>
						<p class="mb-0 mt-1">Accept our offer to initiate the
							selling process.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="why-sell-section pt_ninty position-relative d-mobile-none">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="why-left-sec">
						<h3 class="text-uppercase font-Oswald text-white">
							Why Sell Your Car with
						</h3>
						<h1 class="text-uppercase font-poiret text-white">Expat Car Buyers?</h1>
						<p class="text-white">Selling a car in Dubai is tough. If you’ve spent more than you can afford on classified
							ads, with no success,
							stop wasting your time and money on non-serious buyers. Expat Car Buyers will give you CASH for your vehicle, in
							just 30 minutes. While there are many online car-selling platforms to choose from, Expat Car Buyers is a leading
							name – selling your car for a great price, in record time.</p>

						<p class="text-white">We care about making sure you’re comfortable with what you’re getting, no matter the make
							or model of your car,
							or its current condition. No more schedule numerous appointments with time-wasting strangers. Using Expat Car
							Buyers is convenient, painless, and simple –
							Just the way it should be!</p>
					</div>
				</div>
				<div class="col-lg-6 p-0">
					<div class="why-right-sec">
						<img src="{{ asset('front2/images/why-car.png') }}" alt="" class="img-fluid">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="any-car-sec pt_ninty position-relative">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="any-left-sec any-car-animation">
						<img src="{{ asset('front2/images/any-car.png') }}" class="car" data-parallax='{"x": 550, "from-scroll": 1600 , "distance": 50, "smoothness": 30, "easing":0}' alt="">
						<img src="{{ asset('front2/images/Car-wheel.png') }}" class="wheel-right" data-parallax='{"x": 550, "rotateZ": 1600, "from-scroll": 1600, "distance": 50, "smoothness": 30, "easing":0}'>
						<img src="{{ asset('front2/images/Car-wheel.png') }}" class="wheel-left" data-parallax='{"x": 550, "rotateZ": 1600, "from-scroll": 1600, "distance": 50, "smoothness": 30, "easing":0}'>
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="any-right-sec">
						<h3 class="text-uppercase font-poiret"><span>Sell any car </span>with us!</h3>
						<p class="br_none font-mons mb-5">We even guaraantee to beat any other quote <br>
							by at least 500 Aed</p>
						<div class="free-valuation d-flex mt-4">
							<div class="value-img"><img src="{{ asset('front2/images/Free-Valuation.svg') }}" alt="" class="img-fluid" /></div>
							<div class="value-txt">
								<h5 class="font-Oswald mb-0">Free Valuation</h5>
								<p class="font-mons mb-0">and the best possible quote.</p>
							</div>
						</div>
						<div class="free-valuation d-flex mt-4">
							<div class="value-img"> <img src="{{ asset('front2/images/Years.svg') }}" alt="" class="img-fluid" /></div>
							<div class="value-txt">
								<h5 class="font-Oswald mb-0">Years of Experience</h5>
								<p class="font-mons mb-0">from industry veterans.</p>
							</div>
						</div>
						<div class="free-valuation d-flex mt-4">
							<div class="value-img"> <img src="{{ asset('front2/images/Expedited.svg') }}" alt="" class="img-fluid" /></div>
							<div class="value-txt">
								<h5 class="font-Oswald mb-0">Expedited Process</h5>
								<p class="font-mons mb-0">no more wasted time.</p>
							</div>
						</div>
						<div class="free-valuation d-flex mt-4">
							<div class="value-img"><img src="{{ asset('front2/images/No-stress.svg') }}" alt="" class="img-fluid" /></div>
							<div class="value-txt">
								<h5 class="font-Oswald mb-0">No Stress</h5>
								<p class="font-mons mb-0 br_none">we handle all paperwork, so you <br>
									don’t have to.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="get-instant-sec pt_ninty position-relative">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h3 class="text-white text-uppercase font-poiret text-center">GET AN INSTANT OFFER NOW</h3>
					<p class="font-mons text-center text-white mb-md-5 mb-3">As an RTA-authorized business, we’ll transfer your car
						with no hassles involved. We’re serious when we say
						we’ll buy your car in ANY condition. Safe, genuine service is par for the course when you choose Expat Car
						Buyers.</p>
				</div>
				<div class="col-lg-7 col-md-8 mx-auto">
					<div class="row">
						<div class="col-sm-6">
							<div class="any-ques text-center">
								<label class="lead text-white font-Oswald d-block">Any Questions?</label>
								<button class="btn font-mons display-4 font-weight-bold"><a href="{{url('faqs')}}">FAQ’s</a></button>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="any-ques text-center">
								<label class="lead font-Oswald text-white d-block">Free Inspection</label>
								<button class="btn font-mons display-4 font-weight-bold book-now-btn">Book Now</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="we-keep-sec position-relative bg-grey">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md-12">
					<div class="we-keep-top text-center">
						<h4 class="font-Oswald text-uppercase font-weight-bold">We Keep The Car Selling Process</h4>
						<h2 class="text-uppercase font-poiret">simple, fast, and profitable!</h2>
						<h6 class="font-weight-bold">Even if you can barely get it started and it is rusted all over with no working
							radio, we will offer you a fair price. We offer a safe, legitimate service.</h6>
						<p>You won’t need to haggle, negotiate, or prove anything about your car, we will offer you the best price you’ll
							find in the market and we’ll pay it to you in cash. What more could you ask for? With multiple perks at your
							fingertips, selling a car in Dubai was never easier before. Speak with our courteous and experienced
							professionals today and you’ll understand why we are the best place to sell your car!</p>
					</div>
				</div>
			</div>
			<div class="row sale-cars-section">
				<div class="col-md-4">
					<div class="sale-car"><img src="{{ asset('front2/images/car1.png') }}"  data-parallax='{"y": 1600, "from-scroll": 3000 , "distance": 1500, "smoothness": 30, "easing":0}' alt="">
					</div>
					<div class="sale-car-1"><img src="{{ asset('front2/images/car1.png') }}"  data-parallax='{"y": 1600, "from-scroll": 5000 , "distance": 1500, "smoothness": 30, "easing":0}' alt="">	
					</div>
				</div>
				<div class="col-md-8">
					<div class="sale-car-right">
						<div class="points-sec position-relative">
							<div class="numbering1 position-relative">
								<div class="num1 font-mons text-white">01</div>
							</div>
							<div class="numbering2 position-relative">
								<div class="num1 font-mons text-white">02</div>
							</div>
							<div class="numbering3 position-relative">
								<div class="num1 font-mons text-white">03</div>
							</div>
							<div class="numbering4 position-relative">
								<div class="num1 font-mons text-white">04</div>
							</div>
						</div>

						<div class="point-boxes">
							<div class="p-box mb-4">
								<div class="free-valuation d-flex">
									<div class="value-img"> <img src="{{ asset('front2/images/Free-Car-Valuation.svg') }}" alt="" class="img-fluid"></div>
									<div class="value-txt pl-2 pl-sm-3">
										<h5 class="font-mons font-weight-light mb-0 br_none">FREE CAR<br>
											VALUATION</h5>
									</div>
								</div>
								<p class="br_none mt-3">We provide a non-obligation quote for your car, based on the <br>physical condition and
									the market price.</p>
							</div>
							<div class="p-box mb-4">
								<div class="free-valuation d-flex">
									<div class="value-img"> <img src="{{ asset('front2/images/Ownership-Transfer.svg') }}" alt="" class="img-fluid"></div>
									<div class="value-txt pl-2 pl-sm-3">
										<h5 class="font-mons font-weight-light mb-0 br_none">OWNERSHIP
											<br>
											TRANSFER</h5>
									</div>
								</div>
								<p class="br_none mt-3">We provide a non-obligation quote for your car, based on the
									<br> physical condition and the market price.</p>
							</div>
							<div class="p-box mb-4">
								<div class="free-valuation d-flex">
									<div class="value-img"> <img src="{{ asset('front2/images/Finance-Cleared.svg') }}" alt="" class="img-fluid"></div>
									<div class="value-txt pl-2 pl-sm-3">
										<h5 class="font-mons font-weight-light mb-0 br_none">FINANCE
											<br>
											CLEARED</h5>
									</div>
								</div>
								<p class="br_none mt-3">We will even clear the outstanding finance on cars and pay <br>difference to customers.</p>
							</div>
							<div class="p-box">
								<div class="free-valuation d-flex">
									<div class="value-img"> <img src="{{ asset('front2/images/Instant-Cash.svg') }}" alt="" class="img-fluid"></div>
									<div class="value-txt pl-2 pl-sm-3">
										<h5 class="font-mons font-weight-light mb-0 br_none">INSTANT
											<br>
											CASH</h5>
									</div>
								</div>
								<p class="br_none mt-3">In just 30 minutes, you will receive cash, bank transfer or cheque, <br>based on your
									choice!</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="client-sec pt_ninty position-relative">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2 class="text-uppercase text-center font-poiret mb-3">What client say</h2>
				</div>
			</div>
			<div class="row">
				<div class="mx-auto col-lg-10">
					<div class="testimonial-slider">
						<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
							</ol>
							<div class="carousel-inner">
								<div class="carousel-item active">
									<div class="test-box text-center">
										<img src="{{ asset('front2/images/client.png') }}" alt="" class="img-fluid" />
										<p class="mt-4">I visited several car buying companies in same area but Expat car buyers offered the most <br>competitive
											prices whilst also offering a comprehensive and professional service to enable a<br> smooth transaction.
											Great
											customer service. Would highly recommend</p>
										<h5 class="font-Oswald mt-5">Ajith Kumar</h5>
									</div>
								</div>
								<div class="carousel-item">
									<div class="test-box text-center">
										<img src="{{ asset('front2/images/client.png') }}" alt="" class="img-fluid" />
										<p class="mt-4">I visited several car buying companies in same area but Expat car buyers offered the most <br>competitive
											prices whilst also offering a comprehensive and professional service to enable a<br> smooth transaction.
											Great
											customer service. Would highly recommend</p>
										<h5 class="font-Oswald mt-5">Ajith Kumar</h5>
									</div>
								</div>
								<div class="carousel-item">
									<div class="test-box text-center">
										<img src="{{ asset('front2/images/client.png') }}" alt="" class="img-fluid" />
										<p class="mt-4">I visited several car buying companies in same area but Expat car buyers offered the most <br>competitive
											prices whilst also offering a comprehensive and professional service to enable a<br> smooth transaction.
											Great
											customer service. Would highly recommend</p>
										<h5 class="font-Oswald mt-5">Ajith Kumar</h5>
									</div>
								</div>
							</div>
								<ol class="carousel-indicators">
								<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="contact-us-section">
		<div class="row m-0">
			<div class="col-md-6 p-0">
				<div class="contact-in pt_ninty">
					<div class="cont-in-text">
						<div class="cont-box d-flex mb-4">
							<div class="cont-icon">
								<img src="{{ asset('front2/images/placeholder.svg') }}" alt="" class="img-fluid" />
							</div>
							<div class="cont-txt pl-4 pl-xl-5">
								<h4 class="font-poiret text-white text-uppercase">Keep in Touch</h4>
								<p class="text-white br_none">Expatcarbuyers - Office No. 17,Umm Al Sheif, Exit<br>
									no 41 Sheikh Zayed Rd, Dubai, United Arab<br> Emirates</p>
							</div>
						</div>
						<div class="cont-box d-flex mb-4">
							<div class="cont-icon">
								<img src="{{ asset('front2/images/telephone.svg') }}" alt="" class="img-fluid" />
							</div>
							<div class="cont-txt pl-4 pl-xl-5">
								<h4 class="font-poiret text-white text-uppercase">Service Helpline</h4>
								<p class="text-white"><a href="tel:+971561774555" class="text-white">+971 56 1774555</a></p>
							</div>
						</div>
						<div class="cont-box d-flex">
							<div class="cont-icon">
								<img src="{{ asset('front2/images/letter.svg') }}" alt="" class="img-fluid" />
							</div>
							<div class="cont-txt pl-4 pl-xl-5">
								<h4 class="font-poiret text-white text-uppercase">For Support Mail Us</h4>
								<p class="text-white mb-0"><a href="mailto:contact@expatcarbuyers.com" class="text-white">contact@expatcarbuyers.com</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 p-0">
				<div class="map">
				</div>
			</div>
		</div>
	</div>
@endsection
	  