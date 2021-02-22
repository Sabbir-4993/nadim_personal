@extends('backend.layouts.master')

@section('content')
    <div class="contents">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-lg-12">

                    <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">Portfolio Gallery</h4>
                        <div class="breadcrumb-action justify-content-center flex-wrap">
                            <div class="action-btn">
                                <button type="button" disabled="" class="btn btn-sm btn-primary btn-add" data-toggle="modal" data-target="#modal-basic"><i class="la la-plus"></i> Add New</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Filter Controls - Simple Mode -->
                    <div class="gallery-filter mb-sm-50 mb-30">
                        <ul class="simplefilter w-100 ap-tab-main px-sm-25 px-15 bg-white d-flex flex-wrap align-items-center radius-xl">
                            <li class="fltr-controls nav-link active" data-filter="all">All</li>
                            @php
                                $portfolios = \Illuminate\Support\Facades\DB::table('portfolios')->get();
                            @endphp
                            @foreach($portfolios as $key=>$row)
                            <li class="fltr-controls nav-link" data-filter="{{$row->category_name}}">{{$row->category_name}}</li>
                            @endforeach
                        </ul>
                        <div class="push-down push-down--style">
                            <div class="filtr-container">
                                @php
                                $portfoliodetails = DB::table('portfoliodetails')
                                    ->join('portfolios','portfolios.id','=','portfoliodetails.portfolio_id')
                                    ->select('portfolios.category_name','portfolios.title','portfolios.id','portfoliodetails.*')
                                    ->get();
                                @endphp
                                @foreach($portfoliodetails as $key=>$row)
                                <div class="filtr-item filtr-item--style" data-category="{{$row->category_name}}" data-sort="Busy streets">
                                    <div class="card">

                                        <div class="gc">
                                            <div class="gc__img">
                                                <img src="{{asset('storage/uploads/portfolio-images')}}/{{$row->image}}" alt="{{$row->title}}.{{$row->category_name}}" class="w-100 radius-xl">
                                            </div>
                                            <div class="card-body px-25 py-20">
                                                <div class="gc__title">
                                                    <P>{{$row->title}}</P>
                                                    <span>{{$row->category_name}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
