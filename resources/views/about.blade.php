@extends('layouts.header3')

@section('content')

<div class="container-fluid">
    <div class="row top_bg">
        <div class="col-md-12 text-center">
            <h1 class="font-poiret font-white text-uppercase">About</h1>
        </div>
    </div>
</div>
<section class="bg-grey abt-section">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div id="exTab1" class="text-center">
                    <ul class="nav nav-tabs nav-fill">
                        <li><a class="nav-item nav-link active" href="#vision" data-toggle="tab">Vision &
                                Mission</a></li>
                        <li><a class="nav-item nav-link" href="#who" data-toggle="tab">Who We Are</a></li>
                        <li><a class="nav-item nav-link" href="#what" data-toggle="tab">What We Do</a></li>
                    </ul>
                    <div class="clearfix"></div>
                    <br><br>
                    <div class="tab-content clearfix">
                        <div class="tab-pane fade show active text-center" id="vision">
                            <p>We were frustrated when we saw how dishonest, non-transparent, unsafe, costly, and
                                time-consuming the automotive industry can be. Seeing as we couldn’t find the
                                solution, we made it for our valued customers. Our mission is to help people sell
                                their used vehicles in the shortest time, for the highest price. We are achieving
                                this through our vision of remaining dedicated to fast, easy, hassle-free
                                experiences. </p>
                            <p>While most “similar” businesses give people bottom-dollar for their vehicles, going
                                on to sell them at a much higher price, we genuinely care about helping people get
                                the money they deserve for their used vehicles. That’s why we have developed a
                                newer, safer, and far more convenient way to <span style="color:#d32f2f;
                            "><a href="https://www.expatcarbuyers.com/">sell your car</a></span>. No matter the make or
                                model or your vehicle, we’ll make sure you get the best possible price –
                                guaranteed. We vow to remain committed to our high self-set standards of
                                client-satisfaction, guaranteeing an honest relationship built on trust.</p>
                        </div>
                        <div class="tab-pane text-center fade" id="who">
                            <p>Many people would just call us a car buying company, but that’s just half of the
                                story. Expat Car Buyers was formed to make it easier for car sellers to sell
                                used cars without traditional setbacks. Founded in 2018, Expat Car Buyers is
                                home to a dynamic team of young professionals, committed to simplifying
                                their customers’ lives. Our multilingual team speaks five languages: English,
                                Arabic, German, Urdu, and Turkish. With more than 15 years of international
                                experience in the automotive industry, we care about delivering service that is
                                transparent, honest, and time/cost-conscious.</p>
                            <p> We care about getting the right price for your car just as much as you do. You are
                                more than just a customer to us. We build relationships with those who seek our
                                help, and we will never rip you off.  We even offer free vehicle deregistration,
                                parts exchange, bank loan/mortgage settlement, and more. That’s the Expat Car Buyers
                                promise to exceed expectations.</p>
                        </div>
                        <div class="tab-pane text-center fade" id="what">
                            <p><span style="color:#d32f2f;
                            ">We buy used cars</span> from our customers within just 30 minutes, giving them cold hard
                                cash on the spot. We are working hard to revolutionize the car-selling process, by
                                making it fairer, safer, and hassle-free. As the customer, you are “King”. That’s
                                why we focus so much energy on keeping hassle at bay. We will personally evaluate
                                your car at one of our professional branches, managing the entire sales process from
                                start to finish.</p>
                            <p> You can also get an instant valuation using our website. We operate to trusted
                                German standards, offering effective and efficient services with reliable
                                statements. Our team is packed with lifelong learners, committed to taking feedback
                                and turning it into results. That’s why your feedback, in any form, is always
                                welcome and appreciated. Please don’t hesitate to visit our premises to experience
                                the Expat Car Buyers different for yourself today. We look forward to meeting
                                you.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="sell_section">
    <section class="call-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <i class="fa fa-phone"></i>
                    <h4 class="font-poiret">CALL US NOW</h4>
                    <h4 class="font-poiret">TO GET AN INSTANT OFFER NOW</h4>
                    <h2><a href="tel:+971561774555">+971 56 1774555</a></h2>
                </div>
            </div>
        </div>
    </section>
</section>


<!--<section class="what-people-say py-5 d-none d-md-block">-->
<!--    <div class="container py-3">-->
<!--        <div class="row">-->
<!--            <div class="col-md-12 text-center">-->
<!--                <h2 class="font-weight-light mb-5">What people are saying<span-->
<!--                            class="font-weight-bold theme-color">?</span>-->
<!--                </h2>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row">-->

<!--            <div class="col-md-12">-->
<!--                <a class="carousel-control-prev arrow-prev-icon"-->
<!--                   href="#testCarousel" role="button" data-slide="prev">-->
<!--                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#a3a3a3" stroke="#a3a3a3"-->
<!--                         class="bi bi-chevron-left" viewBox="0 0 20 20">-->
<!--                        <path fill-rule="evenodd"-->
<!--                              d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>-->
<!--                    </svg>-->
<!--                </a>-->

