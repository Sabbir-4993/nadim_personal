@extends('frontend.layouts.master')

@section('content')
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
                                all
                                web.</p>
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
                        <a class="image-zoom effect-ajax" href="project-2.html" data-dsn="parallax">
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
                                <div class="work-item slick-slide">
                                    <img class="has-top-bottom" src="{{asset('frontend/assets/img/project/project3/1.jpg')}}" alt="">
                                    <div class="item-border"></div>
                                    <div class="item-info">
                                        <a href="project-7.html" data-dsn-grid="move-up" class="effect-ajax">

                                            <h5 class="cat">Photography</h5>
                                            <h4>Nile - Kabutha</h4>
                                            <span><span>Veiw Project</span></span>
                                        </a>

                                    </div>
                                </div>

                                <div class="work-item slick-slide">
                                    <img class="has-top-bottom" src="{{asset('frontend/assets/img/project/project6/1.jpg')}}" alt="">
                                    <div class="item-border"></div>
                                    <div class="item-info">
                                        <a href="project-6.html" data-dsn-grid="move-up" class="effect-ajax">

                                            <h5 class="cat">Fashion</h5>
                                            <h4>Bloawshom</h4>
                                            <span><span>Veiw Project</span></span>
                                        </a>

                                    </div>
                                </div>

                                <div class="work-item slick-slide">
                                    <img class="has-top-bottom" src="{{asset('frontend/assets/img/project/project4/1.jpg')}}" alt="">
                                    <div class="item-border"></div>
                                    <div class="item-info">
                                        <a href="project-4.html" data-dsn-grid="move-up" class="effect-ajax">

                                            <h5 class="cat">Photography</h5>
                                            <h4>Bastian Bux</h4>
                                            <span><span>Veiw Project</span></span>
                                        </a>

                                    </div>
                                </div>

                                <div class="work-item slick-slide">
                                    <img class="has-top-bottom" src="{{asset('frontend/assets/img/project/project5/1.jpg')}}" alt="">
                                    <div class="item-border"></div>
                                    <div class="item-info">
                                        <a href="project-5.html" data-dsn-grid="move-up" class="effect-ajax">

                                            <h5 class="cat">Fashion</h5>
                                            <h4>Bloawshom</h4>
                                            <span><span>Veiw Project</span></span>
                                        </a>

                                    </div>
                                </div>
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
                                <a class="image-zoom effect-ajax" href="project-9.html" data-dsn="parallax">
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
                            <div class="item">
                                <div class="quote">
                                    <p>"The Brief team has been sincerely committed to
                                        designing great communication around our projects. Our customers love
                                        their
                                        creative work - and so do we!"</p>
                                </div>
                                <div class="bottom">
                                    <div class="avatar">
                                        <img src="{{asset('frontend/assets/img/avatar/1.jpg')}}" alt="">
                                    </div>
                                    <div class="label">
                                        <div class="cell">- Helen Ginsberg, CEO of Treasure Island</div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="quote">
                                    <p>"Stage direction, music, ballet, workshops, backstage, the GTG presents
                                        the
                                        first
                                        episode of the series “Les Indes galantes en création"</p>
                                </div>
                                <div class="bottom">
                                    <div class="avatar">
                                        <img src="{{asset('frontend/assets/img/avatar/2.jpg')}}" alt="">
                                    </div>
                                    <div class="label">
                                        <div class="cell">- Helen Ginsberg, CEO of Treasure Island</div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="quote">
                                    <p>"The Brief team has been sincerely committed to
                                        designing great communication around our projects. Our customers love
                                        their
                                        creative work - and so do we!"</p>
                                </div>
                                <div class="bottom">
                                    <div class="avatar">
                                        <img src="{{asset('frontend/assets/img/avatar/3.jpg')}}" alt="">
                                    </div>
                                    <div class="label">
                                        <div class="cell">- Helen Ginsberg, CEO of Treasure Island</div>
                                    </div>
                                </div>
                            </div>
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
                    <div class="logo-box">
                        <img src="{{asset('frontend/assets/img/logo/1.png')}}" alt="">

                        <div class="info">
                            <div class="content" onclick="javascript:void(0);">
                                <div class="icon">
                                    <i class="fas fa-plus"></i>
                                </div>

                                <div class="entry">
                                    <div>
                                        <h5>Google</h5>
                                        <a href="#">www.google.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="logo-box">
                        <img src="{{asset('frontend/assets/img/logo/2.png')}}" alt="">

                        <div class="info">
                            <div class="content" onclick="javascript:void(0);">
                                <div class="icon">
                                    <i class="fas fa-plus"></i>
                                </div>

                                <div class="entry">
                                    <div>
                                        <h5>Google</h5>
                                        <a href="#">www.google.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="logo-box">
                        <img src="{{asset('frontend/assets/img/logo/3.png')}}" alt="">

                        <div class="info">
                            <div class="content" onclick="javascript:void(0);">
                                <div class="icon">
                                    <i class="fas fa-plus"></i>
                                </div>

                                <div class="entry">
                                    <div>
                                        <h5>Google</h5>
                                        <a href="#">www.google.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="logo-box">
                        <img src="{{asset('frontend/assets/img/logo/4.png')}}" alt="">

                        <div class="info">
                            <div class="content" onclick="javascript:void(0);">
                                <div class="icon">
                                    <i class="fas fa-plus"></i>
                                </div>

                                <div class="entry">
                                    <div>
                                        <h5>Google</h5>
                                        <a href="#">www.google.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="logo-box">
                        <img src="{{asset('frontend/assets/img/logo/5.png')}}" alt="">

                        <div class="info">
                            <div class="content" onclick="javascript:void(0);">
                                <div class="icon">
                                    <i class="fas fa-plus"></i>
                                </div>

                                <div class="entry">
                                    <div>
                                        <h5>Google</h5>
                                        <a href="#">www.google.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="logo-box">
                        <img src="{{asset('frontend/assets/img/logo/6.png')}}" alt="">

                        <div class="info">
                            <div class="content" onclick="javascript:void(0);">
                                <div class="icon">
                                    <i class="fas fa-plus"></i>
                                </div>

                                <div class="entry">
                                    <div>
                                        <h5>Google</h5>
                                        <a href="#">www.google.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact-up section-margin section-padding">
            <div class="container">
                <div class="c-wapp">
                    <a href="contact.html" class="effect-ajax">
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
