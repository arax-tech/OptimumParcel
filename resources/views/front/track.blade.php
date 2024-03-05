@extends('front.layouts.app')
@section('title', 'Tracking')
@section('content')
<!-- Content Wrapper -->
<article> 
    <!-- Breadcrumb -->
    <section class="theme-breadcrumb pad-50">                
        <div class="theme-container container ">  
            <div class="row">
                <div class="col-sm-8 pull-left">
                    <div class="title-wrap">
                        <h2 class="section-title no-margin"> product tracking </h2>
                        <p class="fs-16 no-margin"> Track your product & see the current condition </p>
                    </div>
                </div>
                <div class="col-sm-4">                        
                    <ol class="breadcrumb-menubar list-inline">
                        <li><a href="#" class="gray-clr">Home</a></li>                                   
                        <li class="active">Track</li>
                    </ol>
                </div>  
            </div>
        </div>
    </section>
    <!-- /.Breadcrumb -->

    <!-- Tracking -->
    <section class="pt-50 pb-120 tracking-wrap">    
        <div class="theme-container container ">  
            <div class="row pad-10">
                <div class="col-md-8 col-md-offset-2 tracking-form wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">     
                    <h2 class="title-1 text-center"> track your product </h2> <span class="font2-light fs-12">Now you can track your product easily</span>
                    <div class="row">
                        <div class="col-md-3 col-sm-3" style="padding: 0px !important">
                            <div class="form-group">
                                <select data-bind="in:value" data-name="type" class="selectpicker form-control box-shadow" data-live-search="true" data-width="100%"  title="Choose" name="type" id="type">
                                    
                                    <option value="tracking_id"
                                    @if (isset($_REQUEST['tracking_id']))
                                        selected 
                                    @endif
                                    >Tracking ID</option>

                                    <option value="Goods"
                                    @if (isset($_REQUEST['Goods']))
                                        selected 
                                    @endif
                                    >Track your Goods</option>
                                    <option value="Transfer"
                                    @if (isset($_REQUEST['Transfer']))
                                        selected 
                                    @endif
                                    >Track your Transfer</option>
                                    <option value="Region"
                                    @if (isset($_REQUEST['Region']))
                                        selected 
                                    @endif
                                    >Track your Transfer By Region Lock Code</option>
                                </select>

                                
                            </div>
                        </div>
                        <form action="{{ url('track') }}" id="tracking_id">
                            <div class="col-md-5 col-sm-5" style="padding: 0px !important">
                                <div class="form-group">
                                    <input name="tracking_id"  type="text" placeholder="Tracking ID" class="form-control box-shadow" @if (isset($_REQUEST['tracking_id'])) value="{{ $_REQUEST['tracking_id'] }}" @endif>
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
                                    <input name="Goods" type="text" placeholder="Enter your Goods" class="form-control box-shadow"@if (isset($_REQUEST['Goods'])) value="{{ $_REQUEST['Goods'] }}" @endif>
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
                                    <input name="Transfer" type="text" placeholder="Enter your Transfer" class="form-control box-shadow"@if (isset($_REQUEST['Transfer'])) value="{{ $_REQUEST['Transfer'] }}" @endif>
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
                                    <input name="Region" type="text" placeholder="Enter Region Lock Code" class="form-control box-shadow"@if (isset($_REQUEST['Region'])) value="{{ $_REQUEST['Region'] }}" @endif>
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
            <div class="row">
                <div class="col-md-12 mt-5 pad-30 wow fadeInLeft" data-wow-offset="50" data-wow-delay=".30s"> 
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>S#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Height</th>
                                <th>Width</th>
                                <th>Depth</th>
                                <th>Weight</th>
                                <th>From Location</th>
                                <th>To Location</th>
                                <th>Shipping Charges</th>
                                <th>Position</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($search as $key => $shipping)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $shipping->name }}</td>
                                    <td>{{ $shipping->email }}</td>
                                    <td>{{ $shipping->phone }}</td>
                                    <td>{{ $shipping->height }}</td>
                                    <td>{{ $shipping->width }}</td>
                                    <td>{{ $shipping->depth }}</td>
                                    <td>{{ $shipping->weight }}</td>
                                    <td>{{ $shipping->from_location }}</td>
                                    <td>{{ $shipping->to_location }}</td>
                                    
                                    <td>{{ $shipping->shipping_charges }}</td>
                                    <td>{{ $shipping->position }}</td>
                                   
                                    <td>
                                        
                                            <span class="badge badge-primary">{{ $shipping->status }}</span>
                                        
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
               
            </div>
            
        </div>
    </section>
    <!-- /.Tracking -->

</article>
<!-- /.Content Wrapper -->
@endsection
@section('js')
<script type="text/javascript">
    $(document).ready(function(){
        // alert('working');
        @if (isset($_REQUEST['Goods']))
            $("#tracking_id").hide();
            $("#Goods").show();
            $("#Transfer").hide();
            $("#Region").hide();
        @elseif (isset($_REQUEST['Transfer']))
            $("#tracking_id").hide();
            $("#Goods").hide();
            $("#Transfer").show();
            $("#Region").hide();
        @elseif (isset($_REQUEST['Region']))
            $("#tracking_id").hide();
            $("#Goods").hide();
            $("#Transfer").hide();
            $("#Region").show();
        @elseif (isset($_REQUEST['tracking_id']))
            $("#tracking_id").show();
            $("#Goods").hide();
            $("#Transfer").hide();
            $("#Region").hide();
        @endif
        // $("#Goods").hide();
        // $("#Transfer").hide();
        // $("#Region").hide();
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
@endsection