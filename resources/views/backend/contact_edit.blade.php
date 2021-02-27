@extends('backend.layouts.master')

@section('content')
    <div class="contents">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">Contact Update</h4>
                        <div class="breadcrumb-action justify-content-center flex-wrap">
                            <div class="action-btn">
                                <button type="button" class="btn btn-sm btn-primary btn-add" disabled="" data-toggle="modal" data-target="#modal-basic"><i class="la la-plus"></i> Add New</button>
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
                            <h6>Contact Update</h6>
                        </div>
                        <div class="card-body pb-md-30">
                            <div class="Vertical-form">
                                <form action="{{route('admin.contact.update',[$contact->id])}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group mb-4">
                                        <div class="page-info__single">
                                            <label for="email" class="il-gray fs-14 fw-500 align-center">Email<span class="text-danger">*</span></label>
                                            <input type="text" id="email" name="email" class="form-control form-control-lg" required="" value="{{$contact->email}}">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <div class="page-info__single">
                                            <label for="phone" class="il-gray fs-14 fw-500 align-center">Phone Number:<span class="text-danger">*</span></label>
                                            <input type="text" id="phone" name="phone" class="form-control form-control-lg" required="" value="{{$contact->phone}}">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <div class="page-info__single">
                                            <label for="address" class="il-gray fs-14 fw-500 align-center">Address:<span class="text-danger">*</span></label>
                                            <textarea name="address" class="form-control"  id="" cols="10" rows="5">{{$contact->address}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <div class="page-info__single">
                                            <label for="facebook" class="il-gray fs-14 fw-500 align-center">Facebook:<span class="text-danger">*</span></label>
                                            <input type="text" id="facebook" name="facebook" class="form-control form-control-lg" required="" value="{{$contact->facebook}}">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <div class="page-info__single">
                                            <label for="instagram" class="il-gray fs-14 fw-500 align-center">Instagram:<span class="text-danger">*</span></label>
                                            <input type="text" id="instagram" name="instagram" class="form-control form-control-lg" required="" value="{{$contact->instagram}}">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <div class="page-info__single">
                                            <label for="behance" class="il-gray fs-14 fw-500 align-center">Behance:<span class="text-danger">*</span></label>
                                            <input type="text" id="behance" name="behance" class="form-control form-control-lg" required="" value="{{$contact->behance}}">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <div class="page-info__single">
                                            <label for="fiverr" class="il-gray fs-14 fw-500 align-center">Behance:<span class="text-danger">*</span></label>
                                            <input type="text" id="fiverr" name="fiverr" class="form-control form-control-lg" required="" value="{{$contact->fiverr}}">
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
