<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 

<html class="no-js"> <!--<![endif]-->
    <head>

        <title>Agency - Contact</title>

        <!-- meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        
        <!-- stylesheets -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script>
            function initialize() {
                var mapCanvas = document.getElementById('map-canvas');
                var mapOptions = {
                    center: new google.maps.LatLng(24.921212, 91.833073),
                    zoom: 16,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                }
                var map = new google.maps.Map(mapCanvas, mapOptions)
            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>

    </head>

    <body>

        <div id="contact-page">


            <!-- site-navigation start -->  
            <nav id="mainNavigation" class="navbar navbar-dafault main-navigation" role="navigation">
                <div class="container">
                    
                    <div class="navbar-header">
                        
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        
                        <!-- navbar logo -->
                        <div class="navbar-brand">
                            <span class="sr-only">Avada Pro Agency</span>
                            <a href="index.html">
                                <img src="assets/img/main_logo.png" class="img-responsive center-block">
                            </a>
                        </div>
                        <!-- navbar logo -->

                    </div><!-- /.navbar-header -->

                    <!-- nav links -->
                    <div class="collapse navbar-collapse" id="main-nav-collapse">
                        <ul class="nav navbar-nav navbar-right text-uppercase">
                            <li>
                                <a href="index.html"><span>home</span></a>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>pages</span></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="about.html">about</a>
                                    </li>
                                    <li>
                                        <a href="service.html">service</a>
                                    </li>
                                    <li>
                                        <a href="portfolio.html">portfolio</a>
                                    </li>
                                    <li>
                                        <a href="gallery.html">gallery</a>
                                    </li>
                                    <li>
                                        <a href="404.html">404 page</a>
                                    </li>
                                    <li>
                                        <a href="coming_soon.html">coming soon</a>
                                    </li>
                                </ul>   <!-- /.dropdown-menu -->
                            </li> <!-- /.dropdown -->

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>blog</span></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="multiple_blog_left_sidebar.html">multiple with left sidebar</a>
                                    </li>
                                    <li>
                                        <a href="multiple_blog.html">multiple with right sidebar</a>
                                    </li>
                                    <li>
                                        <a href="single_blog_left_sidebar.html">single with left sidebar</a>
                                    </li>
                                    <li>
                                        <a href="single_blog.html">single with right sidebar</a>
                                    </li>
                                    <li>
                                        <a href="single_blog_full_width.html">single full width</a>
                                    </li>
                                </ul> <!-- /.dropdown-menu -->
                            </li> <!-- /.dropdown -->

                            <li>
                                <a href="contact.html"><span>contact</span></a>
                            </li>
                        </ul>
                    </div><!-- nav links -->
                    
                </div><!-- /.container -->
            </nav>
            <!-- site-navigation end -->



            <!-- header begin -->
            <header class="page-head">
                <div class="header-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">

                                <ol class="breadcrumb">
                                    <li><a href="index.html">Home</a></li>
                                    <li class="active">Contact</li>
                                </ol> <!-- end of /.breadcrumb -->

                            </div>
                        </div>
                    </div> <!-- /.container -->
                </div> <!-- /.header-wrapper -->
            </header> <!-- /.page-head (header end) -->


            <div claas="main-content">
                <div class="container">

                    <!-- google map iframe -->
                    <section class="g-map">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="google-map">
                                    <div id="map-canvas"></div>
                                </div>
                            </div>
                        </div>
                    </section> <!-- /.g-map (google-map end) -->



                    <!-- contact adresses section begin -->
                    <section class="contact-address bg-white">
                        <div class="row">

                            <div class="col-md-4 col-xs-12">
                                <div class="address-info">
                                    <div class="row">

                                        <div class="col-md-3 col-xs-3">
                                            <div class="address-info-icon text-center center-block bg-light-gray">
                                                <i class="fa fa-map-marker"></i>
                                            </div> <!-- /.address-info-icon -->
                                        </div>

                                        <div class="col-md-9 col-xs-9 address-info-desc">
                                            <h3>Office Address</h3>
                                            <p>
                                                Koffman Parklan, P.O Box 555 <br/>
                                                StreetView, USA
                                            </p>
                                        </div> <!-- /.address-info-desc -->

                                    </div>
                                </div> <!-- /.address-info -->
                            </div>

                            <div class="col-md-4 col-xs-12">
                                <div class="address-info">
                                    <div class="row">

                                        <div class="col-md-3 col-xs-3">
                                            <div class="address-info-icon text-center center-block bg-light-gray">
                                                <i class="fa fa-phone"></i>
                                            </div> <!-- /.address-info-icon -->
                                        </div>

                                        <div class="col-md-9 col-xs-9 address-info-desc">
                                            <h3>Phone Number</h3>
                                            <p>
                                                Local: 1-500-153-hello
                                                <br/>
                                                Mobile: 1-600-153-hello
                                            </p>
                                        </div> <!-- /.address-info-desc -->

                                    </div>
                                </div> <!-- /.address-info -->
                            </div>

                            <div class="col-md-4 col-xs-12">
                                <div class="address-info">
                                    <div class="row">

                                        <div class="col-md-3 col-xs-3">
                                            <div class="address-info-icon text-center center-block bg-light-gray">
                                                <i class="fa fa-envelope-o"></i>
                                            </div> <!-- /.address-info-icon -->
                                        </div>

                                        <div class="col-md-9 col-xs-9 address-info-desc">
                                            <h3>Email Address</h3>
                                            <p>
                                                info@example.com
                                                <br/>
                                                www.example.com
                                            </p>
                                        </div> <!-- /.address-info-desc -->

                                    </div>
                                </div> <!-- /.address-info -->
                            </div>

                        </div>
                    </section> <!-- /.contact-address -->



                    <!-- contact-form -->
                    <section class="contact-form">

                        <!-- call for contact -->
                        <div class="headline text-center">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3">
                                    <h2 class="section-title">Say Hello! Don't be shy</h2>
                                    <p class="section-sub-title">
                                        If you have any questions or comments, or would just like to say hello, 
                                        <br/>please feel free to contact our friendly team
                                    </p> <!-- /section-sub-title -->
                                </div>
                            </div>
                        </div> <!-- /.contact-speech -->

                        <form method="post" action="contact.php">

                            <div class="row">
                                <div class="col-md-4">

                                    <div class="form-group">
                                        <input  name="name" type="text" class="form-control" id="name" required="required" placeholder="Full Name">
                                    </div>

                                    <div class="form-group">
                                        <input name="email" type="email" class="form-control" id="email" required="required" placeholder="Email Address">
                                    </div>

                                    <div class="form-group">
                                        <input name="website" type="url" class="form-control" id="subject" required="required" placeholder="Your Website">
                                    </div>

                                </div>

                                <div class="col-md-8">
                                    <textarea name="message" type="text" class="form-control" id="message" rows="8" required="required" placeholder="Type here message"></textarea>
                                </div>
                            </div>

                                <button type="submit" id="submit" name="submit" class="btn btn-black">send message</button>
                            
                        </form> <!-- form end -->
                    </section> <!-- /.contact-form -->

                </div> <!-- container -->
            </div>
            <!-- main-content end -->


            <footer>
                <div class="container">
                    <div class="row">

                        <!-- useful links -->
                        <div class="col-md-3 col-sm-6 col-xs-6 footer-widget">
                            <h4>Useful Links</h4>
                            <ul class="row footer-links">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <li><a href="#">Web Design</a></li>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Mobile</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Services</a></li>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <li><a href="#">Organization</a></li>
                                    <li><a href="#">Career</a></li>
                                    <li><a href="#">Media</a></li>
                                    <li><a href="#">24/7</a></li>
                                    <li><a href="#">Right Way</a></li>
                                </div>
                            </ul>
                        </div>

                        <!-- recent news -->
                        <div class="col-md-3 col-sm-6 col-xs-6 footer-widget">
                            <h4>Recent News</h4>

                            <div class="row footer-news">
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <img src="assets/img/intro.jpg" class="img-responsive center-block" alt="recent news 1">
                                </div>
                                <div class="col-md-8 col-sm-4 col-xs-6">
                                    <div class="row">
                                        <p class="text-capitalize">
                                            <a href="#">
                                                a clear website gives more experience to the visitors
                                            </a>
                                        </p>
                                        <p class="news-date">Dec 12,2015</p>
                                    </div>
                                </div>
                            </div> <!-- /.footer-news -->

                            <div class="row footer-news">
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <img src="assets/img/intro.jpg" class="img-responsive center-block" alt="recent news 2">
                                </div>
                                <div class="col-md-8 col-sm-4 col-xs-6">
                                    <div class="row">
                                        <p class="text-capitalize">
                                            <a href="#">
                                                a clear website gives more experience to the visitors
                                            </a>
                                        </p>
                                        <p class="news-date">Dec 12,2015</p>
                                    </div>
                                </div>
                            </div> <!-- /.footer-news -->
                        </div> <!-- /.footer-widget -->

                        <!-- news-letter -->
                        <div class="col-md-3 col-sm-6 col-xs-6 footer-widget">
                            <h4>E-News-Letter</h4>

                            <p>Sign up for our mailing list to get latest updates and offers</p>
                            <div class="input-group margin-bottom-sm">
                                <input class="form-control" type="text" placeholder="Email address">
                                <span class="input-group-addon">
                                    <i class="fa fa-paper-plane fa-fw"></i>
                                </span>
                            </div>
                            <p>We respect your privacy</p>
                        </div> <!-- /.footer-widget -->

                        <!-- about avada agency -->
                        <div class="col-md-3 col-sm-6 col-xs-6 footer-widget">
                            <h4>Avada Agency</h4>

                            <p>
                                HUGE Website Builder is a big library of pre-designed web elements which help you to create website in few minutes.
                            </p>

                            <div class="footer-address">
                                <p>
                                    1-800-123-HELLO  <br>
                                    example@mail.com
                                </p>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="footer-share-button">
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul> <!-- /.footer-share-button -->
                                </div>
                            </div>
                        </div> <!-- /.footer-widget -->

                    </div>
                </div>
            </footer>


            <!-- footer-navigation start -->  
            <nav class="hidden-xs hidden-sm navbar footer-nav" role="navigation">
                <div class="container">
                    
                    <div class="navbar-header">
                        
                        <!-- navbar logo -->
                        <div class="navbar-brand">
                            <span class="sr-only">&copy;THEMEWAGON</span>
                            <a href="index.html">
                                &copy;THEMEWAGON
                            </a>
                        </div>
                        <!-- navbar logo -->

                    </div><!-- /.navbar-header -->

                    <!-- nav links -->
                    <div class="collapse navbar-collapse" id="main-nav-collapse">
                        <ul class="nav navbar-nav navbar-right text-capitalize">
                            <li><a href="#about">
                                <span>home</span>
                            </a></li>

                            <li><a href="#services">
                                <span>pages</span>
                            </a></li>

                            <li><a href="#portfolio">
                                <span>features</span>
                            </a></li>

                            <li><a href="#team">
                                <span>portfolio</span>
                            </a></li>

                            <li><a href="#pricing">
                                <span>blog</span>
                            </a></li>

                            <li><a href="#blog">
                                <span>shop</span>
                            </a></li>

                            <li><a href="#contact">
                                <span>contact</span>
                            </a></li>
                        </ul>
                    </div><!-- nav links -->
                    
                </div><!-- /.container -->
            </nav>
            <!-- footer-navigation end -->

        </div> <!-- /#contact-page (page end) -->


    </body>
</html>