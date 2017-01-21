@extends('layouts.master')
@section('title')
    dashboard
@endsection
@section('head')

@endsection
@section('body')

    <div id="main" class="container">

        <section class="main-content">
            <div class="page-title P30">
                <h2 class="fl-l">Directory</h2>
                {{--hereeee--}}
                <a class="share-link fl-r" href="#"><i class="icon-export"></i>Share</a>
            </div>

            <div class="row matchHeight-container">
                <div class="info-container">
                    <div class="col-xs-12 col-md-6">
                        <div class="info-item box P30 bg-7">
                            <h3 class="icon-graduation-cap"><span>GET YOURSELF REGISTERED</span></h3>
                            {{--HEREEEE--}}
                            <form class="info-form" action='{{route('user_registration')}}'>
                                <div class="row">
                                    <div class="row">
                                        <label>Enter your name</label></div>

                                    <div class="col-xs-12 col-md-6">
                                        <input type="text" placeholder="First Name" id="first_name" name="first_name"/>
                                    </div>

                                    <div class="col-xs-12 col-md-6">
                                        <input type="text" placeholder="Last Name" id="last_name"name="last_name"/>
                                    </div>
                                </div>


                                <div class="row">
                                    <label>Select your batch</label></div>

                                <div class="row">
                                    <div class="dropdown">
                                        <select style="color: #0d3625" name="batch" id="batch"
                                                data-placeholder="batch">

                                            @foreach($batches as $batch)
                                                <option value={{$batch->batch_name}}>
                                                    batch {{$batch->batch_name}} </option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>


                                <div class="row">

                                    <div class="row">
                                        <label>Enter your home address</label></div>

                                    <div class="col-xs-12 col-md-6">
                                        <input type="text" placeholder="Address line 1" id="address_1" name="address1"required/>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <input type="text" placeholder="Address line 2" id="address_2" name="address2"/>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <input type="text" placeholder="City" id="city" name="city" required/>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <input type="text" placeholder="Country" id="country" name="country" required/>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="row">
                                        <label>Enter your professional details</label></div>
                                    <div class="col-xs-12 col-md-6">
                                        <input type="text" placeholder="Profession" id="profession" name="profession" required/>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <input type="text" placeholder="Organization name" id="organization_name" name="organization_name" required/>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <input type="text" placeholder="Organization_address" id="organization_address" name="organization_address"/>
                                    </div>

                                </div>
                                <button class="base-text-color" type="submit">Register</button>
                            </form>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-6">
                        <div class="video-block box">
                            <div class="row">
                                <div class="col-xs-12 col-sm-3 col-md-5 col-lg-4">
                                    <div class="column-description P30 bg-4 corner">
                                        <h5>University Resources Spotlight</h5>

                                        <p>
                                            University rare opulent theatre becoming into property from auction
                                            gentlemen. Society symbolizing upper to panoramic enthusiast politically
                                            educated.
                                        </p>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-9 col-md-7 col-lg-8">
                                    <div class="video box" style="background-image: url(images/video_bg_3.jpg);">
                                        <a class="video-btn" href="http://player.vimeo.com/video/95974049"
                                           data-gallery="portfolio">Play Video</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


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
        </section>
    </div>

    <section id="mobile-menu-container">
        <a href="index_2.html" id="header-logo_2" class="site-logo">University</a>

        <a id="menu-close">Close Menu</a>
        <a id="menu-close" href="javascript:void(0);">Close Menu</a>

        <nav id="mobile-navigation" class="mobile-menu">
            <ul>
                <li>
                    <a href="#">Faculties</a>

                    <div class="dropdown">
                        <ul>
                            <li><a href="faculties_1.html">Faculties 1</a></li>
                            <li><a href="faculties_2.html">Faculties 2</a></li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="academics.html">Academics</a>
                </li>

                <li>
                    <a href="#">Courses</a>

                    <div class="dropdown">
                        <ul>
                            <li><a href="courses.html">Courses</a></li>
                            <li><a href="courses_details.html">Courses Details</a></li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#">Pages</a>

                    <div class="dropdown">
                        <ul>
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

        <nav id="mobile-submenu">
            <ul>
                <li><a href="campus_locations.html">Campus and locations</a></li>
                <li class="current"><a href="directory.html">Directory</a></li>
                <li><a href="study_advice.html">Study advice</a></li>
                <li><a href="login.html"><i class="icon-user"></i>Login</a></li>
            </ul>
        </nav>
    </section>



@endsection