@extends('frontend.layouts.master')
@include('frontend.layouts.partials.loader')

@section('content')
    <header>
        <div class="headefr-fexid" data-dsn-header="project">
            <div class="bg w-100" id="dsn-hero-parallax-img" data-dsn-ajax="img">
                <div class="bg-image  cover-bg" data-overlay="5"
                     data-image-src="{{ asset('frontend/assets/img/project/project6/1.jpg')}}"></div>
            </div>

            <div class="scroll" data-dsn-animate="ajax">
                <span class="background"></span>
                <span class="triangle"></span>
            </div>
            <div class="project-title" id="dsn-hero-parallax-title">

                <div class="title-text-header">
                    <div class="cat">
                        <span>Photography</span>
                    </div>
                    <span class="title-text-header-inner">
                                <span data-dsn-animate="ajax">Sleep Walker</span>
                            </span>
                </div>

                <div class="sub-text-header" data-dsn-animate="ajax">
                    <h5>Published</h5>
                    <span>- September 26th 2019</span>
                </div>
            </div>

            <div class="project-page__inner">
                <div class="h-100">
                    <div class="row justify-content-center align-items-end h-100">
                        <div id="descover-holder" class="col-lg-12 project-meta__content">
                            <div class="link">
                                <a target="_blank"
                                   href="https://www.behance.net/gallery/86013005/THE-SLEEPWALKER?tracking_source=curated_galleries">View
                                    Website</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="wrapper">
        <div class="root-project">
            <div class="container-fluid">
                <div class="img-box-small dsn-parallax-full" data-dsn-grid="move-up" data-dsn-triggerhook="0">
                    <img src="{{ asset('frontend/assets/img/project/project6/2.jpg')}}" alt="" data-dsn-y="30%" data-dsn-scale="1.01">
                    <div class="cap">
                        <span>Web Design</span>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="img-box-small dsn-parallax-full" data-dsn-grid="move-up" data-dsn-triggerhook="0">
                    <img src="{{ asset('frontend/assets/img/project/project6/3.jpg')}}" alt="" data-dsn-y="30%" data-dsn-scale="1.01">
                    <div class="cap">
                        <span>Web Design</span>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="img-box-small dsn-parallax-full" data-dsn-grid="move-up" data-dsn-triggerhook="0">
                    <img src="{{ asset('frontend/assets/img/project/project6/4.jpg')}}" alt="" data-dsn-y="30%" data-dsn-scale="1.01">
                    <div class="cap">
                        <span>Web Design</span>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="img-box-small dsn-parallax-full" data-dsn-grid="move-up" data-dsn-triggerhook="0">
                    <img src="{{ asset('frontend/assets/img/project/project6/5.jpg')}}" alt="" data-dsn-y="30%" data-dsn-scale="1.01">
                    <div class="cap">
                        <span>Web Design</span>
                    </div>
                </div>
            </div>

            <div class="container-fluid section-margin mt-0">
                <div class="img-box-small dsn-parallax-full" data-dsn-grid="move-up" data-dsn-triggerhook="0">
                    <img src="{{ asset('frontend/assets/img/project/project6/3.jpg')}}" alt="" data-dsn-y="30%" data-dsn-scale="1.08">
                    <div class="cap">
                        <span>Web Design</span>
                    </div>
                </div>
            </div>

        </div>

        <div class="next-project" data-dsn-footer="project">
            <div id="dsn-next-parallax-img" class="bg">
                <div class="bg-image cover-bg" data-overlay="2"
                     data-image-src="{{ asset('frontend/assets/img/project/project7/1.jpg')}}"></div>
            </div>

            <div id="dsn-next-parallax-title" class="project-title">
                <a href="project-7.html" class="effect-ajax" data-dsn-ajax="next-project">
                    <div class="title-text-header">
                        <div class="title-text-header-inner">
                            <span>Nile - Kabutha</span>
                        </div>
                    </div>
                    <div class="sub-text-header">
                        <h5>Next Project</h5>
                    </div>
                </a>
            </div>
        </div>

        @yield('footer')
    </div>
@endsection
