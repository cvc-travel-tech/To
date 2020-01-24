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


    <style id="custom-css">
        body {
            font-family: ;
            color: ;
            font-size: ;
            line-height: ;
            font-weight: ;
        }
        
        a,
        .bravo-news .btn-readmore,
        .bravo_wrap .bravo_header .content .header-left .bravo-menu ul li:hover>a,
        .bravo_wrap .bravo_search_tour .bravo_form_search .bravo_form .field-icon,
        .bravo_wrap .bravo_search_tour .bravo_form_search .bravo_form .render,
        .bravo_wrap .bravo_search_tour .bravo_form_search .bravo_form .field-detination #dropdown-destination .form-control,
        .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .btn-apply-price-range,
        .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .btn-more-item,
        .input-number-group i,
        .bravo_wrap .page-template-content .bravo-form-search-tour .bravo_form_search_tour .field-icon,
        .bravo_wrap .page-template-content .bravo-form-search-tour .bravo_form_search_tour .field-detination #dropdown-destination .form-control,
        .bravo_wrap .page-template-content .bravo-form-search-tour .bravo_form_search_tour .render {
            color: #5191fa
        }
        
        .bravo-pagination ul li.active a,
        .bravo-pagination ul li.active span {
            color: #5191fa!important;
        }
        
        .bravo-news .widget_category ul li span,
        .bravo_wrap .bravo_search_tour .bravo_form_search .bravo_form .g-button-submit button,
        .bravo_wrap .bravo_search_tour .bravo_filter .filter-title:before,
        .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .bravo-filter-price .irs--flat .irs-bar,
        .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .bravo-filter-price .irs--flat .irs-from,
        .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .bravo-filter-price .irs--flat .irs-to,
        .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .bravo-filter-price .irs--flat .irs-single,
        .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .bravo-filter-price .irs--flat .irs-handle>i:first-child,
        .bravo-news .header .cate ul li,
        .bravo_wrap .page-template-content .bravo-form-search-tour .bravo_form_search_tour .g-button-submit button,
        .bravo_wrap .page-template-content .bravo-list-locations .list-item .destination-item .image .content .desc {
            background: #5191fa;
        }
        
        .bravo-pagination ul li.active a,
        .bravo-pagination ul li.active span {
            border-color: #5191fa!important;
        }
        
        .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .bravo-filter-price .irs--flat .irs-from:before,
        .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .bravo-filter-price .irs--flat .irs-to:before,
        .bravo_wrap .bravo_search_tour .bravo_filter .g-filter-item .item-content .bravo-filter-price .irs--flat .irs-single:before,
        .bravo-reviews .review-form .form-wrapper,
        .bravo_wrap .bravo_detail_tour .bravo_content .bravo_tour_book {
            border-top-color: #5191fa;
        }
        
        .bravo_wrap .bravo_footer .main-footer .nav-footer .context .contact {
            border-left-color: #5191fa;
        }
        
        .bravo_wrap .page-template-content .bravo-form-search-tour .bravo_form_search_tour .field-detination {
            padding: 0 0 10px 0;
        }
        
        .bravo_wrap .page-template-content .bravo-form-search-tour .bravo_form_search_tour .form-date-search {
            padding: 0 0 10px 0;
        }
        
        .bravo_wrap .page-template-content .bravo-form-search-tour .bravo_form_search_tour .g-button-submit {
            min-height: 62px;
        }
        
        .bravo_wrap .page-template-content .bravo-form-search-tour {
            padding: 230px 0 !important;
        }
        
        .bravo_wrap .bravo_header .content .header-left {
            width: 100% !important;
        }
        
        .bravo_wrap .bravo_header .content .header-right {
            width: 0% !important;
        }
        
        a.bravo-logo img {
            width: 80px !important;
        }
        
        .bravo_wrap .bravo_topbar {
            height: auto !important;
        }
    </style>
    <link href="{{ asset('frontend/libs/carousel-2/owl.carousel.css') }}" rel="stylesheet">

    <!--Start of Tawk.to Script-->
 
    <!--End of Tawk.to Script-->
</head>

