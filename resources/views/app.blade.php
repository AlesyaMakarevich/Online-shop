<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />    <meta name="author" content="INSPIRO" />
    <meta name="description" content="Themeforest Template Polo, html template">
    <link rel="icon" type="image/png" href={{asset("images/favicon.png")}}>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>Online shop</title>
    <!-- Stylesheets & Fonts -->
    <link href={{asset("css/plugins.css")}} rel="stylesheet">
    <link href={{asset("css/style.css")}} rel="stylesheet">
</head>

<body>
<!-- Body Inner -->
<div class="body-inner">
    <!-- Header -->
    <header id="header" data-fullwidth="true" class="header-alternative">
        <div class="header-inner">
            <div class="container">
                <!--Logo-->
                <div id="logo">
                    <a href={{route('main')}}>
                        <img src={{asset("images/logo-circle.png")}} class="logo-default">
                        <img src={{asset("images/logo-circle-dark.png")}} class="logo-dark">
                    </a>
                </div>
                <!--End: Logo-->
                <!-- Search -->
                <div id="search"><a id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i class="icon-x"></i></a>
                    <form class="search-form" action="search-results-page.html" method="get">
                        <input class="form-control" name="q" type="text" placeholder="Type & Search..." />
                        <span class="text-muted">Start typing & press "Enter" or "ESC" to close</span>
                    </form>
                </div>
                <!-- end: search -->
                <!--Header Extras-->
                <div class="header-extras">
                    <ul>
                        <li>
                            <a id="btn-search" href="#"> <i class="icon-search"></i></a>
                        </li>
                        <li>
                            <div class="p-dropdown">
                                <a href="#"><i class="icon-globe"></i><span>EN</span></a>
                                <ul class="p-dropdown-content">
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">Spanish</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <!--end: Header Extras-->
                <!--Navigation Resposnive Trigger-->
                <div id="mainMenu-trigger">
                    <a class="lines-button x"><span class="lines"></span></a>
                </div>
                <!--end: Navigation Resposnive Trigger-->
                <!--Navigation-->
                <div id="mainMenu" class="menu-center menu-lowercase">
                    <div class="container">
                        <nav>
                            <ul>
                                <li><a href={{route('main')}}>Home</a></li>
                                <li><a href={{route('about')}}>About us</a></li>
                                <li><a href={{route('contacts')}}>Contacts</a></li>
                                <li><a href={{route('products')}}>Products</a></li>
                                <li><a href={{route('cart')}}>Shopping cart</a></li>
                                <li><a href={{route('login')}}>Sign in</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!--end: Navigation-->
            </div>
        </div>
    </header>
    <!-- end: Header -->
    @yield('content')
    <!-- Footer -->
    <footer id="footer" class="bg-transparent">
        <div class="footer-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="icon-box effect small clean">
                            <div class="icon">
                                <a href="#"><i class="icon-clock"></i></a>
                            </div>
                            <h3>Working Days</h3>
                            <p><strong>Monday - Friday</strong>
                                <br>10:00 AM - 11:00 PM</p>
                            <p><strong>Saturday - Sunday</strong>
                                <br>10:00 AM - 04:00 PM</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="icon-box effect small clean">
                            <div class="icon">
                                <a href="#"><i class="fas fa-map-marker-alt"></i></a>
                            </div>
                            <h3>Caffe Location</h3>
                            <p><strong>Caffe Address:</strong>
                                <br> 795 Folsom Ave, Suite 600
                                <br> San Francisco, CA 94107
                                <br>
                                <br>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="icon-box effect small clean">
                            <div class="icon">
                                <a href="#"><i class="icon-phone"></i></a>
                            </div>
                            <h3>Caffe Contact</h3>
                            <p><strong>Phone:</strong>
                                <br> (123) 456-7890
                                <br> (987) 654-3210
                                <br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end: Footer -->
</div> <!-- end: Body Inner -->
<!-- Scroll top -->
<a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
<!--Plugins-->
<script src="public/js/jquery.js"></script>
<script src="public/js/plugins.js"></script>
<!--Template functions-->
<script src="public/js/functions.js"></script>
</body>

</html>
