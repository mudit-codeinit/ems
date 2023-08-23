@extends('layouts.header-used-cars')

@section('content')



<!-- icon cdn  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />



<!-- ========== Start section-1 ========== -->
<section id="section-1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 mt-4">
                <div class="left-text">
                    <!--<p class="Top">-->
                    <!--    Top Brands-->
                    <!--</p>-->
                    <h4>Scrap Cars Into Instant Cash, <span class="color">with Expat Car Buyers</span> </h4>
                    <p class="p-style">The number 1 Scrap Car Buyers in Dubai</p>
                    <!--<button class="book-now">Book Now</button>-->
                </div>
            </div>
            <div class="col-lg-6  d-flex justify-content-end p-0">
                <div class="img-box">
                    <!-- bg-img  -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========== End section-1 ========== -->
<!-- ========== Start booking ========== -->
<section id="booking">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">

                <div class="d-flex align-items-center justify-content-center custom-Height-form flex-column w-100">


                    <!--<h1 class="w-100 mb-3 banner-header">Sell Any Car in UAE with Expat Car-->
                    <!--    Buyers</h1>-->

                    <!--<p class="w-100 mb-3 banner-subheader">Want to SELL A CAR in-->
                    <!--    Dubai ? Fill out the form and sell your car in 30 Minutes</p>-->

                    <div class="d-inline-block align-items-center w-100">

                        <form id="booking_form_step_1" method="Post" action="{{ url('step-2') }}" class="form-inline banner-form w-100 shadow py-3 px-2">

                            @csrf

                            <div class="col-12 col-lg-10 p-0">

                                <div class="row m-0">

                                    <div class="dropdown car_year col-12  col-md-6 col-lg-3">
                                        <select class="modl-year form-control w-100" id="year" name="year" aria-label="year">

                                            <option value="" disabled="disabled" selected style="padding: 0px;">
                                                Select Year
                                            </option>

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
                                        <!---->

                                        <span class="err_msg error_date" style="display:none;color:red;">This field is required</span>

                                    </div>

                                    <div class="dropdown  selectmake col-12 col-md-6 col-lg-3">

                                        @php

                                        $brands = \App\Models\Brand::where('top','<','2')->get();

                                            $top_brands = \App\Models\Brand::where('top','1')->get();

                                            @endphp

                                            <select class="form-control w-100" id="brand_val" name="brand_name" aria-label="brand">

                                                <option value="" selected disabled="disabled" style="padding: 0px;">
                                                    Select Make
                                                </option>


                                                @foreach($top_brands as $brandss)

                                                <option value="{{ $brandss->name }}" style="padding: 0px;">{{
                                                        $brandss->name }}
                                                </option>

                                                @endforeach

                                                <option disabled="disabled">-------------------</option>

                                                @foreach($brands as $brand)

                                                <option value="{{ $brand->name }}" style="padding: 0px;">{{
                                                        $brand->name }}
                                                </option>

                                                @endforeach

                                            </select>

                                            <span class="err_msg error_brand" style="display:none;color:red;">This field is required</span>

                                            <!---->

                                    </div>

                                    <div class="dropdown  car_modal col-12 col-md-6 col-lg-3">

                                        <select class="modl-model form-control  w-100" id="fetched_model" style="width: 100%;" name="model_name" aria-label="model">

                                            <option value="" selected disabled="disabled">Select Model</option>

                                        </select>

                                        <span class="err_msg error_model" style="display:none;color:red;">This field is required</span>

                                        <!---->

                                    </div>

                                    <div class="dropdown  car_call col-12 col-md-6 col-lg-3">

                                        <input type="tel" name="number" placeholder="Phone Number" class="numberinput w-100 form-control " aria-label="Phone Number" pattern="[0-9]*"> <!---->

                                        <span class="err_msg error_phone" style="display:none;color:red;">Please enter a valid phone number.e.g ( 05xxxxxxxx / +9715xxxxxxxx )</span>

                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-2 d-flex align-items-center">

                                <button type="submit" class="btn btn-danger text-capitalize book-button myform" id="book_appon">book now</button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>


    </div>