<body class="">
    <div class="bravo_wrap">

        <style>
            .bravo_wrap .bravo_header {
                background: #1a2b48;
                height: 34px;
            }
            
            .bravo_wrap .bravo_topbar {
                padding: 15px 0;
                color: #333;
                padding-left: 10px;
            }
            
            .bravo_wrap .bravo_topbar .content .topbar-right {
                font-size: 12px;
                margin-left: 10px;
                padding: 20px;
            }
            
            .bravo_wrap .bravo_header .content .header-left .bravo-menu {
                padding-left: 90px;
                /* color: #fff; */
            }
            
            .bravo_wrap .bravo_header .content {
                background: #1a2b48;
                display: flex;
                align-items: center;
                height: 32px;
                font-size: 12px;
                font-weight: 300;
                text-align: center;
                margin-left: 222px;
                color: #fff;
            }
            
            .bravo_wrap .bravo_topbar {
                background-color: #fff;
            }
            
            .bravo_wrap .bravo_topbar {
                padding: 15px 0;
                color: #333;
                padding-left: 10px;
                /* margin-left: 10px; */
                height: 78px;
            }
            
            .bravo_wrap .bravo_topbar .content .socials {
                display: inline-block;
                /* border-right: 1px solid #374969; */
            }
            
            .bravo_wrap .bravo_topbar .content .topbar-items li a {
                color: #666;
                font-weight: 400;
                font-size: 12px;
                text-decoration: none;
            }
            
            .bravo_wrap .bravo_header .content .header-left .bravo-menu ul li a {
                padding: 35px 13px;
                display: inline-block;
                font-size: 12px;
                font-weight: 200;
                text-transform: uppercase;
                color: #fff;
                transition: all .3s;
            }
            
            .bravo_wrap .bravo_topbar .content .topbar-right {
                font-size: 12px;
                padding: 10px;
            }
            
            .bravo_wrap .bravo_header .content .header-left .bravo-menu ul li>.menu-dropdown li a {
                padding: 15px 0;
                display: block;
                font-size: 14px;
                color: #bbbaba;
            }
            
            .bravo_topbar .topbar-left .slogin {
                display: inline-block;
                font-weight: bolder;
                color: #d1d4da;
                font-size: 13px;
            }
            
            a.bravo-logo img {
                width: 166px !important;
            }
        </style>


