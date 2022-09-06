<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="interior service , Architecture & Interior Designer" />
<meta name="keywords" content="interior service , Architecture & Interior Designer">
<meta name="author" content="https://www.designekta.com/" />
<meta name="viewport" content=" width=device-width, initial-scale=1, maximum-scale=2" />

<title>Ribye - Architecture Html for Interior Designer</title>

@include('favicon')
<link rel="stylesheet" type="text/css" href="{{asset('theme/css/bootstrap.min.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('theme/css/animate.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('theme/css/flaticon.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('theme/css/font-awesome.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('theme/css/CerebriSans.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('theme/css/themify-icons.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('theme/css/slick.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('theme/css/prettyPhoto.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('theme/css/twentytwenty.css')}}"/>
{{-- <link rel="stylesheet" type="text/css" href="{{asset('theme/css/shortcodes.css')}}"/> --}}
<link rel="stylesheet" type="text/css" href="{{asset('theme/css/shortcodes-1.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('theme/css/main-1.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('theme/css/megamenu.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('theme/css/responsive.css')}}"/>
<link rel='stylesheet' id='rs-plugin-settings-css' href="{{asset('theme/revolution/css/rs6.css')}}">
</head>

<body class="ttm-one-page-site">

    <!--page start-->
    <div class="page ttm-bgcolor-grey">

        @include('front.header')


        @yield('content')


        <!--footer start-->
        <footer class="footer ttm-bg ttm-bgcolor-darkgrey widget-footer clearfix">
            <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
            <br><br>
                <div class="first-footer">
                    <div class="container">
                        <div class="row">
                            <div class="widget-area col-xs-12 col-sm-12 col-md-6 col-lg-4">
                                <aside class="widget widget-text">
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box icon-align-before-content">
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-skincolor ttm-icon_element-style-round ttm-icon_element-size-sm">
                                                <i class="fa fa-phone"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-desc">
                                                <h3>+255 456 78910 / 11</h3>
                                                <p>Have a question? call us now</p>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                </aside>
                            </div>
                            <div class="widget-area col-xs-12 col-sm-12 col-md-6 col-lg-4">
                                <aside class="widget widget-text">
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box icon-align-before-content">
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-skincolor ttm-icon_element-style-round ttm-icon_element-size-sm">
                                                <i class="fa fa-envelope-o"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-desc">
                                                <h3>info@ribye.co.ug</h3>
                                                <p>Need support? Drop us an email</p>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                </aside>
                            </div>
                            <div class="widget-area col-xs-12 col-sm-12 col-md-6 col-lg-4">
                                <aside class="widget widget-text">
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box icon-align-before-content">
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-skincolor ttm-icon_element-style-round ttm-icon_element-size-sm">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-desc">
                                                <h3>Mon – Sat 07:00 – 21:00</h3>
                                                <p>We are open on</p>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="second-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                                <div class="widget widget_nav_menu clearfix">
                                   <h3 class="widget-title">Quick Links</h3>
                                    <ul id="menu-footer-service-link" class="menu">
                                        <li><a href="#">Make Appointments</a></li>
                                        <li><a href="#">Before & After</a></li>
                                        <li><a href="#">Customer Treatments</a></li>
                                        <li><a href="#">Our Special Team</a></li>
                                        <li><a href="#">Departments Services</a></li>
                                        <li><a href="#">About our Firm</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 widget-area">
                                <div class="widget widget_text clearfix">
                                    <div class="textwidget widget-text text-center ml_10 res-991-ml-0 mr-35 res-991-mr-0">
                                        <div class="footer-logo">
                                            <img width="205" height="65" id="footer-logo-img" class="img-fluid" src="{{asset('theme/images/Ribye-white.png')}}" alt="Ribye Designers">
                                        </div>
                                        <p>Ribye Designers design consultancy firm that brings sensitivity to the design top hotels, offices & homes around the world.</p>
                                        <a class="ttm-btn ttm-btn-size-md btn-inline ttm-icon-btn-right ttm-btn-color-skincolor" href="renewable-resource.html" tabindex="0">READ MORE<i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="footer-box">
                                    <div class="ttm-textcolor-white text-center">
                                        <h3>Sign Up To Get Latest Updates</h3>
                                        <form id="subscribe-form" class="newsletter-form" method="post" action="#" data-mailchimp="true">
                                            <div class="mailchimp-inputbox clearfix" id="subscribe-content">
                                                <p><input type="email" name="email" placeholder="Your Email Address..." required=""></p>
                                                <p><button class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor" type="submit">SUBMIT NOW</button></p>
                                            </div>
                                            <div id="subscribe-msg"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 widget-area">
                                <div class="widget widget_timing clearfix">
                                   <h3 class="widget-title">Our Time Schedule</h3>
                                   <ul class="ttm-pricelist-block"><li>Mon to Fri
                                        <span class="service-price">7:00 am to 18:00</span></li><li>Saturday
                                        <span class="service-price">9:00 am to 18:00</span></li><li>Sunday
                                        <span class="service-price">Closed</span></li>
                                    </ul>
                                    <br>
                                    <h3 class="widget-title">Follow Us On</h3>
                                    <ul class="social-icons square">
                                        <li>
                                            <a class="tooltip-bottom" target="_blank" href="#" data-tooltip="Facebook"><i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="tooltip-bottom" target="_blank" href="#" data-tooltip="Twitter"><i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="tooltip-bottom" target="_blank" href="#" data-tooltip="LinkedIn"><i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="tooltip-bottom" target="_blank" href="#" data-tooltip="Instagram"><i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="tooltip-bottom" target="_blank" href="#" data-tooltip="youtube"><i class="fa fa-youtube"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-footer-text">
                    <div class="container">
                        <div class="row copyright">
                            <div class="col-md-12">
                                <div class="">
                                    <span>Copyright © {{date('Y')}} Ribye All Rights Reserved | Powered by &nbsp;<a href="#" class="ttm-textcolor-skincolor">Designekta Studios</a></span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <ul id="menu-footer-menu" class="footer-nav-menu">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Privacy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
        </footer>
        <!--footer end-->

        <!--back-to-top start-->
        <a id="totop" href="#top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!--back-to-top end-->

