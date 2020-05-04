<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>@yield('title')</title>

<!-- Fav Icon -->
<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,600,600i,700,700i&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="{{ asset('assets/frontend') }}/css/font-awesome-all.css" rel="stylesheet">
<link href="{{ asset('assets/frontend') }}/css/flaticon.css" rel="stylesheet">
<link href="{{ asset('assets/frontend') }}/css/owl.css" rel="stylesheet">
<link href="{{ asset('assets/frontend') }}/css/bootstrap.css" rel="stylesheet">
<link href="{{ asset('assets/frontend') }}/css/jquery.fancybox.min.css" rel="stylesheet">
<link href="{{ asset('assets/frontend') }}/css/animate.css" rel="stylesheet">
<link href="{{ asset('assets/frontend') }}/css/imagebg.css" rel="stylesheet">
<link href="{{ asset('assets/frontend') }}/css/global.css" rel="stylesheet">
<link href="{{ asset('assets/frontend') }}/css/header.css" rel="stylesheet">
<link href="{{ asset('assets/frontend') }}/css/color.css" rel="stylesheet">
<link href="{{ asset('assets/frontend') }}/css/style.css" rel="stylesheet">
<link href="{{ asset('assets/frontend') }}/css/responsive.css" rel="stylesheet">

</head>

