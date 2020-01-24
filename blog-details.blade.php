@extends('Frontend.main')

@section('content')
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-154435778-1');
    </script>

    <link href="{{ asset('frontend/module/news/css/news.css')  }}" rel="stylesheet">
    <link href="https://cvc.vacations/css/app.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/libs/daterange/daterangepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/libs/ion_rangeslider/css/ion.rangeSlider.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/libs/fotorama/fotorama.css') }}" />

    <style id="custom-css">
        body {
            /* font-family: ;
            color: ;
            font-size: ;
            line-height: ;
            font-weight: ; */
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
            color: #5191fa !important;
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
            border-color: #5191fa !important;
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

            width: 166px !important;

        }

        .bravo_wrap .bravo_topbar {

            height: auto !important;
        }
    </style>
    <link href="libs/carousel-2/owl.carousel.css" rel="stylesheet">

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
        (function () {
            var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
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
                color: #888;
            }

            .bravo_topbar .topbar-left .slogin {
                display: inline-block;
            }
        </style>








@include('Frontend.nav')



        <div class="bravo-news">


            <div class="container text-center pt-10" style="color: #9a9a9a;padding-top: 21px;">
                <h3>
                </h3>
            </div>
            <div class="blog-breadcrumb hidden-xs">
                <div class="container">
                    <ul>
                        <li><a href="index.html"> Home</a></li>
                        <li class="">
                            <a href="blogo.html">News</a>
                        </li>
                        <li class="active">
                            Test
                        </li>
                    </ul>
                </div>
            </div>



            <div class="bravo_content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="article">
                                <div class="header">
                                </div>
                                <h2 class="title">Test</h2>
                                <div class="post-info">
                                    <ul>
                                        <li>
                                            <span> BY </span>

                                        </li>
                                        <li> DATE 12/16/2019 </li>
                                    </ul>
                                </div>
                                <div class="post-content">
                                  
                       
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam quos tempora
                                            rem vero harum laborum, officia dolorem alias suscipit in hic. Facilis
                                            similique saepe eos voluptas at, perspiciatis unde corporis.
                                        </p>
                        
                                 
                                </div>
                                <div class="space-between">
                                    <div class="share"> Share
                                        <a class="facebook share-item"
                                            href="https://www.facebook.com/sharer/sharer.php?u=https://cvc.vacations/news/morning-in-the-northern-sea&amp;title=Grand Egyptian Museum"
                                            target="_blank" original-title="Facebook"><i
                                                class="fa fa-facebook fa-lg"></i></a>
                                        <a class="twitter share-item"
                                            href="https://twitter.com/share?url=https://cvc.vacations/news/morning-in-the-northern-sea&amp;title=Grand Egyptian Museum"
                                            target="_blank" original-title="Twitter"><i
                                                class="fa fa-twitter fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>

                        </div>






                        
                        <div class="col-md-3">
                            <aside class="sidebar-right">
                                <div class="sidebar-widget widget_search">
                                    <form method="get" class="search" action="#">
                                        <input type="text" class="form-control" value="" name="s"
                                            placeholder="Search ...">
                                        <button type="submit" class="icon_search"></button>
                                    </form>
                                </div>
                                <div class="sidebar-widget">
                                    <div class="sidebar-title">
                                        <h4>About Us</h4>
                                    </div>
                                    <div class="textwidget">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </div>
                                </div>
                                <div class="sidebar-widget widget_bloglist">
                                    <div class="sidebar-title">
                                        <h4>Recent News</h4>
                                    </div>
                                    <ul class="thumb-list">
                                        <li>
                                            <div class="content">
                                                <h5 class="thumb-list-item-title">
                                                    <a href="#">test</a>
                                                </h5>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="content">
                                                <h5 class="thumb-list-item-title">
                                                    <a href="#">Test</a>
                                                </h5>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="sidebar-widget widget_category">
                                    <div class="sidebar-title">
                                        <h4>Categories</h4>
                                    </div>
                                    <ul>
                                    </ul>
                                </div>
                                <div class="sidebar-widget widget_tag_cloud">
                                    <div class="sidebar-title">
                                        <h4>Tags</h4>
                                    </div>
                                    <div class="tagcloud">
                                        <ul>
                                            <a href="#" class="tag-cloud-link">test</a>
                                        </ul>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endsection