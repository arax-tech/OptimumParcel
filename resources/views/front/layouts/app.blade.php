<!DOCTYPE html>
<html>
<head>
        <title>@yield('title')</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap Css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/plugins/bootstrap-3.3.6/css/bootstrap.min.css') }}">  
        <!-- Bootstrap Select Css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/plugins/bootstrap-select-1.10.0/dist/css/bootstrap-select.min.cs') }}s">
        <!-- Fonts Css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/plugins/font-awesome-4.6.1/css/font-awesome.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/plugins/font-elegant/elegant.css') }}">
        <!-- OwlCarousel2 Slider Css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/plugins/owl.carousel.2/assets/owl.carousel.css') }}">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"> 
        <!-- Animate Css -->       
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/animate.css') }}">

        <!-- Main Css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/theme.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/custom.css') }}">
        @yield('css')
    </head>
    <body id="home">
        <!-- Preloader -->
        {{-- <div id="preloader">

            <div class="small1">
                <div class="small ball smallball1"></div>
                <div class="small ball smallball2"></div>
                <div class="small ball smallball3"></div>
                <div class="small ball smallball4"></div>
            </div>


            <div class="small2">
                <div class="small ball smallball5"></div>
                <div class="small ball smallball6"></div>
                <div class="small ball smallball7"></div>
                <div class="small ball smallball8"></div>
            </div>

            <div class="bigcon">
                <div class="big ball"></div>
            </div>

        </div>	 --}}
        <!-- /.Preloader -->	


        <!-- Main Wrapper -->        

        <main class="wrapper">

            <!-- Header -->
            @include('front/layouts.inc.header')
            <!-- /.Header -->

            @yield('content')

            <!-- Footer -->
            @include('front/layouts.inc.footer')
            
            <!-- /.Footer -->


        </main>

        
        <!-- / Main Wrapper -->

        <!-- Top -->
        <div class="to-top theme-clr-bg transition"> <i class="fa fa-angle-up"></i> </div>

        <!-- Popup: Login -->
        <div class="modal fade login-popup" id="login-popup" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-md">                
                <a class="close close-btn" data-dismiss="modal" aria-label="Close"> x </a>

                <div class="modal-content">   
                    <div class="login-wrap text-center">                        
                        <h2 class="title-3"> login </h2>

                        <div class="login-form clrbg-before">
                            <form class="login">
                                <div class="form-group"><input type="text" placeholder="Email address" class="form-control"></div>
                                <div class="form-group"><input type="password" placeholder="Password" class="form-control"></div>
                                <div class="form-group">
                                    <button class="btn-1 " type="submit"> login </button>
                                </div>
                            </form>
                            <a href="#" class="gray-clr"> Forgot Passoword? </a>                            
                        </div>                        
                    </div>
                    <div class="create-accnt">
                        <a href="#" class="white-clr"> Don’t have an account? </a>  
                        <h2 class="title-2"> <a href="#" class="green-clr under-line">Create a free account</a> </h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Popup: Login --> 

      

        <!-- Main Jquery JS -->
        <script src="{{ asset('frontend/js/jquery-2.2.4.min.js') }}" type="text/javascript"></script>        
        <!-- Bootstrap JS -->
        <script src="{{ asset('frontend/plugins/bootstrap-3.3.6/js/bootstrap.min.js') }}" type="text/javascript"></script>    
        <!-- Bootstrap Select JS -->
        <script src="{{ asset('frontend/plugins/bootstrap-select-1.10.0/dist/js/bootstrap-select.min.js') }}" type="text/javascript"></script>    
        <!-- OwlCarousel2 Slider JS -->
        <script src="{{ asset('frontend/plugins/owl.carousel.2/owl.carousel.min.js') }}" type="text/javascript"></script>   
        <!-- Sticky Header -->
        <script src="{{ asset('frontend/js/jquery.sticky.js') }}"></script>
        <!-- Wow JS -->
        <script src="{{ asset('frontend/plugins/WOW-master/dist/wow.min.js') }}" type="text/javascript"></script>
        <!-- Data binder -->
        <script src="{{ asset('frontend/plugins/data.binder.js/data.binder.js') }}" type="text/javascript"></script>

        <!-- Slider JS -->        

        <script type="text/javascript">
            //$("#login-popup").modal('show');
        </script>
        <!-- Theme JS -->
        <script src="{{ asset('frontend/js/theme.js') }}" type="text/javascript"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        @if(Session::has('flash_message_error'))
            <script>
                $(document).ready(function () {
                    toastr.error('{!! session('flash_message_error') !!}', 'Danger');
                });
            </script>
        @endif

        @if(Session::has('flash_message_success'))
            <script>
                $(document).ready(function () {
                    toastr.success('{!! session('flash_message_success') !!}', 'Success');
                });
            </script>
        @endif


        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/6181858a6bb0760a4940d316/1fjgv3a7a';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
            })();
        </script>
        <!--End of Tawk.to Script-->
        @yield('js')
    </body>

</html>
