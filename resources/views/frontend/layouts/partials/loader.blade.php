@section('preloder')
    <div class="preloader">
        <div class="preloader-after"></div>
        <div class="preloader-before"></div>
        <div class="preloader-block">
            <div class="title">Nadim's Design</div>
            <div class="percent">0</div>
            <div class="loading">loading...</div>
        </div>
        <div class="preloader-bar">
            <div class="preloader-progress"></div>
        </div>
    </div>
@endsection


@section('wait-loader')
    <!-- Wait Loader -->
    <div class="wait-loader">
        <div class="loader-inner">
            <div class="loader-circle">
                <div class="loader-layer"></div>
            </div>
        </div>
    </div>
    <!-- // Wait Loader -->
@endsection

@section('cursor')
    <!-- cursor -->
    <div class="cursor">

        <div class="cursor-helper cursor-view">
            <span>VIEW</span>
        </div>

        <div class="cursor-helper cursor-close">
            <span>Close</span>
        </div>

        <div class="cursor-helper cursor-link"></div>
    </div>
    <!-- End cursor -->
@endsection

@section('footer')
    <footer>
        @php
            $contact = \App\Contact::all();
        @endphp
        <div class="info">
            @foreach($contact as $key=>$row)
            <div class="contact-footer">
                <a href="tel:{{$row->phone}}" class="phone">{{$row->phone}}</a>
                <a href="mailto:{{$row->email}}" class="email">{{$row->email}}</a>
            </div>
            <div class="copyright-social">
                <p>© 2021 Nadim's Design</p>
                <ul>
                    <li><a href="{{$row->facebook}}" target="_blank">Facebook</a></li>
                    <li><a href="{{$row->instagram}}" target="_blank">Instagram</a></li>
                    <li><a href="{{$row->behance}}" target="_blank">Behance</a></li>
                    <li><a href="{{$row->fiverr}}" target="_blank">Fiverr</a></li>
                </ul>
            </div>
            @endforeach
        </div>
    </footer>
@endsection
