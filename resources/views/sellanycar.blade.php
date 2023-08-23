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
	<div class="why-sell-section pt_ninty position-relative">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="why-left-sec">
						<h3 class="text-uppercase font-Oswald text-white">
							WHY SELL YOUR CAR WITH
						</h3>
						<h1 class="text-uppercase font-poiret text-white">Expat Car Buyers?</h1>
						<p class="text-white">Why sell car with Expat Car Buyers? On our side, this has indeed been a question we keep on asking ourselves that “why would anyone want to involve in <a href="{{url('/sell-any-car')}}" style="color:#fff;">selling any car</a> with us?”  This can seem as an ordinary question, but it has served as strength in providing the best platform, experts, and high responsiveness in satisfying our customers. Have you ever asked yourself why I need to sell my car with Expat Car Buyers? Then here are some advantages you might want to consider:</p>

						<div class="text-white">
							<ul style="padding-left:20px;">
								<li>We offer a 100% fair deal</li>
								<li>Fast business deal to save time for both parties</li>
								<li>We <a href="{{url('/we-cash-any-car')}}" style="color:#fff;">buy any car</a> in 30minutes irrespective of its condition</li>
								<li>We save you the stress of having to spend extra cash on repair to get your car sold for a good price</li>
								<li>We have the right valuation tool to help you know the value your car</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-6 p-0">
					<div class="why-right-sec">
						<img src="{{ asset('front2/images/why-car.png') }}" alt="Sell My Car Dubai" class="img-fluid">
					</div>
				</div>
			</div>
			<div class="row" style="margin-top:20px;">
				<div class="col-lg-12">
					<h4 class="text-uppercase font-poiret text-white">
							SELLING YOUR CAR IN DUBAI?
					</h4>
					<p class="text-white">The main reason why we are here is to make it all easy without excluding the best deal. Whether you are sure or not of how to sell your car in UAE, we still got you on both sides. Your method of approach and choose the right vendor can by far determine the rate at which you get the highest offer and deal when you want to sell any car in Dubai. We pay less attention to whatever condition, brand or reason behind the selling of your car, all we have for you is to ensure that you get a fair deal and get your cash without delay. When we talk about the brands of cars that we buy, we do not stop talking because we buy virtually all brands of cars ranging from <a href="https://expatcarbuyers.com/sell-my-car/volvo">Volvo</a>, <a href="https://expatcarbuyers.com/sell-my-car/mercedes-benz">Mercedes</a>, <a href="https://expatcarbuyers.com/sell-my-car/toyota">Toyota</a>, <a href="https://expatcarbuyers.com/sell-my-car/honda">Honda</a>, etc. so, we purchase your car irrespective of the condition.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="any-car-sec pt_ninty position-relative">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="any-left-sec any-car-animation">
						<img src="{{ asset('front2/images/any-car.png') }}" class="car" data-parallax='{"x": 550, "from-scroll": 1600 , "distance": 50, "smoothness": 30, "easing":0}' alt="Sell Any Car UAE">
						<img src="{{ asset('front2/images/Car-wheel.png') }}" class="wheel-right" data-parallax='{"x": 550, "rotateZ": 1600, "from-scroll": 1600, "distance": 50, "smoothness": 30, "easing":0}'>
						<img src="{{ asset('front2/images/Car-wheel.png') }}" class="wheel-left" data-parallax='{"x": 550, "rotateZ": 1600, "from-scroll": 1600, "distance": 50, "smoothness": 30, "easing":0}'>
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="any-right-sec">
						<h3 class="text-uppercase font-poiret"><span>Sell any car </span>with us!</h3>
						<p class="br_none font-mons mb-5">We are the best, not by words but by what we do…..</p>
						<div class="free-valuation d-flex mt-4">
							<div class="value-img"><img src="{{ asset('front2/images/Free-Valuation.svg') }}" alt="" class="img-fluid" /></div>
							<div class="value-txt">
								<h5 class="font-Oswald mb-0">Cost-free Valuation</h5>
								<p class="font-mons mb-0">With the right tool without excluding a fair deal</p>
							</div>
						</div>
						<div class="free-valuation d-flex mt-4">
							<div class="value-img"> <img src="{{ asset('front2/images/Years.svg') }}" alt="" class="img-fluid" /></div>
							<div class="value-txt">
								<h5 class="font-Oswald mb-0">Years of Experience</h5>
								<p class="font-mons mb-0">Good number of business experience with passion</p>
							</div>
						</div>
						<div class="free-valuation d-flex mt-4">
							<div class="value-img"> <img src="{{ asset('front2/images/Expedited.svg') }}" alt="" class="img-fluid" /></div>
							<div class="value-txt">
								<h5 class="font-Oswald mb-0">Expedited Process</h5>
								<p class="font-mons mb-0">Complete transaction in a maximum of 30minutes</p>
							</div>
						</div>
						<div class="free-valuation d-flex mt-4">
							<div class="value-img"><img src="{{ asset('front2/images/No-stress.svg') }}" alt="" class="img-fluid" /></div>
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
					<h3 class="text-white text-uppercase font-poiret text-center">GET AN INSTANT OFFER NOW</h3>
					<p class="font-mons text-center text-white mb-md-5 mb-3">We are a professional and approved body; we will handle your transactions with utmost fairness and no after-problems. All you need to do is contact us, we will offer you a real, safe and buy your car in whatever condition. We have been authorized and motivated in every way to serve you better! Below is the simple process to go through:</p>
					<div class="row">
						<div class="col-md-6">
							<ul class="text-white font-mons" style="padding-left:20px;font-size:18px;">
								<li>Any individual interested in selling car at the best deal would need to visit our website and complete the necessary information required.</li>
								<li>There would be a physical car inspection which would not take much of your time.</li>
							</ul>
						</div>
						<div class="col-md-6">
							<ul class="text-white font-mons" style="padding-left:20px;font-size:18px;">
								<li>Our company will make available a fair bid with some considerable moment given to you to estimate if that would work for you.</li>
								<li>After you might have fully thought about our bid or proposal and it seems perfect and fair enough, then we come to an agreement, make the payment, and close the deal.</li>
							</ul>
						</div>
					</div>
					<p class="text-center text-white" style="margin-top:20px;">Can you imagine the ease attached to that?  With a zero stress attached, we offer you the best of deals in UAE. We have made available a technique to determine the best value of your car, and after you might have done that, you would know how best the price of your car can go. We have trained, and also hire highly skilled professionals to offer unique and the best services to our customers. </p>
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
					<div class="sale-car"><img src="{{ asset('front2/images/car1.png') }}"  data-parallax='{"y": 1900, "from-scroll": 3500 , "distance": 1800, "smoothness": 30, "easing":0}' alt="">
					</div>
					<div class="sale-car-1"><img src="{{ asset('front2/images/car1.png') }}"  data-parallax='{"y": 1300, "from-scroll": 1000 , "distance": 1500, "smoothness": 30, "easing":0}' alt="">	
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
										<h5 class="font-mons font-weight-light mb-0 br_none">FREE CAR<br/>
											VALUATION</h5>
									</div>
								</div>
								<p class="br_none mt-3">We consider the current market value price and condition of<br/> your car, then give you a non-obligate quote.</p>
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
								<p class="br_none mt-3">If an agreement is reached, we provide you with <br/>crucial documents for ownership transfer.</p>
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
								<p class="br_none mt-3">Besides the aforementioned advantages, we also clear<br/> any debt issued on the car and settle you with a reasonable difference.</p>
							</div>
							<div class="p-box">
								<div class="free-valuation d-flex">
									<div class="value-img"> <img src="{{ asset('front2/images/Instant-Cash.svg') }}" alt="" class="img-fluid"></div>
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
                                    <img src="{{ asset('front/images/star.svg') }}" width="18" />
                                    <img src="{{ asset('front/images/star.svg') }}" width="18" />
                                    <img src="{{ asset('front/images/star.svg') }}" width="18" />
                                    <img src="{{ asset('front/images/star.svg') }}" width="18" />
                                    <img src="{{ asset('front/images/star.svg') }}" width="18" />
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
                                                 <img src="{{ asset('front/images/star.svg') }}" width="18" />
                                                 <img src="{{ asset('front/images/star.svg') }}" width="18" />
                                                 <img src="{{ asset('front/images/star.svg') }}" width="18" />
                                                 <img src="{{ asset('front/images/star.svg') }}" width="18" />
                                                 <img src="{{ asset('front/images/star.svg') }}" width="18" />
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
                                                 <img src="{{ asset('front/images/star.svg') }}" width="18" />
                                                 <img src="{{ asset('front/images/star.svg') }}" width="18" />
                                                 <img src="{{ asset('front/images/star.svg') }}" width="18" />
                                                 <img src="{{ asset('front/images/star.svg') }}" width="18" />
                                                 <img src="{{ asset('front/images/star.svg') }}" width="18" />
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
                                    <img src="{{ asset('front/images/star.svg') }}" width="18" />
                                    <img src="{{ asset('front/images/star.svg') }}" width="18" />
                                    <img src="{{ asset('front/images/star.svg') }}" width="18" />
                                    <img src="{{ asset('front/images/star.svg') }}" width="18" />
                                    <img src="{{ asset('front/images/star.svg') }}" width="18" />
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
                                                 <img src="{{ asset('front/images/star.svg') }}" width="18" />
                                                 <img src="{{ asset('front/images/star.svg') }}" width="18" />
                                                 <img src="{{ asset('front/images/star.svg') }}" width="18" />
                                                 <img src="{{ asset('front/images/star.svg') }}" width="18" />
                                                 <img src="{{ asset('front/images/star.svg') }}" width="18" />
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
                                                 <img src="{{ asset('front/images/star.svg') }}" width="18" />
                                                 <img src="{{ asset('front/images/star.svg') }}" width="18" />
                                                 <img src="{{ asset('front/images/star.svg') }}" width="18" />
                                                 <img src="{{ asset('front/images/star.svg') }}" width="18" />
                                                 <img src="{{ asset('front/images/star.svg') }}" width="18" />
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
                                    <img src="{{ asset('front/images/star.svg') }}" width="18" />
                                    <img src="{{ asset('front/images/star.svg') }}" width="18" />
                                    <img src="{{ asset('front/images/star.svg') }}" width="18" />
                                    <img src="{{ asset('front/images/star.svg') }}" width="18" />
                                    <img src="{{ asset('front/images/star.svg') }}" width="18" />
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
                                                 <img src="{{ asset('front/images/star.svg') }}" width="18" />
                                                 <img src="{{ asset('front/images/star.svg') }}" width="18" />
                                                 <img src="{{ asset('front/images/star.svg') }}" width="18" />
                                                 <img src="{{ asset('front/images/star.svg') }}" width="18" />
                                                 <img src="{{ asset('front/images/star.svg') }}" width="18" />
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
                                                 <img src="{{ asset('front/images/star.svg') }}" width="18" />
                                                 <img src="{{ asset('front/images/star.svg') }}" width="18" />
                                                 <img src="{{ asset('front/images/star.svg') }}" width="18" />
                                                 <img src="{{ asset('front/images/star.svg') }}" width="18" />
                                                 <img src="{{ asset('front/images/star.svg') }}" width="18" />
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
                                    <img src="{{ asset('front/images/star.svg') }}" width="18" />
                                    <img src="{{ asset('front/images/star.svg') }}" width="18" />
                                    <img src="{{ asset('front/images/star.svg') }}" width="18" />
                                    <img src="{{ asset('front/images/star.svg') }}" width="18" />
                                    <img src="{{ asset('front/images/star.svg') }}" width="18" />
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
                                                 <img src="{{ asset('front/images/star.svg') }}" width="18" />
                                                 <img src="{{ asset('front/images/star.svg') }}" width="18" />
                                                 <img src="{{ asset('front/images/star.svg') }}" width="18" />
                                                 <img src="{{ asset('front/images/star.svg') }}" width="18" />
                                                 <img src="{{ asset('front/images/star.svg') }}" width="18" />
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
                                                 <img src="{{ asset('front/images/star.svg') }}" width="18" />
                                                 <img src="{{ asset('front/images/star.svg') }}" width="18" />
                                                 <img src="{{ asset('front/images/star.svg') }}" width="18" />
                                                 <img src="{{ asset('front/images/star.svg') }}" width="18" />
                                                 <img src="{{ asset('front/images/star.svg') }}" width="18" />
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
	  