@extends('backend.layouts.master')

@section('content')
    <div class="contents">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">Message From Client</h4>
                        <div class="breadcrumb-action justify-content-center flex-wrap">
                            <div class="action-btn">
                                <button type="button" class="btn btn-sm btn-primary btn-add" disabled data-toggle="modal" data-target="#modal-basic"><i class="la la-plus"></i> Add New</button>
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
                            Message List
                        </div>
                        <div class="card-body">
                            <div class="userDatatable global-shadow border-0 bg-white w-100">
                                <div class="table-responsive">
                                    <table class="table mb-0 table-borderless" id="newsletter">
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
                                                <span class="userDatatable-title">Message</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Created at</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title float-right">action</span>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($newsletter as $key=>$row)
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
                                                        {!! \Illuminate\Support\Str::limit($row->message, 40)  !!}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="userDatatable-content">
                                                        {{ $row->created_at->diffForHumans() }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                                        <li>
                                                            <a href="#" class="view" data-toggle="modal" data-target="#modal-basic{{$row->id}}">
                                                                <span data-feather="eye"></span>
                                                            </a>
                                                        </li>
                                                        <!-- /.modal View -->
                                                        <div class="modal-basic modal fade show" id="modal-basic{{$row->id}}" tabindex="-1"  aria-hidden="false">
                                                            <div class="modal-dialog modal-md" role="document">
                                                                <div class="modal-content modal-bg-white ">
                                                                    <div class="modal-header">
                                                                        <h6 class="modal-title">Portfolio</h6>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span data-feather="x"></span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        @php
                                                                            $newsletter = \App\NewsLetter::where('id', $row->id)->first();
                                                                        @endphp
                                                                        Name: <p>{{$newsletter->name}}</p>
                                                                        Email: <p class="text-muted">{{$newsletter->email}}</p>
                                                                        Description: <p class="text-muted" style="word-wrap: break-word; word-break: break-all; text-overflow: ellipsis; white-space: normal">{{$newsletter->message}}</p>
                                                                        Created at: <p class="text-muted">{{$newsletter->created_at->diffForHumans()}}</p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="submit" class="btn btn-primary btn-sm">Save changes</button>
                                                                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /.modal view End -->

                                                        <li>
                                                            <a href="#" class="remove" data-toggle="modal" data-target="#modal-info-confirmed{{$row->id}}">
                                                                <span data-feather="trash-2"></span>
                                                            </a>
                                                        </li>

                                                        <!-- /.modal Delete -->
                                                        <div class="modal-info-confirmed modal fade show" id="modal-info-confirmed{{$row->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                                                            <div class="modal-dialog modal-sm modal-info" role="document">
                                                                <form action="{{route('admin.newsletter.show',[$row->id])}}" method="post">
                                                                    @csrf
                                                                    {{method_field('DELETE')}}
                                                                    <div class="modal-content">
                                                                        <div class="modal-body">
                                                                            <div class="modal-info-body d-flex">
                                                                                <div class="modal-info-icon warning">
                                                                                    <span data-feather="info"></span>
                                                                                </div>

                                                                                <div class="modal-info-text">
                                                                                    <p>Do you Want to Delete ?</p>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-danger btn-outlined btn-sm" data-dismiss="modal">No</button>
                                                                            <button type="submit" class="btn btn-success btn-outlined btn-sm">Yes</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
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
            $('#newsletter').DataTable();
        } );
    </script>
@endsection