<!-- page wrapper -->
<body class="boxed_wrapper">

    <!-- preloader -->
    <div class="preloader">
        <div id="handle-preloader" class="handle-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="N" class="letters-loading">
                        G
                    </span>
                    <span data-text-preloader="A" class="letters-loading">
                        I
                    </span>
                    <span data-text-preloader="X" class="letters-loading">
                        N
                    </span>
                    <span data-text-preloader="L" class="letters-loading">
                        J
                    </span>
                    <span data-text-preloader="Y" class="letters-loading">
                        A
                    </span>
                    <span data-text-preloader="Y" class="letters-loading">
                        L
                    </span>
                </div>
            </div>  
        </div>
    </div>
    <!-- preloader end -->


    <!-- search-popup -->
    <div id="search-popup" class="search-popup">
        <div class="close-search"><span>Close</span></div>
        <div class="popup-inner">
            <div class="overlay-layer"></div>
            <div class="search-form">
                <form method="post" action="index.html">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                            <input type="submit" value="Search Now!" class="theme-btn style-four">
                        </fieldset>
                    </div>
                </form>
                <h3>Recent Search Keywords</h3>
                <ul class="recent-searches">
                    <li><a href="index.html">Finance</a></li>
                    <li><a href="index.html">Idea</a></li>
                    <li><a href="index.html">Service</a></li>
                    <li><a href="index.html">Growth</a></li>
                    <li><a href="index.html">Plan</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- search-popup end -->


    <!-- main header -->
    <header class="main-header style-one home-1">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-12 col-sm-12 logo-column">
                    <div class="logo-box style-two">
                        <figure class="logo">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('assets/backend') }}/images/logo.png" alt="Sistem Pakar Ginjal" width="100">
                            </a>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12 col-sm-12 outer-column">
                    <div class="outer-box">
                        <div class="header-top clearfix">
                            <div class="top-right pull-right clearfix">

                                <div class="support">
                                    <i class="flaticon-music"></i>
                                    <span>Start your project today</span>
                                    <a href="tel:0055567890">+62 815 485 76 555</a>
                                </div>

                                <ul class="social-links clearfix">
                                    <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="index.html"><i class="fab fa-skype"></i></a></li>
                                </ul>

                                <div class="search-box-outer">
                                    <form action="index.html" method="post" class="search-btn">
                                        <button type="button" class="search-toggler"><i class="flaticon-search"></i>Search</button>
                                    </form>
                                </div>

                            </div>
                        </div>
                        <div class="header-upper clearfix">
                            <div class="menu-area pull-right clearfix">
                                <!--Mobile Navigation Toggler-->
                                <div class="mobile-nav-toggler">
                                    <i class="icon-bar"></i>
                                    <i class="icon-bar"></i>
                                    <i class="icon-bar"></i>
                                </div>
                                <nav class="main-menu navbar-expand-md navbar-light">
                                    <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                        <ul class="navigation clearfix">
                                            <li class="current dropdown"><a href="{{ url('/') }}">Home</a></li>
                                            <li class="current dropdown"><a href="{{ url('/blog') }}">Blog</a></li>
                                            <li class="current dropdown"><a href="{{ url('/login') }}">Login</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--sticky Header-->
        <div class="sticky-header">
            <div class="auto-container clearfix">

                <figure class="logo-box">
                    <a href="index.html">
                        <img src="{{ asset('assets/backend') }}/images/logo.png" width="50" alt="">
                    </a>
                </figure>
                
                <div class="menu-area">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- main-header end -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><i class="fas fa-times"></i></div>
        
        <nav class="menu-box">

            <div class="nav-logo">
                <a href="index.html">
                    <img src="{{ asset('assets/backend') }}/images/logo.png" width="150" alt="" title="">
                </a>
            </div>

            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>

            <div class="contact-info">
                <h4>Contact Info</h4>
                <ul>
                    <li>Chicago 12, Melborne City, USA</li>
                    <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                    <li><a href="mailto:info@example.com">info@example.com</a></li>
                </ul>
            </div>

            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                    <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                    <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                    <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
                </ul>
            </div>
        </nav>
    </div><!-- End Mobile Menu -->


    @yield('content')


    <!-- main-footer -->
    <footer class="main-footer">
        <div class="footer-top">
            <div class="auto-container">
                <div class="widget-section">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget contact-widget">
                                <div class="widget-title">
                                    <h3>Contact Us</h3>
                                    <div class="decor" style="background-image: url({{ asset('assets/frontend') }}/images/icons/decor-3.png);"></div>
                                </div>
                                <div class="widget-content">
                                    <div class="box">
                                        <h5>Office Location</h5>
                                        <p>124, Queens walk 2nd cross newyork 5241</p>
                                    </div>
                                    <div class="box">
                                        <h5>Quick Contact</h5>
                                        <ul class="clearfix">
                                            <li><i class="flaticon-music"></i><a href="tel:0055567890">+00 555 67 890</a></li>
                                            <li><i class="flaticon-gmail"></i><a href="mailto:supportteam@info.com">supportteam@info.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h3>Useful Links</h3>
                                    <div class="decor" style="background-image: url({{ asset('assets/frontend') }}/images/icons/decor-3.png);"></div>
                                </div>
                                <div class="widget-content">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <ul class="links clearfix">
                                                <li><a href="index.html">Data Science</a></li>
                                                <li><a href="index.html">Ware Housing</a></li>
                                                <li><a href="index.html">Analytics</a></li>
                                                <li><a href="index.html">Visualisation</a></li>
                                                <li><a href="index.html">Migration</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <ul class="links clearfix">
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="index.html">Company</a></li>
                                                <li><a href="index.html">Services</a></li>
                                                <li><a href="index.html">Works</a></li>
                                                <li><a href="index.html">Contact</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 footer-column">
                            <div class="footer-widget about-widget">
                                <div class="widget-title">
                                    <h3>About Company</h3>
                                    <div class="decor" style="background-image: url({{ asset('assets/frontend') }}/images/icons/decor-3.png);"></div>
                                </div>
                                <div class="widget-content">
                                    <div class="box">
                                        <figure class="logo"><a href="index.html"><img src="{{ asset('assets/frontend') }}/images/footer-logo.png" alt=""></a></figure>
                                        <div class="text">
                                            <p>Our goal is to help our companies maintain achieve best class positions their respective industries & our team works occur that pleasures have to be repudiated.</p>
                                        </div>
                                    </div>
                                    <div class="subscribe-box">
                                        <form action="index.html" method="post">
                                            <div class="form-group">
                                                <input type="email" name="email" placeholder="Email Address..." required="">
                                                <button type="submit" class="theme-btn style-one">Subscribe Us</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom style-one">
            <div class="auto-container clearfix">
                <div class="copyright pull-left">
                    <p>Copyright &copy; <a href="index.html">Naxly</a>, All Rights Reserved.</p>
                </div>
                <ul class="footer-nav pull-right">
                    <li><a href="index.html">Privacy Policy</a></li>
                    <li><a href="index.html">Terms & Conditions</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- main-footer end -->


<!--Scroll to top-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="fas fa-angle-up"></span>
</button>


<!-- jequery plugins -->
<script src="{{ asset('assets/frontend') }}/js/jquery.js"></script>
<script src="{{ asset('assets/frontend') }}/js/popper.min.js"></script>
<script src="{{ asset('assets/frontend') }}/js/bootstrap.min.js"></script>
<script src="{{ asset('assets/frontend') }}/js/owl.js"></script>
<script src="{{ asset('assets/frontend') }}/js/wow.js"></script>
<script src="{{ asset('assets/frontend') }}/js/validation.js"></script>
<script src="{{ asset('assets/frontend') }}/js/jquery.fancybox.js"></script>
<script src="{{ asset('assets/frontend') }}/js/appear.js"></script>
<script src="{{ asset('assets/frontend') }}/js/jquery.countTo.js"></script>
<script src="{{ asset('assets/frontend') }}/js/scrollbar.js"></script>
<script src="{{ asset('assets/frontend') }}/js/tilt.jquery.js"></script>

<!-- main-js -->
<script src="{{ asset('assets/frontend') }}/js/script.js"></script>

</body><!-- End of .page_wrapper -->
</html>
