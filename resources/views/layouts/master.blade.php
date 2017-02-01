<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="images/favicon.html">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.html">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.html">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.html">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/responsive.css" type="text/css">

    <!-- / color -->
    <link class="colors_style" rel="stylesheet" href="css/color_style/color_10.css" type="text/css"/>
    <!-- / google font -->
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
    <!-- / settings_box -->
    <link rel="stylesheet" href="settings_box/settings_box.css" type="text/css">

    <!-- Load jQuery
    ================================================== -->
    <script type="text/javascript" src="js/modernizr.custom.js"></script>
    <script type="text/javascript" src="js/device.min.js"></script>

    @yield('head')
</head>
<body class="bg-1">
<div id="main" class="container">
    <header id="header">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <div class="header-item bg-0">
                    <div class="line">
                        <a href="index-2.html" id="header-logo" class="site-logo">University</a>

                        <a href="#" class="custom-btn colored">Apply to University</a>
                    </div>

                    <div class="line">
                        <p id="header-slogan">University of modern science</p>

                        <div class="social-btn">
                            <a class="icon-twitter-bird" href="#"></a>
                            <a class="icon-linkedin-rect" href="#"></a>
                            <a class="icon-facebook-rect" href="#"></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-md-6">
                <div class="header-item bg-4">
                    <a id="menu-open" class="">Open Menu<span></span></a>
                    {{--<a id="menu-open" class="" href="javascript:void(0);">Open Menu<span></span></a>--}}

                    <nav id="navigation" class="header-menu">
                        <ul>
                            <li>
                                <a href="faculties_1.html">Faculties</a>

                                <div class="dropdown">
                                    <ul class="bg-7">
                                        <li><a href="faculties_1.html">Faculties 1</a></li>
                                        <li><a href="faculties_2.html">Faculties 2</a></li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="academics.html">Academics</a>
                            </li>

                            <li>
                                <a href="courses.html">Courses</a>

                                <div class="dropdown">
                                    <ul class="bg-7">
                                        <li><a href="courses.html">Courses</a></li>
                                        <li><a href="courses_details.html">Courses Details</a></li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="about.html">Pages</a>

                                <div class="dropdown">
                                    <ul class="bg-7">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="index_2.html">Home 2</a></li>
                                        <li><a href="login_2.html">Login 2</a></li>
                                        <li><a href="typography.html">Typography</a></li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="contact.html">Contact</a>
                            </li>
                        </ul>
                    </nav>

                    <nav id="submenu" class="header-menu bg-2">
                        <ul>
                            <li><a href="campus_locations.html">Campus and locations</a></li>
                            <li class="current"><a href="directory.html">Directory</a></li>
                            <li><a href="study_advice.html">Study advice</a></li>
                            <li><a href="login.html"><i class="icon-user"></i>Login</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <section class="main-content">
        <div class="page-title P30">
    @yield('body')
            <div class="row">
                <footer id="footer">
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="footer-item P30 bg-4">
                            <a href="index-2.html" id="footer-logo" class="site-logo">University</a>

                            <p id="footer-slogan">N°1 american University of<br/>modern science</p>

                            <div class="social-btn el-bottom">
                                <a class="icon-twitter-bird" href="#"></a>
                                <a class="icon-linkedin-rect" href="#"></a>
                                <a class="icon-facebook-rect" href="#"></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-2">
                        <div class="footer-item P30 bg-4">
                            <h5>
                                <small>Get in Touch</small>
                            </h5>

                            <p>Rockefeller Center, 45 Rockefeller Plaza, New York, NY, USA</p>

                            <p class="el-bottom">
                                P:+1 123 444 5678<br/>
                                E: <a href="mailto:info@yoursite.com">info@yoursite.com</a>
                            </p>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-2">
                        <div class="footer-item P30 bg-2">
                            <h5>
                                <small>Our Twitter</small>
                            </h5>

                            <p>Elegant tailored work society into ornamental opera diplomatatic</p>

                            <p class="el-bottom"><a href="#">Follow Us</a></p>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="footer-item footer-item_subscribe P30 bg-1">
                            <h5>
                                <small>Newsletter Subscription</small>
                            </h5>

                            <form id="footer-form" action="#">
                                <p>Please subscribe to our University newsletters</p>

                                <input type="text"/>

                                <button type="submit"><i class="arrow"></i></button>
                            </form>

                            <p class="el-bottom">&copy; 2013 University Site Name.All rights reserved</p>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </section>

    <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="js/jquery.matchHeight-min.js"></script>
    <script type="text/javascript" src="js/jquery.superslides.min.js"></script>
    <script type="text/javascript" src="js/jquery.fs.boxer.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.js"></script>
    <script type="text/javascript" src="js/jquery.main.js"></script>
    <!-- / settings_box -->
    <script type="text/javascript" src="settings_box/settings_box.js"></script>
</div>
</body>
</html>