<!--                <a class="carousel-control-next arrow-next-icon" href="#testCarousel" role="button" data-slide="next">-->
<!--                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#a3a3a3" stroke="#a3a3a3"-->
<!--                         class="bi bi-chevron-right" viewBox="0 0 20 20">-->
<!--                        <path fill-rule="evenodd"-->
<!--                              d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>-->
<!--                    </svg>-->
<!--                </a>-->
<!--                <div id="testCarousel" class="carousel slide" data-ride="carousel">-->
                    <!-- Carousel items -->
<!--                    <div class="carousel-inner">-->

<!--                        <div class="carousel-item active">-->
<!--                            <div class="row">-->

<!--                                <div class="col-lg-4 d-lg-flex flex-lg-column mb-lg-0 position-relative mb-5"-->
<!--                                     id="slide1">-->
<!--                                    <div class="bg-white shadow userReview py-4 px-4 mb-5 h-100">-->
<!--                                        <div class="userReview-details d-inline-flex justify-content-center w-100">-->
<!--                                            <div class="userProfile Profile-alpha-i position-absolute">-->
                                                <!--<h4 class="font-weight-bold text-center">I</h4>-->
                                                <!--<img src="https://lh3.googleusercontent.com/a-/AOh14GiZ0MF5ecViLe19EjdyzSVdIczyl30sfkrlgmfJnw=s120-c-c-rp-w64-h64-mo-br100"-->
                                                <!--     alt="HAMZA shujaat">-->
<!--                                                <img style="object-fit:cover; border-radius:50%; height:64px; width: 64px" src="{{ asset('front/images/Irina.png') }}" alt="Irina">-->
<!--                                                <div class="google_icon"></div>-->
<!--                                            </div>-->
<!--                                            <div class="userName">-->
<!--                                                <h5 class="f-18 text-center mb-0 " style="color: #000;">Irina</h5>-->
<!--                                                <div class="pt-2 pb-2 text-center">-->
<!--                                                    2022-01-12-->
<!--                                                </div>-->
<!--                                                <div class="pb-2">-->
<!--                                                    <img src="{{ asset('front/images/star.webp') }}" alt="Star"-->
<!--                                                         width="18"-->
<!--                                                         onerror="this.onerror=null; this.src='/public/front/images/star.svg'">-->
<!--                                                    <img src="{{ asset('front/images/star.webp') }}" alt="Star"-->
<!--                                                         width="18"-->
<!--                                                         onerror="this.onerror=null; this.src='/public/front/images/star.svg'">-->
<!--                                                    <img src="{{ asset('front/images/star.webp') }}" alt="Star"-->
<!--                                                         width="18"-->
<!--                                                         onerror="this.onerror=null; this.src='/public/front/images/star.svg'">-->
<!--                                                    <img src="{{ asset('front/images/star.webp') }}" alt="Star"-->
<!--                                                         width="18"-->
<!--                                                         onerror="this.onerror=null; this.src='/public/front/images/star.svg'">-->
<!--                                                    <img src="{{ asset('front/images/star.webp') }}" alt="Star"-->
<!--                                                         width="18"-->
<!--                                                         onerror="this.onerror=null; this.src='/public/front/images/star.svg'">-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="reviewBox" style="overflow-y:auto; height: 100px">-->
<!--                                            <i>Amazing service. If u want to experience the hassle free way of selling-->
<!--                                                car, this is the best place to go. Been to other companies in past and I-->
<!--                                                must say their service is exeptional.. cheers</i>-->
<!--                                        </div>-->
<!--                                    </div>-->

<!--                                </div>-->


<!--                                <div class="col-lg-4 d-lg-flex flex-lg-column mb-lg-0 position-relative mb-5">-->
<!--                                    <div class="bg-white shadow userReview py-4 px-4 mb-5 h-100">-->
<!--                                        <div class="userReview-details d-inline-flex justify-content-center w-100">-->
<!--                                            <div class="userProfile Profile-alpha-i position-absolute">-->
                                                <!--<h4 class="font-weight-bold text-center">I</h4>-->
                                                <!--<img src="https://lh3.googleusercontent.com/a-/AOh14GhM5fWx6luvBPtdv7eqHBPq1YXGF_xUQ2P_ykRwGQ=s120-c-c-rp-w64-h64-mo-br100"-->
                                                <!--     alt="Abdou Djendou">-->
