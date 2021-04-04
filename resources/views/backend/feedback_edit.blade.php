@extends('backend.layouts.master')

@section('content')
    <div class="contents">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">Feedback Update</h4>
                        <div class="breadcrumb-action justify-content-center flex-wrap">
                            <div class="action-btn">
                                <button type="button" disabled class="btn btn-sm btn-primary btn-add" data-toggle="modal" data-target="#modal-basic"><i class="la la-plus"></i> Add New</button>
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
                <div class="container col-lg-12">
                    <div class="card card-Vertical card-default card-md mb-4">
                        <div class="card-header">
                            <h6>Update Feedback</h6>
                        </div>
                        <div class="card-body pb-md-30">
                            <div class="Vertical-form">
                                <form action="{{route('admin.feedback.update',[$feedback_details->id])}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <input type="hidden" name="id" value="{{$feedback_details->id}}">

                                    <div class="form-group mb-4">
                                        <label for="name" class="il-gray fs-14 fw-500 align-center">Client Name<span class="text-danger">*</span></label>
                                        <input type="text" id="name" name="name" class="form-control form-control-lg" placeholder="Enter Full Name" value="{{$feedback_details->name}}">
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="designation" class="il-gray fs-14 fw-500 align-center">Designation<span class="text-danger">*</span></label>
                                        <input type="text" id="designation" name="designation" class="form-control form-control-lg" placeholder="Enter Designation" value="{{$feedback_details->designation}}">
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="company" class="il-gray fs-14 fw-500 align-center">Company<span class="text-danger">*</span></label>
                                        <input type="text" id="company" name="company" class="form-control form-control-lg" placeholder="Enter Company" value="{{$feedback_details->company}}">
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="feedback" class="il-gray fs-14 fw-500 align-center">Feedback<span class="text-danger">*</span></label>
                                        <textarea class="form-control" name="feedback" id="exampleFormControlTextarea1" rows="3">{{$feedback_details->feedback}}</textarea>
                                    </div>


                                    <div class="atbd-tag-wrap">
                                        <div class="atbd-upload">
                                            <div class="atbd-upload-avatar">
                                                <label for="tag2" class="il-gray fs-14 fw-500 align-center">Upload New Image [Image Resolution (1800x1200px)]<span class="text-danger">*</span></label>
                                                <img style="border: 1px solid #ddd; border-radius: 4px; padding: 5px; width: 350px; max-width: 100%; height: auto;" class="avatrSrc" src="{{asset('storage/uploads/feedback')}}/{{$feedback_details->image}}" alt="{{$feedback_details->name}}">
                                            </div>
                                            <div class="avatar-up">
                                                <input type="file" name="image" class="upload-avatar-input">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout-button mt-25 float-right">
                                        <button type="button" class="btn btn-default btn-squared border-normal bg-normal px-20 ">cancel</button>
                                        <button type="submit" class="btn btn-primary btn-default btn-squared px-30">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- ends: .card -->
                </div>

            </div>
        </div>
    </div>

@endsection
