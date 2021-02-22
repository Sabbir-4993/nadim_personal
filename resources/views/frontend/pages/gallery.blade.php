@extends('frontend.layouts.master')
@include('frontend.layouts.partials.loader')

@section('content')
    <header>
        <div class="container header-hero">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contenet-hero">
                        <h5>Join With us</h5>
                        <h1>Gallery</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="wrapper">
        <div class="root-work">
            <div class="box-title" data-dsn-title="cover">
                <h2 class="title-cover" data-dsn-grid="move-section" data-dsn-move="-70">Portfolio</h2>
            </div>

            <div class="filterings">
                <div class="filtering-wrap">
                    <div class="filtering">
                        <div class="selector"></div>
                        <button type="button" data-filter="*" class="active">
                            All
                        </button>
                        @php
                            $portfolios = \Illuminate\Support\Facades\DB::table('portfolios')->get();
                        @endphp
                        @foreach($portfolios as $key=>$row)
                            <button type="button" data-filter=".{{$row->category_name}}">{{$row->category_name}}</button>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="projects-list gallery">
                @foreach($gallery as $key=>$row)
                    <div class="item {{$row->category_name}}">
                        <div class="image-zoom" data-dsn="parallax">
                            <a href="{{asset('storage/uploads/portfolio-images')}}/{{$row->image}}" class="single-image" data-dsn-ajax="work" data-dsn-grid="move-up">
                                <img class="has-top-bottom" src="{{asset('storage/uploads/portfolio-images')}}/{{$row->image}}" alt="{{$row->category_name}}.{{$row->title}}" />
                                <div class="item-border"></div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <section class="contact-up section-margin section-padding">
            <div class="container">
                <div class="c-wapp">
                    <a href="{{route('contact')}}" class="effect-ajax">
                                <span class="hiring">
                                    Contact With us
                                </span>
                        <span class="career">
                                    Dare and contact us immediately!
                                </span>
                    </a>
                </div>
            </div>
        </section>

        @yield('footer')
    </div>

@endsection
