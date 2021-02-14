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
                                <button type="button" class="btn btn-sm btn-primary btn-add" data-toggle="modal" data-target="#modal-basic"><i class="la la-plus"></i> Add New</button>
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
                            <li class="fltr-controls nav-link" data-filter="1">Brand </li>
                            <li class="fltr-controls nav-link" data-filter="2">UI Design</li>
                            <li class="fltr-controls nav-link" data-filter="3">Design</li>
                            <li class="fltr-controls nav-link" data-filter="4">Art</li>
                            <li class="fltr-controls nav-link" data-filter="5">Photography</li>
                            <li class="fltr-controls nav-link" data-filter="5">Video</li>
                        </ul>
                        <div class="push-down push-down--style">
                            <div class="filtr-container">
                                <div class="filtr-item filtr-item--style" data-category="1" data-sort="Busy streets">
                                    <div class="card">

                                        <div class="gc">
                                            <div class="gc__img">
                                                <img src="{{asset('backend/assets/img/gallery.png')}}" alt="img" class="w-100 radius-xl">
                                            </div>
                                            <div class="card-body px-25 py-20">
                                                <div class="gc__title">
                                                    <P>Snow covered mountain</P>
                                                    <span>Presentation</span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="filtr-item filtr-item--style" data-category="2" data-sort="Luminous night">
                                    <div class="card">

                                        <div class="gc">
                                            <div class="gc__img">
                                                <img src="{{asset('backend/assets/img/gallery2.png')}}" alt="img" class="w-100 radius-xl">
                                            </div>
                                            <div class="card-body px-25 py-20">
                                                <div class="gc__title">
                                                    <P>Snow covered mountain</P>
                                                    <span>Presentation</span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="filtr-item filtr-item--style" data-category="3" data-sort="City wonders">
                                    <div class="card">

                                        <div class="gc">
                                            <div class="gc__img">
                                                <img src="{{asset('backend/assets/img/gallery3.png')}}" alt="img" class="w-100 radius-xl">
                                            </div>
                                            <div class="card-body px-25 py-20">
                                                <div class="gc__title">
                                                    <P>Snow covered mountain</P>
                                                    <span>Presentation</span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="filtr-item filtr-item--style" data-category="4" data-sort="In production">
                                    <div class="card">

                                        <div class="gc">
                                            <div class="gc__img">
                                                <img src="{{asset('backend/assets/img/gallery4.png')}}" alt="img" class="w-100 radius-xl">
                                            </div>
                                            <div class="card-body px-25 py-20">
                                                <div class="gc__title">
                                                    <P>Snow covered mountain</P>
                                                    <span>Presentation</span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="filtr-item filtr-item--style" data-category="2" data-sort="Industrial site">
                                    <div class="card">

                                        <div class="gc">
                                            <div class="gc__img">
                                                <img src="{{asset('backend/assets/img/gallery5.png')}}" alt="img" class="w-100 radius-xl">
                                            </div>
                                            <div class="card-body px-25 py-20">
                                                <div class="gc__title">
                                                    <P>Snow covered mountain</P>
                                                    <span>Presentation</span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="filtr-item filtr-item--style" data-category="3" data-sort="Peaceful lake">
                                    <div class="card">

                                        <div class="gc">
                                            <div class="gc__img">
                                                <img src="{{asset('backend/assets/img/gallery6.png')}}" alt="img" class="w-100 radius-xl">
                                            </div>
                                            <div class="card-body px-25 py-20">
                                                <div class="gc__title">
                                                    <P>Snow covered mountain</P>
                                                    <span>Presentation</span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="filtr-item filtr-item--style" data-category="4" data-sort="Industrial site">
                                    <div class="card">

                                        <div class="gc">
                                            <div class="gc__img">
                                                <img src="{{asset('backend/assets/img/gallery7.png')}}" alt="img" class="w-100 radius-xl">
                                            </div>
                                            <div class="card-body px-25 py-20">
                                                <div class="gc__title">
                                                    <P>Snow covered mountain</P>
                                                    <span>Presentation</span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="filtr-item filtr-item--style" data-category="1" data-sort="Peaceful lake">
                                    <div class="card">

                                        <div class="gc">
                                            <div class="gc__img">
                                                <img src="{{asset('backend/assets/img/gallery.png')}}" alt="img" class="w-100 radius-xl">
                                            </div>
                                            <div class="card-body px-25 py-20">
                                                <div class="gc__title">
                                                    <P>Snow covered mountain</P>
                                                    <span>Presentation</span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="filtr-item filtr-item--style" data-category="2" data-sort="Industrial site">
                                    <div class="card">

                                        <div class="gc">
                                            <div class="gc__img">
                                                <img src="{{asset('backend/assets/img/gallery8.png')}}" alt="img" class="w-100 radius-xl">
                                            </div>
                                            <div class="card-body px-25 py-20">
                                                <div class="gc__title">
                                                    <P>Snow covered mountain</P>
                                                    <span>Presentation</span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="filtr-item filtr-item--style" data-category="3" data-sort="Peaceful lake">
                                    <div class="card">

                                        <div class="gc">
                                            <div class="gc__img">
                                                <img src="{{asset('backend/assets/img/gallery9.png')}}" alt="img" class="w-100 radius-xl">
                                            </div>
                                            <div class="card-body px-25 py-20">
                                                <div class="gc__title">
                                                    <P>Snow covered mountain</P>
                                                    <span>Presentation</span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="filtr-item filtr-item--style" data-category="4" data-sort="Industrial site">
                                    <div class="card">

                                        <div class="gc">
                                            <div class="gc__img">
                                                <img src="{{asset('backend/assets/img/gallery10.png')}}" alt="img" class="w-100 radius-xl">
                                            </div>
                                            <div class="card-body px-25 py-20">
                                                <div class="gc__title">
                                                    <P>Snow covered mountain</P>
                                                    <span>Presentation</span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="filtr-item filtr-item--style" data-category="1" data-sort="Peaceful lake">
                                    <div class="card">

                                        <div class="gc">
                                            <div class="gc__img">
                                                <img src="{{asset('backend/assets/img/gallery11.png')}}" alt="img" class="w-100 radius-xl">
                                            </div>
                                            <div class="card-body px-25 py-20">
                                                <div class="gc__title">
                                                    <P>Snow covered mountain</P>
                                                    <span>Presentation</span>
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