</section>
<!-- ========== End booking ========== -->
<!-- ========== Start Sell-vehicle ========== -->
<section id="sell-vehicle">
    <div class="container-fluid">
        <div class="row">
            <div class=" col-lg-6 ">
                <div class="left-text">
                    <h2> Get Instant Cash for Your Scrap Car </h2>

                    <p class="Et-harum">
                        No matter how much a car is treasured and cared for, or how long it has served you, it will one day reach that stage of worn out, either from a good use or an unforeseen accident. When this happens, so many emotions set in. You don't want to let go even when it's obviously not serving you anymore. Most often you don't want to consider selling scrap cars as an option. You simply hope a repair would help. However, you need to ask yourself if it is really a worthwhile attempt. Repair often comes at a greater price and effort. Sometimes it can be more beneficial to sell a damaged car, especially when the repair costs exceed the remaining value of your car. Perhaps there's one sitting in your garage or on your driveway at the moment rusting away with dust, and you’re at a fix on what to do. You need to act fast, before your compound is overtaken by junk cars.
                    </p>
                    <h2> What To Do with Your Unused Car</h2>
                    <p class="Et-harum">
                        The only profitable solution to getting rid of your unused car is to simply scrap for a high price.
                        We guess You might also be thinking selling car scrap could be a daunting exercise, especially with the fear of finding reputable professionals to trade with.
                        We quite agree with you, but worry no more! You can scrap your car with us at Expat Car Buyers, the only reputable and trusted scrap car buyers in Dubai.
                        We’ve got you covered in all aspects.

                    </p>

                </div>
            </div>
            <div class="col-lg-6 p-0 d-flex justify-content-end">
                <div class="img-box">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========== End For Sell-vehicle    ========== -->
<!-- section car-sell-->
<section class="car-sell">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 p-0 z-3">
                <div class="img-box">
                    <!-- bg-img  -->
                </div>
            </div>
            <div class="col-lg-6 ">
                <div class="right-text">
                    <h2>Why Should You Sell Your Car? </h2>
                    <p class="Et-harum">The decision to sell a car cannot be easily made if you can't define exactly when to let go. Let's get it simplified for you.
                        You should start considering selling your car if it falls into any of the categories below:</p>
                    <ul>
                        <li>
                            <img src="images/arrow-right-.png" alt="">
                            <span>If you have a non running car that is gathering dust and is beginning to rust</span>
                        </li>

                        <li>
                            <img src="images/arrow-right-.png" alt="">
                            <span>If your car has served you for more than 12-15 years.</span>
                        </li>
                        <li>
                            <img src="images/arrow-right-.png" alt="">
                            <span>If your car has met with a major accident</span>
                        </li>
                        <li>
                            <img src="images/arrow-right-.png" alt="">
                            <span>If you have a faulty car that requires a fortune to repair or replace expensive parts of the engine.</span>
                        </li>
                    </ul>
                    <h2>We Buy Any Type of Car </h2>
                    <p class="Et-harum">If your car has been damaged in a car accident, now the next question would be, ‘Is it worth repairing'? Minor car damages such as dents or scratches are not the grounds to sell a car.
                        However, significant damages resulting from accidents could alter the circumstances. We offer to buy even broken, faulty and old non-running cars. It doesn’t matter for how long you have them put away, neither does it matter how rusty and dusty they have become.
                        We guarantee to offer a fair price for every car we inspect. Don’t spend a lot of money repairing your car and don't let it end up in a junkyard.
                        You can still sell damaged cars profitably! Our experienced car experts will conduct car analysis for damages and faults to determine the course of action.
                        Feel free to reach out to us at Expat Car Buyers.</p>
                    <!--<button class="btn-style"> View More</button>-->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section close car-sell  -->
<!-- ========== Start section-4 ========== -->
<section id="section-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="left-text">
                    <h2>Why Choose Expat Car Buyers? </h2>
                    <p class="Et-harum">Now, you might be wondering, ‘Why should I scrap my car when there are other options available’?
                        Yes, we agree with you. Truly there are possible options like </p>
                    <ul>
                        <li>
                            <img src="images/arrow-right-.png" alt="">
                            <span>Repair </span>
                        </li>

                        <li>
                            <img src="images/arrow-right-.png" alt="">
                            <span>Junkyard visit </span>
                        </li>
                        <li>
                            <img src="images/arrow-right-.png" alt="">
                            <span> scrap car buyers</span>
                        </li>
                    </ul>

                    <p class="Et-harum">If you decide to go with any of the aforementioned options, you will be left more frustrated than when you started.
                        The numerous trips to mechanic workshops in a bid to repair or replace faulty parts in your car will end up costing you more resources, and with time reduce the overall value of the car.
                        You can imagine the pain of having to sell your car at nothing but a giveaway price after going through all the stress</p>
                    <p class="Et-harum">Choosing between scrap car buyers in Dubai can be challenging, especially with many parading themselves as 'the best'.
                        You won't know the ace up their sleeves until you bring them the scrap you plan to sell.
                        They make it look as if it's the worst thing ever and offer you a ridiculously low price.
                        It is even more frustrating if you consider dropping it in a junkyard.
                        A visit to the junkyard is a sign that you're desperate to sell damaged cars, and the result is that your car will be valued for far less than you can imagine.
                        At the junkyard, your car is just a scrap of metal which holds no value.</p>
                    <p class="Et-harum">Come on, your car is worth more than just a piece of junk! </p>
                    <p class="Et-harum">Thankfully, at Expat Car Buyers, we have a strategic plan in place as the specialist that we are. </p>
                    <!--<button class="btn-style"> View More</button>-->
                </div>
            </div>
            <div class="col-lg-6 p-0 z-3 ">
                <div class="img-box">
                    <!-- bg-img  -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========== End section-4 ========== -->
