@extends('layouts.header-scrapper')

@section('content')

    
    
    <!-- icon cdn  -->
    
	
       <!-- ========== Start Sell-your ========== -->
    <div class="container-fluid set-padding">
        <section id="Sell-your">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 z-3 ">
                        <div class="text-box-left">
                            <h3>Sell your car, fast.</h3>
                            <p>As the largest automotive marketplace in Canada,
                                we can help you sell your car today for free.</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 z-3 margin-left">
                        <div class="form-sell">
                            <h4>Sell Now</h4>
                            <form id="booking_form_step_1" method="Post" action="{{ url('step-2') }}"
                                      class="form-inline">

                                    @csrf


                                        <div class="row m-0">

                                            <div class="dropdown car_year col-12 mb-3">
                                                <select class="modl-year form-control custom-rounded" style="width: 100%;" id="year"
                                                        name="year" aria-label="year">

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

                                            <div class="dropdown selectmake col-12 mb-3">

                                                @php

                                                $brands = \App\Models\Brand::where('top','<','2')->get();

                                                $top_brands = \App\Models\Brand::where('top','1')->get();

                                                @endphp

                                                <select class="form-control custom-rounded" style="width: 100%;" id="brand_val"
                                                        name="brand_name" aria-label="brand">

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

                                            <div class="dropdown  car_modal col-12 mb-3">

                                                <select class="modl-model form-control custom-rounded" id="fetched_model"
                                                        style="width: 100%;" name="model_name" aria-label="model">

                                                    <option value="" selected disabled="disabled">Select Model</option>

                                                </select>

                                                <span class="err_msg error_model" style="display:none;color:red;">This field is required</span>

                                                <!---->

                                            </div>

                                            <div class="dropdown  car_call col-12 mb-3">

                                                <input type="tel" name="number" placeholder="Phone Number"
                                                       class="numberinput w-100 form-control custom-rounded" aria-label="Phone Number"
                                                       pattern="[0-9]*"> <!---->

                                                <span class="err_msg error_phone" style="display:none;color:red;">Please enter a valid phone number.e.g ( 05xxxxxxxx / +9715xxxxxxxx )</span>

                                            </div>

                                            <div class="col-12">
                                                <button type="submit"
                                                        class="btn btn-danger w-100 text-capitalize myform banner-form-btn"
                                                        id="book_appon">EVALUATE YOUR CAR
                                                </button>
                                            </div>
                                        
                                        </div>
                                        

                                </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
    </div>
    <div class="container">
        <div id="img-box">
            <img src="images/car-2.png" class="img-fluid" alt="">
        </div>
    </div>
    <!-- ========== End Sell-your ========== -->
    <!-- ========== Start Why-Sell ========== -->
    <section class="Why-Sell">
        <div class="container">
            <h4>Why Sell your car with <span style="color: #F24025; font-weight: 700;">Expatcarbuyers?</span></h4>
            <div class="row">
                <div class="col-lg-6 col-sm-12 col-12 ">
                    <div class="style-box set-border">
                        <div class="pic-box">
                            <img src="images/reviews.png" alt="">
                        </div>
                        <div class="text-1">
                            <h3>Most trusted marketplace</h3>
                            <p>With 47 years of experience, we are the
                                most trusted place for selling your car.</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 col-12 ">
                    <div class="style-box set-border-2">
                        <div class="pic-box">
                            <img src="images/financing.png" alt="">
                        </div>
                        <div class="text-1">
                            <h3>Get the most for your car</h3>
                            <p>We at AutoTrader ensure that you get the
                                most offers and value for your car.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 col-12 ">
                    <div class="style-box">
                        <div class="pic-box">
                            <img src="images/buil.png" alt="">
                        </div>
                        <div class="text-1">
                            <h3>Easy and free</h3>
                            <p>We will guide you through few simple
                                steps to get you started.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 col-12 ">
                    <div class="style-box">
                        <div class="pic-box">
                            <img src="images/chat.png" alt="">
                        </div>
                        <div class="text-1">
                            <h3>Choose how to Sell</h3>
                            <p>Sell your car quickly to a dealer or list
                                privately on our marketplace..</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== End Why-Sell ========== -->
    <!-- ========== Start World-Largest  ========== -->
    <section class="World-Largest">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-12 col-12 d-flex align-items-center">
                    <div class="left-text">
                        <h4>World Largest Car
                            <span style="color: #F24025; font-weight: 700;"> Dealer</span>
                        </h4>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour.</p>
                        <div class="list">
                            <li>
                                <img src="images/check (2).png" alt="">
                                <span> At vero eos et accusamus et iusto odio.</span>
                            </li>
                            <li>
                                <img src="images/check (2).png" alt="">
                                <span> Established fact that a reader will be distracted.</span>
                            </li>
                            <li>
                                <img src="images/check (2).png" alt="">
                                <span>Sed ut perspiciatis unde omnis iste natus sit</span>
                            </li>
                        </div>
                        <button class="Discover"> Discover more</button>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12 p-0 col-12 d-flex justify-content-lg-end">
                    <div class="right-img">
                        <img src="images/car-3.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== End  World-Largest  ========== -->
    <!-- ========== Start Car  ========== -->
    <section class="Car-Dealer">
        <div class="container-fluid set-2">
            <div class="row edit-row">
                <div class="col-lg-6  p-0 d-flex align-items-center">
                    <div class="img-left">
                        <img src="images/div..png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-6   d-flex align-items-center">
                    <div class="right-text">
                        <h4>World Largest Car
                            <span style="color: #F24025; font-weight: 700;"> Dealer</span>
                        </h4>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour.</p>
                        <div class="list">
                            <li>
                                <img src="images/check (2).png" alt="">
                                <span> At vero eos et accusamus et iusto odio.</span>
                            </li>
                            <li>
                                <img src="images/check (2).png" alt="">
                                <span> Established fact that a reader will be distracted.</span>
                            </li>
                            <li>
                                <img src="images/check (2).png" alt="">
                                <span>Sed ut perspiciatis unde omnis iste natus sit</span>
                            </li>
                        </div>
                        <button class="Discover"> Discover more</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== End Dealer ========== -->
    <!-- ========== Start   Car-Deakler  ========== -->
    <section class="Car-Deakler">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-12 col-12 d-flex align-items-center">
                    <div class="left-text">
                        <h4>World Largest Car
                            <span style="color: #F24025; font-weight: 700;"> Deakler</span>
                        </h4>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour.</p>
                        <div class="list">
                            <li>
                                <img src="images/check (2).png" alt="">
                                <span> At vero eos et accusamus et iusto odio.</span>
                            </li>
                            <li>
                                <img src="images/check (2).png" alt="">
                                <span> Established fact that a reader will be distracted.</span>
                            </li>
                            <li>
                                <img src="images/check (2).png" alt="">
                                <span>Sed ut perspiciatis unde omnis iste natus sit</span>
                            </li>
                        </div>
                        <button class="Discover"> Discover more</button>
                    </div>
                </div>
                <div class="col-lg-7 z-3 d-flex justify-content-end  p-0">
                    <div class="img-right">
                        <img src="images/car-4.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== End Car-Deakler ========== -->
    <!-- ========== Start Expert-cars ========== -->
    <section class="Expert-cars">
        <div class="container">
            <div class="row">
                <div class="col-lg-5  d-flex justify-content-center ">
                    <div class="pic">
                        <img src="images/Expert.png" class="img-fluid" alt="" class="">
                    </div>
                </div>
                <div class="col-lg-7  d-flex align-items-center">
                    <div class="right">
                        <h5>Expert tips on what impacts the
                            value of Your car.</h5>
                        <p>These are the factors that are considered for valuation, so it is good to keep
                            an eye on a few things when getting your vehicle ready to Buy.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <h4 class="Factors">Factors that may increase Your car value</h4>
                <div class="col-lg-3 col-md-6">
                    <div class="box-style">
                        <div class="img-box">
                            <img src="images/yes.png" alt="">
                        </div>
                        <div class="text">
                            <h6>Aftermarket options</h6>
                            <p> This is a great way to add value to
                                your vehicle. Make sure to
                                mention any winter tires, roof
                                racks, or other accessories you've
                                added to your vehicle.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="box-style">
                        <div class="img-box">
                            <img src="images/yes.png" alt="">
                        </div>
                        <div class="text">
                            <h6>Popular colour</h6>
                            <p> This is subjective and comes
                                down to personal preference, but
                                neutral colours like white, silver,
                                and black are the most popular. A
                                limited-edition colour might also
                                add value.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="box-style">
                        <div class="img-box">
                            <img src="images/yes.png" alt="">
                        </div>
                        <div class="text">
                            <h6>Full service history</h6>
                            <p> Providing the full service history
                                gives great peace of mind to a
                                possible buyer.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="box-style">
                        <div class="img-box">
                            <img src="images/yes.png" alt="">
                        </div>
                        <div class="text">
                            <h6>No damage</h6>
                            <p>A potential buyer will view
                                damage or needed repairs as
                                extra costs they will have to deal
                                with after the purchase.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== End Expert-cars ========== -->
    <!-- ========== Start Sell-car ========== -->
    <section class="Sell-car" id="Sell-your1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="car">
                        <h4>In a hurry to <span style="color: #F24025; font-weight: 700;"> Sell</span> your car?</h4>
                        <p>Sell to one of our trusted dealerships.</p>
                        <div class="pic-img">
                            <img src="images/Yellow-car.png" class="img-fluid" alt="">
                        </div>
                    </div>

                </div>

                <div class="col-lg-4 ">
                    <div class="form-2">
                        <div class="form-sell">
                            <h4>Sell Now</h4>
                            <form id="booking_form_step_1" method="Post" action="https://www.expatcarbuyers.com/step-2" class="form-inline" novalidate="novalidate">

                                    <input type="hidden" name="_token" value="onjOdSKIM0ZHb3Ywijz4iqLCpxsYGY5TY159fWAq">

                                        <div class="row m-0">

                                            <div class="dropdown car_year col-12 mb-3">
                                                <select class="modl-year form-control custom-rounded" style="width: 100%;" id="year" name="year" aria-label="year">

                                                    <option value="" disabled="disabled" selected="" style="padding: 0px;">
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

                                            <div class="dropdown selectmake col-12 mb-3">

                                                
                                                <select class="form-control custom-rounded" style="width: 100%;" id="brand_val1" name="brand_name" aria-label="brand">

                                                    <option value="" selected="" disabled="disabled" style="padding: 0px;">
                                                        Select Make
                                                    </option>


                                                    
                                                    <option value="BMW" style="padding: 0px;">BMW
                                                    </option>

                                                    
                                                    <option value="Ford" style="padding: 0px;">Ford
                                                    </option>

                                                    
                                                    <option value="Honda" style="padding: 0px;">Honda
                                                    </option>

                                                    
                                                    <option value="Nissan" style="padding: 0px;">Nissan
                                                    </option>

                                                    
                                                    <option value="Toyota" style="padding: 0px;">Toyota
                                                    </option>

                                                    
                                                    <option disabled="disabled">-------------------</option>

                                                    
                                                    <option value="ALPINA" style="padding: 0px;">ALPINA
                                                    </option>

                                                    
                                                    <option value="Alfa Romeo" style="padding: 0px;">Alfa Romeo
                                                    </option>

                                                    
                                                    <option value="Acura" style="padding: 0px;">Acura
                                                    </option>

                                                    
                                                    <option value="ARTEGA" style="padding: 0px;">ARTEGA
                                                    </option>

                                                    
                                                    <option value="ASHOK" style="padding: 0px;">ASHOK
                                                    </option>

                                                    
                                                    <option value="Aston Martin" style="padding: 0px;">Aston Martin
                                                    </option>

                                                    
                                                    <option value="Audi" style="padding: 0px;">Audi
                                                    </option>

                                                    
                                                    <option value="BAIC" style="padding: 0px;">BAIC
                                                    </option>

                                                    
                                                    <option value="Bentley" style="padding: 0px;">Bentley
                                                    </option>

                                                    
                                                    <option value="BMW" style="padding: 0px;">BMW
                                                    </option>

                                                    
                                                    <option value="BRILLIANCE" style="padding: 0px;">BRILLIANCE
                                                    </option>

                                                    
                                                    <option value="Bugatti" style="padding: 0px;">Bugatti
                                                    </option>

                                                    
                                                    <option value="Buick" style="padding: 0px;">Buick
                                                    </option>

                                                    
                                                    <option value="BYD" style="padding: 0px;">BYD
                                                    </option>

                                                    
                                                    <option value="Cadillac" style="padding: 0px;">Cadillac
                                                    </option>

                                                    
                                                    <option value="CATERHAM" style="padding: 0px;">CATERHAM
                                                    </option>

                                                    
                                                    <option value="CHANGAN" style="padding: 0px;">CHANGAN
                                                    </option>

                                                    
                                                    <option value="Chery" style="padding: 0px;">Chery
                                                    </option>

                                                    
                                                    <option value="Chevrolet" style="padding: 0px;">Chevrolet
                                                    </option>

                                                    
                                                    <option value="CHINA AUTOMOBILE" style="padding: 0px;">CHINA AUTOMOBILE
                                                    </option>

                                                    
                                                    <option value="Chrysler" style="padding: 0px;">Chrysler
                                                    </option>

                                                    
                                                    <option value="Citroen" style="padding: 0px;">Citroen
                                                    </option>

                                                    
                                                    <option value="CMC" style="padding: 0px;">CMC
                                                    </option>

                                                    
                                                    <option value="Daewoo" style="padding: 0px;">Daewoo
                                                    </option>

                                                    
                                                    <option value="Daihatsu" style="padding: 0px;">Daihatsu
                                                    </option>

                                                    
                                                    <option value="Dodge" style="padding: 0px;">Dodge
                                                    </option>

                                                    
                                                    <option value="DONGFENG" style="padding: 0px;">DONGFENG
                                                    </option>

                                                    
                                                    <option value="FAW" style="padding: 0px;">FAW
                                                    </option>

                                                    
                                                    <option value="Ferrari" style="padding: 0px;">Ferrari
                                                    </option>

                                                    
                                                    <option value="Fiat" style="padding: 0px;">Fiat
                                                    </option>

                                                    
                                                    <option value="Fisker" style="padding: 0px;">Fisker
                                                    </option>

                                                    
                                                    <option value="Ford" style="padding: 0px;">Ford
                                                    </option>

                                                    
                                                    <option value="Foton" style="padding: 0px;">Foton
                                                    </option>

                                                    
                                                    <option value="GAC" style="padding: 0px;">GAC
                                                    </option>

                                                    
                                                    <option value="Geely" style="padding: 0px;">Geely
                                                    </option>

                                                    
                                                    <option value="GMC" style="padding: 0px;">GMC
                                                    </option>

                                                    
                                                    <option value="Great Wall" style="padding: 0px;">Great Wall
                                                    </option>

                                                    
                                                    <option value="Hino" style="padding: 0px;">Hino
                                                    </option>

                                                    
                                                    <option value="Honda" style="padding: 0px;">Honda
                                                    </option>

                                                    
                                                    <option value="Hummer" style="padding: 0px;">Hummer
                                                    </option>

                                                    
                                                    <option value="Hyundai" style="padding: 0px;">Hyundai
                                                    </option>

                                                    
                                                    <option value="Infiniti" style="padding: 0px;">Infiniti
                                                    </option>

                                                    
                                                    <option value="Isuzu" style="padding: 0px;">Isuzu
                                                    </option>

                                                    
                                                    <option value="IVECO" style="padding: 0px;">IVECO
                                                    </option>

                                                    
                                                    <option value="JAC" style="padding: 0px;">JAC
                                                    </option>

                                                    
                                                    <option value="Jaguar" style="padding: 0px;">Jaguar
                                                    </option>

                                                    
                                                    <option value="Jeep" style="padding: 0px;">Jeep
                                                    </option>

                                                    
                                                    <option value="Kia" style="padding: 0px;">Kia
                                                    </option>

                                                    
                                                    <option value="KING LONG" style="padding: 0px;">KING LONG
                                                    </option>

                                                    
                                                    <option value="Koenigsegg" style="padding: 0px;">Koenigsegg
                                                    </option>

                                                    
                                                    <option value="KTM" style="padding: 0px;">KTM
                                                    </option>

                                                    
                                                    <option value="Lamborghini" style="padding: 0px;">Lamborghini
                                                    </option>

                                                    
                                                    <option value="Land Rover" style="padding: 0px;">Land Rover
                                                    </option>

                                                    
                                                    <option value="LANDWIND" style="padding: 0px;">LANDWIND
                                                    </option>

                                                    
                                                    <option value="Lexus" style="padding: 0px;">Lexus
                                                    </option>

                                                    
                                                    <option value="Lincoln" style="padding: 0px;">Lincoln
                                                    </option>

                                                    
                                                    <option value="Lotus" style="padding: 0px;">Lotus
                                                    </option>

                                                    
                                                    <option value="Mahindra" style="padding: 0px;">Mahindra
                                                    </option>

                                                    
                                                    <option value="Maserati" style="padding: 0px;">Maserati
                                                    </option>

                                                    
                                                    <option value="Maybach" style="padding: 0px;">Maybach
                                                    </option>

                                                    
                                                    <option value="Mazda" style="padding: 0px;">Mazda
                                                    </option>

                                                    
                                                    <option value="McLaren" style="padding: 0px;">McLaren
                                                    </option>

                                                    
                                                    <option value="Mercedes-Benz" style="padding: 0px;">Mercedes-Benz
                                                    </option>

                                                    
                                                    <option value="Mercury" style="padding: 0px;">Mercury
                                                    </option>

                                                    
                                                    <option value="MG" style="padding: 0px;">MG
                                                    </option>

                                                    
                                                    <option value="Mini" style="padding: 0px;">Mini
                                                    </option>

                                                    
                                                    <option value="MINI (BMW)" style="padding: 0px;">MINI (BMW)
                                                    </option>

                                                    
                                                    <option value="Mitsubishi" style="padding: 0px;">Mitsubishi
                                                    </option>

                                                    
                                                    <option value="MORGAN" style="padding: 0px;">MORGAN
                                                    </option>

                                                    
                                                    <option value="Nissan" style="padding: 0px;">Nissan
                                                    </option>

                                                    
                                                    <option value="Oldsmobile" style="padding: 0px;">Oldsmobile
                                                    </option>

                                                    
                                                    <option value="Opel" style="padding: 0px;">Opel
                                                    </option>

                                                    
                                                    <option value="Pagani" style="padding: 0px;">Pagani
                                                    </option>

                                                    
                                                    <option value="Peugeot" style="padding: 0px;">Peugeot
                                                    </option>

                                                    
                                                    <option value="Pontiac" style="padding: 0px;">Pontiac
                                                    </option>

                                                    
                                                    <option value="Porsche" style="padding: 0px;">Porsche
                                                    </option>

                                                    
                                                    <option value="Proton" style="padding: 0px;">Proton
                                                    </option>

                                                    
                                                    <option value="RAM" style="padding: 0px;">RAM
                                                    </option>

                                                    
                                                    <option value="Renault" style="padding: 0px;">Renault
                                                    </option>

                                                    
                                                    <option value="Rolls Royce" style="padding: 0px;">Rolls Royce
                                                    </option>

                                                    
                                                    <option value="Seat" style="padding: 0px;">Seat
                                                    </option>

                                                    
                                                    <option value="Skoda" style="padding: 0px;">Skoda
                                                    </option>

                                                    
                                                    <option value="Smart" style="padding: 0px;">Smart
                                                    </option>

                                                    
                                                    <option value="SSANGYONG" style="padding: 0px;">SSANGYONG
                                                    </option>

                                                    
                                                    <option value="Subaru" style="padding: 0px;">Subaru
                                                    </option>

                                                    
                                                    <option value="Suzuki" style="padding: 0px;">Suzuki
                                                    </option>

                                                    
                                                    <option value="Tata" style="padding: 0px;">Tata
                                                    </option>

                                                    
                                                    <option value="Tesla" style="padding: 0px;">Tesla
                                                    </option>

                                                    
                                                    <option value="Toyota" style="padding: 0px;">Toyota
                                                    </option>

                                                    
                                                    <option value="Volkswagen" style="padding: 0px;">Volkswagen
                                                    </option>

                                                    
                                                    <option value="Volvo" style="padding: 0px;">Volvo
                                                    </option>

                                                    
                                                </select>

                                                <span class="err_msg error_brand" style="display:none;color:red;">This field is required</span>

                                                <!---->

                                            </div>

                                            <div class="dropdown  car_modal col-12 mb-3">

                                                <select class="modl-model form-control custom-rounded" id="fetched_model1" style="width: 100%;" name="model_name" aria-label="model">

                                                    <option value="" selected="" disabled="disabled">Select Model</option>

                                                </select>

                                                <span class="err_msg error_model" style="display:none;color:red;">This field is required</span>

                                                <!---->

                                            </div>

                                            <div class="dropdown  car_call col-12 mb-3">

                                                <input type="tel" name="number" placeholder="Phone Number" class="numberinput w-100 form-control custom-rounded" aria-label="Phone Number" pattern="[0-9]*"> <!---->

                                                <span class="err_msg error_phone" style="display:none;color:red;">Please enter a valid phone number.e.g ( 05xxxxxxxx / +9715xxxxxxxx )</span>

                                            </div>

                                            <div class="col-12">
                                                <button type="submit" class="btn btn-danger w-100 text-capitalize myform banner-form-btn" id="book_appon">EVALUATE YOUR CAR
                                                </button>
                                            </div>
                                        
                                        </div>
                                        

                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== End Sell-car ========== -->
    <!-- ========== Start frequently ========== -->
    <section class="frequently">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 ">
                    <p class="Asked">Frequently Asked
                        Questions About
                        Buying Your Car</p>
                </div>
                <div class="col-lg-6 ">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Are there additional fees for buy my car on?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the first item's
                                    accordion body.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    What should I expect when I visit the dealership when dropping
                                    off my car?
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the second item's
                                    accordion body. Let's imagine this being filled with some actual content.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Are there any accommodations for getting a ride home when
                                    selling to a dealer?
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the third item's
                                    accordion body. Nothing more exciting happening here in terms of content, but just
                                    filling up the space to make it look, at least at first glance, a bit more
                                    representative of how this would look in a real-world application.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapse-4" aria-expanded="false"
                                    aria-controls="flush-collapse-4">
                                    What can I do to stay safe while selling privately?
                                </button>
                            </h2>
                            <div id="flush-collapse-4" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the third item's
                                    accordion body. Nothing more exciting happening here in terms of content, but just
                                    filling up the space to make it look, at least at first glance, a bit more
                                    representative of how this would look in a real-world application.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapse-5" aria-expanded="false"
                                    aria-controls="flush-collapse-6">
                                    What are the benefits of a My Garage Account?
                                </button>
                            </h2>
                            <div id="flush-collapse-5" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the third item's
                                    accordion body. Nothing more exciting happening here in terms of content, but just
                                    filling up the space to make it look, at least at first glance, a bit more
                                    representative of how this would look in a real-world application.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapse-6" aria-expanded="false"
                                    aria-controls="flush-collapse-6">
                                    How do I post a successful private ad?
                                </button>
                            </h2>
                            <div id="flush-collapse-6" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the third item's
                                    accordion body. Nothing more exciting happening here in terms of content, but just
                                    filling up the space to make it look, at least at first glance, a bit more
                                    representative of how this would look in a real-world application.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== End frequently ========== -->
   
   
   
    <script src="js/bootstrap.bundle.min.js"></script>
    
@endsection
	  