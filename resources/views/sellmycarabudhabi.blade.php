@extends('layouts.sellcarAbudhabiHeader')

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
						<!--<img src="{{ asset('front2/images/Book-an-appointment.svg') }}" alt="" />-->
						<img src="{{ asset('front2/images/Book-an-appointment.webp?v=1') }}" alt="Book-an-appointment" onerror="this.onerror=null; this.src='{{ asset('front2/images/Book-an-appointment.svg') }}'">
						<h6 class="pt-4 mb-0">Book an appointment</h6>
						<p class="mb-0 mt-1">Online or at our office.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="work_box text-center">
						<img src="{{ asset('front2/images/Bring-your-Vehicle.webp?v=1') }}" alt="Bring-your-Vehicle" onerror="this.onerror=null; this.src='{{ asset('front2/images/Bring-your-Vehicle.svg') }}'">
						<h6 class="pt-4 mb-0">Bring your vehicle</h6>
						<p class="mb-0 mt-1">On the date of your booking, &
							we’ll perform a FULL inspection.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="work_box text-center">
						<img src="{{ asset('front2/images/get-obligation-quote.webp?v=1') }}" alt="get-obligation-quote" onerror="this.onerror=null; this.src='{{ asset('front2/images/get-obligation-quote.svg') }}'">
						<h6 class="pt-4 mb-0">Get a no-obligation quote</h6>
						<p class="mb-0 mt-1">Based on your car’s current
							condition & market price.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="work_box text-center">
						<img src="{{ asset('front2/images/Happy-with-the-price.webp?v=1') }}" alt="Happy-with-the-price" onerror="this.onerror=null; this.src='{{ asset('front2/images/Happy-with-the-price.svg') }}'">
						<h6 class="pt-4 mb-0">Happy with the price?</h6>
						<p class="mb-0 mt-1">Accept our offer to initiate the
							selling process.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="why-sell-section pt_ninty position-relative">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="why-left-sec">
						<h1 class="text-uppercase font-poiret text-white">Get the Best Selling Your Car in <strong>Abu Dhabi</strong></h1>
						<p class="text-white">Despite the long queue of car dealers ready to buy your car in Abu Dhabi, there are only a few options you get to choose from. This is because it is not too common to be offered the best competitive service despite a large number of car dealers. Are you perhaps troubled by the question “How do I sell my car in Abu Dhabi,” well, we have an answer that would not only leave you with a fair deal but also keep you coming. Selling your car in Abu Dhabi might seem profitable enough only if you are dealing with the right car dealer</p>
					</div>
				</div>
				<div class="col-lg-6 p-0">
					<div class="why-right-sec">
						<img src="{{ asset('front2/images/why-car.webp') }}" alt="Sell My Car Dubai" class="img-fluid" onerror="this.onerror=null; this.src='{{ asset('front2/images/why-car.png') }}'" />
					</div>
				</div>
			</div>
			<div class="row" style="margin-top:20px;">
				<div class="col-lg-12">
                    <p class="text-white">Of course! Everyone deserves a fair deal, and as a seller, you deserve even more. Expat Car Buyers offer the best competitive price, a quick business deal, fast payment, and efficient and effective service. Over the years, we have been able to pride our brand in the services that we offer. We have equally been motivated concerning how we offer services that are well suitable for our individual customers. </p>
                    <p class="text-white">At any point in time, we understand that selling your car in Abu Dhabi might take some of your time and for this reason, we have made our business dealing chain so short and simple. Time is precious to you and likewise, to us and for this reason, we do not just set the time or date at which we would need you to be available after you might have contacted us. You get to choose any time of your own convenience and we work according to your own schedule.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="any-car-sec pt_ninty position-relative">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="any-left-sec any-car-animation">
						<img src="{{ asset('front2/images/any-car.webp') }}" onerror="this.onerror=null; this.src='{{ asset('front2/images/any-car.png') }}'" class="car" data-parallax='{"x": 550, "from-scroll": 1600 , "distance": 50, "smoothness": 30, "easing":0}' alt="Sell Any Car Abudhabi"/>
						<img src="{{ asset('front2/images/Car-wheel.webp') }}" onerror="this.onerror=null; this.src='{{ asset('front2/images/Car-wheel.png') }}'" class="wheel-right" data-parallax='{"x": 550, "rotateZ": 1600, "from-scroll": 1600, "distance": 50, "smoothness": 30, "easing":0}' alt="Sell Any Car Abudhabi"/>
						<img src="{{ asset('front2/images/Car-wheel.webp') }}" onerror="this.onerror=null; this.src='{{ asset('front2/images/Car-wheel.png') }}'" class="wheel-left" data-parallax='{"x": 550, "rotateZ": 1600, "from-scroll": 1600, "distance": 50, "smoothness": 30, "easing":0}' alt="Sell Any Car Abudhabi"/>
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="any-right-sec">
						<h3 class="text-uppercase font-poiret"><span>Sell any car </span>with us!</h3>
						<p class="br_none font-mons mb-5">We are the best, not by words but by what we do…..</p>
						<div class="free-valuation d-flex mt-4">
							<div class="value-img">
							    <img src="{{ asset('front2/images/Free-Valuation.webp') }}" onerror="this.onerror=null; this.src='{{ asset('front2/images/Free-Valuation.svg') }}'" alt="Free-Valuation" class="img-fluid"/>
							</div>
							<div class="value-txt">
								<h5 class="font-Oswald mb-0">Cost-free Valuation</h5>
								<p class="font-mons mb-0">With the right tool without excluding a fair deal</p>
							</div>
						</div>
						<div class="free-valuation d-flex mt-4">
							<div class="value-img"> <img src="{{ asset('front2/images/Years.webp') }}" onerror="this.onerror=null; this.src='{{ asset('front2/images/Years.svg') }}'" alt="Years" class="img-fluid"/></div>
							<div class="value-txt">
								<h5 class="font-Oswald mb-0">Years of Experience</h5>
								<p class="font-mons mb-0">Good number of business experience with passion</p>
							</div>
						</div>
						<div class="free-valuation d-flex mt-4">
							<div class="value-img"> 
							<img src="{{ asset('front2/images/Expedited.webp') }}" onerror="this.onerror=null; this.src='{{ asset('front2/images/Expedited.svg') }}'" alt="Expedited" class="img-fluid"/>
							</div>
							<div class="value-txt">
								<h5 class="font-Oswald mb-0">Expedited Process</h5>
								<p class="font-mons mb-0">Complete transaction in a maximum of 30minutes</p>
							</div>
						</div>
						<div class="free-valuation d-flex mt-4">
							<div class="value-img">
							    <!--<img src="{{ asset('front2/images/No-stress.svg') }}" alt="" class="img-fluid" />-->
							    <img src="{{ asset('front2/images/No-stress.webp') }}" onerror="this.onerror=null; this.src='{{ asset('front2/images/No-stress.svg') }}'" alt="No-stress" class="img-fluid"/>
							    </div>
							<div class="value-txt">
								<h5 class="font-Oswald mb-0">No Stress</h5>
								<p class="font-mons mb-0 br_none">We will take care of all necessary documents with fast cashout</p>
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
					<h3 class="text-white text-uppercase font-poiret text-center">Sell My Scrap or Used Car In <strong>Abu Dhabi</strong></h3>
					<p class="font-mons text-center text-white mb-md-5 mb-3">The condition(s) of your car does not really matter when you are dealing with us. We buy your car as it is. Peradventure you have been worried about how you would dispose off your scrapped car in Abu Dhabi, getting in touch with a used car dealer in Abu Dhabi might be a very good choice to consider. </p>
                    <p class="font-mons text-center text-white mb-md-5 mb-3">Often times, several individuals interested in selling their cars be it used, scraped or in very good shape, fall victims to some car dealers. As a result of this, they tend to term every car dealer as same while giving them similar bad reviews. There are other times when they fall into the hands of individual car dealers who might not be too financially buoyant to pay up to the worth of their car. Definitely, this leads into the customer getting paid less than the actual worth of the car be it used, scraped or in very good shape.</p>
                    <h3 class="text-white text-uppercase font-poiret text-center">Cash Your Car In <strong>Abu Dhabi</strong> in an Instance!</h3>
					<p class="font-mons text-center text-white mb-md-5 mb-3">Now, you have been worried about the question “How do I sell my car in Abu Dhabi,” Expat Car Buyers gives you the best option and compensate your property with instant cash. With us, Scrap Car in Abu Dhabi attracts cash and a good one at that.</p>
                    <p class="font-mons text-center text-white mb-md-5 mb-3">Leave out the worries of putting your car in good conditions before selling, you do not even need to buy the smallest of parts so as to make your car perfect, we got you covered! Seeing that even when you try to put your car in very good condition before selling, you do not get a very good profit that can cover up for the amendments and parts you have put in place and the price of the car itself, it is pretty much advisable to get sell your car as it is rather than trying to make personal amendments before sale. Surely! We buy your car as it is. </p>
                    <p class="font-mons text-center text-white mb-md-5 mb-3">We are just a few inches away whenever you might feel like disposing off your car. Selling your car might arise from varying reasons which are personal to you, and we are well equipped to make your desires fulfilled in a very short possible while. Our staffs are well trained and readily available to give you the best of service.</p>
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
						<h6 class="font-weight-bold">How faulty can it be? Broken door(s), no radio, no tyres, or not starting? Relax! We accept your car just as it is</h6>
						<p>Of course! There are various ways available to sell your car in UAE, and due to this reason, sellers often look out and ensure that they get the best out of every of the deals. We understand this fact, and that is why we offer you the best deal here at expatcarbuyers. After you might have taken the most important step by contacting, we ensure that you go through the easiest and fastest process to sell any car in 30minutes.</p>
					</div>
				</div>
			</div>
			<div class="row sale-cars-section">
				<div class="col-md-4">
					<div class="sale-car"><img src="{{ asset('front2/images/car1.webp') }}" onerror="this.onerror=null; this.src='{{ asset('front2/images/car1.png') }}'" alt="Sell Car in Abudhabi"  data-parallax='{"y": 1900, "from-scroll": 3500 , "distance": 1800, "smoothness": 30, "easing":0}'/>
					</div>
					<div class="sale-car-1"><img src="{{ asset('front2/images/car1.webp') }}" onerror="this.onerror=null; this.src='{{ asset('front2/images/car1.png') }}'" alt="Sell Car in Abudhabi"  data-parallax='{"y": 1300, "from-scroll": 1000 , "distance": 1500, "smoothness": 30, "easing":0}'/>
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
									<div class="value-img"> <img src="{{ asset('front2/images/Free-Car-Valuation.webp?v=1') }}" alt="Free-Car-Valuation" class="img-fluid" onerror="this.onerror=null; this.src='{{ asset('front2/images/Free-Car-Valuation.svg') }}'"/></div>
									<div class="value-txt pl-2 pl-sm-3">
										<h5 class="font-mons font-weight-light mb-0 br_none">FREE CAR<br/>
											VALUATION</h5>
									</div>
								</div>
								<p class="br_none mt-3">We consider the current market value price and condition of<br/> your car, then give you a non-obligate quote.</p>
							</div>
							<div class="p-box mb-4">
								<div class="free-valuation d-flex">
									<div class="value-img"> <img src="{{ asset('front/images/Ownership-Transfer.webp') }}" alt="Ownership-Transfer" class="img-fluid" onerror="this.onerror=null; this.src='{{ asset('front2/images/Ownership-Transfer.svg') }}'"/></div>
									<div class="value-txt pl-2 pl-sm-3">
										<h5 class="font-mons font-weight-light mb-0 br_none">OWNERSHIP
											<br>
											TRANSFER</h5>
									</div>
								</div>
								<p class="br_none mt-3">If an agreement is reached, we provide you with <br/>crucial documents for ownership transfer.</p>
							</div>
							<div class="p-box mb-4">
								<div class="free-valuation d-flex">
									<div class="value-img"> <img src="{{ asset('front/images/Finance-Cleared.webp') }}" alt="Finance-Cleared" class="img-fluid" onerror="this.onerror=null; this.src='{{ asset('front2/images/Finance-Cleared.svg') }}'"/></div>
									<div class="value-txt pl-2 pl-sm-3">
										<h5 class="font-mons font-weight-light mb-0 br_none">FINANCE
											<br>
											CLEARED</h5>
									</div>
								</div>
								<p class="br_none mt-3">Besides the aforementioned advantages, we also clear<br/> any debt issued on the car and settle you with a reasonable difference.</p>
							</div>
							<div class="p-box">
								<div class="free-valuation d-flex">
									<div class="value-img"> <img src="{{ asset('front2/images/Instant-Cash.webp?v=1') }}" alt="Instant-Cash" class="img-fluid" onerror="this.onerror=null; this.src='{{ asset('front2/images/Instant-Cash.svg') }}'"/></div>
									<div class="value-txt pl-2 pl-sm-3">
										<h5 class="font-mons font-weight-light mb-0 br_none">FAST
										<br/>
										PAYMENT</h5>
									</div>
								</div>
								<p class="br_none mt-3">We will go with any of your choice, a bank <br/>transfer, cheque, etc. in a maximum of 30minutes.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
			<section class="what-people-say py-5 d-none d-md-block">
         <div class="container py-3">
            <div class="row">
               <div class="col-md-12 text-center">
                  <h2 class="font-weight-light mb-5">What people are saying<span class="font-weight-bold theme-color">?</h2>
               </div>
            </div>
				<div class="row">
                <div class="col-md-12">
                    <div id="testCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Carousel items -->
                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <div class="row">
                                <div class="col-lg-4 d-lg-flex flex-lg-column mb-lg-0 mb-5" id="slide1">
                                        <div class="bg-white shadow userReview py-4 px-5 mb-5 h-100">
                                         <div class="ml-3 reviewBox">
                                         <i>Amazing service. If u want to experience the hassle free way of selling car, this is the best place to go. Been to other companies in past and I must say their service is exeptional.. cheers</i>
                                    </div>
                                </div>
                                  <div class="userReview-details d-inline-flex w-100 pl-4">
                                 <div class="userProfile mr-3 Profile-alpha-i ml-3">
                                 <h4 class="font-weight-bold">I</h4>
                                </div>
                                 <div class="userName">
                                    <h5 class="f-18  mb-0 ">Irina</h5>
                                    <img src="{{ asset('front/images/star.webp') }}" width="18" alt="star" onerror="this.onerror=null; this.src='{{ asset('front/images/star.svg') }}'"/>
                                    <img src="{{ asset('front/images/star.webp') }}" width="18" alt="star" onerror="this.onerror=null; this.src='{{ asset('front/images/star.svg') }}'"/>
                                    <img src="{{ asset('front/images/star.webp') }}" width="18" alt="star" onerror="this.onerror=null; this.src='{{ asset('front/images/star.svg') }}'"/>
                                    <img src="{{ asset('front/images/star.webp') }}" width="18" alt="star" onerror="this.onerror=null; this.src='{{ asset('front/images/star.svg') }}'"/>
                                    <img src="{{ asset('front/images/star.webp') }}" width="18" alt="star" onerror="this.onerror=null; this.src='{{ asset('front/images/star.svg') }}'"/>
                                    </div>
                                 </div>
                                 </div>
                                 <div class="col-lg-4 d-lg-flex flex-lg-column mb-lg-0 mb-5">
                                    <div class="bg-white shadow userReview py-4 px-5 mb-5 h-100">
                                              <div class="ml-3 reviewBox">
                                                 <i>Great service! Sold my car within 30 minutes and received a good price including helping to settle the loan on my car.</i>
                                              </div>
                                           </div>
                                           <div class="userReview-details d-inline-flex w-100 pl-4">
                                              <div class="userProfile mr-3 Profile-alpha-o ml-3">
                                                 <h4 class="font-weight-bold">O</h4>
                                              </div>
                                              <div class="userName">
                                                 <h5 class="f-18  mb-0 ">Omar Saeed</h5>
                                                 <img src="{{ asset('front/images/star.webp') }}" width="18" alt="star" onerror="this.onerror=null; this.src='{{ asset('front/images/star.svg') }}'"/>
                                                 <img src="{{ asset('front/images/star.webp') }}" width="18" alt="star" onerror="this.onerror=null; this.src='{{ asset('front/images/star.svg') }}'"/>
                                                 <img src="{{ asset('front/images/star.webp') }}" width="18" alt="star" onerror="this.onerror=null; this.src='{{ asset('front/images/star.svg') }}'"/>
                                                 <img src="{{ asset('front/images/star.webp') }}" width="18" alt="star" onerror="this.onerror=null; this.src='{{ asset('front/images/star.svg') }}'"/>
                                                 <img src="{{ asset('front/images/star.webp') }}" width="18" alt="star" onerror="this.onerror=null; this.src='{{ asset('front/images/star.svg') }}'"/>
                                              </div>
                                     
                                        </div>
                                     </div>
                                    <div class="col-lg-4 d-lg-flex flex-lg-column">
                                        <div class="bg-white shadow userReview py-4 px-5 mb-5 h-100">
                                              <div class="ml-3 reviewBox">
                                                 <i>I visited several car buying companies in same area but Expat car buyers offered the most competitive prices whilst also offering a comprehensive and professional service to enable a smooth transaction. Great customer service. Would highly recommend</i>
                                              </div>
                                           </div>
                                           <div class="userReview-details d-inline-flex w-100 pl-4">
                                              <div class="userProfile mr-3 Profile-alpha-a ml-3">
                                                 <h4 class="font-weight-bold">A</h4>
                                              </div>
                                              <div class="userName">
                                                 <h5 class="f-18  mb-0 ">Ajith Kumar</h5>
                                                 <img src="{{ asset('front/images/star.webp') }}" width="18" alt="star" onerror="this.onerror=null; this.src='{{ asset('front/images/star.svg') }}'"/>
                                                 <img src="{{ asset('front/images/star.webp') }}" width="18" alt="star" onerror="this.onerror=null; this.src='{{ asset('front/images/star.svg') }}'"/>
                                                 <img src="{{ asset('front/images/star.webp') }}" width="18" alt="star" onerror="this.onerror=null; this.src='{{ asset('front/images/star.svg') }}'"/>
                                                 <img src="{{ asset('front/images/star.webp') }}" width="18" alt="star" onerror="this.onerror=null; this.src='{{ asset('front/images/star.svg') }}'"/>
                                                 <img src="{{ asset('front/images/star.webp') }}" width="18" alt="star" onerror="this.onerror=null; this.src='{{ asset('front/images/star.svg') }}'"/>
                                              </div>
                                           </div>
                                    
                                  </div>
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->
                            
                            <div class="carousel-item">
                                <div class="row">
                                <div class="col-lg-4 d-lg-flex flex-lg-column mb-lg-0 mb-5" id="slide1">
                                        <div class="bg-white shadow userReview py-4 px-5 mb-5 h-100">
                                         <div class="ml-3 reviewBox">
                                         <i>Highly recommend selling your car with the Expat Car Buyers. Fast, genuine service. Very helpful guys. My experience was great and wouldn’t go to any other place in Dubai.</i>
                                    </div>
                                </div>
                                  <div class="userReview-details d-inline-flex w-100 pl-4">
                                 <div class="userProfile mr-3 Profile-alpha-i ml-3">
                                 <h4 class="font-weight-bold">L</h4>
                                </div>
                                 <div class="userName">
                                    <h5 class="f-18  mb-0 ">Lucy Komolka</h5>
                                    <img src="{{ asset('front/images/star.webp') }}" width="18" alt="star" onerror="this.onerror=null; this.src='{{ asset('front/images/star.svg') }}'"/>
                                    <img src="{{ asset('front/images/star.webp') }}" width="18" alt="star" onerror="this.onerror=null; this.src='{{ asset('front/images/star.svg') }}'"/>
                                    <img src="{{ asset('front/images/star.webp') }}" width="18" alt="star" onerror="this.onerror=null; this.src='{{ asset('front/images/star.svg') }}'"/>
                                    <img src="{{ asset('front/images/star.webp') }}" width="18" alt="star" onerror="this.onerror=null; this.src='{{ asset('front/images/star.svg') }}'"/>
                                    <img src="{{ asset('front/images/star.webp') }}" width="18" alt="star" onerror="this.onerror=null; this.src='{{ asset('front/images/star.svg') }}'"/>
                                    </div>
                                 </div>
                                 </div>
                                 <div class="col-lg-4 d-lg-flex flex-lg-column mb-lg-0 mb-5">
                                    <div class="bg-white shadow userReview py-4 px-5 mb-5 h-100">
                                              <div class="ml-3 reviewBox">
                                                 <i>It was very easy as in one stop shop.Transfer of car and cash payment on the spot. The whole thing took under 30 mins and that's what I needed. Thank you guys.</i>
                                              </div>
                                           </div>
                                           <div class="userReview-details d-inline-flex w-100 pl-4">
                                              <div class="userProfile mr-3 Profile-alpha-o ml-3">
                                                 <h4 class="font-weight-bold">S</h4>
                                              </div>
                                              <div class="userName">
                                                 <h5 class="f-18  mb-0 ">Shafqat Ali</h5>
                                                 <img src="{{ asset('front/images/star.webp') }}" width="18" alt="star" onerror="this.onerror=null; this.src='{{ asset('front/images/star.svg') }}'"/>
                                                 <img src="{{ asset('front/images/star.webp') }}" width="18" alt="star" onerror="this.onerror=null; this.src='{{ asset('front/images/star.svg') }}'"/>
                                                 <img src="{{ asset('front/images/star.webp') }}" width="18" alt="star" onerror="this.onerror=null; this.src='{{ asset('front/images/star.svg') }}'"/>
                                                 <img src="{{ asset('front/images/star.webp') }}" width="18" alt="star" onerror="this.onerror=null; this.src='{{ asset('front/images/star.svg') }}'"/>
                                                 <img src="{{ asset('front/images/star.webp') }}" width="18" alt="star" onerror="this.onerror=null; this.src='{{ asset('front/images/star.svg') }}'"/>
                                              </div>
                                     
                                        </div>
                                     </div>
                                    <div class="col-lg-4 d-lg-flex flex-lg-column">
                                        <div class="bg-white shadow userReview py-4 px-5 mb-5 h-100">
                                              <div class="ml-3 reviewBox">
                                                 <i>Could sell my car in very short time and got a fair price. Thank you for the excellent service!</i>
                                              </div>
                                           </div>
                                           <div class="userReview-details d-inline-flex w-100 pl-4">
                                              <div class="userProfile mr-3 Profile-alpha-a ml-3">
                                                 <h4 class="font-weight-bold">T</h4>
                                              </div>
                                              <div class="userName">
                                                 <h5 class="f-18  mb-0 ">Thomas Buchner</h5>
                                                 <img src="{{ asset('front/images/star.webp') }}" width="18" alt="star" onerror="this.onerror=null; this.src='{{ asset('front/images/star.svg') }}'"/>
                                                 <img src="{{ asset('front/images/star.webp') }}" width="18" alt="star" onerror="this.onerror=null; this.src='{{ asset('front/images/star.svg') }}'"/>
                                                 <img src="{{ asset('front/images/star.webp') }}" width="18" alt="star" onerror="this.onerror=null; this.src='{{ asset('front/images/star.svg') }}'"/>
                                                 <img src="{{ asset('front/images/star.webp') }}" width="18" alt="star" onerror="this.onerror=null; this.src='{{ asset('front/images/star.svg') }}'"/>
                                                 <img src="{{ asset('front/images/star.webp') }}" width="18" alt="star" onerror="this.onerror=null; this.src='{{ asset('front/images/star.svg') }}'"/>
                                              </div>
                                           </div>
                                    
                                  </div>
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->
                        </div>
                        <!--.carousel-inner-->
                        <!-- Controls -->
                    <div class="carousel-control-div">
                         <ol class="carousel-indicators">
                            <li data-target="#testCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#testCarousel" data-slide-to="1"></li>
                        </ol>
                      </div>
                    </div>
                    <!--.Carousel-->
                </div>
            </div>
         </div>
      </section>
      
      	<section class="what-people-say py-5 d-block d-md-none mobile-carousal-slider">
         <div class="container py-3">
            <div class="row">
               <div class="col-md-12 text-center">
                  <h2 class="font-weight-light mb-5">What people are saying<span class="font-weight-bold theme-color">?</h2>
               </div>
            </div>
				<div class="row">
                <div class="col-md-12">
                    <div id="testmobileCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Carousel items -->
                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <div class="row">
                                <div class="col-lg-12 d-lg-flex flex-lg-column mb-lg-0" id="slide1">
                                        <div class="bg-white shadow userReview py-4 px-5 mb-5 h-100">
                                         <div class="ml-3 reviewBox">
                                         <i>Amazing service. If u want to experience the hassle free way of selling car, this is the best place to go. Been to other companies in past and I must say their service is exeptional.. cheers</i>
                                    </div>
                                </div>
                                  <div class="userReview-details d-inline-flex w-100 pl-4">
                                 <div class="userProfile mr-3 Profile-alpha-i ml-3">
                                 <h4 class="font-weight-bold">I</h4>
                                </div>
                                 <div class="userName">
                                    <h5 class="f-18  mb-0 ">Irina</h5>
                                    <img src="{{ asset('front/images/star.webp') }}" width="18" alt="star" onerror="this.onerror=null; this.src='{{ asset('front/images/star.svg') }}'"/>
                                    <img src="{{ asset('front/images/star.webp') }}" width="18" alt="star" onerror="this.onerror=null; this.src='{{ asset('front/images/star.svg') }}'"/>
                                    <img src="{{ asset('front/images/star.webp') }}" width="18" alt="star" onerror="this.onerror=null; this.src='{{ asset('front/images/star.svg') }}'"/>
                                    <img src="{{ asset('front/images/star.webp') }}" width="18" alt="star" onerror="this.onerror=null; this.src='{{ asset('front/images/star.svg') }}'"/>
                                    <img src="{{ asset('front/images/star.webp') }}" width="18" alt="star" onerror="this.onerror=null; this.src='{{ asset('front/images/star.svg') }}'"/>
                                    </div>
                                 </div>
                                 </div>
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->
                            <div class="carousel-item">
                                <div class="row">
                                 <div class="col-lg-12 d-lg-flex flex-lg-column mb-lg-0">
                                    <div class="bg-white shadow userReview py-4 px-5 mb-5 h-100">
                                              <div class="ml-3 reviewBox">
                                                 <i>Great service! Sold my car within 30 minutes and received a good price including helping to settle the loan on my car.</i>
                                              </div>
                                           </div>
                                           <div class="userReview-details d-inline-flex w-100 pl-4">
                                              <div class="userProfile mr-3 Profile-alpha-o ml-3">
                                                 <h4 class="font-weight-bold">O</h4>
                                              </div>
                                              <div class="userName">
                                                 <h5 class="f-18  mb-0 ">Omar Saeed</h5>
                                                 <img src="{{ asset('front/images/star.webp') }}" width="18" alt="star" onerror="this.onerror=null; this.src='{{ asset('front/images/star.svg') }}'"/>
                                                 <img src="{{ asset('front/images/star.webp') }}" width="18" alt="star" onerror="this.onerror=null; this.src='{{ asset('front/images/star.svg') }}'"/>
                                                 <img src="{{ asset('front/images/star.webp') }}" width="18" alt="star" onerror="this.onerror=null; this.src='{{ asset('front/images/star.svg') }}'"/>
                                                 <img src="{{ asset('front/images/star.webp') }}" width="18" alt="star" onerror="this.onerror=null; this.src='{{ asset('front/images/star.svg') }}'"/>
                                                 <img src="{{ asset('front/images/star.webp') }}" width="18" alt="star" onerror="this.onerror=null; this.src='{{ asset('front/images/star.svg') }}'"/>
                                              </div>
                                     
                                        </div>
                                     </div>
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->
                            <div class="carousel-item">
                                <div class="row">
                                 <div class="col-lg-12 d-lg-flex flex-lg-column">
                                        <div class="bg-white shadow userReview py-4 px-5 mb-5 h-100">
                                              <div class="ml-3 reviewBox">
                                                 <i>I visited several car buying companies in same area but Expat car buyers offered the most competitive prices whilst also offering a comprehensive and professional service to enable a smooth transaction. Great customer service. Would highly recommend</i>
                                              </div>
                                           </div>
                                           <div class="userReview-details d-inline-flex w-100 pl-4">
                                              <div class="userProfile mr-3 Profile-alpha-a ml-3">
                                                 <h4 class="font-weight-bold">A</h4>
                                              </div>
                                              <div class="userName">
                                                 <h5 class="f-18  mb-0 ">Ajith Kumar</h5>
                                                 <img src="{{ asset('front/images/star.webp') }}" width="18" alt="star" onerror="this.onerror=null; this.src='{{ asset('front/images/star.svg') }}'"/>
                                                 <img src="{{ asset('front/images/star.webp') }}" width="18" alt="star" onerror="this.onerror=null; this.src='{{ asset('front/images/star.svg') }}'"/>
                                                 <img src="{{ asset('front/images/star.webp') }}" width="18" alt="star" onerror="this.onerror=null; this.src='{{ asset('front/images/star.svg') }}'"/>
                                                 <img src="{{ asset('front/images/star.webp') }}" width="18" alt="star" onerror="this.onerror=null; this.src='{{ asset('front/images/star.svg') }}'"/>
                                                 <img src="{{ asset('front/images/star.webp') }}" width="18" alt="star" onerror="this.onerror=null; this.src='{{ asset('front/images/star.svg') }}'"/>
                                              </div>
                                           </div>
                                    
                                  </div>
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->

                           <div class="carousel-item">
                                <div class="row">
                                <div class="col-lg-2 d-lg-flex flex-lg-column mb-lg-0" id="slide1">
                                        <div class="bg-white shadow userReview py-4 px-5 mb-5 h-100">
                                         <div class="ml-3 reviewBox">
                                         <i>Highly recommend selling your car with the Expat Car Buyers. Fast, genuine service. Very helpful guys. My experience was great and wouldn’t go to any other place in Dubai.</i>
                                    </div>
                                </div>
                                  <div class="userReview-details d-inline-flex w-100 pl-4">
                                 <div class="userProfile mr-3 Profile-alpha-i ml-3">
                                 <h4 class="font-weight-bold">L</h4>
                                </div>
                                 <div class="userName">
                                    <h5 class="f-18  mb-0 ">Lucy Komolka</h5>
                                    <img src="{{ asset('front/images/star.webp') }}" width="18" alt="star" onerror="this.onerror=null; this.src='{{ asset('front/images/star.svg') }}'"/>
                                    <img src="{{ asset('front/images/star.webp') }}" width="18" alt="star" onerror="this.onerror=null; this.src='{{ asset('front/images/star.svg') }}'"/>
                                    <img src="{{ asset('front/images/star.webp') }}" width="18" alt="star" onerror="this.onerror=null; this.src='{{ asset('front/images/star.svg') }}'"/>
                                    <img src="{{ asset('front/images/star.webp') }}" width="18" alt="star" onerror="this.onerror=null; this.src='{{ asset('front/images/star.svg') }}'"/>
                                    <img src="{{ asset('front/images/star.webp') }}" width="18" alt="star" onerror="this.onerror=null; this.src='{{ asset('front/images/star.svg') }}'"/>
                                    </div>
                                 </div>
                                 </div>
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->
                             <div class="carousel-item">
                                <div class="row">
                                <div class="col-lg-12 d-lg-flex flex-lg-column mb-lg-0">
                                    <div class="bg-white shadow userReview py-4 px-5 mb-5 h-100">
                                              <div class="ml-3 reviewBox">
                                                 <i>It was very easy as in one stop shop.Transfer of car and cash payment on the spot. The whole thing took under 30 mins and that's what I needed. Thank you guys.</i>
                                              </div>
                                           </div>
                                           <div class="userReview-details d-inline-flex w-100 pl-4">
                                              <div class="userProfile mr-3 Profile-alpha-o ml-3">
                                                 <h4 class="font-weight-bold">S</h4>
                                              </div>
                                              <div class="userName">
                                                 <h5 class="f-18  mb-0 ">Shafqat Ali</h5>
                                                 <img src="{{ asset('front/images/star.webp') }}" width="18" alt="star" onerror="this.onerror=null; this.src='{{ asset('front/images/star.svg') }}'"/>
                                                 <img src="{{ asset('front/images/star.webp') }}" width="18" alt="star" onerror="this.onerror=null; this.src='{{ asset('front/images/star.svg') }}'"/>
                                                 <img src="{{ asset('front/images/star.webp') }}" width="18" alt="star" onerror="this.onerror=null; this.src='{{ asset('front/images/star.svg') }}'"/>
                                                 <img src="{{ asset('front/images/star.webp') }}" width="18" alt="star" onerror="this.onerror=null; this.src='{{ asset('front/images/star.svg') }}'"/>
                                                 <img src="{{ asset('front/images/star.webp') }}" width="18" alt="star" onerror="this.onerror=null; this.src='{{ asset('front/images/star.svg') }}'"/>
                                              </div>
                                     
                                        </div>
                                     </div>
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->
                                 <div class="carousel-item">
                                <div class="row">
                                 <div class="col-lg-12 d-lg-flex flex-lg-column">
                                        <div class="bg-white shadow userReview py-4 px-5 mb-5 h-100">
                                              <div class="ml-3 reviewBox">
                                                 <i>Could sell my car in very short time and got a fair price. Thank you for the excellent service!</i>
                                              </div>
                                           </div>
                                           <div class="userReview-details d-inline-flex w-100 pl-4">
                                              <div class="userProfile mr-3 Profile-alpha-a ml-3">
                                                 <h4 class="font-weight-bold">T</h4>
                                              </div>
                                              <div class="userName">
                                                 <h5 class="f-18  mb-0 ">Thomas Buchner</h5>
                                                 <img src="{{ asset('front/images/star.webp') }}" width="18" alt="star" onerror="this.onerror=null; this.src='{{ asset('front/images/star.svg') }}'"/>
                                                 <img src="{{ asset('front/images/star.webp') }}" width="18" alt="star" onerror="this.onerror=null; this.src='{{ asset('front/images/star.svg') }}'"/>
                                                 <img src="{{ asset('front/images/star.webp') }}" width="18" alt="star" onerror="this.onerror=null; this.src='{{ asset('front/images/star.svg') }}'"/>
                                                 <img src="{{ asset('front/images/star.webp') }}" width="18" alt="star" onerror="this.onerror=null; this.src='{{ asset('front/images/star.svg') }}'"/>
                                                 <img src="{{ asset('front/images/star.webp') }}" width="18" alt="star" onerror="this.onerror=null; this.src='{{ asset('front/images/star.svg') }}'"/>
                                              </div>
                                           </div>
                                    
                                  </div>
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->
                        </div>
                        <!--.carousel-inner-->
                        <!-- Controls -->
                    <div class="carousel-control-div">
                         <ol class="carousel-indicators">
                            <li data-target="#testmobileCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#testmobileCarousel" data-slide-to="1"></li>
                            <li data-target="#testmobileCarousel" data-slide-to="2"></li>
                            <li data-target="#testmobileCarousel" data-slide-to="3"></li>
                            <li data-target="#testmobileCarousel" data-slide-to="4"></li>
                            <li data-target="#testmobileCarousel" data-slide-to="5"></li>
                        </ol>
                      </div>
                    </div>
                    <!--.Carousel-->
                </div>
            </div>
         </div>
    </section>
	<div class="contact-us-section">
		<div class="row m-0">
			<div class="col-md-6 p-0">
				<div class="contact-in pt_ninty">
					<div class="cont-in-text">
						<div class="cont-box d-flex mb-4">
							<div class="cont-icon">
								<!--<img src="{{ asset('front2/images/placeholder.svg') }}" alt="" class="img-fluid" />-->
								<img src="{{ asset('front2/images/placeholder.webp?v=1') }}" class="img-fluid" alt="placeholder" onerror="this.onerror=null; this.src='{{ asset('front2/images/placeholder.svg') }}'"/>
							</div>
							<div class="cont-txt pl-4 pl-xl-5">
								<h4 class="font-poiret text-white text-uppercase">Keep in Touch</h4>
								<p class="text-white br_none">Expatcarbuyers - Office No. 17,Umm Al Sheif, Exit<br>
									no 41 Sheikh Zayed Rd, Dubai, United Arab<br> Emirates</p>
							</div>
						</div>
						<div class="cont-box d-flex mb-4">
							<div class="cont-icon">
								<!--<img src="{{ asset('front2/images/telephone.svg') }}" alt="" class="img-fluid" />-->
								<img src="{{ asset('front2/images/telephone.webp?v=1') }}" class="img-fluid" alt="telephone" onerror="this.onerror=null; this.src='{{ asset('front2/images/telephone.svg') }}'"/>
							</div>
							<div class="cont-txt pl-4 pl-xl-5">
								<h4 class="font-poiret text-white text-uppercase">Service Helpline</h4>
								<p class="text-white"><a href="tel:+971561774555" class="text-white">+971 56 1774555</a></p>
							</div>
						</div>
						<div class="cont-box d-flex">
							<div class="cont-icon">
								<!--<img src="{{ asset('front2/images/letter.svg') }}" alt="" class="img-fluid" />-->
								<img src="{{ asset('front2/images/letter.webp?v=1') }}" class="img-fluid" alt="letter" onerror="this.onerror=null; this.src='{{ asset('front2/images/letter.svg') }}'"/>
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
	  