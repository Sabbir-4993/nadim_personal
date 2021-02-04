@section('preloder')
    <div class="preloader">
        <div class="preloader-after"></div>
        <div class="preloader-before"></div>
        <div class="preloader-block">
            <div class="title">Droow</div>
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
        <div class="info">
            <div class="contact-footer">
                <a href="tel:010" class="phone">012.345.6789</a>
                <a href="#" class="email">info@dsngrid</a>
            </div>
            <div class="copyright-social">
                <p>© 2019 Design Grid</p>
                <ul>
                    <li><a href="#" target="_blank">Instagram</a></li>
                    <li><a href="#" target="_blank">Facebook</a></li>
                    <li><a href="#" target="_blank">Linkedin</a></li>
                </ul>
            </div>
        </div>
    </footer>
@endsection
