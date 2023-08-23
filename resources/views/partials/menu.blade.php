<nav id="custom-navbar" class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav w-100">
                <li class="nav-item">
                    <a class="nav-link open-sub-menu" href="#" data-id="sell-car">SELL CAR<i class="fa fa-angle-down"></i></a>
                    <div id="sell-car" class="sub-menu" style="display:none;">
                        <a class="dropdown-item" href="{{ url('/sell-cars') }}">Sell Cars</a>
                        <a class="dropdown-item" href="{{ url('/we-buy-any-car') }}">We Buy Any Car</a>
                        <a class="dropdown-item" href="{{ url('/we-cash-any-car') }}">We Cash Any Car</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link open-sub-menu" href="#" data-id="by-city">BY CITY<i class="fa fa-angle-down"></i></a>
                    <div id="by-city" class="sub-menu" style="display:none;">
                        <a class="dropdown-item" href="{{ url('/sell-cars/dubai') }}">Sell Cars In Dubai</a>
                        <a class="dropdown-item" href="{{ url('/sell-cars/abu-dhabi') }}">Sell Cars In Abu-Dubai</a>
                        <a class="dropdown-item" href="{{ url('/sell-cars/sharjah') }}">Sell Cars In Sharjah</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link open-sub-menu" href="#" data-id="by-model">BY MODEL<i class="fa fa-angle-down"></i></a>
                    <div id="by-model" class="sub-menu" style="display:none;">
                        <a class="dropdown-item" href="{{ url('/sell-cars/audi') }}">Sell Audi</a>
                        <a class="dropdown-item" href="{{ url('/sell-cars/bmw') }}">Sell BMW</a>
                        <a class="dropdown-item" href="{{ url('/sell-cars/chevrolet') }}">Sell Chevrolet</a>
                        <a class="dropdown-item" href="{{ url('/sell-cars/ford') }}">Sell Ford</a>
                        <a class="dropdown-item" href="{{ url('/sell-cars/honda') }}">Sell Honda</a>
                        <a class="dropdown-item" href="{{ url('/sell-cars/lexus') }}">Sell Lexus</a>
                        <a class="dropdown-item" href="{{ url('/sell-cars/jeep') }}">Sell Jeep</a>
                        <a class="dropdown-item" href="{{ url('/sell-cars/nissan') }}">Sell Nissan</a>
                        <a class="dropdown-item" href="{{ url('/sell-cars/porsche') }}">Sell Porsche</a>
                        <a class="dropdown-item" href="{{ url('/sell-cars/mitsubishi') }}">Sell Mitsubishi</a>
                        <a class="dropdown-item" href="{{ url('/sell-cars/toyota') }}">Sell Toyota</a>
                        <a class="dropdown-item" href="{{ url('/sell-cars/volkswagen') }}">Sell Volkswagen</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/sell-cars/evaluate-your-car') }}">EVALUATE YOUR CAR</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/about') }}">ABOUT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/blog') }}">BLOGS</a>
                </li>
            </ul>
        </div>
    </div>
</nav>