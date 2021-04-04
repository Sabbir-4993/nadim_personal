<footer class="footer">
    <div class="container">
        <div class="footer-links p-relative">
            <div class="row">
                <div class="col-md-3 dsn-col-footer">
                    <div class="footer-block">
                        @php
                            $contact = \App\Contact::all();
                        @endphp
                        @foreach($contact as $key=>$row)
                        <div class="footer-logo">
                            <a href="{{route('index')}}"><img src="{{asset('storage/uploads/Logo/')}}/{{$row->image}}" alt="Logo"></a>
                        </div>

                        <div class="footer-social">
                            <ul>
                                <li><a href="{{$row->facebook}}"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="{{$row->instagram}}"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="{{$row->behance}}"><i class="fab fa-behance"></i></a></li>
                                <li><a href="{{$row->fiverr}}"><i class="fas fa-briefcase"></i></a></li>
                            </ul>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-md-3 dsn-col-footer">
                    <div class="footer-block col-menu">
                        <h4 class="footer-title">Navigation</h4>
                        <nav>
                            <ul>
                                <li><a href="{{route('portfolio')}}">Portfolio</a></li>
                                <li><a href="{{route('gallery.index')}}">Gallery</a></li>
                                <li><a href="{{route('about')}}">About</a></li>
                                <li><a href="{{route('career')}}">Career</a></li>
                                <li><a href="{{route('contact')}}">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                @foreach($contact as $key=>$row)
                <div class="col-md-3 dsn-col-footer">
                    <div class="footer-block col-contact">
                        <h4 class="footer-title">Contact</h4>
                        <p><strong>T</strong> <span>:</span><a href="tel:{{$row->phone}}">{{$row->phone}}</a></p>
                        <p class="over-hidden"><strong>E</strong> <span>:</span>
                            <a class="link-hover" data-hover-text="{{$row->email}}" href="mailto:{{$row->email}}">{{$row->email}}</a>
                        </p>
                    </div>
                </div>

                <div class="col-md-3 dsn-col-footer">
                    <div class="col-address">
                        <h4 class="footer-title">Address</h4>
                        <p>{{$row->address}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="copyright">
            <div class="text-center">
                <p>© <span id="year"></span> Nadim's Design</p>
                <div class="copright-text over-hidden">Designed & Developed by
                    <a class="link-hover" data-hover-text="DSN Grid" href="https://www.mrsabbir.website/" target="_blank">Sabbir Ahmed</a>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
</main>



<!-- Optional JavaScript -->
<script src="{{asset('frontend/assets/js/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/plugins.js')}}"></script>
<script src="{{asset('frontend/assets/js/dsn-grid.js')}}"></script>
<script src="{{asset('frontend/assets/js/custom.js')}}"></script>
<script>
    document.getElementById("year").innerHTML = new Date().getFullYear();
</script>
</body>


</html>
