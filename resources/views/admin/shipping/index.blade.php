@extends('admin.layouts.app')
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
                                    <th>Position</th>
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
                                          
                                            <span class="badge badge-primary">{{ $shipping->status }}</span>
                                           
                                        </td>
                                        <td>{{ $shipping->position }}</td>
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
                                                <a  class="btn btn-danger Delete" href="{{ url('admin/shipping/delete/'.$shipping->id) }}" onclick="return confirm('are you sure to delete ?');">Delete</a>
                                            </div>
                                        </td>
                                    </tr>


                                    <!-- Modal -->
                                    <div class="modal fade" id="Update{{ $shipping->id }}">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Update Shipping</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="{{ url('admin/shipping/update/'.$shipping->id) }}">
                                                        @csrf
                                                        <div class="row mb-3">
                                                         
                                                            <div class="col-lg-4">
                                                                <label>Name <span class="text-danger">*</span></label>
                                                                <input type="text" class="form-control" name="name" readonly value="{{ $shipping->name }}" required>
                                                            </div>

                                                            <div class="col-lg-4">
                                                                <label>Email <span class="text-danger">*</span></label>
                                                                <input type="text" class="form-control" name="email" readonly value="{{ $shipping->email }}" required>
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

                                                        <div class="row mb-3">
                                                            
                                                            <div class="col-lg-4">
                                                                <label>Trcaking ID</label>
                                                                <input type="text" class="form-control" name="trcaking_id" value="{{ $shipping->trcaking_id }}">
                                                            </div>
                                                         
                                                            <div class="col-lg-4">
                                                                <label>Track your Goods </label>
                                                                <input type="text" class="form-control" name="track_your_goods" value="{{ $shipping->track_your_goods }}">
                                                            </div>


                                                            <div class="col-lg-4">
                                                                <label>Track your Transfer </label>
                                                                <input type="text" class="form-control" name="track_your_transfer" value="{{ $shipping->track_your_transfer }}" >
                                                            </div>

                                                        </div>
                                                        <div class="row mb-3">
                                                            <div class="col-lg-4">
                                                                <label>Region Lock Code</label>
                                                                <input type="text" class="form-control" name="track_your_transfer_by_region_lock_code" placeholder="Track your Transfer by Region Lock Code" value="{{ $shipping->track_your_transfer_by_region_lock_code }}">
                                                            </div>

                                                            <div class="col-lg-4">
                                                                <label>Shipping Charges</label>
                                                                <input type="text" class="form-control" name="shipping_charges" value="{{ $shipping->shipping_charges }}">
                                                            </div>


                                                            <div class="col-lg-4">
                                                                <label>Shipping Status</label>
                                                                <select class="form-control" name="status">
                                                                    <option value="Pending">Pending</option>
                                                                    <option value="Processing">Processing</option>
                                                                    <option value="Approved">Approved</option>
                                                                    <option value="Shipped">Shipped</option>
                                                                    <option value="Cancelled">Cancelled</option>
                                                                    <option value="Money Laundering non Compliant">Money Laundering non Compliant</option>
                                                                    <option value="Seized by FBI">Seized by FBI</option>
                                                                    <option value="Fees not paid">Fees not paid</option>
                                                                    <option value="Transfer fees not paid">Transfer fees not paid </option>
                                                                    <option value="Vault fee not paid">Vault fee not paid </option>
                                                                    <option value="Restricted by state police">Restricted by state police</option>
                                                                    
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            

                                                            <div class="col-lg-12">
                                                                <label>Shipping Positions</label>
                                                                <input type="text" class="form-control" name="position" value="{{ $shipping->position }}">
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
