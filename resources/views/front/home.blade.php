@php
    use App\Review;
@endphp

@extends('front.layouts.app')
@section('title', 'Home')
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
<style type="text/css">
    .ratss{color: #ffc107 !important; font-size: 20px !important}
    #rateYo{color: yellow !important}
    .text-warning{color: #f39c12 !important; font-size: 20px !important}
</style>
@endsection
@section('content')
<!-- Content Wrapper -->
<article> 
    <!-- Banner -->
    <section class="banner mask-overlay pad-120 white-clr">
        <div class="container theme-container rel-div">
            <img class="pt-10 effect animated fadeInLeft" alt="" src="{{ asset('frontend/img/icons/icon-1.png') }}" />
            <ul class="list-items fw-600 effect animated wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">   
                <li><a href="#">fast</a></li>
                <li><a href="#">secured</a></li>
                <li><a href="#">worldwide</a></li>
            </ul>
            <h2 class="section-title fs-48 effect animated wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s"> we ae providing awesome<br> <span class="theme-clr"> courier </span> & <span class="theme-clr"> delivery </span> services </h2>
        </div>
        <div class="pad-50 visible-lg"></div>
    </section>
    <!-- /.Banner -->

    <!-- Track Product -->
    <section>
        <div class="theme-container container">               
            <div class="row">
                <div class="col-md-8 col-md-offset-2 track-prod clrbg-before wow slideInUp" data-wow-offset="50" data-wow-delay=".20s">     
                    <h2 class="title-1"> track your product </h2> <span class="font2-light fs-12">Now you can track your product easily</span>
                    <div class="row">
                            <div class="col-md-3 col-sm-3" style="padding: 0px !important">
                                <div class="form-group">
                                    <select data-bind="in:value" data-name="type" class="selectpicker form-control box-shadow" data-live-search="true" data-width="100%"  title="Choose" name="type" id="type">
                                        <option value="tracking_id" selected>Tracking ID</option>
                                        <option value="Goods">Track your Goods</option>
                                        <option value="Transfer">Track your Transfer</option>
                                        <option value="Region">Track your Transfer By Region Lock Code</option>
                                    </select>

                                    
                                </div>
                            </div>
                            <form action="{{ url('track') }}" id="tracking_id">
                                <div class="col-md-5 col-sm-5" style="padding: 0px !important">
                                    <div class="form-group">
                                        <input name="tracking_id"  type="text" placeholder="Tracking ID" class="form-control box-shadow">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 p-0">
                                    <div class="form-group">
                                        <button class="btn-1">track your product</button>
                                    </div>
                                </div>
                            </form>

                            <form action="{{ url('track') }}" id="Goods">
                                <div class="col-md-5 col-sm-5" style="padding: 0px !important">
                                    <div class="form-group">
                                        <input name="Goods" type="text" placeholder="Enter your Goods" class="form-control box-shadow">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 p-0">
                                    <div class="form-group">
                                        <button class="btn-1">track your product</button>
                                    </div>
                                </div>
                            </form>


                            <form action="{{ url('track') }}" id="Transfer">
                                <div class="col-md-5 col-sm-5" style="padding: 0px !important">
                                    <div class="form-group">
                                        <input name="Transfer" type="text" placeholder="Enter your Transfer" class="form-control box-shadow">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 p-0">
                                    <div class="form-group">
                                        <button class="btn-1">track your product</button>
                                    </div>
                                </div>
                            </form>


                            <form action="{{ url('track') }}" id="Region">
                                <div class="col-md-5 col-sm-5" style="padding: 0px !important">
                                    <div class="form-group">
                                        <input name="Region" type="text" placeholder="Enter Region Lock Code" class="form-control box-shadow">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 p-0">
                                    <div class="form-group">
                                        <button class="btn-1">track your product</button>
                                    </div>
                                </div>
                            </form>




                            
                            
                            
                    </div>
                </div>                        
            </div>
        </div>
    </section>
    <!-- /.Track Product -->

    <!-- About Us -->
    <section class="pad-80 about-wrap clrbg-before">
        <div class="theme-container container">               
            <div class="row">
                <div class="col-md-6">
                    <div class="about-us">
                        <h2 class="section-title pb-10 wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s"> About Us </h2>
                        <p class="fs-16 wow fadeInUp" data-wow-offset="50" data-wow-delay=".25s">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam 
                            nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam 
                            erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci 
                            tation ullamcorper suscipit lobortis nisl ut aliquip.</p>
                        <ul class="feature">
                            <li> 
                                <img alt="" src="{{ asset('frontend/img/icons/icon-2.png') }}" class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s" /> 
                                <div class="feature-content wow rotateInDownRight" data-wow-offset="50" data-wow-delay=".30s"> 
                                    <h2 class="title-1">Fast delivery</h2> 
                                    <p>Within 24 Hours</p>                                            
                                </div>  
                            </li>
                            <li> 
                                <img alt="" src="{{ asset('frontend/img/icons/icon-3.png') }}" class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s" /> 
                                <div class="feature-content wow rotateInDownRight" data-wow-offset="50" data-wow-delay=".30s"> 
                                    <h2 class="title-1">secured service</h2> 
                                    <p>Product security is our first priority</p>                                            
                                </div>  
                            </li>
                            <li> 
                                <img alt="" src="{{ asset('frontend/img/icons/icon-4.png') }}" class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s" /> 
                                <div class="feature-content wow rotateInDownRight" data-wow-offset="50" data-wow-delay=".30s"> 
                                    <h2 class="title-1">worldwide shipping</h2> 
                                    <p>We're providing courier services in all over the world</p>                                            
                                </div>  
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <div class="pb-80 visible-lg"></div>
                    <img alt="" src="{{ asset('frontend/img/block/about-img.png') }}" class="wow slideInRight" data-wow-offset="50" data-wow-delay=".20s" />
                </div>
            </div>
        </div>
    </section>
    <!-- /.About Us -->


    <!-- Steps -->
    <section class="steps-wrap mask-overlay pad-80">                
        <div class="theme-container container">               
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="font-2 fs-50 wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s"> 1. </div> 
                    <div class="steps-content wow fadeInLeft" data-wow-offset="50" data-wow-delay=".25s"> 
                        <h2 class="title-3">Pending Order</h2> 
                        <p class="gray-clr">pending order  <br> to be shipped</p>                                            
                    </div>  
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="font-2 fs-50 wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s"> 2. </div> 
                    <div class="steps-content wow fadeInLeft" data-wow-offset="50" data-wow-delay=".25s"> 
                        <h2 class="title-3">Shipped Order</h2> 
                        <p class="gray-clr">shipped order <br> is already shipped</p>                                            
                    </div>  
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="font-2 fs-50 wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s"> 3. </div> 
                    <div class="steps-content wow fadeInLeft" data-wow-offset="50" data-wow-delay=".25s"> 
                        <h2 class="title-3">Deliverd Order</h2> 
                        <p class="gray-clr">Deliverd Order <br> is alrady delivered to customers</p>                                            
                    </div>  
                </div>
            </div>
        </div>
        <div class="step-img wow slideInRight" data-wow-offset="50" data-wow-delay=".20s"> <img src="{{ asset('frontend/img/block/step-img.png') }}" alt="" /> </div>
    </section>
    <!-- /.Steps -->

    <!-- Product Delivery -->
    <section class="prod-delivery pad-120">
        <div class="theme-container container">               
            <div class="row">
                <div class="col-md-11 col-md-offset-1">
                    <div class="pt-120 rel-div">
                        <div class="pb-50 hidden-xs"></div>
                        <h2 class="section-title wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s"> Get the <span class="theme-clr"> fastest </span> product delivery </h2>
                        <p class="fs-16 wow fadeInUp" data-wow-offset="50" data-wow-delay=".25s">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam <br>
                            nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam <br>
                            erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci <br>
                            tation ullamcorper suscipit lobortis nisl ut aliquip.</p>
                        <div class="pb-120 hidden-xs"></div>
                    </div>
                    <div class="delivery-img pt-10">
                        <img alt="" src="{{ asset('frontend/img/block/delivery.png') }}" class="wow slideInLeft" data-wow-offset="50" data-wow-delay=".20s"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.Product Delivery -->



    <section class="ttm-row broken-section ttm-bgcolor-grey clearfix" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ttm-bg ttm-col-bgcolor-yes ttm-right-span ttm-bgcolor-white spacing-3 z-index-1 mb-5">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                        <div class="layer-content">
                            @php
                            error_reporting(0);
                                

                                $reviews = Review::get();

                                $ratings = DB::table('reviews')->avg('ratings');

                                $rating5starts = DB::table('reviews')->where(['ratings' => 5])->count();
                                $rating4starts = DB::table('reviews')->where(['ratings' => 4])->count();
                                $rating3starts = DB::table('reviews')->where(['ratings' => 3])->count();
                                $rating2starts = DB::table('reviews')->where(['ratings' => 2])->count();
                                $rating1starts = DB::table('reviews')->where(['ratings' => 1])->count();

                                // dd($reviews);
                            @endphp
                            
                            <div class="row mb-8">
                                <div class="col-md-5">
                                    <div class="mb-3">
                                        <h3 class="font-size-18 mb-3">Based on {{ count($reviews) }} reviews</h3>
                                        <h2 class="font-size-30 font-weight-bold text-lh-1 mb-0">{{ mb_strimwidth($ratings, 0, 3) }}</h2>
                                        <div class="text-lh-1">overall</div>
                                    </div>

                                    <!-- Ratings -->
                                    <ul class="list-unstyled">
                                        <li style="height: 60px !important">
                                            <a class="row align-items-center font-size-1" href="javascript:;">
                                                <div class="col-auto mb-md-0">
                                                    <div class="text-warning text-ls-n2 font-size-16">
                                                        <small class="fa fa-star"></small>
                                                        <small class="fa fa-star"></small>
                                                        <small class="fa fa-star"></small>
                                                        <small class="fa fa-star"></small>
                                                        <small class="fa fa-star"></small>
                                                    </div>
                                                </div>
                                                <div class="col-auto  mb-md-0">
                                                    <div class="progress ml-xl-5" style="height: 10px;">
                                                        <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="col-auto text-right">
                                                    <span class="text-gray-90">{{ $rating5starts }}</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li style="height: 60px !important">
                                            <a class="row align-items-center font-size-1" href="javascript:;">
                                                <div class="col-auto  0">
                                                    <div class="text-warning text-ls-n2 font-size-16">
                                                        <small class="fa fa-star"></small>
                                                        <small class="fa fa-star"></small>
                                                        <small class="fa fa-star"></small>
                                                        <small class="fa fa-star"></small>
                                                        <small class="fa fa-star-o text-warning"></small>
                                                    </div>
                                                </div>
                                                <div class="col-auto  mb-md-0">
                                                    <div class="progress ml-xl-5" style="height: 10px;">
                                                        <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="53" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="col-auto text-right">
                                                    <span class="text-gray-90">{{ $rating4starts }}</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li style="height: 60px !important">
                                            <a class="row align-items-center font-size-1" href="javascript:;">
                                                <div class="col-auto  0">
                                                    <div class="text-warning text-ls-n2 font-size-16">
                                                        <small class="fa fa-star"></small>
                                                        <small class="fa fa-star"></small>
                                                        <small class="fa fa-star"></small>
                                                        <small class="fa fa-star-o text-warning"></small>
                                                        <small class="fa fa-star-o text-warning"></small>
                                                    </div>
                                                </div>
                                                <div class="col-auto  mb-md-0">
                                                    <div class="progress ml-xl-5" style="height: 10px;">
                                                        <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="col-auto text-right">
                                                    <span class="text-gray-90">{{ $rating3starts }}</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li style="height: 60px !important">
                                            <a class="row align-items-center font-size-1" href="javascript:;">
                                                <div class="col-auto mb-md-0">
                                                    <div class="text-warning text-ls-n2 font-size-16">
                                                        <small class="fa fa-star"></small>
                                                        <small class="fa fa-star"></small>
                                                        <small class="fa fa-star-o text-warning"></small>
                                                        <small class="fa fa-star-o text-warning"></small>
                                                        <small class="fa fa-star-o text-warning"></small>
                                                    </div>
                                                </div>
                                                <div class="col-auto mb-2 mb-md-0">
                                                    <div class="progress ml-xl-5" style="height: 10px;">
                                                        <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="col-auto text-right">
                                                    <span class="text-muted">{{ $rating2starts }}</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li style="height: 60px !important">
                                            <a class="row align-items-center font-size-1" href="javascript:;">
                                                <div class="col-auto mb-md-0">
                                                    <div class="text-warning text-ls-n2 font-size-16">
                                                        <small class="fa fa-star"></small>
                                                        <small class="fa fa-star-o text-warning"></small>
                                                        <small class="fa fa-star-o text-warning"></small>
                                                        <small class="fa fa-star-o text-warning"></small>
                                                        <small class="fa fa-star-o text-warning"></small>
                                                    </div>
                                                </div>
                                                <div class="col-auto mb-2 mb-md-0">
                                                    <div class="progress ml-xl-5" style="height: 10px;">
                                                        <div class="progress-bar" role="progressbar" style="width: 20%;" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="col-auto text-right">
                                                    <span class="text-gray-90">{{ $rating1starts }}</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- End Ratings -->
                                </div>
                                <div class="col-md-1"></div>    
                                <div class="col-md-6">
                                    <h3 class="font-size-18 mb-5">Add Your Review</h3>
                                    <!-- Form -->
                                    <form class="js-validate" method="post" action="{{ url('/review') }}">
                                        @csrf
                                        
                                        <div class="js-form-message form-group mb-3 row">
                                            <div class="col-md-4 col-lg-3">
                                                <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-md-8 col-lg-9">
                                                <input type="text" class="form-control" name="name" id="name" aria-label="Name" required data-msg="Please enter your name." data-error-class="u-has-error" data-success-class="u-has-success">
                                            </div>
                                        </div>
                                        <div class="js-form-message form-group mb-3 row">
                                            <div class="col-md-4 col-lg-3">
                                                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-md-8 col-lg-9">
                                                <input type="email" class="form-control" name="email" id="email" aria-label="info@xyz.com" required data-msg="Please enter a valid email address." data-error-class="u-has-error" data-success-class="u-has-success">
                                            </div>
                                        </div>
                                        


                                        <div class="js-form-message form-group mb-3 row">
                                            <div class="col-md-4 col-lg-3">
                                                <label for="reviews" class="form-label">Your Review <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-md-8 col-lg-9">
                                                <textarea class="form-control" rows="3" id="reviews"
                                                    data-msg="Please enter your message." data-error-class="u-has-error"
                                                    data-success-class="u-has-success" required name="reviews"></textarea>
                                            </div>
                                        </div>

                                        <div class="js-form-message form-group mb-5 row">
                                            <div class="col-md-4 col-lg-3">
                                                <label for="ratings" class="form-label">Rating <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-md-8 col-lg-9">
                                                <div id="rateYo"></div>
                                                
                                                <input type="hidden" name="ratings" class="counter" value="3">
                                            </div>
                                        </div>




                                        <div class="row">
                                            <div class="col-auto">
                                                <button type="submit" class="btn btn-primary text-light btn-block" style="color: #fff !important">Add Review</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- End Form -->
                                </div>
                            </div>



                            <div class="mb-2 position-relative">
                                <dv class="d-flex justify-content-between border-bottom border-color-1 flex-md-nowrap flex-wrap border-sm-bottom-0">
                                    <h3 class="section-title section-title__sm mb-0 pb-3 font-size-18">Latest Reviews</h3>
                                </dv>
                                <div class="js-slick-carousel u-slick u-slick--gutters-2 overflow-hidden u-slick-overflow-visble pt-3 position-static"
                                    data-slides-show="1"
                                    data-slides-scroll="1"
                                    data-arrows-classes="position-absolute top-0 font-size-17 u-slick__arrow-normal top-10"
                                    data-arrow-left-classes="fa fa-angle-left right-1"
                                    data-arrow-right-classes="fa fa-angle-right right-0">

                                    @foreach ($reviews->chunk(3) as $chunk_reviews)
                                        <div class="js-slide">
                                            <ul class="list-unstyled products-group mb-0 overflow-visible">
                                                @foreach ($chunk_reviews as $review)
                                                    
                                                    <li class="product-item__list pb-2 mb-2 pb-md-0 mb-md-0">
                                                        <div class="product-item__outer h-100">
                                                            <div class="product-item__inner py-md-3 mx-3 border-bottom row no-gutters">
                                                                <div class="col-auto product-media-left">
                                                                    <a href="javascript::" class="max-width-70 d-block">
                                                                        
                                                                        <img class="img-thumbnail rounded-circle" style="width: 60px; height: 60px;" src="{{ asset('placeholder.jpg') }}" class="avatar">
                                                                        
                                                                    </a>
                                                                </div>
                                                                <div class="col product-item__body pl-2 pl-lg-3">
                                                                    <div class="mb-4">
                                                                        <h5 class="product-item__title">
                                                                            <a href="javascript::" class="text-dark">
                                                                                <div class="font-size-15 font-weight-bold">{{ $review->name }} <span class="float-right" style="float: right !important;">{{-- {{ date('d M Y'), strtotime($review->created_at) }} --}}</span></div>

                                                                            </a>
                                                                            <p style="margin: 3px 0px 3px 0px !important;">{{ $review->comment }}</p>
                                                                            
                                                                            @php
                                                                                error_reporting(0);
                                                                                $rate = explode('.', $review->ratings);
                                                                                $rating = $rate[0];
                                                                                $rating5 = $rate[1];
                                                                            @endphp

                                                                            @if($rating == 1)

                                                                            <span><i class="ratss fa fa-star"></i></span>
                                                                            <span><i class="ratss fa fa-star-o text-warning"></i></span>
                                                                            <span><i class="ratss fa fa-star-o text-warning"></i></span>
                                                                            <span><i class="ratss fa fa-star-o text-warning"></i></span>
                                                                            <span><i class="ratss fa fa-star-o text-warning"></i></span>@elseif($rating == 2)
                                                                            <span><i class="ratss fa fa-star"></i></span>
                                                                            <span><i class="ratss fa fa-star"></i></span>
                                                                            <span><i class="ratss fa fa-star-o text-warning"></i></span>
                                                                            <span><i class="ratss fa fa-star-o text-warning"></i></span>
                                                                            <span><i class="ratss fa fa-star-o text-warning"></i></span>@elseif($rating == 3)
                                                                            <span><i class="ratss fa fa-star"></i></span>
                                                                            <span><i class="ratss fa fa-star"></i></span>
                                                                            <span><i class="ratss fa fa-star"></i></span>
                                                                            <span><i class="ratss fa fa-star-o text-warning"></i></span>
                                                                            <span><i class="ratss fa fa-star-o text-warning"></i></span>@elseif($rating == 4)
                                                                            <span><i class="ratss fa fa-star"></i></span>
                                                                            <span><i class="ratss fa fa-star"></i></span>
                                                                            <span><i class="ratss fa fa-star"></i></span>
                                                                            <span><i class="ratss fa fa-star"></i></span>
                                                                            <span><i class="ratss fa fa-star-o text-warning"></i></span>@elseif($rating == 5)
                                                                            <span><i class="ratss fa fa-star"></i></span>
                                                                            <span><i class="ratss fa fa-star"></i></span>
                                                                            <span><i class="ratss fa fa-star"></i></span>
                                                                            <span><i class="ratss fa fa-star"></i></span>
                                                                            <span><i class="ratss fa fa-star"></i></span>
                                                                            @endif

                                                                            
                                                                        </h5>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                @endforeach

                                              
                                                
                                            </ul>
                                        </div>
                                    @endforeach

                                    
                                   
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial -->
    {{-- <section class="testimonial mask-overlay">
        <div class="theme-container container">               
            <div class="testimonial-slider no-pagination pad-120">
                @foreach ($reviews as $key => $review)
                
                <div class="item">
                    <div class="testimonial-img darkclr-border theme-clr font-2 wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                        <img alt="" src="{{ asset('placeholder.jpg') }}" />
                        <span>,</span>
                    </div>
                    <div class="testimonial-content">
                        <p class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".25s">  <i class="gray-clr fs-16">
                            {{ $review->comment }}
                        </i>
                        </p>
                        <h2 class="title-2 pt-10 wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s"> 
                            <a href="#" class="white-clr fw-900"> {{ $review->name }} </a>
                            
                        </h2>
                    </div>
                </div>
               
                @endforeach

                
                
            </div>
        </div>
    </section> --}}
    <!-- /.Testimonial -->

   

  
</article>
<!-- /.Content Wrapper -->
@endsection
@section('js')
<script type="text/javascript">
    $(document).ready(function(){
        // alert('working');
        $("#Goods").hide();
        $("#Transfer").hide();
        $("#Region").hide();
        $("#type").on('change', function(){
            var value = $("#type").val();
            // alert(value);
            if (value == "Goods")
            {
                $("#Goods").show();
                $("#tracking_id").hide();
                $("#Transfer").hide();
                $("#Region").hide();
            }
            else if(value == "Transfer")
            {
                $("#Transfer").show();
                $("#Goods").hide();
                $("#tracking_id").hide();
                $("#Region").hide();
            }
            else if(value == "Region")
            {
                $("#Region").show();
                $("#Transfer").hide();
                $("#Goods").hide();
                $("#tracking_id").hide();
            }
            else
            {
                $("#tracking_id").show();
                $("#Goods").hide();
                $("#Transfer").hide();
                $("#Region").hide();
            }
        });
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
<script type="text/javascript">
    /* javascript */
    $(function () {
     
      $("#rateYo").rateYo({
        rating: 3,
        fullStar: true,
        onChange: function (rating, rateYoInstance) {
        $(".counter").val(rating);
        }
      });
    });
</script>
@endsection