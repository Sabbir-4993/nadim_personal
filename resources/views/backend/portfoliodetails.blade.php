@extends('backend.layouts.master')

@section('content')
    <div class="contents">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">Portfolio Images</h4>
                        <div class="breadcrumb-action justify-content-center flex-wrap">
                            <div class="action-btn">
                                <button type="button" class="btn btn-sm btn-primary btn-add" data-toggle="modal" data-target="#modal-basic"><i class="la la-plus"></i> Add New</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            @if (Session::has('message'))
                <div class="alert alert-success">
                    {{ Session::get('message') }}
                </div>
            @endif
            <div class="row">
                <div class="col-lg-12 mb-30">
                    <div class="card">
                        <div class="card-header color-dark fw-500">
                            Add Image to Portfolio
                        </div>
                        <div class="card-body">
                            <div class="userDatatable global-shadow border-0 bg-white w-100">
                                <div class="table-responsive">
                                    <table class="table mb-0 table-borderless">
                                        <thead>

                                        <tr class="userDatatable-header">
                                            <th>
                                                <span class="userDatatable-title">SN</span>
                                            </th>
                                            <th>
                                                <div class="d-flex align-items-center">
                                                    <span class="checkbox-text userDatatable-title">Image</span>
                                                </div>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Title</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title float-right">action</span>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($portfoliodetails as $key=>$row)
                                            <tr>
                                                <td>
                                                    <div class="userDatatable-content">
                                                        {{ $key+1 }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <div class="userDatatable__imgWrapper d-flex align-items-center">
                                                            <a href="#" class="profile-image rounded-circle d-block m-0 wh-100" style="background-image:url('{{asset('storage/uploads/portfolio-images')}}/{{$row->image}}'); background-size: cover;"></a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    @php
                                                        $portfolio = \App\Portfolio::where('id',$row->portfolio_id)->first();
                                                    @endphp
                                                    <div class="userDatatable-content">
                                                        {{ $portfolio->title }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                                        <li>
                                                            <a href="#" class="remove" data-toggle="modal" data-target="#modal-sm">
                                                                <span data-feather="trash-2"></span>
                                                            </a>
                                                        </li>
                                                        <!-- /.modal -->
                                                        <div class="modal fade" id="modal-sm">
                                                            <div class="modal-dialog modal-sm">
                                                                <form action="{{route('admin.portfolio.details.destroy',[$row->id])}}" method="POST">
                                                                    @csrf
                                                                    {{method_field('DELETE')}}
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h4 class="modal-title">Delete Confirm!!</h4>
                                                                            <button type="button" class="close" data-dismiss="modal"
                                                                                    aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <p>Do you Want to Delete ?</p>
                                                                        </div>
                                                                        <div class="modal-footer justify-content-between">
                                                                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                                                                Close
                                                                            </button>
                                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                                <!-- /.modal-content -->
                                                            </div>
                                                            <!-- /.modal-dialog -->
                                                        </div>
                                                        <!-- /.modal End -->
                                                    </ul>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal-basic modal fade show" id="modal-basic" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
                <form class="mt-4" action="{{ route('admin.portfolio.details.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @php
                        $portfolio = \App\Portfolio::all();
                    @endphp
                    <div class="modal-content modal-bg-white ">
                        <div class="modal-header">
                            <h6 class="modal-title">Add Portfolio image</h6>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span data-feather="x"></span></button>
                        </div>
                        <div class="modal-body">
                            <div class="card card-default card-md mb-4">
                                <div class="card-body">
                                    <div class="form-group mb-4">
                                        <label for="select-2" class="il-gray fs-14 fw-500 align-center">Select Portfolio<span class="text-danger">*</span></label>
                                        <div class="atbd-select ">
                                            <select name="portfolio_id"  id="select-3" class="form-control" required="">
                                                <option value="0" disabled selected>Select Portfolio</option>
                                                @foreach($portfolio as $key=>$row)
                                                    <option value="{{$row->id}}"> {{$row->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="atbd-tag-wrap">
                                        <div class="atbd-upload">
                                            <div class="atbd-upload-avatar">
                                                <label for="tag2" class="il-gray fs-14 fw-500 align-center">Upload Image [Image Resolution (1800x1200px)]<span class="text-danger">*</span></label>
                                                <img class="avatrSrc" src="{{asset('backend/assets/img/gallery.png')}}" alt="Avatar Upload">
                                            </div>
                                            <div class="avatar-up">
                                                <input type="file" name="image" class="upload-avatar-input" required="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ends: .card -->
                        </div>
                        <div class="modal-footer">
                            <button type="submit" value="submit" class="btn btn-primary btn-sm">Save</button>
                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- ends: .modal-Basic -->

    </div>
@endsection
