<header class="header-main">

    <!-- Header Topbar -->
    <div class="top-bar font2-title1 white-clr">
        <div class="theme-container container">
            <div class="row">
                <div class="col-md-6 col-sm-5">
                    <ul class="list-items fs-10">
                        <li class="active"><a href="javascript::">Welcome</a></li>
                        <li><a href="javascript::"> to Our Website !</a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-7 fs-12">
                    <p class="contact-num">  <i class="fa fa-phone"></i> Call us now: <span class="theme-clr"> (913) 543-8749 </span> </p>
                </div>
            </div>
        </div>
        @guest
        <a href="{{ url('login') }}" class="sign-in fs-12 theme-clr-bg"> login </a>
        @else
        <a href="{{ url(strtolower(auth()->user()->role).'/dashboard') }}" class="sign-in fs-12 theme-clr-bg"> Dashbaord </a>
        @endguest

        
    </div>
    <!-- /.Header Topbar -->

    <!-- Header Logo & Navigation -->
    <nav class="menu-bar font2-title1">
        <div class="theme-container container">
            <div class="row">
                <div class="col-md-2 col-sm-2">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-logo" href="{{ url('/home') }}">
                        <h2 class="section-title">Optimum&nbsp;<span class="text-theme">Parcel</span></h2>
                        {{-- <img src="{{ asset('frontend/img/logo/logo-black.png') }}" alt="logo" />  --}}
                    </a>
                </div>
                <div class="col-md-10 col-sm-10 fs-12">
                    <div id="navbar" class="collapse navbar-collapse no-pad">
                        <ul class="navbar-nav theme-menu">
                            
                            <li class="{{ (strpos(url()->full() , 'home')) ? 'active' : ''  }}"> <a href="{{ url('/home') }}">Home</a> </li>
                            <li class="{{ (strpos(url()->full() , 'about')) ? 'active' : ''  }}"> <a href="{{ url('/about') }}">About</a> </li>
                            <li class="{{ (strpos(url()->full() , 'tracking')) ? 'active' : ''  }}"> <a href="{{ url('/tracking') }}">Tracking</a> </li>
                            <li class="{{ (strpos(url()->full() , 'contact')) ? 'active' : ''  }}"> <a href="{{ url('/contact') }}">Contact</a> </li>
                            </li>  
                            {{-- <li ><span class="search fa fa-search theme-clr transition"> </span></li> --}}
                        </ul>                                                      
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- /.Header Logo & Navigation -->

</header>