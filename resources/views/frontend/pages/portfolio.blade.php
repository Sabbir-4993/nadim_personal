@extends('frontend.layouts.master')
@include('frontend.layouts.partials.loader')

@section('content')
    <header>
        <div class="container header-hero">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contenet-hero">
                        <h5>Our WOrk</h5>
                        <h1>portfolio</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="wrapper">
        <div class="root-work">
            <div class="container">
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
                            @foreach($portfolios as $key=>$row)
                            <button type="button" data-filter=".{{$row->category_name}}">{{$row->category_name}}</button>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="projects-list gallery">
                    @foreach($portfolios as $key=>$row)
                    <div class="item {{$row->category_name}}">
                        <a href="{{route('portfolio_details',($row->id))}}" class="effect-ajax" data-dsn-ajax="work"
                           data-dsn-grid="move-up">
                            <img class="has-top-bottom" src="{{asset('storage/uploads/portfolios')}}/{{$row->image}}" alt="" />
                            <div class="item-border"></div>
                            <div class="item-info">
                                <h5 class="cat">{{$row->category_name}}</h5>
                                <h4>{{$row->title}}</h4>
                                <span><span>View Project</span></span>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>

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
