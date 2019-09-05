<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV - Taufik Agung Santoso</title>
    <meta name="description" content="CV Taufik Agung Santoso">
    <meta name="author" content="ArtRow">
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/images/fav.png" type="image/png">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/main.css" media="screen">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/flexslider.css" media="screen">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/fancybox-light.css" media="screen">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700' rel='stylesheet' type='text/css'>

    <script src="<?= base_url(); ?>assets/js/jquery-1.8.3.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/jquery.isotope.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/modernizr.custom.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
    <script>
        if (window.location.hash.indexOf('#!') !== -1) window.location.hash = '';
    </script>
</head>

    <body>

        <audio><source src="<?= base_url(); ?>assets/audio/sound.mp3"/></audio>

        <!-- Main Content -->
        <div class="shadow"><!-- Used for shadow behind main content -->
        <div id="content-wrapper">

            <!-- Logo Demo -->
            <a href="blacktheme/index.html" id="demo-logo">
                <img src="<?= base_url(); ?>assets/images/demo-logo.png" alt="" />
            </a><!-- /Logo Demo -->

            <!-- ABOUTME -->
            <div id="aboutme">

                <div class="slider-wrapper"><!-- Flexslider -->
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <img src="<?= base_url(); ?>assets/images/photocontent/slider_photo_01.jpg" alt="" />
                                </li>
                            <li>
                                <img src="<?= base_url(); ?>assets/images/photocontent/slider_photo_02.jpg" alt="" />
                            </li>
                            <li>
                                <img src="<?= base_url(); ?>assets/images/photocontent/slider_photo_03.jpg" alt="" />
                            </li>
                        </ul>
                    </div>
                </div><!-- /Flexslider -->

                <div class="about-wrapper">
                    <div class="title">
                        <h1>Johnny Doe</h1>
                        <h5>GRAPHIC & WEB DESIGNER</h5>
                    </div>
                    <div class="download-card"><!-- Button Download vCard -->
                        <a class="button">
                            <div class="button-medium button-red">
                                <div class="button-anim"></div>
                                <div class="button-medium-label">Download vCard</div>
                            </div>
                        </a>
                    </div>
                    <div class="info-slider"><!-- Info Slider -->
                        <div class="info-slide-list">
                            <div class="info-slide-wrapper">

                                <div class="info-slide-item"><!-- 1 -->
                                    <div class="top-border-red">
                                        <p>Hi, my name is Johnny Doe.<br>Entire summary information you can find on this page. Feel free to take a look around my vCard and don't forget to see the Black Edition. Thanks.</p>
                                    </div>
                                </div>

                                <div class="info-slide-item"><!-- 2 -->
                                    <div class="top-border-blue">
                                        <div class="left-column">
                                            <ul class="main-info-list">
                                                <li>Name<span>Johnny Doe</span></li>
                                                <li>Birthday<span>January 31, 1986</span></li>
                                                <li>Address<span>New York City, United States</span></li>
                                            </ul>
                                        </div>
                                        <div class="right-column">
                                            <ul class="main-info-list">
                                                <li>Phone<span>+0 (123) 456 789</span></li>
                                                <li>Email<span>mymail@mail.com</span></li>
                                                <li>Website<span>www.mysite.com</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="info-slide-item"><!-- 3 -->
                                    <div class="top-border-green">
                                        <ul class="mini-portfolio">
                                            <li class="bigp-1"><div class="minispan"><span>See My Portfolio</span></div></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="info-slide-item"><!-- 4 -->
                                    <div class="top-border-yellow">
                                        <div class="mini-location">
                                            <div class="mini-icon-pin"></div>
                                            <div class="mini-location-text">New York City, United States</div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="clear"></div>
                        </div>
                    </div><!-- /Info Slider -->
                </div>

                <div class="floatlimit"></div>

            </div><!-- /AboutMe -->

            <!-- NAVIGATION -->
            <div id="nav">

                <div id="logo">
                    <h2>Johnny Doe</h2>
                </div>

                <ul class="etabs">
                    <li class="tab tab-main sound">
                        <a href="#aboutme" class="gradient-red">
                            <div class="navicon-about"></div>
                            <div class="navicon-text">About</div>
                            <div class="uhere-text">You here</div>
                        </a>
                    </li>
                    <li class="tab tab-notmain sound">
                        <a href="#resume" class="gradient-blue">
                            <div class="navicon-resume"></div>
                            <div class="navicon-text">Resume</div>
                        </a>
                    </li>
                    <li class="tab tab-notmain sound">
                        <a href="#portfolio" class="gradient-green">
                            <div class="navicon-portfolio"></div>
                            <div class="navicon-text">Portfolio</div>
                        </a>
                    </li>
                    <li class="tab tab-notmain sound">
                        <a href="#contacts" class="gradient-yellow">
                            <div class="navicon-contact"></div>
                            <div class="navicon-text">Contacts</div>
                        </a>
                    </li>
                </ul>

            </div><!-- /NAVIGATION -->

            <!-- RESUME -->
            <div id="resume" class="span-top">
                <div class="fill-blue">Resume</div>

                <div class="left-column">
                    <div class="substrate">
                        <h2>My Card</h2>
                        <img src="<?= base_url(); ?>assets/images/photocontent/about_photo.jpg" alt="">
                        <ul class="main-info-list">
                            <li>Name<span>Johnny Doe</span><div class="floatlimit"></div></li>
                            <li>Birthday<span>January 31, 1986</span><div class="floatlimit"></div></li>
                            <li>Address<span>New York City, United States</span><div class="floatlimit"></div></li>
                            <li>Phone<span>+0 (123) 456 789</span><div class="floatlimit"></div></li>
                            <li>Email<span>mymail@mail.com</span><div class="floatlimit"></div></li>
                            <li>Website<span>www.mysite.com</span><div class="floatlimit"></div></li>
                        </ul>
                        <a class="button"><!-- Button Download vCard -->
                            <div class="button-big button-blue">
                                <div class="button-anim"></div>
                                <div class="button-big-label">Download vCard</div>
                            </div>
                        </a>
                        <div class="paper-clip"></div>
                    </div>
                    <div class="substrate">
                        <h2>My Skills</h2>
                        <h3>Graphic Skills</h3>
                        <ul class="skills">
                            <li class="skill">Photoshop<span class="skill-blue-star-5"></span></li>
                            <li class="skill">Illustrator<span class="skill-blue-star-3"></span></li>
                            <li class="skill">CorelDraw<span class="skill-blue-star-4"></span></li>
                            <li class="skill">Corel Painter<span class="skill-blue-star-5"></span></li>
                        </ul>
                        <h3>Web Design</h3>
                        <ul class="skills">
                            <li class="skill">HTML+CSS<span class="skill-blue-fill-5"></span></li>
                            <li class="skill">Javascript<span class="skill-blue-fill-2"></span></li>
                            <li class="skill">Php<span class="skill-blue-fill-4"></span></li>
                            <li class="skill">HTML+CSS<span class="skill-blue-fill-5"></span></li>
                        </ul>
                        <h3>3 Styles of Skills</h3>
                        <ul class="skills">
                            <li class="skill">Stars<span class="skill-blue-stroke-3"></span></li>
                            <li class="skill">Fill<span class="skill-blue-stroke-5"></span></li>
                            <li class="skill">Stroke<span class="skill-blue-stroke-4"></span></li>
                        </ul>
                        <div class="paper-clip"></div>
                    </div>
                </div>

                <div class="right-column">
                    <div class="substrate gradient-blue font-blue">
                        <h2>About Me</h2>
                        <h3>Hi, My name is John...</h3>
                        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    </div>
                    <div class="substrate">
                        <h2>Employment</h2>
                        <div class="left-blue">
                            <div class="time-period-left-blue"></div><!-- Keep empty. This class used for creating a point on the line. Use "time-period-right-***".-->
                            <h3>Designer<span class="time-period-right-blue">2011 - 2012</span></h3>
                            <h4>Some information</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscingVivamus amet ligula non lectus cursus egestas. Cras erat lorem, fringilla quis sagittis in, sagittis inNam leo tortor Nam leo tortor Vivamus.</p>
                            <div class="time-period-left-blue"></div><!-- Keep empty. This class used for creating a point on the line. Use "time-period-right-***".-->
                            <h3>UI Designer<span class="time-period-right-blue">2011</span></h3>
                            <h4>Some information</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscingVivamus amet ligula non lectus cursus egestas.</p>
                            <div class="time-period-left-blue"></div><!-- Keep empty. This class used for creating a point on the line. Use "time-period-right-***".-->
                            <h3>Web Designer</h3>
                            <h4>Some information</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscingVivamus amet ligula non lectus cursus egestas. Cras erat lorem, fringilla quis sagittis in, sagittis inNam leo tortor Nam leo tortor Vivamus.</p>
                        </div>
                    </div>
                    <div class="substrate">
                        <h2>Education. Second Variant.</h2>
                        <div class="left-blue">
                            <div class="time-period-left-blue">2012</div>
                            <div class="info-period">
                                <h3>Designer</h3>
                                <h4>School of Art and Design</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscingVivamus sit amet ligula non lectus cursus egestas.</p>
                            </div>
                            <div class="time-period-left-blue">2008 - 2012</div>
                            <div class="info-period">
                                <h3>Designer</h3>
                                <h4>School of Art</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscingVivamus sit amet ligula non lectus cursus egestas. Cras erat lorem, fringilla quis sagittis in, sagittis inNam leo tortor Nam leo tortor Vivamus.</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="floatlimit"></div>

            </div><!-- /RESUME -->

            <!-- PORTFOLIO -->
            <div id="portfolio" class="span-top">
                <div class="fill-green">Portfolio</div>

                <div class="full-width">

                    <ul id="portfolio-filter"><!-- Portfolio filter -->
                        <li>
                            <a href="#" class="button current"  data-filter="*">
                                <div class="button-small button-green">
                                    <div class="button-anim-border"></div>
                                    <div class="button-small-label">All</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="button" data-filter=".f-photo">
                                <div class="button-small button-green">
                                    <div class="button-anim-border"></div>
                                    <div class="button-small-label">Photos</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="button" data-filter=".f-youtube">
                                <div class="button-small button-green">
                                    <div class="button-anim-border"></div>
                                    <div class="button-small-label">YouTube</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="button" data-filter=".f-vimeo">
                                <div class="button-small button-green">
                                    <div class="button-anim-border"></div>
                                    <div class="button-small-label">Vimeo</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="button" data-filter=".f-video">
                                <div class="button-small button-green">
                                    <div class="button-anim-border"></div>
                                    <div class="button-small-label">All Video</div>
                                </div>
                            </a>
                        </li>
                    </ul><!-- /Portfolio filter -->

                    <ul id="portfolio-content" class="top-border-green"><!-- Portfolio Content --><!-- See Documentation for more info -->

                        <li class="f-photo view">
                            <a href="images/photocontent/portfolio_01.jpg" class="fancybox" rel="group" title="Pepper Summer by `Artgerm">
                                <div class="div-info">
                                    <div class="thumb-icon-photo"></div>
                                    <div class="thumb-name">Pepper Summer</div>
                                </div>
                            </a>
                            <img src="<?= base_url(); ?>assets/images/photocontent/portfolio_thumb_01.jpg" alt="">
                        </li>

                        <li class="f-video f-youtube view">
                            <a href="http://www.youtube.com/watch?v=bJdZZfLqXDU" class="fancybox-media">
                                <div class="div-info">
                                    <div class="thumb-icon-youtube"></div>
                                    <div class="thumb-name">Title</div>
                                </div>
                            </a>
                            <img src="<?= base_url(); ?>assets/images/photocontent/portfolio_thumb_02.jpg" alt=""/>
                        </li>

                        <li class="f-photo view">
                            <a href="images/photocontent/portfolio_03.jpg" class="fancybox" rel="group" title="Pepper Freedom by `Artgerm">
                                <div class="div-info">
                                    <div class="thumb-icon-photo"></div>
                                    <div class="thumb-name">Pepper Freedom</div>
                                </div>
                            </a>
                            <img src="<?= base_url(); ?>assets/images/photocontent/portfolio_thumb_03.jpg" alt=""/>
                        </li>

                        <li class="f-video f-youtube view">
                            <a href="http://www.youtube.com/watch?v=7_L_5vrHoWQ&amp;hd=1" class="fancybox-media">
                                <div class="div-info">
                                    <div class="thumb-icon-youtube"></div>
                                    <div class="thumb-name">Gnomeo & Juliet</div>
                                </div>
                            </a>
                            <img src="<?= base_url(); ?>assets/images/photocontent/portfolio_thumb_04.jpg" alt=""/>
                        </li>

                        <li class="f-video f-vimeo view">
                            <a href="http://vimeo.com/51704432" class="fancybox-media" >
                                <div class="div-info">
                                    <div class="thumb-icon-vimeo"></div>
                                    <div class="thumb-name">When I Grow Up</div>
                                </div>
                            </a>
                            <img src="<?= base_url(); ?>assets/images/photocontent/portfolio_thumb_05.jpg" alt=""/>
                        </li>

                        <li class="f-photo view">
                            <a href="<?= base_url(); ?>assets/images/photocontent/portfolio_06.jpg" class="fancybox" rel="group" title="Three Kingdoms - Xiao Qiao by `Artgerm">
                                <div class="div-info">
                                    <div class="thumb-icon-photo"></div>
                                    <div class="thumb-name">Three Kingdoms - Xiao Qiao</div>
                                </div>
                            </a>
                            <img src="<?= base_url(); ?>assets/images/photocontent/portfolio_thumb_06.jpg" alt=""/>
                        </li>

                    </ul><!-- /Portfolio Content -->
                </div>

                <div class="floatlimit"></div>

            </div><!-- /PORTFOLIO -->

            <!-- CONTACTS -->
            <div id="contacts" class="span-top">
                <div class="fill-yellow">Contacts</div>

                <div class="left-column">
                    <div class="substrate">
                        <h2>Contact Form</h2>

                        <div class="form-success"><!-- Hidden succes form -->
                            <div class="form-success-yellow">Message successfully sent</div>
                            <div class="button new-message">
                                <div class="button-big button-yellow">
                                    <div class="button-anim"></div>
                                    <div class="button-big-label">Send another message</div>
                                </div>
                            </div>
                        </div><!-- /Hidden succes form -->

                        <form action="#" id="contactform" class="animform"><!-- Contact form -->
                            <ul>
                                <li>
                                   <label for="name" class="flabel">Name</label>
                                   <input type="text" name="name" value="" id="name" />
                                   <div class="indicate-name"></div>
                                </li>
                                <li>
                                    <label for="email" class="flabel">E-mail</label>
                                    <input type="text" name="email" value="" id="email" />
                                    <div class="indicate-email"></div>
                                </li>
                                <li>
                                    <label for="message" class="flabel">Enter your message</label>
                                    <textarea name="message" cols="88" rows="6" id="message"></textarea>
                                    <div class="indicate-message"></div>
                                </li>
                                <li>
                                    <button type="submit" name="submit" value="Send your message" class="submit">Send your message</button>
                                </li>
                            </ul>
                        </form><!-- /Contact form -->

                    </div>
                </div>

                <div class="right-column">
                    <div class="substrate">
                        <h2>My Location</h2>
                        <div id="map"></div><!-- GMAP -->
                        <div class="map-pan">
                            <div class="div-info pan pan-active" data-lat="36.143247" data-lng="-115.160151">
                                <div class="thumb-icon-gmap"></div>
                                <div class="thumb-name">My Address</div>
                            </div>
                            <div class="div-info pan" data-lat="36.149762" data-lng="-115.152726">
                                <div class="thumb-icon-gmap"></div>
                                <div class="thumb-name">My Office, Las Vegas, NV 01234</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="floatlimit"></div>

            </div><!-- /CONTACTS -->

            <!-- FOOTER -->
            <div class="footer">
                <div class="left-column"><p>ArtRow, Copyright © 2014</p></div>
                <div class="right-column">

                    <div class="social"><!-- Social icons -->
                        <ul>
                            <li class="twitter">
                                <a><div class="icon-twitter"></div></a>
                            </li>
                            <li class="facebook">
                                <a><div class="icon-facebook"></div></a>
                            </li>
                            <li class="vimeo">
                                <a><div class="icon-vimeo"></div></a>
                            </li>
                            <li class="instagram">
                                <a><div class="icon-instagram"></div></a>
                            </li>
                            <li class="linkedin">
                                <a><div class="icon-linkedin"></div></a>
                            </li>
                            <li class="pinterest">
                                <a><div class="icon-pinterest"></div></a>
                            </li>
                        </ul>
                    </div><!-- /Social icons -->

                </div>
                <div class="floatlimit"></div>
            </div><!-- /FOOTER -->

        </div><!-- /Main Content -->
        </div><!-- /Shadow -->

    <script src="<?= base_url(); ?>assets/js/jquery.hashchange.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/jquery.flexslider-min.js"></script>
    <script src="<?= base_url(); ?>assets/js/jquery.easytabs.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/jquery.fancybox.pack.js"></script>
    <script src="<?= base_url(); ?>assets/js/jquery.fancybox-media.js"></script>
    <script src="<?= base_url(); ?>assets/js/jquery.infieldlabel.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/gmap3.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/contact.js"></script>
    <script src="<?= base_url(); ?>assets/js/settings.js"></script>

    </body>
</html>