<!-- ========== Start  Made Easy ========== -->
<section class="made-easy">
    <div class="container">
        <h4 class="more">More Money Made Easy
        </h4>
        <p class="Get">Get more cash for your car than traditional dealer trade-in, without the hassle of selling it
            on your
            own.
        </p>
        <div class="row ">
            <div class=" col-md-6  padding line">
                <div class="style-box">
                    <div class="img-box">
                        <img src="images/m-2.png" alt="">
                    </div>
                </div>
            </div>
            <div class=" col-md-6  padding">
                <div class="style-box">
                    <div class="img-box">
                        <img src="images/m-1.png" alt="" class="set">
                    </div>
                </div>
            </div>
            <div class=" col-md-6 padding">
                <div class="style-box ">
                    <div class="text-box">
                        <h4>More Money</h4>
                        <p>Our offers are very competitive; you’ll get more money for your car than a standard
                            dealer trade-in. Many of our customers end up leaving with significantly more than the
                            average dealer offer.
                        </p>
                    </div>
                </div>
            </div>
            <div class=" col-md-6 padding">
                <div class="style-box line-2">
                    <div class="text-box">
                        <h4>We Make It Easy
                        </h4>
                        <p class="Save">Save yourself the time and effort it takes to sell your car on your own or
                            driving around
                            to different places to get appraisals. Our online process is easy and you only have to
                            stop by if you're happy with our quote and are ready to sell!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========== End  Made Easy ========== -->
<!-- ========== Start market-value ========== -->
<section class="market-value">
    <div class="container">
        <h4>Sell your car for its true market value</h4>
        <p class="getcl">Getcl more cash for your car than traditional dealer trade-in, without the hassle of
            selling it on your own.</p>
        <div class="owl-carousel owl-theme">
            <div class="item">
                <div class="main-style-box d-flex justify-content-center">
                    <div class="box-style">
                        <img src="images/1 1.png" alt="">
                        <h5> Damage</h5>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="main-style-box d-flex justify-content-center">
                    <div class="box-style">
                        <img src="images/2.png" alt="">
                        <h5> Salavage</h5>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="main-style-box d-flex justify-content-center">
                    <div class="box-style">
                        <img src="images/mac.png" alt="">
                        <h5> Convert</h5>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="main-style-box d-flex justify-content-center">
                    <div class="box-style">
                        <img src="images/4 1.png" alt="">
                        <h5> Non-filers</h5>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="main-style-box d-flex justify-content-center">
                    <div class="box-style">
                        <img src="images/5.png" alt="">
                        <h5> Rumors </h5>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="main-style-box d-flex justify-content-center">
                    <div class="box-style">
                        <img src="images/6.png" alt="">
                        <h5> salvage</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- ========== End market-value ========== -->
<!-- ========== Start Contact Us ========== -->
<section class="contact-us">
    <div class="container">
        <div class="col-lg-12">
            <h4>The damaged car buying specialists</h4>
            <div class="button-style colors" style="margin: auto;">
                <li>
                    <i class="fa-solid fa-phone" style="color: red;"></i>
                    <span style="color: red;"> Contact Us</span>
                </li>
            </div>
        </div>
    </div>
