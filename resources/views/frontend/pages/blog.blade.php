@extends('frontend.layouts.master')
@include('frontend.layouts.partials.loader')

@section('content')
    <header>
        <div class="container header-hero">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contenet-hero">
                        <h5>NEWS & IDEAS</h5>
                        <h1>Our Blog</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="wrapper">
        <div class="root-blog">
            <div class="container">

                <article class="post-list-item">
                    <figure>
                        <a class="image-zoom effect-ajax" href="{{route('blog_details')}}" data-dsn-animate="up">
                            <img src="{{asset('frontend/assets/img/blog/1.jpg')}}" alt="">
                        </a>
                    </figure>
                    <div class="post-list-item-content">
                        <div class="post-info-top">
                            <div class="post-info-date">
                                <span>2 september, 2019</span>
                            </div>

                            <div class="post-info-category">
                                <a href="#">Design</a>
                            </div>
                        </div>
                        <h3>
                            <a href="#">interview with Communication Arts about Jayasom website</a>
                        </h3>

                        <div class="link-custom" data-dsn-animate="up">
                            <a class="image-zoom effect-ajax" href="{{route('blog_details')}}" data-dsn="parallax">
                                <span>Read More</span>
                            </a>
                        </div>
                    </div>
                </article>
                <article class="post-list-item">
                    <figure>
                        <a class="image-zoom effect-ajax" href="{{route('blog_details')}}" data-dsn-animate="up">
                            <img src="{{asset('frontend/assets/img/blog/4.jpg')}}" alt="">
                        </a>
                    </figure>
                    <div class="post-list-item-content">
                        <div class="post-info-top">
                            <div class="post-info-date">
                                <span>2 september, 2019</span>
                            </div>

                            <div class="post-info-category">
                                <a href="#">Design</a>
                            </div>
                        </div>
                        <h3>
                            <a href="#">interview with Communication Arts about Jayasom website</a>
                        </h3>

                        <div class="link-custom" data-dsn-animate="up">
                            <a class="image-zoom effect-ajax" href="{{route('blog_details')}}" data-dsn="parallax">
                                <span>Read More</span>
                            </a>
                        </div>
                    </div>
                </article>

                <div class="dsn-pagination">
                            <span class="page-numbers current ">
                                <span class="dsn-numbers">
                                    <span class="number">1</span></span>
                            </span>
                    <a class="page-numbers" href="#">
                                <span class="dsn-numbers">
                                    <span class="number">2</span>
                                </span>
                    </a>

                    <a class="page-numbers" href="#">
                                <span class="dsn-numbers">
                                    <span class="number">3</span>
                                </span>
                    </a>
                    <a class="next page-numbers" href="#">
                                <span class="button-m">
                                    <svg viewBox="0 0 52 52" xmlns="http://www.w3.org/2000/svg" width="100%"
                                         height="100%">
                                        <path
                                            d="M3 26.7h39.5v3.5c0 .3.1.5.4.6.2.1.5.1.7-.1l5.9-4.2c.2-.1.3-.3.3-.5s-.1-.4-.3-.5l-5.9-4.2c-.1-.1-.3-.1-.4-.1-.1 0-.2 0-.3.1-.2.1-.4.3-.4.6v3.5H3c-.4 0-.7.3-.7.7 0 .3.3.6.7.6z">
                                        </path>
                                    </svg>
                                    <span>NEXT</span>
                                </span>
                    </a>
                </div>

            </div>
        </div>

        @yield('footer')
    </div>
@endsection
