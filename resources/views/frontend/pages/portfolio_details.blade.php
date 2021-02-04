@extends('frontend.layouts.master')
@include('frontend.layouts.partials.loader')

@section('content')
    <header>
        <div class="headefr-fexid" data-dsn-header="project">
            <div class="bg" id="dsn-hero-parallax-img" data-dsn-ajax="img">
                <div class="bg-image  cover-bg" data-overlay="2"
                     data-image-src="{{asset('frontend/assets/img/project/project4/1.jpg')}}"></div>
            </div>

            <div class="scroll" data-dsn-animate="ajax">
                <span class="background"></span>
                <span class="triangle"></span>
            </div>
            <div class="project-title" id="dsn-hero-parallax-title">
                <div class="title-text-header">
                    <div class="cat">
                        <span>Brands</span>
                    </div>
                    <span class="title-text-header-inner">
                                <span data-dsn-animate="ajax">Under Armour</span>
                            </span>
                </div>

                <div class="sub-text-header" data-dsn-animate="ajax">
                    <h5>Published</h5>
                    <span>- October 19th 2017</span>
                </div>
            </div>

            <div class="project-page__inner">
                <div class="h-100">
                    <div class="row justify-content-center align-items-end h-100">
                        <div id="descover-holder" class="col-lg-12 project-meta__content">
                            <div class="link">
                                <a target="_blank"
                                   href="https://www.behance.net/gallery/57437111/Under-Armour-Cal?tracking_source=search%7CPhotography">View
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
            <div class="container intro-project section-margin">
                <div class="intro-text">
                    <div class="title-cover" data-dsn-grid="move-section" data-dsn-opacity="0.1"
                         data-dsn-duration="170%" data-dsn-move="0%">
                        Armour
                    </div>
                    <div class="inner">
                        <h2 data-dsn-animate="text">A whole new brand</h2>
                        <p data-dsn-animate="up">Cal was first. The first public university in the great state
                            of California. They are the pioneers. They are the trailblazers who started it all.
                            Same goes for Under Armour. When status quo was the status quo, they changed
                            everything. Starting revolutions. Challenging authority. Being first. That’s what
                            Cal and Under Armour have been doing since their respective day ones. Now, together,
                            through passion, design, and the relentless pursuit of innovation, they fight to
                            keep that revolutionary spirit alive.</p>
                        <ul class="mt-20" data-dsn-animate="up">
                            <li>Art Direction: Kirk Roush</li>
                            <li>Photography: Sam Gordon</li>
                            <li>Copy: Dane Rahlf & Matt Norman</li>
                        </ul>

                    </div>
                </div>
            </div>

            <div class="container-fluid gallery-col section-margin">
                <div class="row">
                    <div class="col-md-4 box-im section-padding">
                        <div class="image-zoom" data-dsn="parallax">
                            <a class="single-image" href="{{asset('frontend/assets/img/project/project4/3.jpg')}}">
                                <img src="{{asset('frontend/assets/img/project/project4/3.jpg')}}" alt="">
                            </a>

                            <div class="caption">Trevor Bittinger</div>
                        </div>
                    </div>

                    <div class="col-md-4 box-im section-padding">
                        <div class="image-zoom" data-dsn="parallax">
                            <a class="single-image" href="{{asset('frontend/assets/img/project/project4/4.jpg')}}">
                                <img src="{{asset('frontend/assets/img/project/project4/4.jpg')}}" alt="">
                            </a>
                            <div class="caption">Sef McCullough</div>
                        </div>
                    </div>

                    <div class="col-md-4 box-im section-padding">
                        <div class="image-zoom" data-dsn="parallax">
                            <a class="single-image" href="{{asset('frontend/assets/img/project/project4/5.jpg')}}">
                                <img src="{{asset('frontend/assets/img/project/project4/5.jpg')}}" alt="">
                            </a>
                            <div class="caption">Sef McCullough</div>
                        </div>
                    </div>

                </div>
            </div>

            <div class=" box-gallery-vertical section-margin section-padding">
                <div class="mask-bg"></div>
                <div class="container">
                    <div class="row align-items-center h-100">
                        <div class="col-lg-6 ">
                            <div class="box-im" data-dsn-grid="move-up">
                                <img class="has-top-bottom" src="{{asset('frontend/assets/img/project/project4/1.jpg')}}" alt=""
                                     data-dsn-move="20%">
                            </div>
                        </div>

                        <div class="col-lg-6">


                            <div class="box-info">

                                <div class="vertical-title">
                                    <h2 data-dsn-animate="up">IT STARTS WITH US.</h2>
                                </div>

                                <h6 data-dsn-animate="up">We set THE blue and gold standard, emblazoned it with
                                    a bear, and held it high.
                                    Then we watched our passion spread across the state.</h6>

                                <p data-dsn-animate="up">Challenging the status quo, driving forward, never
                                    backing down.
                                    The future of intelligence. The future of excellence.
                                    The future of defiance, innovation, and sport.
                                    This is where it all begins.</p>

                                <div class="link-custom" data-dsn-animate="up">
                                    <a class="image-zoom" href="#" data-dsn="parallax">
                                        <span>Learn More</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>



            <div class="gallery-portfolio section-margin">
                <a class="link-pop" href="{{asset('frontend/assets/img/project/project4/6.jpg')}}"
                   data-source="{{asset('frontend/assets/img/project/project4/6.jpg')}}">
                    <img src="{{asset('frontend/assets/img/project/project4/6.jpg')}}" alt="">
                    <div class="cap">
                        <span>Web Design</span>
                    </div>
                </a>
                <a class="link-pop" href="{{asset('frontend/assets/img/project/project4/7.jpg')}}"
                   data-source="{{asset('frontend/assets/img/project/project4/7.jpg')}}">
                    <img src="{{asset('frontend/assets/img/project/project4/7.jpg')}}" alt="">
                    <div class="cap">
                        <span>Web Design</span>
                    </div>
                </a>

                <a class="link-pop" href="{{asset('frontend/assets/img/project/project4/8.jpg')}}"
                   data-source="{{asset('frontend/assets/img/project/project4/8.jpg')}}">
                    <img src="{{asset('frontend/assets/img/project/project4/8.jpg')}}" alt="">
                    <div class="cap">
                        <span>Web Design</span>
                    </div>
                </a>

                <a class="link-pop" href="{{asset('frontend/assets/img/project/project4/9.jpg')}}"
                   data-source="{{asset('frontend/assets/img/project/project4/9.jpg')}}">
                    <img src="{{asset('frontend/assets/img/project/project4/9.jpg')}}" alt="">
                    <div class="cap">
                        <span>Web Design</span>
                    </div>
                </a>

                <a class="link-pop" href="{{asset('frontend/assets/img/project/project4/10.jpg')}}"
                   data-source="{{asset('frontend/assets/img/project/project4/10.jpg')}}">
                    <img src="{{asset('frontend/assets/img/project/project4/10.jpg')}}" alt="">
                    <div class="cap">
                        <span>Web Design</span>
                    </div>
                </a>

                <a class="link-pop" href="{{asset('frontend/assets/img/project/project4/11.jpg')}}"
                   data-source="{{asset('frontend/assets/img/project/project4/11.jpg')}}">
                    <img src="{{asset('frontend/assets/img/project/project4/11.jpg')}}" alt="">
                    <div class="cap">
                        <span>Web Design</span>
                    </div>
                </a>

                <a class="link-pop" href="{{asset('frontend/assets/img/project/project4/12.jpg')}}"
                   data-source="{{asset('frontend/assets/img/project/project4/12.jpg')}}">
                    <img src="{{asset('frontend/assets/img/project/project4/12.jpg')}}" alt="">
                    <div class="cap">
                        <span>Web Design</span>
                    </div>
                </a>

            </div>

        </div>

        <div class="next-project" data-dsn-footer="project">
            <div id="dsn-next-parallax-img" class="bg">
                <div class="bg-image cover-bg" data-overlay="4"
                     data-image-src="{{asset('frontend/assets/img/project/project5/1.jpg')}}"></div>
            </div>

            <div id="dsn-next-parallax-title" class="project-title">
                <a href="project-5.html" class="effect-ajax" data-dsn-ajax="next-project">
                    <div class="title-text-header">
                        <div class="title-text-header-inner">
                            <span>Novara Conic</span>
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
