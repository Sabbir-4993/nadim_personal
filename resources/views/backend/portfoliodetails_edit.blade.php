@extends('backend.layouts.master')

@section('content')
    <div class="contents">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">Portfolio Details Update</h4>
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
                            <h6>Portfolio Update</h6>
                        </div>
                        <div class="card-body pb-md-30">
                            <div class="Vertical-form">
                                <form action="{{route('admin.portfolio-details.update',[$portfolio_details->id])}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    @php
                                        $portfolio = \App\Portfolio::all();
                                    @endphp
                                    <input type="hidden" name="id" value="{{$portfolio_details->id}}">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1" class="il-gray fs-14 fw-500 align-center">Select Portfolio<span class="text-danger">*</span></label>
                                        <select name="portfolio_id"  id="select-3" class="form-control" required="">
                                            <option value="0" disabled selected>Select Portfolio</option>
                                            @foreach($portfolio as $key=>$row)
                                                <option @if($row->id == $portfolio_details->portfolio_id) selected @endif value="{{$row->id}}">{{$row->title}}</option>
{{--                                                <option value="{{$row->id}}"> {{$row->title}}</option>--}}
                                            @endforeach
                                        </select>



                                    </div>

                                    <div class="atbd-tag-wrap">
                                        <div class="atbd-upload">
                                            <div class="atbd-upload-avatar">
                                                <label for="tag2" class="il-gray fs-14 fw-500 align-center">Upload New Image [Image Resolution (1800x1200px)]<span class="text-danger">*</span></label>
                                                <img style="border: 1px solid #ddd; border-radius: 4px; padding: 5px; max-width: 100%; height: auto;" class="avatrSrc" src="{{asset('storage/uploads/portfolio-images')}}/{{$portfolio_details->image}}" alt="portfolio_details_images">
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
