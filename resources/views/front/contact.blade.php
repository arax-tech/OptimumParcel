@extends('front.layouts.app')
@section('title', 'Contact')
@section('content')
<!-- Content Wrapper -->
<article> 
    <!-- Breadcrumb -->
    <section class="theme-breadcrumb pad-50">                
        <div class="theme-container container ">  
            <div class="row">
                <div class="col-sm-8 pull-left">
                    <div class="title-wrap">
                        <h2 class="section-title no-margin"> contact us </h2>
                        <p class="fs-16 no-margin"> Get in touch with us easily </p>
                    </div>
                </div>
                <div class="col-sm-4">                        
                    <ol class="breadcrumb-menubar list-inline">
                        <li><a href="{{ url('/home') }}" class="gray-clr">Home</a></li>                                   
                        <li class="active">contact</li>
                    </ol>
                </div>  
            </div>
        </div>
    </section>
    <!-- /.Breadcrumb -->

    <!-- Contact Us -->
    <section class="contact-page pad-30">                    
        <div class="theme-container container">               
            <div class="row">
                <div class="col-md-4 col-sm-6 col-md-offset-1">
                    <ul class="contact-detail title-2 pt-50">
                        <li class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s"> <span>uk numbers:</span> <p class="gray-clr"> +001-2463-957 <br> +001-4356-643 </p> </li>
                        <li class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".40s"> <span>usa numbers:</span> <p class="gray-clr"> +001-2463-957 <br> +001-4356-643 </p> </li>
                        <li class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".50s"> <span>Email address:</span> <p class="gray-clr"> support@go.com <br> info@go.com </p> </li>
                    </ul>
                </div>

                <div class="col-md-5 col-sm-6 col-md-offset-1 contact-form">
                    <div class="calculate-form">
                        <form class="row" id="contact-form">
                            <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                <div class="col-sm-3"> <label class="title-2"> Name: </label></div>
                                <div class="col-sm-9"> <input type="text" name="Name" id="Name" required placeholder="" class="form-control"> </div>
                            </div>
                            <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                <div class="col-sm-3"> <label class="title-2"> Email: </label></div>
                                <div class="col-sm-9"> <input type="text" name="Email" id="Email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="" class="form-control"> </div>
                            </div>
                            <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                <div class="col-sm-3"> <label class="title-2"> Phone: </label></div>
                                <div class="col-sm-9"> <input type="text" name="Phone" id="Phone" placeholder="" class="form-control"> </div>
                            </div>
                            <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                <div class="col-sm-3"> <label class="title-2"> Message: </label></div>
                                <div class="col-sm-9"> <textarea class="form-control" name="Message" id="Message" required cols="25" rows="3"></textarea> </div>
                            </div>                                  
                            <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                <div class="col-sm-9 col-xs-12 pull-right"> 
                                    <button name="submit" id="submit_btn" class="btn-1"> send message </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.Contact Us -->

    <!-- Contact Map -->
    <section class="map pt-80">
        <div class="map-canvas">
            {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8070159.793599862!2d4.177370351591225!3d9.01736314273058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0baf7da48d0d%3A0x99a8fe4168c50bc8!2sNigeria!5e0!3m2!1sen!2s!4v1643358283569!5m2!1sen!2s" style="border:0; width: 100%; height: 550px;" allowfullscreen="" loading="lazy"></iframe> --}}

            <iframe src="https://www.google.com/maps/d/embed?mid=1hjs3mIoZBblBP_CvxiP4w38STiY&ehbc=2E312F" style="border:0; width: 100%; height: 550px;"></iframe>
        </div>
    </section>
    <!-- /.Contact Map -->

</article>

<!-- /.Content Wrapper -->
@endsection