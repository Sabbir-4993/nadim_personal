@extends('backend.layouts.master')

@section('content')
    <div class="contents">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">User Settings</h4>
                        <div class="breadcrumb-action justify-content-center flex-wrap">
                            <div class="action-btn">
                                <button disabled type="button" class="btn btn-sm btn-primary btn-add" data-toggle="modal" data-target="#modal-basic"><i class="la la-plus"></i> Add New</button>
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
                            User List
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
                                                <span class="userDatatable-title">Bio</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Email</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Created</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title float-right">action</span>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($user as $key=>$row)
                                            <tr>
                                                <td>
                                                    <div class="d-flex">
                                                        <div class="userDatatable__imgWrapper d-flex align-items-center">

                                                            <a href="#" class="profile-image rounded-circle d-block m-0 wh-80" style="background-image:url('{{asset('storage/uploads/User')}}/{{$row->image}}'); background-size: cover;"></a>
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
                                                        {!! \Illuminate\Support\Str::limit($row->bio, 40)  !!}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="userDatatable-content">
                                                        {{ $row->email }}
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
                                                            <a href="#" class="edit" data-toggle="modal" data-target="#modal-sm{{$row->id}}">
                                                                <span data-feather="edit"></span>
                                                            </a>
                                                            <!-- /.modal -->
                                                            <div class="modal fade" id="modal-sm{{$row->id}}">
                                                                <div class="modal-dialog modal-sm">
                                                                    <form action="{{route('admin.settings.update',[$row->id])}}" method="post" enctype="multipart/form-data">
                                                                        @csrf
                                                                        @method('PATCH')
                                                                        <div class="modal-content">
                                                                            <div class="modal-body">
                                                                                <div class="form-group row mb-25">
                                                                                    <div class="col-sm-3 d-flex aling-items-center">
                                                                                        <label for="inputNameIcon" class="col-form-label color-dark fs-14 fw-500 align-center">Name</label>
                                                                                    </div>
                                                                                    <div class="col-sm-9">
                                                                                        <div class="with-icon">
                                                                                            <span class="la-user lar color-gray"></span>
                                                                                            <input type="text" name="name" class="form-control  ih-medium ip-gray radius-xs b-light" id="inputNameIcon" value="{{$row->name}}">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row mb-25">
                                                                                    <div class="col-sm-3 d-flex aling-items-center">
                                                                                        <label for="inputNameIcon" class="col-form-label color-dark fs-14 fw-500 align-center">Designation</label>
                                                                                    </div>
                                                                                    <div class="col-sm-9">
                                                                                        <div class="with-icon">
                                                                                            <span class="la-user lar color-gray"></span>
                                                                                            <input type="text" name="designation" class="form-control  ih-medium ip-gray radius-xs b-light" id="inputNameIcon" value="{{$row->designation}}">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row mb-25">
                                                                                    <div class="col-sm-3 d-flex aling-items-center">
                                                                                        <label for="inputNameIcon" class="col-form-label color-dark fs-14 fw-500 align-center">Bio</label>
                                                                                    </div>
                                                                                    <div class="col-sm-9">
                                                                                        <textarea class="form-control" name="bio" id="inputNameIcon" cols="10" rows="5" placeholder="Optional">{{$row->bio}}</textarea>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row mb-25">
                                                                                    <div class="col-sm-3 d-flex aling-items-center">
                                                                                        <label for="inputEmailIcon" class=" col-form-label color-dark fs-14 fw-500 align-center">Email
                                                                                            Address</label>
                                                                                    </div>
                                                                                    <div class="col-sm-9">
                                                                                        <div class="with-icon">
                                                                                            <span class="lar la-envelope color-gray"></span>
                                                                                            <input type="email" name="email" class="form-control  ih-medium ip-gray radius-xs b-light" id="inputEmailIcon" value="{{$row->email}}">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row mb-25">
                                                                                    <div class="col-sm-3">
                                                                                        <label for="inputPasswordIcon" class=" col-form-label color-dark fs-14 fw-500 align-center">Password</label>
                                                                                    </div>
                                                                                    <div class="col-sm-9">
                                                                                        <div class="with-icon">
                                                                                            <span class="las la-lock color-gray"></span>
                                                                                            <input type="password" name="password" class="form-control  ih-medium ip-gray radius-xs b-light" id="inputPasswordIcon" value="{{$row->password}}">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="form-group row mb-25">
                                                                                    <div class="col-sm-3 d-flex aling-items-center">
                                                                                        <label for="inputEmailIcon" class=" col-form-label color-dark fs-14 fw-500 align-center">Update Image</label>
                                                                                    </div>

                                                                                    <div class="col-sm-9">
                                                                                        <div class="atbd-tag-wrap">
                                                                                            <div class="atbd-upload">
                                                                                                <div class="atbd-upload-avatar">
                                                                                                    <img style="border: 1px solid #ddd; border-radius: 4px; padding: 5px; max-width: 100%; height: auto;" class="avatrSrc" src="{{asset('storage/uploads/User')}}/{{$row->image}}" alt="Avatar Upload">
                                                                                                </div>
                                                                                                <div class="avatar-up">
                                                                                                    <input type="file" name="image" class="upload-avatar-input">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer justify-content-between">
                                                                                <button type="button" class="btn btn-default" data-dismiss="modal">
                                                                                    Close
                                                                                </button>
                                                                                <button type="submit" class="btn btn-success">Update</button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                    <!-- /.modal-content -->
                                                                </div>
                                                                <!-- /.modal-dialog -->
                                                            </div>
                                                            <!-- /.modal End -->
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

    </div>
@endsection
