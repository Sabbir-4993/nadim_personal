@extends('backend.layouts.master')

@section('content')
    <div class="contents">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">Contact</h4>
                        <div class="breadcrumb-action justify-content-center flex-wrap">
                            <div class="action-btn">
                                <button type="button" disabled="" class="btn btn-sm btn-primary btn-add" data-toggle="modal" data-target="#modal-basic"><i class="la la-plus"></i> Add New</button>
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
                <div class="col-lg-6">
                    <div class="card card-Vertical card-default card-md mb-4">
                        <div class="card-header">
                            <h6>Contact Details</h6>
                        </div>
                        <div class="card-body pb-md-30">
                            <div class="Vertical-form">
                                <form class="" action="{{ route('admin.contact.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group mb-4">
                                        <label for="email" class="il-gray fs-14 fw-500 align-center">Email Address<span
                                                class="text-danger">*</span></label>
                                        <input type="email" id="email" name="email" class="form-control form-control-lg"
                                               placeholder="Enter Email Address" required="">
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="phone" class="il-gray fs-14 fw-500 align-center">Phone<span
                                                class="text-danger">*</span>
                                        </label>
                                        <input type="text" id="phone" name="phone" class="form-control form-control-lg"
                                               placeholder="Enter Phone" required="">
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="name" class="il-gray fs-14 fw-500 align-center">Address<span
                                                class="text-danger">*</span></label>
                                        <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="instagram" class="il-gray fs-14 fw-500 align-center">Instagram<span
                                                class="text-danger">*</span>
                                        </label>
                                        <input type="text" id="instagram" name="instagram" class="form-control form-control-lg"
                                               placeholder="Enter instagram URL" required="">
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="facebook" class="il-gray fs-14 fw-500 align-center">Facebook<span
                                                class="text-danger">*</span>
                                        </label>
                                        <input type="text" id="facebook" name="facebook" class="form-control form-control-lg"
                                               placeholder="Enter facebook URL" required="">
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="behance" class="il-gray fs-14 fw-500 align-center">Behance<span
                                                class="text-danger">*</span>
                                        </label>
                                        <input type="text" id="behance" name="behance" class="form-control form-control-lg"
                                               placeholder="Enter behance URL" required="">
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="fiverr" class="il-gray fs-14 fw-500 align-center">Fiverr<span
                                                class="text-danger">*</span>
                                        </label>
                                        <input type="text" id="fiverr" name="fiverr" class="form-control form-control-lg"
                                               placeholder="Enter fiverr URL" required="">
                                    </div>

                                    <div class="form-group mb-4 atbd-tag-wrap">
                                        <div class="atbd-upload">
                                            <div class="atbd-upload-avatar">
                                                <label for="tag2" class="il-gray fs-14 fw-500 align-center">Upload Logo [Image Resolution (290x100px)]<span class="text-danger">*</span></label>
                                                <img style="border: 1px solid #ddd; border-radius: 4px; padding: 5px; max-width: 100%; height: auto;" class="avatrSrc" src="{{asset('backend/assets/img/gallery.png')}}" alt="Avatar Upload">
                                            </div>
                                            <div class="avatar-up">
                                                <input type="file" name="image" class="upload-avatar-input" required="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout-button mt-25 float-right">
                                        <button type="button" class="btn btn-default btn-squared border-normal bg-normal px-20 ">cancel</button>
                                        <button type="submit" class="btn btn-primary btn-default btn-squared px-30" disabled="">save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- ends: .card -->
                </div>
                <div class="col-lg-6">
                    <div class="card card-Vertical card-default card-md mb-4">
                        <div class="card-header">
                            <h6>Contact Details List</h6>
                        </div>
                        <div class="card-body pb-md-30">
                            <div class="Vertical-form">
                                <form action="#">
                                    @foreach($contact as $key=>$row)
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-4">
                                                <div class="page-info__single">
                                                    <span class="info-title il-gray fw-500 ">Email Address:</span>
                                                    <span class="info-text"><h6>{{$row->email}}</h6></span>
                                                </div>
                                            </div>
                                            <div class="form-group mb-4">
                                                <div class="page-info__single">
                                                    <span class="info-title il-gray fw-500 ">Phone Number:</span>
                                                    <span class="info-text"><h6>{{$row->phone}}</h6></span>
                                                </div>
                                            </div>
                                            <div class="form-group mb-4">
                                                <div class="page-info__single">
                                                    <span class="info-title il-gray fw-500 ">Address:</span>
                                                    <span class="info-text"><h6>{{$row->address}}</h6></span>
                                                </div>
                                            </div>
                                            <div class="form-group mb-4">
                                                <div class="page-info__single">
                                                    <span class="info-title il-gray fw-500 ">Instagram:</span>
                                                    <span class="info-text"><h6>{{$row->instagram}}</h6></span>
                                                </div>
                                            </div>
                                            <div class="form-group mb-4">
                                                <div class="page-info__single">
                                                    <span class="info-title il-gray fw-500 ">Facebook:</span>
                                                    <span class="info-text"><h6>{{$row->facebook}}</h6></span>
                                                </div>
                                            </div>
                                            <div class="form-group mb-4">
                                                <div class="page-info__single">
                                                    <span class="info-title il-gray fw-500 ">Behance:</span>
                                                    <span class="info-text"><h6>{{$row->behance}}</h6></span>
                                                </div>
                                            </div>
                                            <div class="form-group mb-4">
                                                <div class="page-info__single">
                                                    <span class="info-title il-gray fw-500 ">Fiverr:</span>
                                                    <span class="info-text"><h6>{{$row->fiverr}}</h6></span>
                                                </div>
                                            </div>
                                            <div class="form-group mb-4">
                                                <div class="page-info__single">
                                                    <span class="info-title il-gray fw-500 ">Image:</span>
                                                    <img style="border: 1px solid #ddd; border-radius: 4px; padding: 5px; max-width: 100%; height: auto;" class="" src="{{asset('storage/uploads/Logo')}}/{{$row->image}}" alt="logo" style="height: 300px; width: 300px">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">

                                            <div class="float-right">
                                                <a href="{{route('admin.contact.edit',[$row->id])}}" class="edit">
                                                    <span data-feather="edit"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="p-0 m-0">
                                    @endforeach
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
