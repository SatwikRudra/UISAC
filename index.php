<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon.png">
    <meta name="author" content="wpoceans">
    <title>Universal institute of successful aging of carolina.</title>
    <link href="assets/css/themify-icons.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/flaticon.css" rel="stylesheet">
    <link href="assets/css/odometer-theme-default.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.css" rel="stylesheet">
    <link href="assets/css/slick.css" rel="stylesheet">
    <link href="assets/css/slick-theme.css" rel="stylesheet">
    <link href="assets/css/swiper.min.css" rel="stylesheet">
    <link href="assets/css/owl.transitions.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    
</head>

<body>
    <!-- start page-wrapper -->
    <div class="page-wrapper">
        <!-- start preloader -->
        <div class="preloader">
            <div class="sk-cube-grid">
                <div class="sk-cube sk-cube1"></div>
                <div class="sk-cube sk-cube2"></div>
                <div class="sk-cube sk-cube3"></div>
                <div class="sk-cube sk-cube4"></div>
                <div class="sk-cube sk-cube5"></div>
                <div class="sk-cube sk-cube6"></div>
                <div class="sk-cube sk-cube7"></div>
                <div class="sk-cube sk-cube8"></div>
                <div class="sk-cube sk-cube9"></div>
            </div>
        </div>
        <!-- end preloader -->
        <!-- Start header -->
        <?php include 'header.php';?>
        <!-- end of header -->
        <!-- start of hero --> 
        <section class="hero-slider hero-style-1 hero-style-v2">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                <?php 
               include 'admin-panel/config.php';
                 
               $sql = "SELECT * FROM banner ORDER BY id DESC ";
               if($result = mysqli_query($link, $sql)){
                   if(mysqli_num_rows($result) > 0){
                   $count=0;
                       while($row = mysqli_fetch_array($result)){
                       echo' <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image" data-background="admin-panel/banner/'.$row["image"].'">
                            <div class="container">
                                <div data-swiper-parallax="200" class="slide-thumb">
                                    <span>'.$row["circle_text"].'</span>
                                </div>
                                <div data-swiper-parallax="300" class="slide-title">
                                    <h2>'.$row["slide_title"].'</h2>
                                </div>
                                <div data-swiper-parallax="400" class="slide-text">
                                    <p>
                                    '.$row["slide_description"].'
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                                <div data-swiper-parallax="500" class="slide-btns">
                                    <a href="#" class="theme-btn">Donate Now<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="slide-shape">
                                <img src="assets/images/shape/shape.png" alt="">
                            </div>
                        </div> 
                    </div> ';
                       }
                    }
                }
                 
                ?>
                </div>
                <!-- end swiper-wrapper -->
                <!-- swipper controls -->
                <div class="swiper-pagination"></div>
            </div>
        </section>
		
		<!-- end of hero slider -->
        <section class="about-section about-section-s2 section-padding p-t-0">
            <div class="container">
                <div class="row">
                    <div class="col col-md-5">
                        <div class="video-area">
                            <img src="assets/images/about.jpg" alt>
                            
                        </div>
                    </div>
                    <div class="col col-md-7">
                        <div class="about-text">
                            <div class="section-title">
                                <div class="thumb-text">
                                    <span>ABOUT US</span>
                                </div>
                                <h2>UISAC is <span>Nonprofit</span> Organization <span>For Help</span> Others.</h2>
                            </div>
                            <p>UISAC is a nonprofit organization that values diversity, holistic health, peaceful living, equal opportunity, civic and community engagement, especially for under­served populations including Refugees, Immigrants, and Minorities (RIM). We developed around 2006 out of the growing needs within the Charlotte­ metro area to support a rapidly diversifying population. We understand that a vibrant diverse population adds to the overall strength and well being of the whole community.</p>
                            
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end about-section -->
       
        <!-- case-area-start -->
        <div class="case-area section-padding">
            <div class="container">
                <div class="col-md-6 col-md-offset-3">
                    <div class="section-title section-title2 text-center">
                        <div class="thumb-text">
                            <span>CAUSES</span>
                        </div>
                        <h2>Latest Caused of UISAC.</h2>
                        <p>You can help us by donating which will helpful for further programs or become a volunteer, Let’s create successful aging of carolina .</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="cause-item">
                            <div class="cause-top">
                                <div class="cause-img">
                                    <img src="assets/images/cause/img-1.png" alt="">
                                    <div class="case-btn">
                                        <a href="donate.html" class="theme-btn">Donate Now<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="cause-text">
                                <ul>
                                    <li><a href="#">GOAL : $9860</a></li>
                                    <li><a href="#">RISED : $768</a></li>
                                </ul>
                                <h3><a href="causes.html">Financial Help for Poor Families</a></h3>
                                <p>Financial Help for Poor Families</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="cause-item">
                            <div class="cause-top">
                                <div class="cause-img">
                                    <img src="assets/images/cause/img-2.jpg" alt="">
                                    <div class="case-btn">
                                        <a href="donate.html" class="theme-btn">Donate Now<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="cause-text">
                                <ul>
                                    <li><a href="#">GOAL : $9860</a></li>
                                    <li><a href="#">RISED : $768</a></li>
                                </ul>
                                <h3><a href="#">Meals for Seniors</a></h3>
                                <p>Provide nutritionally balanced meals for seniors at no cost.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="cause-item">
                            <div class="cause-top">
                                <div class="cause-img">
                                    <img src="assets/images/cause/img-3.jpg" alt="">
                                    <div class="case-btn">
                                        <a href="donate.html" class="theme-btn">Donate Now<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="cause-text">
                                <ul>
                                    <li><a href="#">GOAL : $9860</a></li>
                                    <li><a href="#">RISED : $768</a></li>
                                </ul>
                                <h3><a href="causes.html">Immigrant Senior Issues in Mecklenburg County, NC</a></h3>
                                <p>Immigrant Senior Issues in Mecklenburg County, NC</p>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <!-- case-area-end -->
        <!-- cta-area start -->
        <div class="cta-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-12 col-12">
                        <div class="cta-left">
                            <h2>If You Want To Join With Us As a Volunteer. Contact Us Today!</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-lg-offset-1 col-md-12 col-12">
                        <div class="cta-wrap">
                            <div class="cta-call">
                                <span>Call Us!</span>
                                <h3> (704) 491-1186</h3>
                            </div>
                            <div class="cta-call">
                                <span>E-mail Us!</span>
                                <h3>Nbcharlotte@uisac.org</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cta-area start -->
        <!-- event-area start -->
        <div class="event-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="section-title section-title2 text-center">
                            <div class="thumb-text">
                                <span>EVENTS</span>
                            </div>
                            <h2>Our Upcoming Events</h2>
                            <p>It is a long established fact that reader distracted by the the readable content off page looking at its layout point.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="event-item">
                            <div class="event-img">
                                <img src="assets/images/event/1.jpg" alt="">
                            </div>
                            <div class="event-text">
                                <div class="event-left">
                                    <div class="event-l-text">
                                        <span>MAR</span>
                                        <h4>28</h4>
                                    </div>
                                </div>
                                <div class="event-right">
                                    <ul>
                                        <li><i class="ti-location-pin"></i> 9:00 AM - 10:00 AM</li>
                                        <li><i class="ti-location-pin"></i> Wallace lane, Charlotte NC</li>
                                    </ul>
                                    <h2><a href="event.html">Fundrising event that could change some poor children.</a></h2>
                                    <p>It is long estblished fact that a reader will be distracted aliquip exea commodo consequat velit esse cillum fugiat.</p>
                                </div>
                            </div>
                        </div>
                        <div class="event-item">
                            <div class="event-img">
                                <img src="assets/images/event/2.jpg" alt="">
                            </div>
                            <div class="event-text">
                                <div class="event-left">
                                    <div class="event-l-text">
                                        <span>MAR</span>
                                        <h4>28</h4>
                                    </div>
                                </div>
                                <div class="event-right">
                                    <ul>
                                        <li><i class="ti-location-pin"></i> 9:00 AM - 10:00 AM</li>
                                        <li><i class="ti-location-pin"></i> Wallace lane, Charlotte NC</li>
                                    </ul>
                                    <h2><a href="event.html">Many Children are suffering a lot for food.</a></h2>
                                    <p>It is long estblished fact that a reader will be distracted aliquip exea commodo consequat velit esse cillum fugiat.</p>
                                </div>
                            </div>
                        </div>
                        <div class="event-item">
                            <div class="event-img">
                                <img src="assets/images/event/3.jpg" alt="">
                            </div>
                            <div class="event-text">
                                <div class="event-left">
                                    <div class="event-l-text">
                                        <span>MAR</span>
                                        <h4>28</h4>
                                    </div>
                                </div>
                                <div class="event-right">
                                    <ul>
                                        <li><i class="ti-location-pin"></i> 9:00 AM - 10:00 AM</li>
                                        <li><i class="ti-location-pin"></i> Wallace lane, Charlotte NC</li>
                                    </ul>
                                    <h2><a href="event.html">Be kind for the poor people and the kids.</a></h2>
                                    <p>It is long estblished fact that a reader will be distracted aliquip exea commodo consequat velit esse cillum fugiat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape1"><img src="assets/images/event/1.png" alt=""></div>
            <div class="shape2"><img src="assets/images/event/2.png" alt=""></div>
        </div>
        <!-- event-area start -->
        <!-- volunteer-area start -->
        <div class="volunteer-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="section-title section-title2 text-center">
                            <div class="thumb-text">
                                <span>Volunteer</span>
                            </div>
                            <h2>Our Great Volunteer</h2>
                            <p>It is a long established fact that reader distracted by the the readable content off page looking at its layout point.</p>
                        </div>
                    </div>
                </div>
                <div class="volunteer-wrap">
                    <div class="row">
                        <div class="col col-md-3 col-sm-6 custom-grid col-12">
                            <div class="volunteer-item">
                                <div class="volunteer-img">
                                    <img src="assets/images/team/1.png" alt="">
                                </div>
                                <div class="volunteer-content">
                                    <h2><a href="volunteer.html">Adriane Newby</a></h2>
                                    <span>Volunteer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col col-md-3 col-sm-6 custom-grid col-12">
                            <div class="volunteer-item">
                                <div class="volunteer-img">
                                    <img src="assets/images/team/2.png" alt="">
                                </div>
                                <div class="volunteer-content">
                                    <h2><a href="volunteer.html">Allene Castaneda</a></h2>
                                    <span>Volunteer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col col-md-3 col-sm-6 custom-grid col-12">
                            <div class="volunteer-item">
                                <div class="volunteer-img">
                                    <img src="assets/images/team/3.png" alt="">
                                </div>
                                <div class="volunteer-content">
                                    <h2><a href="volunteer.html">Malinda Willoughby</a></h2>
                                    <span>Volunteer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col col-md-3 col-sm-6 custom-grid col-12">
                            <div class="volunteer-item">
                                <div class="volunteer-img">
                                    <img src="assets/images/team/4.png" alt="">
                                </div>
                                <div class="volunteer-content">
                                    <h2><a href="volunteer.html">Wilburn Hatfield</a></h2>
                                    <span>Volunteer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- volunteer-area start -->
      
       
        
        <!-- start tp-site-footer -->
        <footer class="tp-site-footer">
            <div class="tp-upper-footer">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-3 col-md-3 col-sm-6">
                            <div class="widget about-widget">
                                <div class="footer-logo widget-title">
                                    <a href="index.html"><img src="assets/images/logo/logo-1.png" alt="logo"></a>
                                </div>
                                <p>You can help us by donating which will helpful for further programs or become a volunteer, Let’s create successful aging of carolina . </p>
                                <ul>
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="#"><i class="ti-instagram"></i></a></li>
                                    <li><a href="#"><i class="ti-google"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-lg-2 col-md-3 col-sm-6">
                            <div class="widget link-widget">
                                <div class="widget-title">
                                    <h3>Useful Links</h3>
                                </div>
                                <ul>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Our Causes</a></li>
                                    <li><a href="#">Our Volunteer</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Our Event</a></li>
                                </ul>                            </div>
                        </div>
                        <div class="col col-lg-3 col-lg-offset-1 col-md-3 col-sm-6">
                            <div class="widget market-widget tp-service-link-widget">
                                <div class="widget-title">
                                    <h3>Contact </h3>
                                </div>
                                <p>We are committed to empowering individuals to move successfully through varying stages of life. </p>
                                <div class="contact-ft">
                                    <ul>
                                        <li><i class="fi flaticon-pin"></i>
Midwood International & Cultural Center,7701 Wallace lane, Charlotte NC 28212</li>
                                        <li><i class="fi flaticon-call"></i>(704) 491-1186</li>
                                        <li><i class="fi flaticon-envelope"></i>Nbcharlotte@uisac.org</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-3 col-md-3 col-sm-6">
                            <div class="widget instagram">
                                <div class="widget-title">
                                     <h3>Instagram</h3>
                                </div>
                                <ul class="d-flex">
                                    <li><a href="#"><img src="assets/images/instragram/1.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="assets/images/instragram/2.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="assets/images/instragram/3.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="assets/images/instragram/4.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="assets/images/instragram/5.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="assets/images/instragram/6.jpg" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> <!-- end container -->
            </div>
            <div class="tp-lower-footer">
                <div class="container">
                    <div class="row">
                        <div class="col col-xs-12">
                            <p class="copyright">&copy; 2021 UISAC. All rights reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end tp-site-footer -->
    </div>
    <!-- end of page-wrapper -->
    <!-- All JavaScript files
    ================================================== -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Plugins for this template -->
    <script src="assets/js/jquery-plugin-collection.js"></script>
    <!-- Custom script for this template -->
    <script src="assets/js/script.js"></script>
</body>


</html>