<!--                                                <img style="object-fit:cover; border-radius:50%; height:64px; width: 64px" src="{{ asset('front/images/Omar Saeed.png') }}" alt="Omar">-->
<!--                                                <div class="google_icon"></div>-->
<!--                                            </div>-->
<!--                                            <div class="userName">-->
<!--                                                <h5 class="f-18 text-center mb-0 " style="color: #000;">Omar Saeed</h5>-->
<!--                                                <div class="pt-2 pb-2 text-center">-->
<!--                                                    2022-01-12-->
<!--                                                </div>-->
<!--                                                <div class="pb-2">-->
<!--                                                    <img src="{{ asset('front/images/star.webp') }}" alt="Star"-->
<!--                                                         width="18"-->
<!--                                                         onerror="this.onerror=null; this.src='/public/front/images/star.svg'">-->
<!--                                                    <img src="{{ asset('front/images/star.webp') }}" alt="Star"-->
<!--                                                         width="18"-->
<!--                                                         onerror="this.onerror=null; this.src='/public/front/images/star.svg'">-->
<!--                                                    <img src="{{ asset('front/images/star.webp') }}" alt="Star"-->
<!--                                                         width="18"-->
<!--                                                         onerror="this.onerror=null; this.src='/public/front/images/star.svg'">-->
<!--                                                    <img src="{{ asset('front/images/star.webp') }}" alt="Star"-->
<!--                                                         width="18"-->
<!--                                                         onerror="this.onerror=null; this.src='/public/front/images/star.svg'">-->
<!--                                                    <img src="{{ asset('front/images/star.webp') }}" alt="Star"-->
<!--                                                         width="18"-->
<!--                                                         onerror="this.onerror=null; this.src='/public/front/images/star.svg'">-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="reviewBox" style="overflow-y:auto; height: 100px">-->
<!--                                            <i>I visited several car buying companies in same area but Expat car buyers-->
<!--                                                offered the most competitive prices whilst also offering a comprehensive-->
<!--                                                and professional service to enable a smooth transaction. Great customer-->
<!--                                                service. Would highly recommend</i>-->
<!--                                        </div>-->
<!--                                    </div>-->

<!--                                </div>-->


<!--                                <div class="col-lg-4 d-lg-flex flex-lg-column mb-lg-0 position-relative mb-5">-->
<!--                                    <div class="bg-white shadow userReview py-4 px-4 mb-5 h-100">-->
<!--                                        <div class="userReview-details d-inline-flex justify-content-center w-100  ">-->
<!--                                            <div class="userProfile Profile-alpha-i position-absolute">-->
                                                <!--<h4 class="font-weight-bold text-center">I</h4>-->
<!--                                                <img src="https://lh3.googleusercontent.com/a-/AOh14GjVA0fbiBCAxSKBUUsAtjnn-g06vceWMoUtU3hQMyk=s120-c-c-rp-w64-h64-mo-br100"-->
<!--                                                     alt="Omar Youssry">-->
<!--                                                <div class="google_icon"></div>-->
<!--                                            </div>-->
<!--                                            <div class="userName">-->
<!--                                                <h5 class="f-18 text-center mb-0 " style="color: #000;">Ajith Kumar</h5>-->
<!--                                                <div class="pt-2 pb-2 text-center">-->
<!--                                                    2022-01-12-->
<!--                                                </div>-->
<!--                                                <div class="pb-2">-->
<!--                                                    <img src="{{ asset('front/images/star.webp') }}" alt="Star"-->
<!--                                                         width="18"-->
<!--                                                         onerror="this.onerror=null; this.src='/public/front/images/star.svg'">-->
<!--                                                    <img src="{{ asset('front/images/star.webp') }}" alt="Star"-->
<!--                                                         width="18"-->
<!--                                                         onerror="this.onerror=null; this.src='/public/front/images/star.svg'">-->
<!--                                                    <img src="{{ asset('front/images/star.webp') }}" alt="Star"-->
<!--                                                         width="18"-->
<!--                                                         onerror="this.onerror=null; this.src='/public/front/images/star.svg'">-->
<!--                                                    <img src="{{ asset('front/images/star.webp') }}" alt="Star"-->
<!--                                                         width="18"-->
<!--                                                         onerror="this.onerror=null; this.src='/public/front/images/star.svg'">-->
<!--                                                    <img src="{{ asset('front/images/star.webp') }}" alt="Star"-->
<!--                                                         width="18"-->
<!--                                                         onerror="this.onerror=null; this.src='/public/front/images/star.svg'">-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="reviewBox" style="overflow-y:auto; height: 100px">-->
<!--                                            <i>I visited several car buying companies in same area but Expat car buyers-->
<!--                                                offered the most competitive prices whilst also offering a comprehensive-->
<!--                                                and professional service to enable a smooth transaction. Great customer-->
<!--                                                service. Would highly recommend</i>-->
<!--                                        </div>-->
<!--                                    </div>-->

<!--                                </div>-->


<!--                            </div>-->
                            <!--.row-->
<!--                        </div>-->
                        <!--.item-->

<!--                        <div class="carousel-item">-->
<!--                            <div class="row">-->


<!--                                <div class="col-lg-4 d-lg-flex flex-lg-column mb-lg-0 position-relative mb-5">-->
<!--                                    <div class="bg-white shadow userReview py-4 px-4 mb-5 h-100">-->
<!--                                        <div class="userReview-details d-inline-flex justify-content-center w-100  ">-->
<!--                                            <div class="userProfile Profile-alpha-i position-absolute">-->
                                                <!--<h4 class="font-weight-bold text-center">I</h4>-->
