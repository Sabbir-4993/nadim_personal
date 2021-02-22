<!-- Nav Bar -->
<div class="dsn-nav-bar">
    <div class="site-header">
        <div class="extend-container">
            <div class="inner-header">
                <div class="main-logo">
                    <a href="{{route('index')}}"></a>
                </div>
            </div>
            <nav class=" accent-menu main-navigation">
                <ul class="extend-container">
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li><a href="{{route('about')}}">About</a></li>
                    <li><a href="{{route('portfolio')}}">Portfolio</a></li>
                    <li><a href="{{route('gallery')}}">Gallery</a></li>
                    <li><a href="{{route('career')}}">career</a></li>
                    <li><a href="{{route('contact')}}">Contact</a></li>
                    <li><a href="{{route('login')}}">Login</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="header-top header-top-hamburger">
        <div class="header-container">
            <div class="logo main-logo">
                <a href="{{route('index')}}">
                    <img class="dark-logo" src="{{asset('frontend/assets/img/logo-dark.png')}}" alt=""/>
                    <img class="light-logo" src="{{asset('frontend/assets/img/logo.png')}}" alt=""/>
                </a>
            </div>

            <div class="menu-icon" data-dsn="parallax" data-dsn-move="5">
                <div class="icon-m">
                    <i class="menu-icon-close fas fa-times"></i>
                    <span class="menu-icon__line menu-icon__line-left"></span>
                    <span class="menu-icon__line"></span>
                    <span class="menu-icon__line menu-icon__line-right"></span>
                </div>

                <div class="text-menu">
                    <div class="text-button">Menu</div>
                    <div class="text-open">Open</div>
                    <div class="text-close">Close</div>
                </div>
            </div>

            <div class="nav">
                <div class="inner">
                    <div class="nav__content">

                    </div>
                </div>
            </div>
            @php
                $contact = \App\Contact::all();
            @endphp
            <div class="nav-content">
                <div class="inner-content">
                    @foreach($contact as $key=>$row)
                    <address class="v-middle">
                        <span>{{$row->email}}</span>
                        <span>{{$row->address}}</span>
                        <span>{{$row->phone}}</span>
                    </address>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</div>
<!-- End Nav Bar -->
