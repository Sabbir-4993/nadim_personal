@section('css')
    <!-- inject:css-->

    <link rel="stylesheet" href="{{asset('backend/assets/css/plugin.min.css')}}">

    <link rel="stylesheet" href="{{asset('backend/assets/css/style.css')}}">

    <!-- endinject -->
@endsection

@section('js')
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDduF2tLXicDEPDMAtC6-NLOekX0A5vlnY"></script>
    <!-- inject:js-->
    <script src="{{asset('backend/assets/js/plugins.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/script.min.js')}}"></script>
    <!-- endinject-->
@endsection
