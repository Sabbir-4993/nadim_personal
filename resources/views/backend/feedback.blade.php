@extends('backend.layouts.master')

@section('content')
    <div class="contents">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">Feedback</h4>
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
                            Feedback List
                        </div>
                        <div class="card-body">
                            <div class="userDatatable global-shadow border-0 bg-white w-100">
                                <div class="table-responsive">
                                    <table class="table mb-0 table-borderless" id="feedback">
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
                                                <span class="userDatatable-title">Name</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Designation</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Company</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Feedback</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Published</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Updated</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title float-right">Action</span>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($feedback as $key=>$row)
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
                                                            <a href="#" class="profile-image rounded-circle d-block m-0 wh-80" style="background-image:url('{{asset('storage/uploads/feedback')}}/{{$row->image}}'); background-size: cover;"></a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="userDatatable-content">
                                                        {{ $row->name }}

                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="userDatatable-content">
                                                        {{ $row->designation }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="userDatatable-content">
                                                        {{ $row->company }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="userDatatable-content">
                                                        {!! \Illuminate\Support\Str::limit($row->feedback, 40)  !!}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="userDatatable-content">
                                                        {{ $row->created_at->diffForHumans() }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="userDatatable-content">
                                                        {{ $row->updated_at->diffForHumans() }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                                        <li>
                                                            <a href="{{route('admin.feedback.edit',[$row->id])}}" class="edit">
                                                                <span data-feather="edit"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="remove" data-toggle="modal" data-target="#modal-sm">
                                                                <span data-feather="trash-2"></span>
                                                            </a>
                                                        </li>
                                                        <!-- /.modal -->
                                                        <div class="modal fade" id="modal-sm">
                                                            <div class="modal-dialog modal-sm">
                                                                <form action="{{route('admin.feedback.destroy',[$row->id])}}" method="post">
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
                <form class="mt-4" action="{{ route('admin.feedback.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-content modal-bg-white ">
                        <div class="modal-header">
                            <h6 class="modal-title">Add New FeedBack</h6>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span data-feather="x"></span></button>
                        </div>
                        <div class="modal-body">
                            <div class="card card-default card-md mb-4">
                                <div class="card-body">
                                    <div class="form-group mb-4">
                                        <label for="name" class="il-gray fs-14 fw-500 align-center">Client Name<span class="text-danger">*</span></label>
                                        <input type="text" id="name" name="name" class="form-control form-control-lg" placeholder="Enter Full Name" required="">
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="designation" class="il-gray fs-14 fw-500 align-center">Designation<span class="text-danger">*</span></label>
                                        <input type="text" id="designation" name="designation" class="form-control form-control-lg" placeholder="Enter Designation" required="">
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="company" class="il-gray fs-14 fw-500 align-center">Company<span class="text-danger">*</span></label>
                                        <input type="text" id="company" name="company" class="form-control form-control-lg" placeholder="Enter Company" required="">
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="feedback" class="il-gray fs-14 fw-500 align-center">Feedback<span class="text-danger">*</span></label>
                                        <textarea class="form-control" name="feedback" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>

                                    <div class="atbd-tag-wrap">
                                        <div class="atbd-upload">
                                            <div class="atbd-upload-avatar">
                                                <label for="tag2" class="il-gray fs-14 fw-500 align-center">Upload Client Image [Image Resolution (584x570px)]<span class="text-danger">*</span></label>
                                                <img style="border: 1px solid #ddd; border-radius: 4px; padding: 5px; max-width: 100%; height: auto;" class="avatrSrc" src="{{asset('backend/assets/img/gallery.png')}}" alt="Avatar Upload">
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

@section('custom_css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
@endsection

@section('custom_js')
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready( function () {
            $('#feedback').DataTable();
        } );
    </script>
@endsection
