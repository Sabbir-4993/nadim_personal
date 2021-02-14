@include('backend.layouts.partials.header')
@include('backend.layouts.partials.scripts')


<body class="layout-light side-menu">
<div class="mobile-search"></div>

<div class="mobile-author-actions"></div>

@include('backend.layouts.partials.header_top')

<main class="main-content">

    @include('backend.layouts.partials.sidebar')

    @yield('content')

    @include('backend.layouts.partials.footer')
</main>


@yield('js')
</body>


</html>
