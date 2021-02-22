@extends('backend.layouts.master')

@section('content')
    <div class="contents">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">CV From User</h4>
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
                            CV List
                        </div>
                        <div class="card-body">
                            <div class="userDatatable global-shadow border-0 bg-white w-100">
                                <div class="table-responsive">
                                    <table class="table mb-0 table-borderless" id="career">
                                        <thead>
                                        <tr class="userDatatable-header">
                                            <th>
                                                <span class="userDatatable-title">SN</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Name</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Email</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Description</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">CV</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title float-right">action</span>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($career as $key=>$row)
                                            <tr>
                                                <td>
                                                    <div class="userDatatable-content">
                                                        {{$key+1}}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="userDatatable-content">
                                                        {{ $row->name }}

                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="userDatatable-content">
                                                        {{ $row->email }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="userDatatable-content">
                                                        {!! \Illuminate\Support\Str::limit($row->description, 20)  !!}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="userDatatable-content">
                                                        <button class="btn btn-white btn-default btn-squared btn-shadow-white ">
                                                            <a href="{{asset('storage/uploads/CV')}}/{{ $row->image }}" download >Download</a>
                                                        </button>
                                                    </div>
                                                </td>
                                                <td>
                                                    <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                                        <li>
                                                            <a href="#" class="view" data-toggle="modal" data-target="#modal-sm">
                                                                <span data-feather="eye"></span>
                                                            </a>
                                                        </li>

                                                        <!-- /.modal -->
                                                        <div class="modal fade" id="modal-sm">
                                                            <div class="modal-dialog modal-sm">
                                                                <form action="{{route('admin.newsletter.show',[$row->id])}}" method="post">
                                                                    @csrf
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

    </div>
@endsection

@section('custom_css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
@endsection

@section('custom_js')
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready( function () {
            $('#career').DataTable();
        } );
    </script>
@endsection
