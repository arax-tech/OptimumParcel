@extends('admin.layouts.app')
@section('title', 'Dashboard')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row page-title align-items-center">
            <div class="col-sm-4 col-xl-6">
                <h4 class="mb-1 mt-0">Dashboard</h4>
            </div>
        </div>

        <!-- content -->
        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="media p-3">
                            <div class="media-body">
                                <span class="text-muted text-uppercase font-size-12 font-weight-bold">
                                    Shipping
                                </span>
                                <h2 class="mb-0">{{ $shipping }}</h2>
                            </div>
                            <div class="align-self-center">
                                <span class="icon-lg icon-dual-primary" data-feather="truck"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

           

            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="media p-3">
                            <div class="media-body">
                                <span class="text-muted text-uppercase font-size-12 font-weight-bold">
                                    Users
                                </span>
                                <h2 class="mb-0">{{ $user }}</h2>
                            </div>
                            <div class="align-self-center">
                                <span class="icon-lg icon-dual-primary" data-feather="user"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>


    </div>
</div>

@endsection
