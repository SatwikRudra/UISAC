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
        <!-- start page-title -->
        <section class="page-title">
            <div class="page-title-container">
                <div class="page-title-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col col-xs-12">
                                <h2>Our Events</h2>
                                <ol class="breadcrumb">
                                    <li><a href="index.html">Home</a></li>
                                    <li>Events</li>
                                </ol>
                            </div>
                        </div> <!-- end row -->
                    </div> <!-- end container -->
                </div>
            </div>
        </section>
        <!-- end page-title -->
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
                    <?php
        require_once "admin-panel/config.php";
        $sql = "SELECT * FROM events ORDER BY id DESC";
        if($result = mysqli_query($link, $sql)){
            if(mysqli_num_rows($result) > 0){
  
         while($row = mysqli_fetch_array($result)){
            $orgDate = $row["event_date"];  
            $month = date("M", strtotime($orgDate));  
            $dateInMonth = date("j", strtotime($orgDate));  
            echo '<div class="event-item">
            <div class="event-img">
                <img src="assets/images/event/1.jpg" alt="">
            </div>
            <div class="event-text">
                <div class="event-left">
                    <div class="event-l-text">
                        <span>' .$month.'</span>
                        <h4>' .$dateInMonth.'</h4>
                    </div>
                </div>
                <div class="event-right">
                    <ul>
                        <li>'.$row["event_time"].'</li>
                        <li><i class="ti-location-pin"></i>'.$row["event_location"].'</li>
                    </ul>
                    <h2><a href="">'.$row["event_name"].'</a></h2>
                    <p>'.$row["event_description"].'</p>
                </div>
            </div>
        </div>';
         }

        }
    }

    ?>  


                    </div>
                </div>
            </div>
            <div class="shape1"><img src="assets/images/event/1.png" alt=""></div>
            <div class="shape2"><img src="assets/images/event/2.png" alt=""></div>
        </div>
        <!-- event-area start -->
       
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
                                <p>You can help us by donating which will helpful for further programs or become a volunteer, Let???s create successful aging of carolina . </p>
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


<!-- Mirrored from themepresss.com/tf/html/khairah/khairah/event.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 May 2021 10:12:17 GMT -->
</html>