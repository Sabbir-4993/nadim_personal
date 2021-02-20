@extends('frontend.layouts.master')

@section('content')
    <div class="dsn-slider" data-dsn-header="project">
        <div class="dsn-root-slider" id="dsn-hero-parallax-img">
            <div class="slide-inner">
                <div class="swiper-wrapper">
                    @foreach($portfolios as $key=>$row)
                    <div class="slide-item swiper-slide">
                        <div class="slide-content">
                            <div class="slide-content-inner">
                                <div class="project-metas">
                                    <div class="project-meta-box project-work cat">
                                        <span>{{$row->category_name}}</span>
                                    </div>
                                </div>

                                <div class="title-text-header">
                                    <div class="title-text-header-inner">
                                        <a href="#" class="effect-ajax" data-dsn-ajax="slider">
                                            {{$row->title}}
                                        </a>
                                    </div>
                                </div>

                                <p>{{$row->description}}</p>
                                <div class="link-custom">
                                    <a href="{{route('portfolio_details',($row->id))}} " class="image-zoom effect-ajax" data-dsn="parallax"
                                       data-dsn-ajax="slider">
                                        <span>View Case</span>
                                    </a>
                                </div>

                            </div>
                        </div>
                        <div class="image-container">
                            <div class="image-bg cover-bg" data-image-src="{{asset('storage/uploads/portfolios')}}/{{$row->image}}"
                                 data-overlay="0">
                                <img src="{{asset('storage/uploads/portfolios')}}/{{$row->image}}" alt="">
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="dsn-slider-content"></div>


        <div class="nav-slider">
            <div class="swiper-wrapper" role="navigation">
                @foreach($portfolios as $key=>$row)
                <div class="swiper-slide">
                    <div class="image-container">
                        <div class="image-bg cover-bg" data-image-src="{{asset('storage/uploads/portfolios')}}/{{$row->image}}"
                             data-overlay="2">
                        </div>
                    </div>
                    <div class="content">
                        <p>0{{$key+1}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <section class="footer-slid" id="descover-holder">
            <div class="main-social">
                <div class="social-icon">
                    <div class="social-btn">
                        <div class="svg-wrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.3 23.2">
                                <path
                                    d="M19.4 15.5c-1.2 0-2.4.6-3.1 1.7L7.8 12v-.7l8.5-5.1c.7 1 1.9 1.6 3.1 1.6 2.1 0 3.9-1.7 3.9-3.9S21.6 0 19.4 0s-3.9 1.7-3.9 3.9v.4L7 9.3c-1.3-1.7-3.7-2-5.4-.8s-2.1 3.7-.8 5.4c.7 1 1.9 1.6 3.1 1.6s2.4-.6 3.1-1.6l8.5 5v.4c0 2.1 1.7 3.9 3.9 3.9s3.9-1.7 3.9-3.9c0-2.1-1.7-3.8-3.9-3.8zm0-13.6c1.1 0 1.9.9 1.9 1.9s-.9 1.9-1.9 1.9-1.9-.7-1.9-1.8.8-2 1.9-2zM3.9 13.6c-1.1 0-1.9-.9-1.9-1.9s.9-1.9 1.9-1.9 1.9.9 1.9 1.9-.8 1.9-1.9 1.9zm15.5 7.8c-1.1 0-1.9-.9-1.9-1.9s.9-1.9 1.9-1.9 1.9.9 1.9 1.9-.8 1.8-1.9 1.9z">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>
                <ul class="social-network">
                    <li>
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="control-num">
                <span class="sup active">01</span>
            </div>
            <div class="control-nav">
                <div class="prev-container" data-dsn="parallax">
                    <svg viewBox="0 0 40 40">
                        <path class="path circle" d="M20,2A18,18,0,1,1,2,20,18,18,0,0,1,20,2"></path>
                        <polyline class="path" points="14.6 17.45 20 22.85 25.4 17.45"></polyline>
                    </svg>
                </div>

                <div class="next-container" data-dsn="parallax">
                    <svg viewBox="0 0 40 40">
                        <path class="path circle" d="M20,2A18,18,0,1,1,2,20,18,18,0,0,1,20,2"></path>
                        <polyline class="path" points="14.6 17.45 20 22.85 25.4 17.45"></polyline>
                    </svg>
                </div>
            </div>
        </section>

    </div>

    <div class="wrapper">

        <section class="intro-about section-margin">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="intro-content-text">

                            <h2 data-dsn-grid="move-section" data-dsn-move="-30" data-dsn-duration="100%"
                                data-dsn-opacity="1.2" data-dsn-responsive="tablet">
                                Hello we are, <br/> Dsn Grid
                            </h2>

                            <p data-dsn-animate="text">Founded in 2000, Dsn Grid has become one of the best
                                Digital
                                Agency in
                                ThemeForest.
                                Blue money going forward, but deploy to production. C-suite. First-order optimal
                                strategies build on a culture of contribution and inclusion so those options</p>

                            <h6 data-dsn-animate="text">SALVADOR DALI</h6>
                            <small data-dsn-animate="text">Digital Artisit</small>

                            <div class="exper">
                                <div class="numb-ex">
                                    <span class="word" data-dsn-animate="text">25</span>
                                </div>

                                <h4 data-dsn-animate="up">YEARS OF <br> DIGITAL EXPERIENCE</h4>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="background-mask">
                <div class="background-mask-bg"></div>
                <div class="img-box">
                    <div class="img-cent" data-dsn-grid="move-up">
                        <div class="img-container">
                            <img data-dsn-y="30%" src="{{asset('frontend/assets/img/bgg.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="our-services-2 section-margin">
            <div class="container">
                <div class="one-title" data-dsn-animate="up">
                    <div class="title-sub-container">
                        <p class="title-sub">Our Servcies</p>
                    </div>
                    <h2 class="title-main">New Branding Agency</h2>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="services-item">
                            <div class="corner corner-top"></div>
                            <div class="corner corner-bottom"></div>
                            <div class="icon">
                                <img src="{{asset('frontend/assets/img/services/1.png')}}" alt="">
                            </div>
                            <div class="services-header">
                                <h3>DIGITAL PRODUCTS</h3>
                            </div>
                            <p>Web design encompasses many different skills and disciplines in the production of
                                all
                                web.</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="services-item selected">
                            <div class="corner corner-top"></div>
                            <div class="corner corner-bottom"></div>
                            <div class="icon">
                                <img src="{{asset('frontend/assets/img/services/2.png')}}" alt="">
                            </div>
                            <div class="services-header">
                                <h3>UI-UX DESIGN</h3>
                            </div>
                            <p>Web design encompasses many different skills and disciplines in the production of
                                all
                                web.</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="services-item">
                            <div class="corner corner-top"></div>
                            <div class="corner corner-bottom"></div>
                            <div class="icon">
                                <img src="{{asset('frontend/assets/img/services/3.png')}}" alt="">
                            </div>
                            <div class="services-header">
                                <h3>WEB DEVELOPMENT</h3>
                            </div>
                            <p>Web design encompasses many different skills and disciplines in the production of
                                all web.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="box-seat box-seat-full section-margin">
            <div class="container-fluid">
                <div class="inner-img" data-dsn-grid="move-up">
                    <img data-dsn-scale="1" data-dsn-y="30%" src="{{asset('frontend/assets/img/project/project2/3.jpg')}}" alt="">
                </div>
                <div class="pro-text">
                    <h3> How is your<br> visual identity?</h3>
                    <p>A system that young people around the world with a club culture and techno
                        enthusiasts feel identified. We generated a simple logo that is the basis for
                        generating a geometric and liquid system. </p>
                    <div class="link-custom">
                        <a class="image-zoom effect-ajax" href="#" data-dsn="parallax">
                            <span>Learn More</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <section class="our-work work-under-header  section-margin" data-dsn-col="3">
            <div class="container">
                <div class="one-title">
                    <div class="title-sub-container">
                        <p class="title-sub">Our Work</p>
                    </div>
                    <h2 class="title-main">Creative Portfolio Designs</h2>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-9 offset-lg-3">
                        <div class="work-container">
                            <div class="slick-slider">
                                @foreach($portfolios as $key=>$row)
                                <div class="work-item slick-slide">
                                    <img class="has-top-bottom" src="{{asset('storage/uploads/portfolios')}}/{{$row->image}}" alt="">
                                    <div class="item-border"></div>
                                    <div class="item-info">
                                        <a href="{{route('portfolio_details',($row->id))}}" data-dsn-grid="move-up" class="effect-ajax">

                                            <h5 class="cat">{{$row->category_name}}</h5>
                                            <h4>{{$row->title}}</h4>
                                            <span><span>Veiw Project</span></span>
                                        </a>

                                    </div>
                                </div>
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class=" box-gallery-vertical section-margin section-padding" data-dsn="color">
            <div class="mask-bg"></div>
            <div class="container">
                <div class="row align-items-center h-100">
                    <div class="col-lg-6 ">
                        <div class="box-im" data-dsn-grid="move-up">
                            <img class="has-top-bottom" src="{{asset('frontend/assets/img/project/project9/7.jpg')}}" alt=""
                                 data-dsn-move="20%">
                        </div>
                    </div>

                    <div class="col-lg-6">


                        <div class="box-info">

                            <div class="vertical-title" data-dsn-animate="up">
                                <h2>Time Tag Watch.</h2>
                            </div>

                            <h6 data-dsn-animate="up">Sometimes, we need to check the time, wondering when our
                                work
                                or meeting will finish, without getting caught by others.</h6>

                            <p data-dsn-animate="up">To avoid your boss’s
                                staring eye, you should not roll your eyes to check the time. The Time Tag Watch
                                is
                                a consummately appropriate for it.
                                Those tags do the role of the hands of the watch. By rotating the face of the
                                watch
                                not the hands, it gets harder to be damaged. It provides you with experience to
                                feel
                                the time at the end of your finger without damaging your watch.</p>

                            <div class="link-custom" data-dsn-animate="up">
                                <a class="image-zoom effect-ajax" href="#" data-dsn="parallax">
                                    <span>Learn More</span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <section class="client-see section-margin">
            <div class="container">
                <div class="inner">
                    <div class="left">
                        <h2 class="title" data-dsn-grid="move-section" data-dsn-move="-60"
                            data-dsn-duration="100%" data-dsn-opacity="1" data-dsn-responsive="tablet">
                            <span class="text">Feedback from our clients.</span>
                        </h2>
                    </div>

                    <div class="items">
                        <div class="bg"></div>
                        <div class="slick-slider">
                            @php
                                $feedback = \App\Feedback::all();
                            @endphp
                            @foreach($feedback as $key=>$row)
                            <div class="item">
                                <div class="quote">
                                    <p>"{{$row->feedback}}"</p>
                                </div>
                                <div class="bottom">
                                    <div class="avatar">
                                        <img src="{{asset('storage/uploads/feedback')}}/{{$row->image}}" alt="">
                                    </div>
                                    <div class="label">
                                        <div class="cell">- {{$row->name}}, {{$row->designation}} at {{$row->company}}</div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="our-news section-margin">
            <div class="container">
                <div class="one-title" data-dsn-animate="up">
                    <div class="title-sub-container">
                        <p class="title-sub">Latest News</p>
                    </div>
                    <h2 class="title-main">Latest and greatest post</h2>
                </div>
                <div class="custom-container">
                    <div class="slick-slider">
                        <div class="item-new slick-slide">
                            <div class="image" data-overlay="5">
                                <img src="{{asset('frontend/assets/img/blog/1.jpg')}}" alt="">
                            </div>
                            <div class="content">
                                <div class="background"></div>
                                <h5>Web , Brand</h5>

                                <div class="cta">
                                    <a href="#">Digital Photography Tips</a>
                                </div>

                                <p>Simple point-and-shoot digital cameras can give surprising quality when they
                                    have the right lenses and sensors.</p>

                            </div>
                        </div>

                        <div class="item-new slick-slide">
                            <div class="image" data-overlay="5">
                                <img src="{{asset('frontend/assets/img/blog/2.jpg')}}" alt="">
                            </div>
                            <div class="content">
                                <div class="background"></div>
                                <h5>Web , Brand</h5>

                                <div class="cta">
                                    <a href="#">Digital Photography Tips</a>
                                </div>

                                <p>Simple point-and-shoot digital cameras can give surprising quality when they
                                    have the right lenses and sensors.</p>
                            </div>
                        </div>

                        <div class="item-new slick-slide">
                            <div class="image" data-overlay="5">
                                <img src="{{asset('frontend/assets/img/blog/3.jpg')}}" alt="">
                            </div>
                            <div class="content">
                                <div class="background"></div>
                                <h5>Web , Brand</h5>

                                <div class="cta">
                                    <a href="#">Digital Photography Tips</a>
                                </div>

                                <p>Simple point-and-shoot digital cameras can give surprising quality when they
                                    have the right lenses and sensors.</p>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="brand-client section-margin">
            <div class="container">
                <div class="one-title" data-dsn-animate="up">
                    <div class="title-sub-container">
                        <p class="title-sub">Our clients</p>
                    </div>
                    <h2 class="title-main">Your successful, our reputation</h2>
                </div>

                <div class="wapper-client">
                    @php
                    $client = \App\Client::all();
                    @endphp
                    @foreach($client as $key=>$row)
                    <div class="logo-box">
                        <img src="{{asset('storage/uploads/client')}}/{{$row->image}}" alt="">

                        <div class="info">
                            <div class="content" onclick="javascript:void(0);">
                                <div class="icon">
                                    <i class="fas fa-plus"></i>
                                </div>

                                <div class="entry">
                                    <div>
                                        <h5>{{$row->name}}</h5>
                                        <a href="https://{{$row->url}}" target="_blank">{{$row->url}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="contact-up section-margin section-padding">
            <div class="container">
                <div class="c-wapp">
                    <a href="{{route('career')}}" class="effect-ajax">
                                <span class="hiring">
                                    We are hiring
                                </span>
                        <span class="career">
                            Dare and contact us immediately!
                        </span>
                    </a>
                </div>
            </div>
        </section>

    </div>
@endsection

