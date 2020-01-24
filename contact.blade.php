@extends('Frontend.main')

@section('content')
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-154435778-1');
    </script>

    <link href="{{ asset('frontend/css/contact.css') }}" rel="stylesheet">

    <style id="custom-css">
        body {
            /* font-family: ;
            color: ;
            font-size: ;
            line-height: ;
            font-weight: ; */
        }
        
        .bravo_topbar .topbar-left .slogin {
            display: inline-block;
            font-weight: bolder;
            color: #d1d4da;
            font-size: 13px;
        }
    </style>
    <link href="{{ asset('frontend/libs/carousel-2/owl.carousel.css') }}" rel="stylesheet">

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5df2121a43be710e1d21c40f/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
</head>

<body class="">


    @include('Frontend.nav')





        <div id="bravo_content-wrapper">
            <div class="bravo_content">
                <div class="container">
                    <div class="row section">
                        <div class="col-md-5">
                            <div role="form" class="form_wrapper" lang="en-US" dir="ltr">
                                <form method="post" action="http://cvc.vacations/contact/store" class="bookcore-form">
                                    <input type="hidden" name="_token" value="rpIsegRg9AWQquQ8f0S0UzRjdI51mdPWVAwziRyx">
                                    <div style="display: none;">
                                        <input type="hidden" name="g-recaptcha-response" value="">
                                    </div>
                                    <div class="contact-form">
                                        <div class="contact-header">
                                            <h3>We&#039;d love to hear from you </h3>
                                            <p>Send us a message and we&#039;ll respond as soon as possible </p>

                                        </div>

                                        <div class="contact-form">
                                            <div class="form-group">
                                                <input type="text" value="" placeholder=" Name " name="name" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" value="" placeholder="Email" name="email" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <textarea name="message" cols="40" rows="10" class="form-control textarea" placeholder="Message"></textarea>
                                            </div>
                                            <div class="form-group">

                                            </div>
                                            <p><input type="submit" value="SEND MESSAGE" class="form-control submit btn btn-primary send-btn"></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>



                        <div class="offset-md-2 col-md-5">
                            <div class="contact-info">
                                <div class="info-bg">

                                    <img src="{{ asset('frontend/images/contact.jpg') }}" class="img-responsive" alt="Background Contact Info">
                                </div>




                                <div class="info-content">
                                    <h3>TAREEK AL OFUK</h3>
                                    <div class="sub">
                                        <p></p>
                                        <p>Tell. +90 536 434 7663</p>
                                        <p>Email. info@to-istanbultours.com</p>
                                        <p class="address"> addess.HALASKARGAZİ CD. MISIRLI PLAZA 51/2 HARBİYE İSTANBUL
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection