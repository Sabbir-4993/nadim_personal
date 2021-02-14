@extends('frontend.layouts.master')
@include('frontend.layouts.partials.loader')

@section('content')
    <header>
        <div class="container header-hero">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contenet-hero">
                        <h5>Lat's Tock</h5>
                        <h1>Contact</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="wrapper">
        <div class="root-contact">
            <div class="container-fluid ">
{{--                <div class="map-custom" id="map" data-dsn-lat="30.0489206" data-dsn-len="31.258553" data-dsn-zoom="14">--}}
{{--                </div>--}}
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d29207.842898731247!2d90.39651324086427!3d23.78371361846642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1612430194090!5m2!1sen!2sbd" width="100%" height="650" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>

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
                            <h3>Write A Comment</h3>
                            <form method="post" action="{{route('message')}}">
                                @csrf
                                <div class="messages"></div>
                                <div class="input__wrap controls">
                                    <div class="form-group">

                                        <div class="entry">
                                            <label>What's your name?</label>
                                            <input id="form_name" type="text" name="name" placeholder="Type your name" required="required"
                                                   data-error="name is required.">
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group">
                                        <div class="entry">
                                            <label>What's your email address?</label>
                                            <input id="form_email" type="email" name="email" placeholder="Type your Email Address"
                                                   required="required" data-error="Valid email is required.">
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group">
                                        <div class="entry">
                                            <label>What's up?</label>
                                            <textarea id="form_message" class="form-control" name="message"
                                                      placeholder="Tell us about you and the world" required="required"
                                                      data-error="Please,leave us a message."></textarea>
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="image-zoom" data-dsn="parallax">
                                        <button type="submit">Send Message</button>
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