<!--                                                <img src="https://lh3.googleusercontent.com/a/AATXAJz5Z8AbrUUBMhIoqKudtBIwj4mLQusRPEbCAgjd=s120-c-c-rp-w64-h64-mo-br100"-->
<!--                                                     alt="shelley swann">-->
<!--                                                <div class="google_icon"></div>-->
<!--                                            </div>-->
<!--                                            <div class="userName">-->
<!--                                                <h5 class="f-18 text-center mb-0 " style="color: #000;">Lucy-->
<!--                                                    Komolka</h5>-->
<!--                                                <div class="pt-2 pb-2 text-center">-->
<!--                                                    2022-01-12-->
<!--                                                </div>-->
<!--                                                <div class="pb-2">-->
<!--                                                    <img src="{{ asset('front/images/star.webp') }}" alt="Star"-->
<!--                                                         width="18"-->
<!--                                                         onerror="this.onerror=null; this.src='/public/front/images/star.svg'">-->
<!--                                                    <img src="{{ asset('front/images/star.webp') }}" alt="Star"-->
<!--                                                         width="18"-->
<!--                                                         onerror="this.onerror=null; this.src='/public/front/images/star.svg'">-->
<!--                                                    <img src="{{ asset('front/images/star.webp') }}" alt="Star"-->
<!--                                                         width="18"-->
<!--                                                         onerror="this.onerror=null; this.src='/public/front/images/star.svg'">-->
<!--                                                    <img src="{{ asset('front/images/star.webp') }}" alt="Star"-->
<!--                                                         width="18"-->
<!--                                                         onerror="this.onerror=null; this.src='/public/front/images/star.svg'">-->
<!--                                                    <img src="{{ asset('front/images/star.webp') }}" alt="Star"-->
<!--                                                         width="18"-->
<!--                                                         onerror="this.onerror=null; this.src='/public/front/images/star.svg'">-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="reviewBox" style="overflow-y:auto; height: 100px">-->
<!--                                            <i>Highly recommend selling your car with the Expat Car Buyers. Fast,-->
<!--                                                genuine service. Very helpful guys. My experience was great and wouldn’t-->
<!--                                                go to any other place in Dubai.</i>-->
<!--                                        </div>-->
<!--                                    </div>-->

<!--                                </div>-->


<!--                                <div class="col-lg-4 d-lg-flex flex-lg-column mb-lg-0 position-relative mb-5">-->
<!--                                    <div class="bg-white shadow userReview py-4 px-4 mb-5 h-100">-->
<!--                                        <div class="userReview-details d-inline-flex justify-content-center w-100  ">-->
<!--                                            <div class="userProfile Profile-alpha-i position-absolute">-->
                                                <!--<h4 class="font-weight-bold text-center">I</h4>-->
<!--                                                <img src="https://lh3.googleusercontent.com/a-/AOh14GjGAS4tsPmYlHLSuUh_6aYRR0X9pnQF83yAo34r=s120-c-c-rp-w64-h64-mo-br100"-->
<!--                                                     alt="jerry Joseph">-->
<!--                                                <div class="google_icon"></div>-->
<!--                                            </div>-->
<!--                                            <div class="userName">-->
<!--                                                <h5 class="f-18 text-center mb-0 " style="color: #000;">Shafqat Ali</h5>-->
<!--                                                <div class="pt-2 pb-2 text-center">-->
<!--                                                    2022-01-12-->
<!--                                                </div>-->
<!--                                                <div class="pb-2">-->
<!--                                                    <img src="{{ asset('front/images/star.webp') }}" alt="Star"-->
<!--                                                         width="18"-->
<!--                                                         onerror="this.onerror=null; this.src='/public/front/images/star.svg'">-->
<!--                                                    <img src="{{ asset('front/images/star.webp') }}" alt="Star"-->
<!--                                                         width="18"-->
<!--                                                         onerror="this.onerror=null; this.src='/public/front/images/star.svg'">-->
<!--                                                    <img src="{{ asset('front/images/star.webp') }}" alt="Star"-->
<!--                                                         width="18"-->
<!--                                                         onerror="this.onerror=null; this.src='/public/front/images/star.svg'">-->
<!--                                                    <img src="{{ asset('front/images/star.webp') }}" alt="Star"-->
<!--                                                         width="18"-->
<!--                                                         onerror="this.onerror=null; this.src='/public/front/images/star.svg'">-->
<!--                                                    <img src="{{ asset('front/images/star.webp') }}" alt="Star"-->
<!--                                                         width="18"-->
<!--                                                         onerror="this.onerror=null; this.src='/public/front/images/star.svg'">-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="reviewBox" style="overflow-y:auto; height: 100px">-->
<!--                                            <i>It was very easy as in one stop shop.Transfer of car and cash payment on-->
<!--                                                the spot. The whole thing took under 30 mins and that's what I needed.-->
<!--                                                Thank you guys.</i>-->
<!--                                        </div>-->
<!--                                    </div>-->

<!--                                </div>-->


<!--                                <div class="col-lg-4 d-lg-flex flex-lg-column mb-lg-0 position-relative mb-5">-->
<!--                                    <div class="bg-white shadow userReview py-4 px-4 mb-5 h-100">-->
<!--                                        <div class="userReview-details d-inline-flex justify-content-center w-100  ">-->
<!--                                            <div class="userProfile Profile-alpha-i position-absolute">-->
                                                <!--<h4 class="font-weight-bold text-center">I</h4>-->