</section>
<!-- ========== End Contact Us ========== -->
<!-- ========== Start affordable car ========== -->
<section id="affordable-car">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 p-0">
                <div class="img-box">
                    <!-- bg-img -->
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right-box">
                    <h4>Sell Fast & Affordable Car
                        on Quick Quote</h4>
                    <p class="Et-harum">
                        We are aware of the numerous challenges associated with car scrapping that may present themselves while trying to scrap your cars, and we have them well taken care of.
                        We understand the legal framework that governs the activities around selling scrap cars.
                        We don’t just come with the best cash offer but also ensure that all our transactions are done as required by the law.
                        We are a professional team of scrap car buyers in Dubai and have been in this business for many years now.
                        We place out offers with your comfort and satisfaction in mind.
                    </p>

                    
                        <h2>Our Offer</h2>

                        <ul class="list">
                            <li>
                                <img src="images/arrow-right-.png" alt="">
                                <span><b>We offer instant cash for your car and in just 30 minutes!:</b> We offer competitive rates and fast turnaround time in order to get the best price for your old vehicle. With us, it is an accelerated procedure. </span>
                            </li>

                            <li>
                                <img src="images/arrow-right-.png" alt="">
                                <span><b>We offer a free pick up service from your location:</b> You don't have to worry about getting your car to us, especially if it is no longer roadworthy and requires a permit to move it. </span>
                            </li>
                            <li>
                                <img src="images/arrow-right-.png" alt="">
                                <span> <b>We guarantee a fair price for every car we inspect:</b> with us, you won't only scrap your old car, but for the best price too. </span>
                            </li>
                            <li>
                                <img src="images/arrow-right-.png" alt="">
                                <span><b>We export old cars to other countries</b> so, you could get more value should your old car meets the export requirements </span>
                            </li>
                        </ul>
                        <div class="display_more_content hide" style="margin-top:20px; display:none;">
                        <ul class="list">
                            <li>
                                <img src="images/arrow-right-.png" alt="">
                                <span><b>We deal in all honesty and transparency:</b> we make sure you get the best value for your car. </span>
                            </li>
                            <li>
                                <img src="images/arrow-right-.png" alt="">
                                <span><b>We prioritize transparency in safety:</b> All our cars are properly disposed of in an environmentally friendly manner. </span>
                            </li>
                            <li>
                                <img src="images/arrow-right-.png" alt="">
                                <span> <b>We will give you a fair deal on them all:</b> We provide the best prices for all types of cars depending on their condition and current market value. </span>
                            </li>
                            <li>
                                <img src="images/arrow-right-.png" alt="">
                                <span><b>We accept all car makes and models:</b> We offer a simple and easy solution to getting rid of old, unwanted vehicles, whether it’s a classic, luxury or foreign model, Toyota, Nissan, Hyundai or Mercedes. We buy scrap cars of all brands. </span>
                            </li>
                            <li>
                                <img src="images/arrow-right-.png" alt="">
                                <span><b>Easy and quick estimation process:</b> You can quickly estimate a price for your car using our valuation tool on our website. Afterward you can schedule an appointment with our automotive experts who will inspect and evaluate your car before making you an offer. You can then sell your car directly to us while we handle the sales process at Expat Car Buyers. </span>
                            </li>
                            <li>
                                <img src="images/arrow-right-.png" alt="">
                                <span><b>All Paperworks Handled at No Cost to You:</b> Selling used cars is not a smooth process. What with the RTA Registration test which is a menace for people trying to sell their used cars. Here's the good news. The fate of your car isn't restricted by any test. We're the Top Scrap Car Buyers in Dubai, and we got it all sorted. So if your question is, "How do I scrap my car free of all the RTA clearance drama"? As long as you make us your go to buyer, we have it all handled for you. </span>
                            </li>
                            <li>
                                <img src="images/arrow-right-.png" alt="">
                                <span><b>Here’s one other distinct feature that sets us apart from the rest.</b> We are an RTA approved Certified Partner in the UAE. The implication of that is that our customers can sell car scrap without being required to visit the RTA centers. You will never experience waiting in long queues for car ownership transfer procedures. Our partnership with RTA qualifies us as scrap car buyers to conduct inhouse car Ownership Transfer to save you the time and hassle. </span>
                            </li>

                        </ul>

                        <p class="Et-harum">
                            So, if you're ready to turn your scrap car into cash, we are your go-to one stop shop for buying scrap cars.You decide, we value and you get paid! </p>

                        <p class="Et-harum">Our straightforward approach ensures a hassle-free scrap car selling experience allowing you to turn your scrap car into cash within 30 minutes! Isn’t that the goal? All we do at Expat Car Buyers is to keep it simple and fast so that you get a sense of satisfaction like no other scrap car buyer in Dubai can give.</p>

                        <p class="Et-harum">Our scrap car buying service is located in three major cities across the UAE. Our branches in Dubai, Abu Dhabi and Sharjah offer top notch service to assist you with selling your scrap car. </p>

                        <p class="Et-harum"> Choose us for a seamless experience and the best price for your scrap car. No doubt, we’re the best scrap car buyers in the whole of Dubai.

                        </p>

                    </div>
                    <button class="view_more_content"> View more </button>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- ========== End affordable car ========== -->


<!-- js file  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<!-- <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 6
                }
            }
        })
    </script> -->
<script>
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        items: 6,
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 10000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },

            1000: {
                items: 6
            }
        }
    });
</script>


@endsection