@extends('backend.layouts.master')

@section('content')
    <div class="contents">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">Portfolio Update</h4>
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
                <div class="container col-lg-12">
                    <div class="card card-Vertical card-default card-md mb-4">
                        <div class="card-header">
                            <h6>Portfolio Update</h6>
                        </div>
                        <div class="card-body pb-md-30">
                            <div class="Vertical-form">
                                <form action="{{route('admin.portfolio.update',[$portfolio->id])}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <input type="hidden" name="id" value="{{$portfolio->id}}">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1" class="il-gray fs-14 fw-500 align-center">Category</label>
                                        <select name="category_name"  id="select-3" class="form-control" required="">
                                            <option @if($portfolio->category_name == 'Brand') selected @endif value="Brand">Brand</option>
                                            <option @if($portfolio->category_name == 'Design') selected @endif value="Design">Design</option>
                                            <option @if($portfolio->category_name == 'Art') selected @endif  value="Art">Art</option>
                                            <option @if($portfolio->category_name == 'Photography') selected @endif  value="Photography">Photography</option>
                                            <option @if($portfolio->category_name == 'Video') selected @endif  value="Video">Video</option>
                                            <option @if($portfolio->category_name == '3D') selected @endif  value="3D">3D</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="title" class="il-gray fs-14 fw-500 align-center">Portfolio Title<span class="text-danger">*</span></label>
                                        <input type="text" id="title" name="title" class="form-control form-control-lg" placeholder="Enter Title" required="" value="{{$portfolio->title}}">
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="title" class="il-gray fs-14 fw-500 align-center">Description<span class="text-muted">(optional)</span></label>
                                        <textarea class="form-control form-control-lg" type="text" name="description" id="" cols="10" rows="5" placeholder="Enter Description">{{$portfolio->description}}</textarea>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="date" class="il-gray fs-14 fw-500 align-center">Date<span class="text-danger">*</span></label>
                                        <input type="date" id="date" name="date" class="form-control form-control-lg" required="" value="{{$portfolio->date}}">
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="url" class="il-gray fs-14 fw-500 align-center">Website Address <span class="text-muted">(Optional)</span></label>
                                        <input type="text" id="url" name="url" class="form-control form-control-lg" placeholder="Enter Url" value="{{$portfolio->url}}">
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="select-2" class="il-gray fs-14 fw-500 align-center">Select Status<span class="text-danger">*</span></label>
                                        <div class="atbd-select ">
                                            <select name="status" id="select-3" class="form-control" required="">
                                                <option value="Active" {{(($portfolio->status=='Active')? 'selected' : '')}}>Active</option>
                                                <option value="Inactive" {{(($portfolio->status=='Inactive')? 'selected' : '')}}>Inactive</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-9">
                                        <div class="atbd-tag-wrap">
                                            <div class="atbd-upload">
                                                <div class="atbd-upload-avatar">
                                                    <label for="url" class="il-gray fs-14 fw-500 align-center">Upload New Image<span class="text-danger">*</span></label>
                                                    <img class="avatrSrc" src="{{asset('storage/uploads/portfolios')}}/{{$portfolio->image}}" alt="{{$portfolio->title}}">
                                                </div>
                                                <div class="avatar-up">
                                                    <input type="file" name="image" class="upload-avatar-input" value="{{$portfolio->image}}">
                                                </div>
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
