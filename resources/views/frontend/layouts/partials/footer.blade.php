@include('frontend.layouts.partials.scripts')
<footer class="footer">
    <div class="container">
        <div class="footer-links p-relative">
            <div class="row">
                <div class="col-md-3 dsn-col-footer">
                    <div class="footer-block">
                        <div class="footer-logo">
                            <a href="#"><img src="{{asset('frontend/assets/img/logo.png')}}" alt=""></a>
                        </div>

                        <div class="footer-social">

                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>

                            </ul>

                        </div>
                    </div>
                </div>

                <div class="col-md-3 dsn-col-footer">
                    <div class="footer-block col-menu">
                        <h4 class="footer-title">Navigation</h4>
                        <nav>
                            <ul>
                                <li><a href="#">Portfolio</a>
                                </li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="col-md-3 dsn-col-footer">
                    <div class="footer-block col-contact">
                        <h4 class="footer-title">Contact</h4>
                        <p><strong>T</strong> <span>:</span> +001 225 3351</p>
                        <p><strong>F</strong> <span>:</span>+001 225 3351</p>
                        <p class="over-hidden"><strong>E</strong> <span>:</span><a class="link-hover"
                                                                                   data-hover-text="info@dsngrid.com"
                                                                                   href="#">info@dsngrid.com</a>
                        </p>
                    </div>
                </div>

                <div class="col-md-3 dsn-col-footer">
                    <div class="col-address">
                        <h4 class="footer-title">Address</h4>

                        <p>El-Mahalla El-Kubra 37<br>
                            1776 Damietta<br>
                            Egypt</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright">
            <div class="text-center">
                <p>© 2020 Droow Digital Agency</p>
                <div class="copright-text over-hidden">Designed by <a class="link-hover"
                                                                      data-hover-text="DSN Grid" href="#"
                                                                      target="_blank">DSN Grid</a>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
</main>

<!-- Wait Loader -->
<div class="wait-loader">
    <div class="loader-inner">
        <div class="loader-circle">
            <div class="loader-layer"></div>
        </div>
    </div>
</div>
<!-- // Wait Loader -->


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

@yield('js')
</body>


</html>
