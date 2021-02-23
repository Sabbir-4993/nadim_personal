@extends('backend.layouts.master')

@section('content')
        <div class="contents">

            <div class="container-fluid">
                <div class="profile-content mb-50">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="breadcrumb-main">
                                <h4 class="text-capitalize breadcrumb-title">My profile</h4>

                            </div>

                        </div>
                        @php
                            $user = \App\User::all()->first();
                            $contact = \App\Contact::all()->first();
                        @endphp
                        <div class="cos-lg-3 col-md-4  ">
                            <aside class="profile-sider">
                                <!-- Profile Acoount -->
                                <div class="card mb-25">
                                    <div class="card-body text-center pt-sm-30 pb-sm-0  px-25 pb-0">

                                        <div class="account-profile">
                                            <div class="ap-img w-100 d-flex justify-content-center">
                                                <!-- Profile picture image-->
                                                <img class="ap-img__main rounded-circle mb-3  wh-120 d-flex bg-opacity-primary" src="{{ asset('storage/uploads/User')}}/{{$user->image}}" alt="profile">
                                            </div>
                                            <div class="ap-nameAddress pb-3 pt-1">
                                                <h5 class="ap-nameAddress__title">{{auth()->user()->name}}</h5>
                                                <p class="ap-nameAddress__subTitle fs-14 m-0">{{$user->designation}}</p>
                                                <p class="ap-nameAddress__subTitle fs-14 m-0">
                                                    {{$contact->address}}
                                                </p>
                                            </div>
                                            <div class="ap-button button-group d-flex justify-content-center flex-wrap">
                                                <button type="button" class="border text-capitalize px-25 color-gray transparent shadow2 radius-md">
                                                    <span data-feather="mail"></span>message</button>
                                                <button class="btn btn-primary btn-default btn-squared text-capitalize  px-25"><span data-feather="user-plus"></span>
                                                    follow
                                                </button>

                                            </div>
                                        </div>

                                        <div class="card-footer mt-20 pt-20 pb-20 px-0">
                                            <div class="profile-overview d-flex justify-content-between flex-wrap">
                                                <div class="po-details">
                                                    <h6 class="po-details__title pb-1">$72,572</h6>
                                                    <span class="po-details__sTitle">Total Revenue</span>
                                                </div>
                                                <div class="po-details">
                                                    <h6 class="po-details__title pb-1">3,257</h6>
                                                    <span class="po-details__sTitle">order</span>
                                                </div>
                                                <div class="po-details">
                                                    <h6 class="po-details__title pb-1">74</h6>
                                                    <span class="po-details__sTitle">Products</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Profile Acoount End -->

                                <!-- Profile User Bio -->
                                <div class="card mb-25">
                                    <div class="user-bio border-bottom">
                                        <div class="card-header border-bottom-0 pt-sm-30 pb-sm-0  px-md-25 px-3">
                                            <div class="profile-header-title">
                                                User Bio
                                            </div>
                                        </div>
                                        <div class="card-body pt-md-1 pt-0">
                                            <div class="user-bio__content">
                                                <p class="m-0">{{$user->bio}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="user-info border-bottom">
                                        <div class="card-header border-bottom-0 pt-sm-25 pb-sm-0  px-md-25 px-3">
                                            <div class="profile-header-title">
                                                Contact info
                                            </div>
                                        </div>
                                        <div class="card-body pt-md-1 pt-0">
                                            <div class="user-content-info">
                                                <p class="user-content-info__item">
                                                    <span data-feather="mail"></span><a href="mailto:{{$contact->email}}">{{$contact->email}}</a>
                                                </p>
                                                <p class="user-content-info__item">
                                                    <span data-feather="phone"></span><a href="tel:{{$contact->phone}}">{{$contact->phone}}</a>
                                                </p>
                                                <p class="user-content-info__item mb-0">
                                                    <span data-feather="globe"></span><a href="{{route('index')}}" target="_blank">www.nadimsdesign.com</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="user-skils border-bottom">
                                        <div class="card-header border-bottom-0 pt-sm-25 pb-sm-0  px-md-25 px-3">
                                            <div class="profile-header-title">
                                                Skills
                                            </div>
                                        </div>
                                        <div class="card-body pt-md-1 pt-0">
                                            <ul class="user-skils-parent">
                                                <li class="user-skils-parent__item">
                                                    <a href="#">UI/UX</a>
                                                </li>
                                                <li class="user-skils-parent__item">
                                                    <a href="#">Branding</a>
                                                </li>
                                                <li class="user-skils-parent__item">
                                                    <a href="#">product design</a>
                                                </li>
                                                <li class="user-skils-parent__item">
                                                    <a href="#">Application</a>
                                                </li>
                                                <li class="user-skils-parent__item mb-0">
                                                    <a href="#">web design</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="db-social border-bottom">
                                        <div class="card-header border-bottom-0 pt-sm-25 pb-sm-0  px-md-25 px-3">
                                            <div class="profile-header-title">
                                                Social Profiles
                                            </div>
                                        </div>
                                        <div class="card-body pt-md-1 pt-0">
                                            <ul class="db-social-parent mb-0">
                                                <li class="db-social-parent__item">
                                                    <a class="color-facebook hover-facebook wh-44 fs-22" href="{{$contact->facebook}}" target="_blank">
                                                        <i class="lab la-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li class="db-social-parent__item">
                                                    <a class="color-ruby hover-ruby  wh-44 fs-22" href="{{$contact->instagram}}" target="_blank">
                                                        <i class="la la-instagram"></i>
                                                    </a>
                                                </li>
                                                <li class="db-social-parent__item">
                                                    <a class="color-instagram hover-instagram wh-44 fs-22" href="{{$contact->behance}}" target="_blank">
                                                        <i class="la la-behance-square"></i>
                                                    </a>
                                                </li>
                                                <li class="db-social-parent__item">
                                                    <a class="color-twitter hover-twitter wh-44 fs-22" href="{{$contact->fiverr}}" target="_blank">
                                                        <i class="fa fa-briefcase"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Profile User Bio End -->
                            </aside>
                        </div>

                        <div class="col">
                            <!-- Tab Menu -->
                            <div class="ap-tab ap-tab-header">
                                <div class="ap-tab-header__img">
                                    <img src="{{ asset('backend/assets/img/ap-header.png')}}" alt="ap-header" class="img-fluid w-100">
                                </div>
                                <div class="ap-tab-wrapper">
                                    <ul class="nav px-25 ap-tab-main" id="ap-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="ap-overview-tab" data-toggle="pill" href="#ap-overview" role="tab" aria-controls="ap-overview" aria-selected="true">Overview</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <!-- Tab Menu End -->
                            <div class="tab-content mt-25" id="ap-tabContent">
                                <div class="tab-pane fade show active" id="ap-overview" role="tabpanel" aria-labelledby="ap-overview-tab">
                                    <div class="ap-content-wrapper">
                                        <div class="row">
                                            <div class="col-12 mb-xl-45 mb-25">
                                                <div class="card banner-feature--13 d-flex">
                                                    <div class="d-flex align-items-center flex-sm-nowrap flex-wrap text-sm-left text-center">
                                                        <div class="card-body">
                                                            <h2 class="banner-feature__heading">Welcome Back {{auth()->user()->name}}!</h2>
                                                            <p class="banner-feature__para ">Lorem ipsum dolor amet, consetetur sadipscing elitr sed diam
                                                            </p>
                                                            <div class="d-flex justify-content-sm-start justify-content-center">
                                                                <button class="banner-feature__btn btn color-primary btn-md px-20 bg-white radius-xs fs-15" type="button">Learn More</button>
                                                            </div>
                                                        </div>
                                                        <div class="banner-feature__shape">
                                                            <img src="{{asset('backend/assets/img/svg/objects.svg')}}" alt="img" class="svg">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
@endsection