</div><!-- page end -->


    <!-- Javascript -->

    <script src="{{asset('theme/js/jquery.min.js')}}"></script>
    <script src="{{asset('theme/js/jquery-migrate-1.4.1.min.js')}}"></script>
    <script src="{{asset('theme/js/tether.min.js')}}"></script>
    <script src="{{asset('theme/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('theme/js/jquery.easing.js')}}"></script>
    <script src="{{asset('theme/js/jquery-waypoints.js')}}"></script>
    <script src="{{asset('theme/js/jquery-validate.js')}}"></script>
    <script src="{{asset('theme/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('theme/js/slick.min.js')}}"></script>
    <script src="{{asset('theme/js/numinate.min.js')}}"></script>
    <script src="{{asset('theme/js/imagesloaded.min.js')}}"></script>
    <script src="{{asset('theme/js/jquery-isotope.js')}}"></script>
    <script src="{{asset('theme/js/jquery.event.move.js')}}"></script>
    <script src="{{asset('theme/js/jquery.twentytwenty.js')}}"></script>
    <script src="{{asset('theme/js/circle-progress.min.js')}}"></script>
    <script src="{{asset('theme/js/main.js')}}"></script>

    <!-- Revolution Slider -->
    <script src="{{asset('theme/revolution/js/slider.js')}}"></script>
    <script src="{{asset('theme/revolution/js/revolution.tools.min.js')}}"></script>
    <script src="{{asset('theme/revolution/js/rs6.min.js')}}"></script>
    <!-- Javascript end-->


</body>

</html>
