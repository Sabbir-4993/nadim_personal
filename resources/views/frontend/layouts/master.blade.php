@include('frontend.layouts.partials.loader')
@include('frontend.layouts.partials.header')

@yield('preloder')

@yield('wait-loader')

@yield('cursor')

@include('frontend.layouts.partials.navbar')

<main class="main-root">
    <div id="dsn-scrollbar">

        @yield('content')

        @include('frontend.layouts.partials.footer')

    </div>
</main>
