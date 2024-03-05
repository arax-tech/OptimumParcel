<footer>
    <div class="footer-main pad-120 white-clr">
        <div class="theme-container container">               
            <div class="row">
                <div class="col-md-4 col-sm-6 footer-widget">
                    <a href="{{ url('/home') }}"> 
                        <h2 class="section-title">Optimum&nbsp;<span class="text-theme">Parcel</span></h2>
                        {{-- <img class="logo" alt="#" src="assets/img/logo/logo-white.png" />   --}}
                    </a>
                    
                </div>
                <div class="col-md-1 col-sm-1 footer-widget"></div>
                <div class="col-md-3 col-sm-6 footer-widget">
                    <h2 class="title-1 fw-900">Important Links</h2>
                    <ul>
                        <li> <a href="{{ url('/home') }}">Home</a> </li>
                        <li> <a href="{{ url('/about') }}">About</a> </li>
                        <li> <a href="{{ url('/tracking') }}">Tracking</a> </li>
                        <li> <a href="{{ url('/contact') }}">Contact</a> </li>
                        <li><a href="{{ url('login') }}">Login</a></li>
                    </ul>
                </div>
                
                
                <div class="col-md-4 col-sm-6 footer-widget">
                    <h2 class="title-1 fw-900">get in touch</h2>
                    <ul class="social-icons list-inline">
                        <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".20s"> <a href="#" class="fa fa-facebook"></a> </li>
                        <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".25s"> <a href="#" class="fa fa-twitter"></a> </li>
                        <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".30s"> <a href="#" class="fa fa-google-plus"></a> </li>
                        <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".35s"> <a href="#" class="fa fa-linkedin"></a> </li>
                    </ul>
                    {{-- <ul class="payment-icons list-inline">
                        <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".20s"> <a href="#"> <img alt="#" src="{{ asset('frontend/img/icons/payment-1.png') }}" /> </a> </li>
                        <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".25s"> <a href="#"> <img alt="#" src="{{ asset('frontend/img/icons/payment-2.png') }}" /> </a> </li>
                        <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".30s"> <a href="#"> <img alt="#" src="{{ asset('frontend/img/icons/payment-3.png') }}" /> </a> </li>
                        <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".35s"> <a href="#"> <img alt="#" src="{{ asset('frontend/img/icons/payment-4.png') }}" /> </a> </li>
                    </ul> --}}
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="theme-container container">               
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <p> © Copyright {{ date('Y') }}, All rights reserved </p>                            
                </div>
                <div class="col-md-6 col-sm-6 text-right">
                    
                </div>
            </div>
        </div>

    </div>
</footer>