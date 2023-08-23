@extends('layouts.header3')

@section('content')
  <div class="container-fluid">
            <div class="row top_bg">
                <div class="col-md-12 text-center">
                    <h1 class="font-poiret font-white text-uppercase">FAQS</h1>
                </div>
            </div>
        </div>
        <section class="abt-section bg-grey">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="accordion" id="accordion">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <i class="fa fa-question-circle"></i>&nbsp; Why do I trust your company?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseOne" class="collapse show fade" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>We are a registered company licensed by the UAE, and we are dedicated to delivering exceptional services.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                        <i class="fa fa-question-circle"></i>&nbsp; Is it possible to sell someone else’s car?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">
                                        <p> Yes you are able to sell on behalf of someone using these two ways:
                                            <ol>
                                                <li> you obtain power of attorney from Dubai courts, </li>
                                                <li> via our electronic sales contract. </li>
                                            </ol>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                        <i class="fa fa-question-circle"></i>&nbsp; Why do I need to book an appointment?
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        <p> If you book your appointment, we will ensure one of our vehicle inspection experts is available for you, saving yourself a lot of time. We will book a specific timeslot for you.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                        <i class="fa fa-question-circle"></i>&nbsp; How to schedule an appointment?
                                    </h5>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>You can schedule your appointment through our website, or by visiting our office. You can also call us to book your timeslot for physical inspection of your car.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFive">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                        <i class="fa fa-question-circle"></i>&nbsp;Is it possible to reschedule my appointment?
                                    </h5>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Yes, you can reschedule your appointment by calling us. Please mention your reference number while contacting us.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingSix">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                        <i class="fa fa-question-circle"></i>&nbsp;Do I need to bring something while coming for my appointment?
                                    </h5>
                                </div>
                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Yes, you need to bring your car for inspection, registration card of the car, and an ID proof.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingSeven">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                                        <i class="fa fa-question-circle"></i>&nbsp;How much time will it take to inspect the car?
                                    </h5>
                                </div>
                                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Our experienced professional will take around 5 minutes to inspect the car, if you agree to the quoted price we can complete the transaction in 30 minutes.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingEight">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                                        <i class="fa fa-question-circle"></i>&nbsp; How do you provide a quote?
                                    </h5>
                                </div>
                                <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>We consider various factors such as inspection report, market value and our knowledge to offer you the best quote.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingNine">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                                        <i class="fa fa-question-circle"></i>&nbsp; How will you pay me?
                                    </h5>
                                </div>
                                <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>We can do bank transfer, offer cash payment or a cheque, based on your choice.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="card">
                                <div class="card-header" id="headingTen">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
                                        <i class="fa fa-question-circle"></i>&nbsp; How long will it take to send the payment?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>We will complete the payment as soon as the vehicle is transferred to our name.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingEleven">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="true" aria-controls="collapseEleven">
                                        <i class="fa fa-question-circle"></i>&nbsp; If I own an outstanding loan balance, will it be possible to sell my car?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordion">
                                    <div class="card-body">
                                        <p> Absolutely! We also buy with outstanding loan balance. We clear outstanding finance on cars and pay difference to customers.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwelve">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="true" aria-controls="collapseTwelve">
                                        <i class="fa fa-question-circle"></i>&nbsp; In the event I close a sale on someone's behalf, can you deposit money to my account?
                                    </h5>
                                </div>
                                <div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Sorry that is not possible. We make payments only to the legal owners of the car. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading13">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse13" aria-expanded="true" aria-controls="collapse13">
                                        <i class="fa fa-question-circle"></i>&nbsp;My car was involved with an accident. Can you buy it?
                                    </h5>
                                </div>
                                <div id="collapse13" class="collapse" aria-labelledby="heading13" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Of course! We can buy your car regardless of the condition.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading14">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse14" aria-expanded="true" aria-controls="collapse14">
                                        <i class="fa fa-question-circle"></i>&nbsp;My car is not working. Can I sell?
                                    </h5>
                                </div>
                                <div id="collapse14" class="collapse" aria-labelledby="heading14" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Yes, you can. We will buy your car even if it is not in the working condition. However we want you to make proper arrangements to transport the vehicle to our office for the inspection purposes.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading15">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse15" aria-expanded="true" aria-controls="collapse15">
                                        <i class="fa fa-question-circle"></i>&nbsp;What if I am not satisfied with the quote?
                                    </h5>
                                </div>
                                <div id="collapse15" class="collapse" aria-labelledby="heading15" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>We will try to give you the best quote, however if you are not satisfied with it, there is no obligation to sell your car.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading16">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse16" aria-expanded="true" aria-controls="collapse16">
                                        <i class="fa fa-question-circle"></i>&nbsp;What is the limit on the car value?
                                    </h5>
                                </div>
                                <div id="collapse16" class="collapse" aria-labelledby="heading16" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>There is no any limit. We inspect the vehicle and give you a quote that is based on the condition of car and the market value.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading17">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse17" aria-expanded="true" aria-controls="collapse17">
                                        <i class="fa fa-question-circle"></i>&nbsp; The car registration has expired. Can you buy my car?
                                    </h5>
                                </div>
                                <div id="collapse17" class="collapse" aria-labelledby="heading17" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Yes, we will purchase it. You just need to pay the fines and de-register your car.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading18">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse18" aria-expanded="true" aria-controls="collapse18">
                                        <i class="fa fa-question-circle"></i>&nbsp; I want to sell my car but it is imported. Can you buy that as well?
                                    </h5>
                                </div>
                                <div id="collapse18" class="collapse" aria-labelledby="heading18" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Yes we can buy import cars also. Our technician will check a few things such as GCC standard compliance, adaptability to hot temperature etc. and then we will provide you with a quote.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading19">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse19" aria-expanded="true" aria-controls="collapse19">
                                        <i class="fa fa-question-circle"></i>&nbsp; Can you collect car from my place?
                                    </h5>
                                </div>
                                <div id="collapse19" class="collapse" aria-labelledby="heading19" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Sorry we do not currently offer that service. You need to bring the car to our office so that we can conduct the inspection.</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card">
                                <div class="card-header" id="heading20">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse20" aria-expanded="true" aria-controls="collapse20">
                                        <i class="fa fa-question-circle"></i>&nbsp;I do not have original registration card. Can I sell car?
                                    </h5>
                                </div>
                                <div id="collapse20" class="collapse" aria-labelledby="heading20" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Sorry we do not purchase card without original registration cards.</p>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="card">
                                <div class="card-header" id="heading21">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse21" aria-expanded="true" aria-controls="collapse21">
                                        <i class="fa fa-question-circle"></i>&nbsp;How do I sell any car in Dubai?
                                    </h5>
                                </div>
                                <div id="collapse21" class="collapse" aria-labelledby="heading21" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>You can sell any car in Dubai to us. The first thing you need to do in order to sell your car is to contact us. You will need to book an appointment after which you will need to bring your vehicle for inspection and valuation. Then, we will offer you the best competitive and non-obligatory quote based on your car’s condition. If you are happy with the price, we will pay you instantly.</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card">
                                <div class="card-header" id="heading22">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse22" aria-expanded="true" aria-controls="collapse22">
                                        <i class="fa fa-question-circle"></i>&nbsp;How do I Sell any Car Online?
                                    </h5>
                                </div>
                                <div id="collapse22" class="collapse" aria-labelledby="heading22" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>You can sell any car online through Expat Car Buyers car selling website. Irrespective of the brand or model, we will offer you the best competitive price. All you have to do is follow the simple process on our website and you will receive your cash instantly. The process we follow to buy any car online is simple, fast and effective.</p>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="card">
                                <div class="card-header" id="heading23">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse23" aria-expanded="true" aria-controls="collapse23">
                                        <i class="fa fa-question-circle"></i>&nbsp;Does Expat Car Buyers buy old Cars?
                                    </h5>
                                </div>
                                <div id="collapse23" class="collapse" aria-labelledby="heading23" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>We buy old cars irrespective of the age or the condition of your car. We offer free used car valuation and we will pay you a fair price for your property. You do not need to worry about how old your car is, we buy any car no matter the age, model or brand.</p>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="card">
                                <div class="card-header" id="heading24">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse24" aria-expanded="true" aria-controls="collapse24">
                                        <i class="fa fa-question-circle"></i>&nbsp;Is it Good to Sell Your Car to Expat Car Buyers?
                                    </h5>
                                </div>
                                <div id="collapse24" class="collapse" aria-labelledby="heading24" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Yes! At Expat Car Buyers, we will give you a 100% reason to choose us. When you decide to sell your car to us, we will offer you a free valuation. We will handle all the paperwork and waste none of your time. Most importantly, you will receive your full payment instantly. Obviously, it is good to sell your car to Expat Car Buyers.</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card">
                                <div class="card-header" id="heading25">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse25" aria-expanded="true" aria-controls="collapse25">
                                        <i class="fa fa-question-circle"></i>&nbsp;How long does it take to Sell Your Car to Expat Car Buyers? 
                                    </h5>
                                </div>
                                <div id="collapse25" class="collapse" aria-labelledby="heading25" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>We buy any car in less than 30 minutes. If you have been bothered with the question “How will I sell my car dubai? Or How will I sell my car online?” and you are also concerned about how long it will take to sell it, Expat Car Buyers offers you the perfect solution to sell your car in less than 30 minutes.</p>
                                    </div>
                                </div>
                            </div>
                            
                            
                             <div class="card">
                                <div class="card-header" id="heading26">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse26" aria-expanded="true" aria-controls="collapse26">
                                        <i class="fa fa-question-circle"></i>&nbsp; How do You Sell any Car Privately?
                                    </h5>
                                </div>
                                <div id="collapse26" class="collapse" aria-labelledby="heading26" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Depending on your choice, you can decide to sell any car privately or through a professional trader like Expat Car Buyers. To sell any car privately, you will need to look for buyers and you might also end up selling it at a price that is less than the car value. Since it is even difficult to find a buyer, Expat Car Buyers can always relieve you of that stress.</p>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="card">
                                <div class="card-header" id="heading27">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse27" aria-expanded="true" aria-controls="collapse27">
                                        <i class="fa fa-question-circle"></i>&nbsp; Who Pays for Deregistration when Selling a Car?
                                    </h5>
                                </div>
                                <div id="collapse27" class="collapse" aria-labelledby="heading27" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>You will be responsible for the payment of Deregistration when you sell your car to us. So, when you decide to sell car dubai, we can be your professional buyer and you will pay for the Deregistration. If there is an outstanding payment on your vehicle, we will make sure that it is settled while offering you a fair cash.</p>
                                    </div>
                                </div>
                            </div>
                            
                              <div class="card">
                                <div class="card-header" id="heading28">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse28" aria-expanded="true" aria-controls="collapse28">
                                        <i class="fa fa-question-circle"></i>&nbsp; Do I need to cancel my registration before Selling my Car?
                                    </h5>
                                </div>
                                <div id="collapse28" class="collapse" aria-labelledby="heading28" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>If you were planning to sell your car privately, it would be better to cancel your registration. If you fail to cancel your registration and it remains active, actions done on the car afterwards may be placed on you. If you are dealing with us, you can cancel your registration since we don’t have any use for it. If you want to sell your car to us, you can cancel your registration.</p>
                                    </div>
                                </div>
                            </div>
                            
                             
                             
                              <div class="card">
                                <div class="card-header" id="heading29">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse29" aria-expanded="true" aria-controls="collapse29">
                                        <i class="fa fa-question-circle"></i>&nbsp; How much does it cost to Sell a Car to Expat Car Buyers?
                                    </h5>
                                </div>
                                <div id="collapse29" class="collapse" aria-labelledby="heading29" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>It will cost you nothing to sell your car to Expat Car Buyers. In fact, we will offer you a free car valuation. In addition to that, we will also offer you a fair and instant payment for your property. You can save a lot of costs both in terms of money and time with our fast and reliable service.</p>
                                    </div>
                                </div>
                            </div>
                            
                            
                             <div class="card">
                                <div class="card-header" id="heading30">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse30" aria-expanded="true" aria-controls="collapse30">
                                        <i class="fa fa-question-circle"></i>&nbsp; Does Expat Car Buyers give a Fair Price when I Sell my Car?
                                    </h5>
                                </div>
                                <div id="collapse30" class="collapse" aria-labelledby="heading30" data-parent="#accordion">
                                    <div class="card-body">
                                        <p> We believe that business is all about trust and that is why we will offer you a price that is fair enough for you to trust us. If you wish to sell a car UAE, we will offer you a fair price for your property.</p>
                                    </div>
                                </div>
                            </div>
                            
                             <div class="card">
                                <div class="card-header" id="heading31">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse31" aria-expanded="true" aria-controls="collapse31">
                                        <i class="fa fa-question-circle"></i>&nbsp; Does Expat Car Buyers Buy Damaged Cars?
                                    </h5>
                                </div>
                                <div id="collapse31" class="collapse" aria-labelledby="heading31" data-parent="#accordion">
                                    <div class="card-body">
                                        <p> Yes! We buy your car as it is. We buy any car whether it is damaged or in good condition. If there are debts on your car, we will settle these debts and pay you the difference. With Expat Car Buyers, selling your car just got easier.</p>
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
