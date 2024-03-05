@extends('admin.layouts.app')
@section('title', 'Reviews')
@section('css')
<style type="text/css">
    label{font-size: 14px !important;}
    .select2-container--default .select2-selection--multiple .select2-selection__rendered li{font-size: 12px !important; padding: 4px !important;}
</style>
<style type="text/css">
    .featured-icon-box.icon-align-before-heading.style2 {
        box-shadow: 0 0 17px rgb(0 0 0 / 20%) !important;
    }
    .featured-icon-box.icon-align-before-heading.style2 .featured-content{border: none !important;}
    td > p {margin: 0 0 0px !important}
    .ratss{color: #ffc107 !important;}

</style>
@endsection
@section('content')
<div class="content mt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="col-12 mt-2">
                        <h4 class="header-title">Reviews</h4>
                    </div>
                    <div class="card-body">
                        
                        <table id="basic-datatable" class="table table-striped dt-responsive nowrap">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th style="width: 20%">Email</th>
                                    <th>Comment</th>
                                    <th style="width: 20%">Ratings</th>
                                    <th class="text-center">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reviews as $review)
                                    <tr>
                                        <td>{{ $review->name }}</td>
                                        <td>{{ $review->email }}</td>
                                        <td>{{ mb_strimwidth($review->comment, 0, 20, "...") }}</td>
                                        <td>
                                            @if($review->ratings == 1)

                                                <span><i data-feather="star" class="text-warning"></i></span>
                                                <span><i data-feather="star"></i></span>
                                                <span><i data-feather="star"></i></span>
                                                <span><i data-feather="star"></i></span>
                                                <span><i data-feather="star"></i></span>
                                            @elseif($review->ratings == 2)
                                                <span><i data-feather="star" class="text-warning"></i></span>
                                                <span><i data-feather="star" class="text-warning"></i></span>
                                                <span><i data-feather="star"></i></span>
                                                <span><i data-feather="star"></i></span>
                                                <span><i data-feather="star"></i></span>
                                            @elseif($review->ratings == 3)
                                                <span><i data-feather="star" class="text-warning"></i></span>
                                                <span><i data-feather="star" class="text-warning"></i></span>
                                                <span><i data-feather="star" class="text-warning"></i></span>
                                                <span><i data-feather="star"></i></span>
                                                <span><i data-feather="star"></i></span>
                                            @elseif($review->ratings == 4)
                                                <span><i data-feather="star" class="text-warning"></i></span>
                                                <span><i data-feather="star" class="text-warning"></i></span>
                                                <span><i data-feather="star" class="text-warning"></i></span>
                                                <span><i data-feather="star" class="text-warning"></i></span>
                                                <span><i data-feather="star"></i></span>
                                            @elseif($review->ratings == 5)
                                                <span><i data-feather="star" class="text-warning"></i></span>
                                                <span><i data-feather="star" class="text-warning"></i></span>
                                                <span><i data-feather="star" class="text-warning"></i></span>
                                                <span><i data-feather="star" class="text-warning"></i></span>
                                                <span><i data-feather="star" class="text-warning"></i></span>
                                            @endif
                                        </td>
                                        <td class="align-middle text-center">
                                            <div class="btn-group">
                                                <a class="btn btn-primary" href="javascript::" data-toggle="modal" data-target="#Update{{ $review->id }}">Update</a>
                                                <a  class="btn btn-danger Delete" href="{{ url('admin/review/delete/'.$review->id) }}" onclick="return confirm('are you sure to delete ?');">Delete</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Modal -->
                                    <div class="modal fade" id="Update{{ $review->id }}">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Update Review</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="{{ url('admin/review/update/'.$review->id) }}">
                                                        @csrf
                                                        <div class="row mb-3">
                                                         
                                                            <div class="col-lg-6">
                                                                <label>Name</label>
                                                                <input type="text" class="form-control" name="name" value="{{ $review->name }}" required>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <label>Email</label>
                                                                <input type="email" class="form-control" name="email" value="{{ $review->email }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            
                                                            <div class="col-lg-6">
                                                                <label>Comment</label>
                                                                <input type="text" class="form-control" name="comment" value="{{ $review->comment }}">
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <label>Ratings</label>
                                                                <input type="text" class="form-control" name="ratings" value="{{ $review->ratings }}">
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
