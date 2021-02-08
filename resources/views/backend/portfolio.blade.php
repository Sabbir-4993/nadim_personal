@extends('backend.layouts.master')

@section('content')
    <div class="contents">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">Portfolio</h4>
                        <div class="breadcrumb-action justify-content-center flex-wrap">
                            <div class="action-btn">
                                <button type="button" class="btn btn-sm btn-primary btn-add" data-toggle="modal" data-target="#modal-basic"><i class="la la-plus"></i> Add New</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
{{--            @if ($errors->any())--}}
{{--                <div class="alert alert-danger">--}}
{{--                    Portfolio Can't Successfully Added, please fill-up form correctly.--}}
{{--                </div>--}}
{{--            @endif--}}
            @if (Session::has('message'))
                <div class="alert alert-success">
                    {{ Session::get('message') }}
                </div>
            @endif
            <div class="row">
                <div class="col-lg-12 mb-30">
                    <div class="card">
                        <div class="card-header color-dark fw-500">
                            Portfolio List
                        </div>
                        <div class="card-body">
                            <div class="userDatatable global-shadow border-0 bg-white w-100">
                                <div class="table-responsive">
                                    <table class="table mb-0 table-borderless">
                                        <thead>
                                            <tr class="userDatatable-header">
                                                <th>
                                                    <div class="d-flex align-items-center">
                                                        <div class="custom-checkbox  check-all">
                                                            <input class="checkbox" type="checkbox" id="check-3">
                                                            <label for="check-3">
                                                                <span class="checkbox-text userDatatable-title">Image</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </th>
                                                <th>
                                                    <span class="userDatatable-title">Title</span>
                                                </th>
                                                <th>
                                                    <span class="userDatatable-title">Category</span>
                                                </th>
                                                <th>
                                                    <span class="userDatatable-title">Date</span>
                                                </th>
                                                <th>
                                                    <span class="userDatatable-title">status</span>
                                                </th>
                                                <th>
                                                    <span class="userDatatable-title float-right">action</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @forelse ($portfolios as $key=>$row)
                                            <tr>
                                                <td>
                                                    <div class="d-flex">
                                                        <div class="userDatatable__imgWrapper d-flex align-items-center">
                                                            <div class="checkbox-group-wrapper">
                                                                <div class="checkbox-group d-flex">
                                                                    <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                                                                        <input class="checkbox" type="checkbox" id="check-grp-12">
                                                                        <label for="check-grp-12"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <a href="#" class="profile-image rounded-circle d-block m-0 wh-80" style="background-image:url('{{ asset('uploads/portfolios') }}/{{ $row->photo }}'); background-size: cover;"></a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="userDatatable-content">
                                                        {{ $row->title }}

                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="userDatatable-content">
                                                        {{ $row->category_name }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="userDatatable-content">
                                                        {{ $row->date }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="userDatatable-content d-inline-block">
                                                        <span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">active</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                                        <li>
                                                            <a href="#" class="view">
                                                                <span data-feather="eye"></span></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="edit">
                                                                <span data-feather="edit"></span></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="remove">
                                                                <span data-feather="trash-2"></span></a>
                                                        </li>
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
            <form class="mt-4" action="{{ route('admin.portfolio.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-dialog modal-md" role="document">
                    <div class="modal-content modal-bg-white ">
                        <div class="modal-header">
                            <h6 class="modal-title">Add Portfolio</h6>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span data-feather="x"></span></button>
                        </div>
                        <div class="modal-body">
                            <div class="card card-default card-md mb-4">
                                <div class="card-body">
                                    <div class="form-group mb-4">
                                        <label for="select-2" class="il-gray fs-14 fw-500 align-center">Select Category<span class="text-danger">*</span></label>
                                        <div class="atbd-select ">
                                            <select name="select-2" id="select-3" class="form-control" required="">
                                                <option value="0" disabled selected>Select Category</option>
                                                <option value="Brand">Brand</option>
                                                <option value="Design">Design</option>
                                                <option value="Art">Art</option>
                                                <option value="Photography">Photography</option>
                                                <option value="Video">Video</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="a2" class="il-gray fs-14 fw-500 align-center">Title<span class="text-danger">*</span></label>
                                        <input type="text" id="a2" name="title" class="form-control form-control-lg" placeholder="Enter Title" required="">
{{--                                        {{ old('title') }}--}}
                                        @error ('title')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="a2" class="il-gray fs-14 fw-500 align-center">Date<span class="text-danger">*</span></label>
                                        <input type="date" id="a2" name="date" class="form-control form-control-lg" required="">
{{--                                        {{ old('date') }}--}}
                                        @error ('date')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="a2" class="il-gray fs-14 fw-500 align-center">Website Address (Optional)</label>
                                        <input type="text" id="a2" name="url" class="form-control form-control-lg" placeholder="Enter Url">
{{--                                        {{ old('url') }}--}}
                                        @error ('url')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="atbd-tag-wrap">
                                        <div class="atbd-upload">
                                            <div class="atbd-upload-avatar">
                                                <label for="tag2" class="il-gray fs-14 fw-500 align-center">Upload Image [Image Resolution (1800x1200px)]<span class="text-danger">*</span></label>
                                                <img class="avatrSrc" src="{{asset('backend/assets/img/gallery.png')}}" alt="Avatar Upload">
                                            </div>
                                            <div class="avatar-up">
                                                <input type="file" name="image" class="upload-avatar-input" required="">
                                                @error ('image')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ends: .card -->
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary btn-sm">Save</button>
                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
        <!-- ends: .modal-Basic -->

    </div>
@endsection
