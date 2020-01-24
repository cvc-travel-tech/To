
        
        <div class="container " style="padding-top: 40px;padding-bottom: 40px;">
            <div class="blog-content">

            </div>
        </div>
        <div class="bravo_footer">
            <div class="mailchimp">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-lg-10 col-lg-offset-1">
                            <div class="row">
                                <div class="col-xs-12  col-md-12 col-lg-6">
                                    <div class="media ">
                                        <div class="media-left hidden-xs col-lg-3" style="
    /* width: 98px; */
">
                                            <img src="images/watercolor-football-clipart-2.png" style="
    width: 100%;
">
                                        </div>
                                        <div class="media-body">
                                            <div class="col-md-12">
                                                <h4 class="media-heading">Get Updates &amp; More</h4>
                                                <p>Thoughtful thoughts to your inbox</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-5 col-lg-6">
                                    <form action="http://cvc.vacations/newsletter/subscribe" class="subcribe-form bravo-subscribe-form bravo-form">
                                        <input type="hidden" name="_token" value="rpIsegRg9AWQquQ8f0S0UzRjdI51mdPWVAwziRyx">
                                        <div class="form-group">
                                            <input type="text" name="email" class="form-control email-input" placeholder="Your Email">
                                            <button type="submit" class="btn-submit">Subscribe
                                        <i class="fa fa-spinner fa-pulse fa-fw"></i>
                                    </button>
                                        </div>
                                        <div class="form-mess"></div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="nav-footer">
                                <div class="title">
                                    NEED HELP?
                                </div>
                                <div class="context">
                                    <div class="contact">
                                        <div class="c-title">
                                            Call Us
                                        </div>
                                        <div class="sub">
                                            +90 536 434 7663

                                        </div>
                                    </div>
                                    <div class="contact">
                                        <div class="c-title">
                                            Email for Us
                                        </div>
                                        <div class="sub">
                                            info@to-istanbultours.com


                                        </div>
                                    </div>
                                    <div class="contact">
                                        <div class="c-title">
                                            Follow Us
                                        </div>
                                        <div class="sub">
                                            <a href="#">
                                                <img src="images/facebook.png" style="width: 10%;">
                                            </a>
                                            <a href="#">
                                                <img src="images/whatsapp.png" style="width: 10%;">
                                            </a>
                                            <a href="#">
                                                <img src="images/skype.png" style="width:10%">
                                            </a>
                                            <a href="#">
                                                <img src="images/twitter.png" style="width:10%">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="nav-footer">
                                <div class="title">
                                    Services
                                </div>
                                <div class="context">
                                    <div class="contact">
                                        <div class="c-title">
                                            Call Us
                                        </div>
                                        <div class="sub">
                                            +90 212 231 0069 (5ext)

                                        </div>
                                    </div>
                                    <div class="contact">
                                        <div class="c-title">
                                            Skype
                                        </div>
                                        <div class="sub">

                                        </div>
                                    </div>
                                    <div class="contact">
                                        <div class="c-title">
                                            Whats App
                                        </div>
                                        <div class="sub">
                                            +90 536 434 7663
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="nav-footer">
                                <div class="title">
                                    SUPPORT
                                </div>
                                <div class="context">
                                    <ul>

                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="destinations.html">Destinations</a></li>
                                        <li><a href="tour.html">Turkey Packages</a></li>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="contact-us.html">Contact Us</a></li>
                                        <li><a href="{{ url('blog') }}">Blog</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>












        <script src="{{ asset('frontend/libs/lazy-load/intersection-observer.js') }}"></script>
        <script async src="{{ asset('frontend/libs/lazy-load/lazyload.min.js') }}"></script>
        <script>
            // Set the options to make LazyLoad self-initialize
            window.lazyLoadOptions = {
                elements_selector: ".lazy",
                // ... more custom settings?
            };

            // Listen to the initialization event and get the instance of LazyLoad
            window.addEventListener('LazyLoad::Initialized', function(event) {
                window.lazyLoadInstance = event.detail.instance;
            }, false);
        </script>
        <script src="{{ asset('frontend/libs/jquery-3.3.1.min.js') }}">
        </script>
        <script src="{{ asset('frontend/libs/vue/vue.js') }}"></script>
        <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('frontend/module/media/js/browser.js') }}"></script>
        <script src="{{ asset('frontend/libs/carousel-2/owl.carousel.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('frontend/libs/daterange/moment.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('frontend/libs/daterange/daterangepicker.min.js') }}"></script>
        <script src="{{ asset('frontend/js/functions.js') }}"></script>
        <script src="{{ asset('frontend/js/home.js') }}"></script>
        <script src="{{ asset('frontend/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    </div>
</body>

</html>