<!--                                                <img src="https://lh3.googleusercontent.com/a/AATXAJxcvevOCzvcBfPvNoAzAe--0V1oV8KSJ1tioYJE=s120-c-c-rp-w64-h64-mo-br100"-->
<!--                                                     alt="John Hayes">-->
<!--                                                <div class="google_icon"></div>-->
<!--                                            </div>-->
<!--                                            <div class="userName">-->
<!--                                                <h5 class="f-18 text-center mb-0 " style="color: #000;">Thomas-->
<!--                                                    Buchner</h5>-->
<!--                                                <div class="pt-2 pb-2 text-center">-->
<!--                                                    2022-01-12-->
<!--                                                </div>-->
<!--                                                <div class="pb-2">-->
<!--                                                    <img src="{{ asset('front/images/star.webp') }}" alt="Star"-->
<!--                                                         width="18"-->
<!--                                                         onerror="this.onerror=null; this.src='/public/front/images/star.svg'">-->
<!--                                                    <img src="{{ asset('front/images/star.webp') }}" alt="Star"-->
<!--                                                         width="18"-->
<!--                                                         onerror="this.onerror=null; this.src='/public/front/images/star.svg'">-->
<!--                                                    <img src="{{ asset('front/images/star.webp') }}" alt="Star"-->
<!--                                                         width="18"-->
<!--                                                         onerror="this.onerror=null; this.src='/public/front/images/star.svg'">-->
<!--                                                    <img src="{{ asset('front/images/star.webp') }}" alt="Star"-->
<!--                                                         width="18"-->
<!--                                                         onerror="this.onerror=null; this.src='/public/front/images/star.svg'">-->
<!--                                                    <img src="{{ asset('front/images/star.webp') }}" alt="Star"-->
<!--                                                         width="18"-->
<!--                                                         onerror="this.onerror=null; this.src='/public/front/images/star.svg'">-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="reviewBox" style="overflow-y:auto; height: 100px">-->
<!--                                            <i>Could sell my car in very short time and got a fair price. Thank you for-->
<!--                                                the excellent service!</i>-->
<!--                                        </div>-->
<!--                                    </div>-->


<!--                                </div>-->
<!--                            </div>-->
                            <!--.row-->
<!--                        </div>-->
                        <!--.item-->
<!--                    </div>-->
                    <!--.carousel-inner-->
                    <!-- Controls -->
                    <!--<div class="carousel-control-div">-->
                    <!--    <ol class="carousel-indicators">-->
                    <!--        <li data-target="#testCarousel" data-slide-to="0" class="active"></li>-->
                    <!--        <li data-target="#testCarousel" data-slide-to="1"></li>-->
                    <!--    </ol>-->
                    <!--</div>-->
<!--                </div>-->
                <!--.Carousel-->
<!--            </div>-->
<!--        </div>-->


<!--        <div style="text-align:center;"-->
<!--             class="elementor-element elementor-element-a82ff3d elementor-widget elementor-widget-image"-->
<!--             data-id="a82ff3d" data-element_type="widget" data-widget_type="image.default">-->
<!--            <div class="elementor-widget-container">-->
<!--                <img src="https://carbuyingpeople.com/wp-content/uploads/2022/01/Google-Reviews-Badge@1x.svg"-->
<!--                     class="attachment-large size-large" alt="" loading="lazy"></div>-->
<!--        </div>-->


<!--    </div>-->
<!--</section>-->

