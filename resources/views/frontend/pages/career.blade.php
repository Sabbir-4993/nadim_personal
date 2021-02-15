@extends('frontend.layouts.master')
@include('frontend.layouts.partials.loader')

@section('content')
    <header>
        <div class="container header-hero">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contenet-hero">
                        <h5>Join With us</h5>
                        <h1>Career</h1>
                        <h6>Join us, we offer you an extraordinary chance to learn, to develop and to be part of an exciting experience and team.</h6>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="wrapper">
        <div class="root-contact">
            <div class="container section-margin">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="box-info-contact">
                            <h3>Start a new project?</h3>
                            <h5>Visit our studio at</h5>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit vo
                                luptatem accusantium natus error sit omnis iste natus</p>

                            <ul>
                                <li>
                                    <span>Phone</span>
                                    <a href="#">+1 (800) 990 8877</a>
                                </li>
                                <li>
                                    <span>Email</span>
                                    <a href="#">info@example.com</a>
                                </li>
                                <li>
                                    <span>Address</span>
                                    <a href="#">778 NE 84th St Miami, FL</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-box">
                            <h3>Upload Your CV</h3>
                            <form method="POST" action="{{route('cv')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="messages"></div>
                                <div class="input__wrap controls">
                                    <div class="form-group">

                                        <div class="entry">
                                            <label>Your Name: </label>
                                            <input id="form_name" type="text" name="name" placeholder="Type your name" required="required"
                                                   data-error="name is required." >
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group">
                                        <div class="entry">
                                            <label>Your Email Address: </label>
                                            <input id="form_email" type="email" name="email" placeholder="Type your Email Address"
                                                   required="required" data-error="Valid email is required.">
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group">
                                        <div class="entry">
                                            <label>About Yourself:</label>
                                            <textarea id="form_message" class="form-control" name="description"
                                                      placeholder="Tell us about you." required="required"
                                                      data-error="Please,tell us about you."></textarea>
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group">
                                        <div class="entry">
                                            <label>Submit Your CV </label>
                                            <input id="file" type="file" name="image" required="required" >
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="image-zoom" data-dsn="parallax">
                                        <button type="submit" >Submit</button>
                                    </div>
                                    @if (Session::has('message'))
                                        <div class="">
                                            <strong>{{ Session::get('message') }}</strong>
                                        </div>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <section class="contact-up section-margin section-padding">
            <div class="container">
                <div class="c-wapp">
                    <a href="{{route('portfolio')}}" class="effect-ajax">
                <span class="hiring">
                  portfolio
                </span>
                        <span class="career">
                  See More Works
                </span>
                    </a>
                </div>
            </div>
        </section>

        @yield('footer')
    </div>

@endsection
