@section('css')


    <!-- Font Google -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800&amp;display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700&amp;display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="{{asset('frontend/assets/img/favicon.ico')}}" type="image/x-icon"/>
    <link rel="icon" href="{{asset('frontend/assets/img/favicon.ico')}}" type="image/x-icon"/>

    <!-- custom styles (optional) -->
    <link href="{{asset('frontend/assets/css/plugins.css')}}" rel="stylesheet"/>
    <link href="{{asset('frontend/assets/css/style.css')}}" rel="stylesheet"/>
@endsection


@section('js')
    <!-- Optional JavaScript -->
    <script src="{{asset('frontend/assets/js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/plugins.js')}}"></script>
    <script src="{{asset('frontend/assets/js/dsn-grid.js')}}"></script>
    <script src="{{asset('frontend/assets/js/custom.js')}}"></script>
@endsection