<section class="what-people-say py-5 d-none d-md-block">
    <div class="container py-3">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="font-weight-light mb-5">What people are saying<span
                            class="font-weight-bold theme-color">?</span>
                </h2>
            </div>
        </div>
        <div class="row">

            <div class="col-md-12">
                <a class="carousel-control-prev arrow-prev-icon"
                   href="#testCarousel" role="button" data-slide="prev">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#a3a3a3" stroke="#a3a3a3"
                         class="bi bi-chevron-left" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                              d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                    </svg>
                </a>

                <a class="carousel-control-next arrow-next-icon" href="#testCarousel" role="button" data-slide="next">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#a3a3a3" stroke="#a3a3a3"
                         class="bi bi-chevron-right" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                              d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                </a>
                <div id="testCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Carousel items -->
                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <div class="row">

                                <div class="col-lg-4 d-lg-flex flex-lg-column mb-lg-0 position-relative mb-5"
                                     id="slide1">
                                    <div class="bg-white shadow userReview py-4 px-4 mb-5 h-100">
                                        <div class="userReview-details d-inline-flex justify-content-center w-100">
                                            <div class="userProfile Profile-alpha-i position-absolute">
                                                <!--<h4 class="font-weight-bold text-center">I</h4>-->
                                                <!--<img src="https://lh3.googleusercontent.com/a-/AOh14GiZ0MF5ecViLe19EjdyzSVdIczyl30sfkrlgmfJnw=s120-c-c-rp-w64-h64-mo-br100"-->
                                                <!--     alt="HAMZA shujaat">-->
                                                <img style="object-fit:cover; border-radius:50%; height:64px; width: 64px" src="{{ asset('front/images/Irina.png') }}" alt="Irina">
                                                <div class="google_icon"></div>
                                            </div>
                                            <div class="userName pt-4">
                                                <h5 class="f-18 text-center mb-0 " style="color: #000;">Irina</h5>
                                                <div class="pt-2 pb-2 text-center">
                                                    2022-01-12
                                                </div>
                                                <div class="pb-2">
                                                    <img src="{{ asset('front/images/star.webp') }}" alt="Star"
                                                         width="18"
                                                         onerror="this.onerror=null; this.src='/public/front/images/star.svg'">
                                                    <img src="{{ asset('front/images/star.webp') }}" alt="Star"
                                                         width="18"
                                                         onerror="this.onerror=null; this.src='/public/front/images/star.svg'">
                                                    <img src="{{ asset('front/images/star.webp') }}" alt="Star"
                                                         width="18"
                                                         onerror="this.onerror=null; this.src='/public/front/images/star.svg'">
                                                    <img src="{{ asset('front/images/star.webp') }}" alt="Star"
                                                         width="18"
                                                         onerror="this.onerror=null; this.src='/public/front/images/star.svg'">
                                                    <img src="{{ asset('front/images/star.webp') }}" alt="Star"
                                                         width="18"
                                                         onerror="this.onerror=null; this.src='/public/front/images/star.svg'">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reviewBox" style="overflow-y:auto; height: 100px">
                                            <i>Amazing service. If u want to experience the hassle free way of selling
                                                car, this is the best place to go. Been to other companies in past and I
                                                must say their service is exeptional.. cheers</i>
                                        </div>
                                    </div>

                                </div>


                                <div class="col-lg-4 d-lg-flex flex-lg-column mb-lg-0 position-relative mb-5">
                                    <div class="bg-white shadow userReview py-4 px-4 mb-5 h-100">
                                        <div class="userReview-details d-inline-flex justify-content-center w-100">
                                            <div class="userProfile Profile-alpha-i position-absolute">
                                                <!--<h4 class="font-weight-bold text-center">I</h4>-->
                                                <!--<img src="https://lh3.googleusercontent.com/a-/AOh14GhM5fWx6luvBPtdv7eqHBPq1YXGF_xUQ2P_ykRwGQ=s120-c-c-rp-w64-h64-mo-br100"-->
                                                <!--     alt="Abdou Djendou">-->
                                                <img style="object-fit:cover; border-radius:50%; height:64px; width: 64px" src="{{ asset('front/images/Omar.png') }}" alt="Omar">
                                                <div class="google_icon"></div>
                                            </div>
                                            <div class="userName pt-4">
                                                <h5 class="f-18 text-center mb-0 " style="color: #000;">Omar Saeed</h5>
                                                <div class="pt-2 pb-2 text-center">
                                                    2022-01-12
                                                </div>
                                                <div class="pb-2">
                                                    <img src="{{ asset('front/images/star.webp') }}" alt="Star"
                                                         width="18"
                                                         onerror="this.onerror=null; this.src='/public/front/images/star.svg'">
                                                    <img src="{{ asset('front/images/star.webp') }}" alt="Star"
                                                         width="18"
                                                         onerror="this.onerror=null; this.src='/public/front/images/star.svg'">
                                                    <img src="{{ asset('front/images/star.webp') }}" alt="Star"
                                                         width="18"
                                                         onerror="this.onerror=null; this.src='/public/front/images/star.svg'">
                                                    <img src="{{ asset('front/images/star.webp') }}" alt="Star"
                                                         width="18"
                                                         onerror="this.onerror=null; this.src='/public/front/images/star.svg'">
                                                    <img src="{{ asset('front/images/star.webp') }}" alt="Star"
                                                         width="18"
                                                         onerror="this.onerror=null; this.src='/public/front/images/star.svg'">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reviewBox" style="overflow-y:auto; height: 100px">
                                            <i>I visited several car buying companies in same area but Expat car buyers
                                                offered the most competitive prices whilst also offering a comprehensive
                                                and professional service to enable a smooth transaction. Great customer
                                                service. Would highly recommend</i>
                                        </div>
                                    </div>

                                </div>


                                <div class="col-lg-4 d-lg-flex flex-lg-column mb-lg-0 position-relative mb-5">
                                    <div class="bg-white shadow userReview py-4 px-4 mb-5 h-100">
                                        <div class="userReview-details d-inline-flex justify-content-center w-100  ">
                                            <div class="userProfile Profile-alpha-i position-absolute">
                                                <!--<h4 class="font-weight-bold text-center">I</h4>-->
                                                <!--<img src="https://lh3.googleusercontent.com/a-/AOh14GjVA0fbiBCAxSKBUUsAtjnn-g06vceWMoUtU3hQMyk=s120-c-c-rp-w64-h64-mo-br100"-->
                                                <!--     alt="Omar Youssry">-->
                                                <img style="object-fit:cover; border-radius:50%; height:64px; width: 64px" src="{{ asset('front/images/Ajith.png') }}" alt="Ajith">
                                                <div class="google_icon"></div>
                                            </div>
                                            <div class="userName pt-4">
                                                <h5 class="f-18 text-center mb-0 " style="color: #000;">Ajith Kumar</h5>
                                                <div class="pt-2 pb-2 text-center">
                                                    2022-01-12
                                                </div>
                                                <div class="pb-2">
                                                    <img src="{{ asset('front/images/star.webp') }}" alt="Star"
                                                         width="18"
                                                         onerror="this.onerror=null; this.src='/public/front/images/star.svg'">
                                                    <img src="{{ asset('front/images/star.webp') }}" alt="Star"
                                                         width="18"
                                                         onerror="this.onerror=null; this.src='/public/front/images/star.svg'">
                                                    <img src="{{ asset('front/images/star.webp') }}" alt="Star"
                                                         width="18"
                                                         onerror="this.onerror=null; this.src='/public/front/images/star.svg'">
                                                    <img src="{{ asset('front/images/star.webp') }}" alt="Star"
                                                         width="18"
                                                         onerror="this.onerror=null; this.src='/public/front/images/star.svg'">
                                                    <img src="{{ asset('front/images/star.webp') }}" alt="Star"
                                                         width="18"
                                                         onerror="this.onerror=null; this.src='/public/front/images/star.svg'">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reviewBox" style="overflow-y:auto; height: 100px">
                                            <i>I visited several car buying companies in same area but Expat car buyers
                                                offered the most competitive prices whilst also offering a comprehensive
                                                and professional service to enable a smooth transaction. Great customer
                                                service. Would highly recommend</i>
                                        </div>
                                    </div>

                                </div>


                            </div>
                            <!--.row-->
                        </div>
                        <!--.item-->

                        <div class="carousel-item">
                            <div class="row">


                                <div class="col-lg-4 d-lg-flex flex-lg-column mb-lg-0 position-relative mb-5">
                                    <div class="bg-white shadow userReview py-4 px-4 mb-5 h-100">
                                        <div class="userReview-details d-inline-flex justify-content-center w-100  ">
                                            <div class="userProfile Profile-alpha-i position-absolute">
                                                <!--<h4 class="font-weight-bold text-center">I</h4>-->
                                                <!--<img src="https://lh3.googleusercontent.com/a/AATXAJz5Z8AbrUUBMhIoqKudtBIwj4mLQusRPEbCAgjd=s120-c-c-rp-w64-h64-mo-br100"-->
                                                <!--     alt="shelley swann">-->
                                                <img style="object-fit:cover; border-radius:50%; height:64px; width: 64px" src="{{ asset('front/images/Lucy.png') }}" alt="Lucy">
                                                <div class="google_icon"></div>
                                            </div>
                                            <div class="userName pt-4">
                                                <h5 class="f-18 text-center mb-0 " style="color: #000;">Lucy
                                                    Komolka</h5>
                                                <div class="pt-2 pb-2 text-center">
                                                    2022-01-12
                                                </div>
                                                <div class="pb-2">
                                                    <img src="{{ asset('front/images/star.webp') }}" alt="Star"
                                                         width="18"
                                                         onerror="this.onerror=null; this.src='/public/front/images/star.svg'">
                                                    <img src="{{ asset('front/images/star.webp') }}" alt="Star"
                                                         width="18"
                                                         onerror="this.onerror=null; this.src='/public/front/images/star.svg'">
                                                    <img src="{{ asset('front/images/star.webp') }}" alt="Star"
                                                         width="18"
                                                         onerror="this.onerror=null; this.src='/public/front/images/star.svg'">
                                                    <img src="{{ asset('front/images/star.webp') }}" alt="Star"
                                                         width="18"
                                                         onerror="this.onerror=null; this.src='/public/front/images/star.svg'">
                                                    <img src="{{ asset('front/images/star.webp') }}" alt="Star"
                                                         width="18"
                                                         onerror="this.onerror=null; this.src='/public/front/images/star.svg'">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reviewBox" style="overflow-y:auto; height: 100px">
                                            <i>Highly recommend selling your car with the Expat Car Buyers. Fast,
                                                genuine service. Very helpful guys. My experience was great and wouldn’t
                                                go to any other place in Dubai.</i>
                                        </div>
                                    </div>

                                </div>


                                <div class="col-lg-4 d-lg-flex flex-lg-column mb-lg-0 position-relative mb-5">
                                    <div class="bg-white shadow userReview py-4 px-4 mb-5 h-100">
                                        <div class="userReview-details d-inline-flex justify-content-center w-100  ">
                                            <div class="userProfile Profile-alpha-i position-absolute">
                                                <!--<h4 class="font-weight-bold text-center">I</h4>-->
                                                <!--<img src="https://lh3.googleusercontent.com/a-/AOh14GjGAS4tsPmYlHLSuUh_6aYRR0X9pnQF83yAo34r=s120-c-c-rp-w64-h64-mo-br100"-->
                                                <!--     alt="jerry Joseph">-->
                                                <img style="object-fit:cover; border-radius:50%; height:64px; width: 64px" src="{{ asset('front/images/Shafqat.png') }}" alt="Shafqat">
                                                <div class="google_icon"></div>
                                            </div>
                                            <div class="userName pt-4">
                                                <h5 class="f-18 text-center mb-0 " style="color: #000;">Shafqat Ali</h5>
                                                <div class="pt-2 pb-2 text-center">
                                                    2022-01-12
                                                </div>
                                                <div class="pb-2">
                                                    <img src="{{ asset('front/images/star.webp') }}" alt="Star"
                                                         width="18"
                                                         onerror="this.onerror=null; this.src='/public/front/images/star.svg'">
                                                    <img src="{{ asset('front/images/star.webp') }}" alt="Star"
                                                         width="18"
                                                         onerror="this.onerror=null; this.src='/public/front/images/star.svg'">
                                                    <img src="{{ asset('front/images/star.webp') }}" alt="Star"
                                                         width="18"
                                                         onerror="this.onerror=null; this.src='/public/front/images/star.svg'">
                                                    <img src="{{ asset('front/images/star.webp') }}" alt="Star"
                                                         width="18"
                                                         onerror="this.onerror=null; this.src='/public/front/images/star.svg'">
                                                    <img src="{{ asset('front/images/star.webp') }}" alt="Star"
                                                         width="18"
                                                         onerror="this.onerror=null; this.src='/public/front/images/star.svg'">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reviewBox" style="overflow-y:auto; height: 100px">
                                            <i>It was very easy as in one stop shop.Transfer of car and cash payment on
                                                the spot. The whole thing took under 30 mins and that's what I needed.
                                                Thank you guys.</i>
                                        </div>
                                    </div>

                                </div>


                                <div class="col-lg-4 d-lg-flex flex-lg-column mb-lg-0 position-relative mb-5">
                                    <div class="bg-white shadow userReview py-4 px-4 mb-5 h-100">
                                        <div class="userReview-details d-inline-flex justify-content-center w-100  ">
                                            <div class="userProfile Profile-alpha-i position-absolute">
                                                <!--<h4 class="font-weight-bold text-center">I</h4>-->
                                                <!--<img src="https://lh3.googleusercontent.com/a/AATXAJxcvevOCzvcBfPvNoAzAe--0V1oV8KSJ1tioYJE=s120-c-c-rp-w64-h64-mo-br100"-->
                                                <!--     alt="John Hayes">-->
                                                <img style="object-fit:cover; border-radius:50%; height:64px; width: 64px" src="{{ asset('front/images/Thomas.png') }}" alt="Thomas">
                                                <div class="google_icon"></div>
                                            </div>
                                            <div class="userName pt-4">
                                                <h5 class="f-18 text-center mb-0 " style="color: #000;">Thomas
                                                    Buchner</h5>
                                                <div class="pt-2 pb-2 text-center">
                                                    2022-01-12
                                                </div>
                                                <div class="pb-2">
                                                    <img src="{{ asset('front/images/star.webp') }}" alt="Star"
                                                         width="18"
                                                         onerror="this.onerror=null; this.src='/public/front/images/star.svg'">
                                                    <img src="{{ asset('front/images/star.webp') }}" alt="Star"
                                                         width="18"
                                                         onerror="this.onerror=null; this.src='/public/front/images/star.svg'">
                                                    <img src="{{ asset('front/images/star.webp') }}" alt="Star"
                                                         width="18"
                                                         onerror="this.onerror=null; this.src='/public/front/images/star.svg'">
                                                    <img src="{{ asset('front/images/star.webp') }}" alt="Star"
                                                         width="18"
                                                         onerror="this.onerror=null; this.src='/public/front/images/star.svg'">
                                                    <img src="{{ asset('front/images/star.webp') }}" alt="Star"
                                                         width="18"
                                                         onerror="this.onerror=null; this.src='/public/front/images/star.svg'">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reviewBox" style="overflow-y:auto; height: 100px">
                                            <i>Could sell my car in very short time and got a fair price. Thank you for
                                                the excellent service!</i>
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
                    <!--<div class="carousel-control-div">-->
                    <!--    <ol class="carousel-indicators">-->
                    <!--        <li data-target="#testCarousel" data-slide-to="0" class="active"></li>-->
                    <!--        <li data-target="#testCarousel" data-slide-to="1"></li>-->
                    <!--    </ol>-->
                    <!--</div>-->
                </div>
                <!--.Carousel-->
            </div>
        </div>


        <div style="text-align:center;"
             class="elementor-element elementor-element-a82ff3d elementor-widget elementor-widget-image"
             data-id="a82ff3d" data-element_type="widget" data-widget_type="image.default">
            <div class="elementor-widget-container">
                <img src="https://carbuyingpeople.com/wp-content/uploads/2022/01/Google-Reviews-Badge@1x.svg"
                     class="attachment-large size-large" alt="" loading="lazy"></div>
        </div>


    </div>
</section>


<section class="bottom-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 nopadding">
                <img src="{{ asset('images/footer-img.webp') }}" alt="Footer" class="img-fluid"
                     onerror="this.onerror=null; this.src='/public/images/footer-img.jpg'">
                <!--<img src="{{ asset('images/footer-img.jpg') }}" class="img-fluid">-->
                <div class="contact-box">
                    <h4>CALL US NOW</h4>
                    <h3><a href="tel:+97143337876">+971 4 333 7876</a></h3>
                    <hr>
                    <h4>EMAIL US NOW</h4>
                    <p><a href="mailto:contact@expatcarbuyers.com">contact@expatcarbuyers.com</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
