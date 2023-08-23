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
						<h1 class="text-uppercase font-poiret text-white">Easy Process To Selling Your Car In <strong>Sharjah</strong></h1>
						<p class="text-white">As we provide you with a very effective and simple process to sell your car in Sharjah, we give you reasonable cash for your property. Our mode of payment is never fixed, we pay you a good price either in cash, bank transfer, etc. We are a well established and certified used car dealers in Sharjah.</p>
						<p class="text-white">When you decide to Sell your car, that is one thing, getting a buyer is one thing, being offered a fast, simple, and secured service is one thing, and most importantly, getting good pay for one’s property is another thing. Imagining the stress in getting a good dealer is a big thing. Now, imagine all this stress solved with just the right car dealer. Imagine a No-stress business transaction that pays on your side. Expatcarbuyers will not only give you the best but keep you coming back.</p>
					</div>
				</div>
				<div class="col-lg-6 p-0">
					<div class="why-right-sec">
						<img src="{{ asset('front2/images/why-car.webp') }}" alt="Sell My Car Dubai" class="img-fluid" onerror="this.onerror=null; this.src='{{ asset('front2/images/why-car.png') }}'" />
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
						<img src="{{ asset('front2/images/any-car.webp') }}" onerror="this.onerror=null; this.src='{{ asset('front2/images/any-car.png') }}'" class="car" data-parallax='{"x": 550, "from-scroll": 1600 , "distance": 50, "smoothness": 30, "easing":0}' alt="Sell Any Car Sharjah"/>
						<img src="{{ asset('front2/images/Car-wheel.webp') }}" onerror="this.onerror=null; this.src='{{ asset('front2/images/Car-wheel.png') }}'" class="wheel-right" data-parallax='{"x": 550, "rotateZ": 1600, "from-scroll": 1600, "distance": 50, "smoothness": 30, "easing":0}' alt="Sell Any Car Sharjah"/>
						<img src="{{ asset('front2/images/Car-wheel.webp') }}" onerror="this.onerror=null; this.src='{{ asset('front2/images/Car-wheel.png') }}'" class="wheel-left" data-parallax='{"x": 550, "rotateZ": 1600, "from-scroll": 1600, "distance": 50, "smoothness": 30, "easing":0}' alt="Sell Any Car Sharjah"/>
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
					<h3 class="text-white text-uppercase font-poiret text-center">Cash My Car in <strong>Sharjah</strong></h3>
					<p class="font-mons text-center text-white mb-md-5 mb-3">Cashing your car in Sharjah is super easy, but only if you know the right car dealer to approach. We have been in business for quite some time, and one of the crucial factors that have kept us on the move is the motivating feedbacks from our customers.</p>
                    <p class="font-mons text-center text-white mb-md-5 mb-3">The services we offer are quality, professional and more importantly, friendly. Our staffs are diligent and experienced individuals. No matter how busy you can be, we can get to work according to your plans. After you must have contacted us, we will make you set a date which is most convenient for you. After that, we reach a common agreement and offer you cash for your car irrespective of your local location in Sharjah.</p>
				</div>
				
			</div>
		</div>
	</div>
	<div class="pt_ninty position-relative">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h3 class="text-uppercase font-poiret text-center">Sell Car Online In <strong>Sharjah</strong></h3>
					<p class="font-mons text-center mb-md-5 mb-3" style="font-size:20px;">Sell car online in Sharjah without stress using our user-friendly site, get to evaluate your car and get paid for your property. No need for paperwork on your side, we will handle that; we leave you with no stress while giving you the best of service.</p>
                    <p class="font-mons text-center mb-md-5 mb-3" style="font-size:20px;">These days, the use of the internet as a medium of commerce is more important. This is because there is more access to services which cannot be offered in one's local environment. More also, there is the availability of more quality services offered compared to the local ones.</p>
				</div>
				
			</div>
		</div>
	</div>
		<div class="get-instant-sec pt_ninty position-relative">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h3 class="text-white text-uppercase font-poiret text-center">Used Car dealers in <strong>Sharjah</strong></h3>
					<p class="font-mons text-center text-white mb-md-5 mb-3">We buy a wide range of cars, irrespective of the condition, the make, the age or other factors. Expatcarbuyers is a used car dealer in Sharjah. We offer our services on the foundation of providing our customers with the best. If you are interested in selling your used car in Sharjah, you are indeed in the right place.</p>
                    <p class="font-mons text-center text-white mb-md-5 mb-3">After you must have evaluated your car, you get to decide if to sell or not. But if you decide to sell your used car, our staff(s) would make an appointment with your based on your free time for a free inspection of your car. The process is short and if a conclusion is reached, we hand you the cash right on the spot.</p>
                    <p class="font-mons text-center text-white mb-md-5 mb-3">There is no need to give in to worries concerning the debts to be paid on your to-be-sold car, we help you clear the debts and hand you fair cash. Also, there is no need to think about any paperwork, we will handle that on our side. </p>
                    <p class="font-mons text-center text-white mb-md-5 mb-3">Whether your car is scratched, partially or totally bent inwards, you do not need to spend extra cash looking for a professional to fix it for you. That would not only take your time, but also take your cash. Of course, you would not want to spend extra cash on something that is not necessary right? Leave your car as it is, we can buy your car with the defects and still handle you a good price. Our staffs are well-trained and friendly. Sell your used car in Sharjah and get a fast, simple secured service with a best competitive price today!</p>
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
					<div class="sale-car"><img src="{{ asset('front2/images/car1.webp') }}" onerror="this.onerror=null; this.src='{{ asset('front2/images/car1.png') }}'" alt="Sell Car in Sharjah"  data-parallax='{"y": 1900, "from-scroll": 3500 , "distance": 1800, "smoothness": 30, "easing":0}'/>
					</div>
					<div class="sale-car-1"><img src="{{ asset('front2/images/car1.webp') }}" onerror="this.onerror=null; this.src='{{ asset('front2/images/car1.png') }}'" alt="Sell Car in Sharjah"  data-parallax='{"y": 1300, "from-scroll": 1000 , "distance": 1500, "smoothness": 30, "easing":0}'/>
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
	  