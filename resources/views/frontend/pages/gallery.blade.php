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
        <div class="root-project">
            <div class="gallery-portfolio section-margin">
                @php
                    $portfolios = \Illuminate\Support\Facades\DB::table('portfolios')->get();
                @endphp
                @foreach($portfolios as $key=>$row)
                <a class="link-pop" href="{{asset('storage/uploads/portfolio-images')}}/{{$row->image}}"
                   data-source="{{asset('storage/uploads/portfolio-images')}}/{{$row->image}}">
                    <img src="{{asset('storage/uploads/portfolio-images')}}/{{$row->image}}" alt="">
                    <div class="cap">
                        <span>Web Design</span>
                    </div>
                </a>
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