@include('Frontend.nav')



        <div class="page-template-content">
            <div class="bravo-form-search-tour" style="background-image: url(' {{ asset('frontend/images/tur.jpg') }}' ) !important;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="text-heading text-center">Love where you&#039;re going</h1>
                            <div class="sub-heading text-center">Book incredible things to do around the world.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bravo-featured-item">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="featured-item">
                                <div class="image">
                                    <img src="images/check-mark.png" width="80px" height="80px" class="img-responsive">

                                </div>
                                <div class="content">
                                    <h4 class="title">
                                        FREE CANCELLATION
                                    </h4>
                                    <div class="desc">Free cancellation on most tours, just in case things don&#039;t go as planned.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="featured-item">
                                <div class="image">
                                    <img src="images/price-tag-icon-png-5.png" width="80px" height="80px" class="img-responsive">
                                </div>
                                <div class="content">
                                    <h4 class="title">
                                        BEST PRICE GUARANTEE
                                    </h4>
                                    <div class="desc">We price match within 72 hours of order confirmation.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="featured-item">
                                <div class="image">
                                    <img src="images/256-256-5b6faa0e271b8fbbf0985454aceb3bd6-receptionist.png" width="80px" height="80px" class="img-responsive">
                                </div>
                                <div class="content">
                                    <h4 class="title">
                                        Tour Guide System
                                    </h4>
                                    <div class="desc">We&#039;re always here to guide you in your trip.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="featured-item">
                                <div class="image">
                                    <img src="images/wifi.png" width="80px" height="80px" class="img-responsive">
                                </div>
                                <div class="content">
                                    <h4 class="title">
                                        WIFI 24/7
                                    </h4>
                                    <div class="desc">We provide free wifi sim card</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="featured-item">
                                <div class="image">
                                    <img src="images/download.png" width="80px" height="80px" class="img-responsive">
                                </div>
                                <div class="content">
                                    <h4 class="title">
                                        Guaranteed Departure
                                    </h4>
                                    <div class="desc">Up 2 PAX we grantee to depart any date</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="featured-item">
                                <div class="image">
                                    <img src="images/09-512.png" width="80px" height="80px" class="img-responsive">
                                </div>
                                <div class="content">
                                    <h4 class="title">
                                        Client Service
                                    </h4>
                                    <div class="desc">We&#039;re always here to help, before, during, and after your trip</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="bravo-list-locations">
                    <div class="title">
                        Top Destinations
                    </div>
                    <div class="list-item">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="destination-item ">
                                    <a href="destination-details.html">
                                        <div class="image" style="background: url('images/78412032.jpg')">
                                            <div class="effect">

                                            </div>
                                            <div class="content">
                                                <h4 class="title">Istanbul</h4>
                                                <div class="desc" style="background: #ec991f;">8 Hotels</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="destination-item ">
                                    <a href="destination-details.html">
                                        <div class="image" style="background: url('images/fotor_15183000873788.jpg')">
                                            <div class="effect">

                                            </div>
                                            <div class="content">
                                                <h4 class="title">Istanbul</h4>
                                                <div class="desc" style="background: #ec991f;">8 Hotels</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="destination-item ">
                                    <!-- <a href="http://cvc.vacations/hotel?location_id=20"> -->
                                    <div class="image" style="background: url('images/1899.jpg')">
                                        <div class="effect">

                                        </div>
                                        <div class="content">
                                            <h4 class="title">Istanbul</h4>
                                            <div class="desc" style="background: #ec991f;">8 Hotels</div>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="destination-item ">
                                    <!-- <a href="http://cvc.vacations/hotel?location_id=20"> -->
                                    <div class="image" style="background: url('images/0e.jpg')">
                                        <div class="effect">

                                        </div>
                                        <div class="content">
                                            <h4 class="title">Istanbul</h4>
                                            <div class="desc" style="background: #ec991f;">8 Hotels</div>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="destination-item ">
                                    <!-- <a href="http://cvc.vacations/hotel?location_id=20"> -->
                                    <div class="image" style="background: url('images/4562eef5d52823bc13e047449d0a5f34.jpg')">
                                        <div class="effect">

                                        </div>
                                        <div class="content">
                                            <h4 class="title">Istanbul</h4>
                                            <div class="desc" style="background: #ec991f;">8 Hotels</div>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                            </div>
       
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="bravo-list-tour">
                    <div class="title">
                        Turkey Packages
                    </div>
                    <div class="list-item">
                        <div class="owl-carousel">
                            <div class="item-tour ">
                                <div class="thumb-image ">
                                    <img src="images/izmir-vue.jpg">
                                    <!-- <a href="http://cvc.vacations/tour/11-day-egypt-complete-tour"></a> -->
                                    </a>
                                </div>
                                <div class="location">
                                </div>
                                <div class="item-title">
                                    <a href="11 Day Turkey Complete.html">
                                        <h4>
                                            11 Day Turkey Complete Tour
                                        </h4>
                                    </a>


                                </div>

                                <div class="info">
                                    <div class="duration">
                                        <i class="icofont-wall-clock"></i> Day
                                    </div>
                                    <div class="g-price">
                                        <div class="prefix">
                                            <i class="icofont-flash"></i>
                                            <span class="fr_text">from</span>
                                        </div>
                                        <div class="price">
                                            <span class="onsale"></span>
                                            <span class="text-price">$0</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-tour ">
                                <div class="thumb-image ">
                                    <img src="images/galata_tower.jpg">
                                    <!-- <a href="http://cvc.vacations/tour/7-day-standard-egypt-tour"> -->
                                    </a>
                                </div>
                                <div class="location">
                                </div>
                                <div class="item-title">
                                    <a href="7 Day Standard Tureky.html">
                                        <h4>
                                            7 Day Standard Turkey Tour
                                        </h4>
                                    </a>


                                </div>

                                <div class="info">
                                    <div class="duration">
                                        <i class="icofont-wall-clock"></i> Day
                                    </div>
                                    <div class="g-price">
                                        <div class="prefix">
                                            <i class="icofont-flash"></i>
                                            <span class="fr_text">from</span>
                                        </div>
                                        <div class="price">
                                            <span class="onsale"></span>
                                            <span class="text-price">$0</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-tour ">
                                <div class="thumb-image ">
                                    <img src="images/istanbul-destination-guide-turkey.jpg">
                                    <!-- <a href="http://cvc.vacations/tour/14-day-egypt-grand-tour"> -->

                                    </a>
                                </div>
                                <div class="location">
                                </div>
                                <div class="item-title">
                                    <a href="14 Day turkey Grand Tour.html">
                                        <h4>
                                            14 Day Turkey Grand Tour
                                        </h4>
                                    </a>


                                </div>

                                <div class="info">
                                    <div class="duration">
                                        <i class="icofont-wall-clock"></i> Day
                                    </div>
                                    <div class="g-price">
                                        <div class="prefix">
                                            <i class="icofont-flash"></i>
                                            <span class="fr_text">from</span>
                                        </div>
                                        <div class="price">
                                            <span class="onsale"></span>
                                            <span class="text-price">$0</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-tour ">
                                <div class="thumb-image ">
                                    <!-- <a href="http://cvc.vacations/tour/9-day-standard-with-red-sea-egypt-tour"> -->
                                    <img src="images/navegando-bosforo-estambul-atardecer.jpg">

                                    </a>
                                </div>
                                <div class="location">
                                </div>
                                <div class="item-title">
                                    <a href="9 Day Standard with Red Sea Turkey Tour.html">
                                        <h4>
                                            9 Day Standard Turkey
                                        </h4>
                                    </a>


                                </div>

                                <div class="info">
                                    <div class="duration">
                                        <i class="icofont-wall-clock"></i> Day
                                    </div>
                                    <div class="g-price">
                                        <div class="prefix">
                                            <i class="icofont-flash"></i>
                                            <span class="fr_text">from</span>
                                        </div>
                                        <div class="price">
                                            <span class="onsale"></span>
                                            <span class="text-price">$0</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="bravo-list-tour">
                    <div class="title">
                        Hotels
                    </div>
                    <div class="list-item">
                        <div class="owl-carousel">
                            <div class="item-tour ">
                                <div class="thumb-image ">
                                    <!-- <a href="http://cvc.vacations/hotel/four-season-nile-plaza-cairo"> -->

                                    <img src="images/14099845.jpg">
                                    </a>
                                </div>
                                <div class="location">
                                    <i class="icofont-paper-plane"></i>
                                </div>
                                <div class="item-title">
                                    <!-- <a href="http://cvc.vacations/hotel/four-season-nile-plaza-cairo"> -->
                                    kempinski-istanbul
                                    </a>
                                </div>
                                <div class="service-review tour-review">
                                    <div class="list-star">
                                        <ul class="booking-item-rating-stars">
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                        </ul>
                                        <div class="booking-item-rating-stars-active" style="">
                                            <ul class="booking-item-rating-stars">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="item-tour ">
                                <div class="thumb-image ">
                                    <!-- <a href="http://cvc.vacations/hotel/four-season-first-residence"> -->

                                    <img src="images/image.webp">
                                    </a>
                                </div>
                                <div class="location">
                                    <i class="icofont-paper-plane"></i>
                                </div>
                                <div class="item-title">
                                    <!-- <a href="http://cvc.vacations/hotel/four-season-first-residence"> -->
                                    Four Season istanbul
                                    </a>
                                </div>
                                <div class="service-review tour-review">
                                    <div class="list-star">
                                        <ul class="booking-item-rating-stars">
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                        </ul>
                                        <div class="booking-item-rating-stars-active" style="">
                                            <ul class="booking-item-rating-stars">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="item-tour ">
                                <div class="thumb-image ">
                                    <!-- <a href="http://cvc.vacations/hotel/sofitel-winter-palace-luxor"> -->
                                    <img src="images/0.jpg" style="height: 200px;">

                                    </a>
                                </div>
                                <div class="location">
                                    <i class="icofont-paper-plane"></i>
                                </div>
                                <div class="item-title">
                                    <!-- <a href="http://cvc.vacations/hotel/sofitel-winter-palace-luxor"> -->
                                    sofitel taksim hotel istanbul
                                    </a>
                                </div>
                                <div class="service-review tour-review">
                                    <div class="list-star">
                                        <ul class="booking-item-rating-stars">
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                        </ul>
                                        <div class="booking-item-rating-stars-active" style="">
                                            <ul class="booking-item-rating-stars">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="item-tour ">
                                <div class="thumb-image ">
                                    <!-- <a href="http://cvc.vacations/hotel/sofitel-winter-palace-luxor"> -->
                                    <img src="images/Sofitel_taksim-696x526.jpg">

                                    </a>
                                </div>
                                <div class="location">
                                    <i class="icofont-paper-plane"></i>
                                </div>
                                <div class="item-title">
                                    <!-- <a href="http://cvc.vacations/hotel/sofitel-winter-palace-luxor"> -->
                                    sofitel taksim hotel istanbul
                                    </a>
                                </div>
                                <div class="service-review tour-review">
                                    <div class="list-star">
                                        <ul class="booking-item-rating-stars">
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                        </ul>
                                        <div class="booking-item-rating-stars-active" style="">
                                            <ul class="booking-item-rating-stars">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>
      




                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endsection