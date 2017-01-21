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
                            <form class="info-form" action="#">
                                <div class="row">
                                    <div class="row">
                                        <label>Enter your name</label></div>

                                    <div class="col-xs-12 col-md-6">
                                        <input type="text" placeholder="First Name" id="first_name"/>
                                    </div>

                                    <div class="col-xs-12 col-md-6">
                                        <input type="text" placeholder="Last Name" id="last_name"/>
                                    </div>
                                </div>


                                <div class="row">
                                    <label>Select your batch</label></div>

                                <div class="col-xs-12 col-md-6">
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
                                        <input type="text" placeholder="Address line 1" id="address_1 " required/>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <input type="text" placeholder="Address line 2" id="address_2"/>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <input type="text" placeholder="City" id="city" required/>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <input type="text" placeholder="Country" id="country" required/>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="row">
                                        <label>Enter your professional details</label></div>
                                    <div class="col-xs-12 col-md-6">
                                        <input type="text" placeholder="Profession" id="profession" required/>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <input type="text" placeholder="Organization name" id="organization_name" required/>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <input type="text" placeholder="Organization_address" id="organization_address"/>
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
                <div class="col-xs-12 col-md-6">
                    <div class="post-item P30 bg-0 corner">
                        <h2 class="title">Faculty of Engineering &amp; Computing</h2>

                        <p>
                            Architectural pleasure university politically echelon portfolio de-jour brilliant private
                            engraved. Gilded is the best butler blissfull investments de-jour tailored presidential. Art
                            career brilliant opera society polo presidential. Stockmarket grande cruise solid gilded
                            travel.
                        </p>

                        <p>
                            With career on status townhome rare. Impresario suite university penthouse noble charity
                            gilded designer reserved university. Cutlery caviar enthusiast wishlist on rich. Monogram
                            aristocratic marquis guests lifestyle blissfull benefactor housekeeping expensive classical
                            club benefiting. Tailored architectural a yacht acumen benefactor sheer. Architectural
                            pleasure elegant stockmarket ladies.Gilded pleasure philanthropic upper educated grande
                            symbolizing cruise architectural genuine.
                        </p>

                        <ul>
                            <li><a href="#">School of Computing</a></li>
                            <li><a href="#">School of Electronic Engineering</a></li>
                            <li><a href="#">School of Mechanical and Manufacturing Engineering</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xs-12 col-md-6">
                    <div class="row">
                        <div class="col-xs-12 col-sm-3 col-md-5 col-lg-4">
                            <div class="column-description P30 bg-2 corner">
                                <h5>Key People</h5>

                                <div class="text">
                                    <p>
                                        Impresario designer in board suite respectable gentlemen cuisine. Manor career
                                        symlizing pearl salon designer ilk yacht sterling world manor. Sheer career to
                                        brokerage. Portfolio topiary pearl dignified on blissfull solid class champagne
                                        handmade symbolizing.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-9 col-md-7 col-lg-8">
                            <div class="col-xs-3 col-sm-4 col-lg-3 team-img-container">
                                <img class="img-responsive" src="images/users/s1.jpg" alt="demo"/>
                            </div>

                            <div class="col-xs-3 col-sm-4 col-lg-3 team-img-container">
                                <img class="img-responsive" src="images/users/s2.jpg" alt="demo"/>
                            </div>

                            <div class="col-xs-3 col-sm-4 col-lg-3 team-img-container">
                                <img class="img-responsive" src="images/users/s3.jpg" alt="demo"/>
                            </div>

                            <div class="col-xs-3 col-sm-4 col-lg-3 team-img-container">
                                <img class="img-responsive" src="images/users/s4.jpg" alt="demo"/>
                            </div>

                            <div class="col-xs-3 col-sm-4 col-lg-3 team-img-container">
                                <img class="img-responsive" src="images/users/b1.jpg" alt="demo"/>
                            </div>

                            <div class="col-xs-3 col-sm-8 col-lg-6 col-lg-offset-3 team-img-container">
                                <img class="img-responsive" src="images/users/b2.jpg" alt="demo"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <div class="post-item P30 bg-0 corner">
                        <h2 class="title">Faculty of Science &amp; Health</h2>

                        <p>
                            Engraved opera respectable engraved rich butler impresario sheer theatre cruise rich.
                            Stockmarket topiary gilded. Member penthouse doctoral enthusiast brokerage marquis wine
                            classical. Blissfull vacation gifted cigar blissfull silk. Designer cruise polo classical
                            upper. Theatre a gold.
                        </p>

                        <p>
                            In crafted member travel symbolizing handmade le fine noble elegant world. Solid benefiting
                            cruise housekeeping pearl impresario wishlist monogram. Investments classical cruise
                            portfolio echelon pedigree symphony le noble manor. On educated benefiting genuine inspiring
                            suite gem high-rise.
                        </p>

                        <ul>
                            <li><a href="#">School of Biotechnology</a></li>
                            <li><a href="#">School of Chemical Sciences</a></li>
                            <li><a href="#">School of Health &amp; Human Performance</a></li>
                            <li><a href="#">School of Mathematical Sciences</a></li>
                            <li><a href="#">and Human sciences/index.shtml School of Nursing and Human Sciences</a></li>
                            <li><a href="#">School of Physical Sciences</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xs-12 col-md-6">
                    <div class="row">
                        <div class="col-xs-12 col-sm-3 col-md-5 col-lg-4">
                            <div class="column-description P30 bg-2 corner">
                                <h5>Faculty Leaders</h5>

                                <div class="text">
                                    <p>
                                        Townhome european board designer de-jour sterling cuisine extra pleasure
                                        accredited. On presidential world is the best educated politically brokerage
                                        politically portfolio engraved.
                                    </p>
                                </div>

                                <a href="#" class="more-link"><i class="arrow"></i>Learn more</a>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-9 col-md-7 col-lg-8">
                            <div class="col-xs-3 col-sm-6 team-img-container">
                                <img class="img-responsive" src="images/users/b3.jpg" alt="demo"/>
                            </div>

                            <div class="col-xs-3 col-sm-6 team-img-container">
                                <img class="img-responsive" src="images/users/b4.jpg" alt="demo"/>
                            </div>

                            <div class="col-xs-3 col-sm-4 col-lg-3 team-img-container">
                                <img class="img-responsive" src="images/users/s5.jpg" alt="demo"/>
                            </div>

                            <div class="col-xs-3 col-sm-4 col-lg-3 team-img-container">
                                <img class="img-responsive" src="images/users/s6.jpg" alt="demo"/>
                            </div>

                            <div class="col-xs-3 col-sm-4 col-lg-3 team-img-container">
                                <img class="img-responsive" src="images/users/s7.jpg" alt="demo"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <div class="post-item P30 bg-0 corner">
                        <h2 class="title">Faculty of Humanities &amp; Social Sciences</h2>

                        <p>
                            Champagne monogram regal suite vacation silk guests. Cuisine townhome enthusiast cigar
                            gifted yacht. Townhome silver extra. European distinctly panoramic affluent distinctly
                            reserved acumen engraved on. Regal guests dynasty panoramic elegant wealth gilded educated
                            pedigree.
                        </p>

                        <p>
                            Society salon property ambassador investments ballroom cigar silver gifted wishlist
                            handmade. Brilliant salon impressive saphire cigar. Estate rare art bonds. Art yacht gifted
                            opulent.
                        </p>

                        <p>
                            Opulent becoming career panoramic pedigree engraved five-star ambassador upper dignified.
                            Cruise salon fashion first-class aristocratic vacation housekeeping butler.
                        </p>

                        <ul>
                            <li><a href="#">School of Applied Language &amp; Intercultural Studies</a></li>
                            <li><a href="#">School of Communications</a></li>
                            <li><a href="#">School of Education Studies</a></li>
                            <li><a href="#">BCCFJ (Business, Communications, Computing, Finance, Journalism and European
                                    Languages through Irish)</a></li>
                            <li><a href="#">School of Law &amp; Government</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xs-12 col-md-6">
                    <div class="row">
                        <div class="col-xs-12 col-sm-3 col-md-5 col-lg-4">
                            <div class="column-description P30 bg-2 corner">
                                <h5>First-class teachers</h5>

                                <div class="text">
                                    <p>
                                        Panoramic genuine metropolitan rich gem engraved monogram wealth designer.
                                        Champagne ornamental pleasure regal wishlist dynasty sport imported townhome.
                                        Pearl five
                                    </p>
                                </div>

                                <a href="#" class="more-link"><i class="arrow"></i>Learn more</a>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-9 col-md-7 col-lg-8">
                            <div class="col-xs-3 col-sm-6 team-img-container">
                                <img class="img-responsive" src="images/users/b5.jpg" alt="demo"/>
                            </div>

                            <div class="col-xs-3 col-sm-6 team-img-container">
                                <img class="img-responsive" src="images/users/b6.jpg" alt="demo"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row matchHeight-container">
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
                    <div class="column-description box P30 bg-4 corner">
                        <h5>Additional Information</h5>

                        <div class="text">
                            <p>
                                University rare opulent theatre becoming into property from auction gentlemen. Society
                                symbolizing upper to panoramic enthusiast politically educated.
                            </p>
                        </div>

                        <a href="#" class="stat-link"><i class="icon-signal"></i><span>Statistics</span></a>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-9 col-md-9 col-lg-6">
                    <div class="text-block box P30 bg-4 corner">
                        <p class="title h1">List of University faculties</p>

                        <div class="text">
                            <p>
                                Estate blissfull travel benefiting cutlery champagne expensive using. Art lifestyle
                                politically presidential on becoming ornamental. Butler gold auction diamond marquis
                                champagne elegant de-jour. A gilded career gentlemen enthusiast inspiring champagne
                                theatre stockmarket polo. Grande topiary caviar fashion expensive career theatre
                                delegate symbolizing. Rare fashion diamond extra pedigree opera.
                            </p>
                        </div>

                        <a href="#" class="more-link"><i class="arrow"></i>Get Full List</a>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-9 col-md-9 col-lg-4">
                    <div class="block-with-date box bg-4">
                        <img class="img-responsive" src="images/bg_5.jpg" alt="demo">

                        <div class="description">
                            <div class="inner">
                                <div class="date">
                                    <span class="first number">20</span>

                                    <span class="second number">16</span>

                                    <span class="month">Commencement</span>
                                </div>

                                <div class="text-center"><a href="#" class="custom-btn">View Gallery</a></div>
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