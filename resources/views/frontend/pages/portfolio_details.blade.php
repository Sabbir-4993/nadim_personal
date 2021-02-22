@extends('frontend.layouts.master')
@include('frontend.layouts.partials.loader')

@section('content')
    <header>
        <div class="headefr-fexid" data-dsn-header="project">
            <div class="bg w-100" id="dsn-hero-parallax-img" data-dsn-ajax="img">
                <div class="bg-image  cover-bg" data-overlay="5"
                     data-image-src="{{asset('storage/uploads/portfolios')}}/{{$portfolios->image}}"></div>
            </div>

            <div class="scroll" data-dsn-animate="ajax">
                <span class="background"></span>
                <span class="triangle"></span>
            </div>
            <div class="project-title" id="dsn-hero-parallax-title">

                <div class="title-text-header">
                    <div class="cat">
                        <span>{{$portfolios->category_name}}</span>
                    </div>
                    <span class="title-text-header-inner">
                        <span data-dsn-animate="ajax">{{$portfolios->title}}</span>
                    </span>
                    <div class="container col-4 m-0 pb-2 p-0">
                        <span>{{$portfolios->description}}</span>
                    </div>
                </div>

                <div class="sub-text-header" data-dsn-animate="ajax">
                    <h5>Published</h5>
                    <span>- {{$portfolios->date}}</span>
                </div>
            </div>

            <div class="project-page__inner">
                <div class="h-100">
                    <div class="row justify-content-center align-items-end h-100">
                        <div id="descover-holder" class="col-lg-12 project-meta__content">
                            <div class="link">
                                <a target="_blank"
                                   href="http://{{$portfolios->url}}">View
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

            @foreach($portfoliodetails as $key=>$row)
            <div class="container-fluid">
                <div class="img-box-small dsn-parallax-full" data-dsn-grid="move-up" data-dsn-triggerhook="0">
                    <img src="{{asset('storage/uploads/portfolio-images')}}/{{$row->image}}" alt="" data-dsn-y="30%" data-dsn-scale="1.01">
                    <div class="cap">
                        <span>{{$portfolios->category_name}}</span>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        @php
            use App\Portfolio;
            $id = $portfolios->id+1;
            $port = Portfolio::where('id',$id)->first();
        @endphp

            @if($port != null)
            <div class="next-project" data-dsn-footer="project">
                <div id="dsn-next-parallax-img" class="bg">
                    <div class="bg-image cover-bg" data-overlay="2"
                         data-image-src="{{asset('storage/uploads/portfolios')}}/{{$port->image}}"></div>
                </div>
            <div id="dsn-next-parallax-title" class="project-title">
                <a href="{{route('portfolio_details',($port->id))}}" class="effect-ajax" data-dsn-ajax="next-project">
                    <div class="title-text-header">
                        <div class="title-text-header-inner">
                            <span>{{$port->title}} - {{$port->category_name}}</span>
                        </div>
                    </div>
                    <div class="sub-text-header">
                        <h5>Next Project</h5>
                    </div>
                </a>
            </div>
            @else

            @endif
        </div>

        @yield('footer')
    </div>
@endsection
