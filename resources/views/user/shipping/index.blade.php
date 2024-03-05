@extends('user.layouts.app')
@section('title', 'Shipping')
@section('css')
<style type="text/css">
    label{font-size: 14px !important;}
    td{vertical-align: middle !important;}
</style>
@endsection
@section('content')
<div class="content mt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="col-12 mt-2">
                        <h4 class="header-title">
                        Shipping
                        <span class="float-right">
                            <a class="btn btn-primary" href="javascript::" data-toggle="modal" data-target="#Ceate">Create a Shipping</a>
                            
                            <!-- Modal -->
                            <div class="modal fade" id="Ceate">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Create a Shipping</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" action="{{ url('user/shipping/store') }}">
                                                @csrf
                                                <div class="row mb-3">
                                                 
                                                    <div class="col-lg-4">
                                                        <label>Name <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" name="name" readonly value="{{ auth::user()->name }}" required>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <label>Email <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" name="email" readonly value="{{ auth::user()->email }}" required>
                                                    </div>


                                                


                                                    <div class="col-lg-4">
                                                        <label>Phone <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" name="phone" required>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-lg-4">
                                                        <label>Height</label>
                                                        <input type="text" class="form-control" name="height">
                                                    </div>   
                                               
                                                    <div class="col-lg-4">
                                                        <label>Width</label>
                                                        <input type="text" class="form-control" name="width">
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <label>Depth</label>
                                                        <input type="text" class="form-control" name="depth">
                                                    </div>

                                                    
                                                </div>
                                                

                                                <div class="row mb-3">
                                                    
                                                    <div class="col-lg-4">
                                                        <label>Weight</label>
                                                        <input type="text" class="form-control" name="weight">
                                                    </div>
                                                 
                                                    <div class="col-lg-4">
                                                        <label>From Location <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" name="from_location" required>
                                                    </div>


                                                    <div class="col-lg-4">
                                                        <label>To Localtion <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" name="to_location" required>
                                                    </div>

                                                </div>

                                                
                                                
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <input type="submit" class="btn btn-primary btn-block" value="Save">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </span>
                        </h4>
                    </div>
                    <div class="card-body">
                        
                        
                        
                        <table id="basic-datatable" class="table table-striped dt-responsive nowrap">
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
                                    <th>Status</th>
                                    <th>From Location</th>
                                    <th>To Location</th>
                                    <th>Trcaking ID</th>
                                    <th>Track your Goods</th>
                                    <th>Track your Transfer</th>
                                    <th>Track your Transfer by Region Lock Code</th>
                                    <th>Shipping Charges</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            
                            <tbody> 

                                @foreach ($shippings as $key => $shipping)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $shipping->name }}</td>
                                        <td>{{ $shipping->email }}</td>
                                        <td>{{ $shipping->phone }}</td>
                                        <td>{{ $shipping->height }}</td>
                                        <td>{{ $shipping->width }}</td>
                                        <td>{{ $shipping->depth }}</td>
                                        <td>{{ $shipping->weight }}</td>
                                        <td>
                                            @if ($shipping->status == "Pending")
                                                <span class="badge badge-primary">Pending</span>
                                            @elseif ($shipping->status == "Shipped")
                                                <span class="badge badge-success">Shipped</span>
                                            @else
                                                <span class="badge badge-danger">Cancelled</span>                                            
                                            @endif
                                        </td>
                                        <td>{{ $shipping->from_location }}</td>
                                        <td>{{ $shipping->to_location }}</td>
                                        <td>{{ $shipping->trcaking_id }}</td>
                                        <td>{{ $shipping->track_your_goods }}</td>
                                        <td>{{ $shipping->track_your_transfer }}</td>
                                        <td>{{ $shipping->track_your_transfer_by_region_lock_code }}</td>
                                        <td>{{ $shipping->shipping_charges }}</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <!-- Modal -->
                                                <a class="btn btn-primary" href="javascript::" data-toggle="modal" data-target="#Update{{ $shipping->id }}">Update</a>
                                                <a  class="btn btn-danger Delete" href="{{ url('user/shipping/delete/'.$shipping->id) }}" onclick="return confirm('are you sure to delete ?');">Delete</a>
                                            </div>
                                        </td>
                                    </tr>


                                    <!-- Modal -->
                                    <div class="modal fade" id="Update{{ $shipping->id }}">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Update Shipping</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="{{ url('user/shipping/update/'.$shipping->id) }}">
                                                        @csrf
                                                        <div class="row mb-3">
                                                         
                                                            <div class="col-lg-4">
                                                                <label>Name <span class="text-danger">*</span></label>
                                                                <input type="text" class="form-control" name="name" readonly value="{{ auth::user()->name }}" required>
                                                            </div>

                                                            <div class="col-lg-4">
                                                                <label>Email <span class="text-danger">*</span></label>
                                                                <input type="text" class="form-control" name="email" readonly value="{{ auth::user()->email }}" required>
                                                            </div>


                                                        


                                                            <div class="col-lg-4">
                                                                <label>Phone <span class="text-danger">*</span></label>
                                                                <input type="text" class="form-control" name="phone" value="{{ $shipping->phone }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <div class="col-lg-4">
                                                                <label>Height</label>
                                                                <input type="text" class="form-control" name="height" value="{{ $shipping->height }}">
                                                            </div>   
                                                       
                                                            <div class="col-lg-4">
                                                                <label>Width</label>
                                                                <input type="text" class="form-control" name="width" value="{{ $shipping->width }}">
                                                            </div>

                                                            <div class="col-lg-4">
                                                                <label>Depth</label>
                                                                <input type="text" class="form-control" name="depth" value="{{ $shipping->depth }}">
                                                            </div>

                                                            
                                                        </div>
                                                        

                                                        <div class="row mb-3">
                                                            
                                                            <div class="col-lg-4">
                                                                <label>Weight</label>
                                                                <input type="text" class="form-control" name="weight" value="{{ $shipping->weight }}">
                                                            </div>
                                                         
                                                            <div class="col-lg-4">
                                                                <label>From Location <span class="text-danger">*</span></label>
                                                                <input type="text" class="form-control" name="from_location" value="{{ $shipping->from_location }}" required>
                                                            </div>


                                                            <div class="col-lg-4">
                                                                <label>To Localtion <span class="text-danger">*</span></label>
                                                                <input type="text" class="form-control" name="to_location" value="{{ $shipping->to_location }}" required>
                                                            </div>

                                                        </div>

                                                        
                                                        
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <input type="submit" class="btn btn-primary btn-block" value="Update">
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                
                                
                                
                            </tbody>
                        </table>
                    </div> 
                </div> 
            </div>
        </div>
        
    </div>
</div>
@endsection
