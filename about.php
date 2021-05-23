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
                                <h2>About Us</h2>
                                <ol class="breadcrumb">
                                    <li><a href="index.html">Home</a></li>
                                    <li>About</li>
                                </ol>
                            </div>
                        </div> <!-- end row -->
                    </div> <!-- end container -->
                </div>
            </div>
        </section>
        <!-- end page-title -->
        <!-- end of hero slider -->
         <section class="about-section about-section-s2 section-padding p-t-0">
            <div class="container">
                <div class="row">
                <?php
                    
                    include 'admin-panel/config.php';
                        $sql = "SELECT * FROM about ";
                        if($result = mysqli_query($link, $sql)){
                            if(mysqli_num_rows($result) > 0){
                            
                                       
                                  
                                while($row = mysqli_fetch_array($result)){
                                    
                                    echo '       <div class="col col-md-5">
                                    <div class="video-area">
                                        <img src="admin-panel/about/'.$row["image"].'" alt>
                                        
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
                                        <p>
                                        '.$row["description"].'
                                           </p>
                                        
                                    </div>
                                </div>';
                                }
                            }
                        }
                        ?>
             
                </div>
            </div> <!-- end container -->
        </section>
		<section class="about-section about-section-s2 section-padding p-t-0">
            <div class="container">
                <div class="row">
                    <div class="col col-md-6">
                        <h2>Mission and Purpose Statement:</h2><br>
						<p>We are committed to empowering individuals to move successfully through varying stages of life. Essential to that mission is providing access to supplemental education, housing, employment and financial resources, avenues for civic engagement, support for social and cultural richness and resettlement assistance for under-­served populations.</p>
                    </div>
                    <div class="col col-md-6">
                        <h2>Vision Statement:</h2>
						<br>
						<p>Our members are provided the necessary resources to maintain productive, healthy, and peaceful lives from childhood to late adulthood and beyond, while honoring their complex and diverse cultural heritages. Our programs are open to all regardless of age, race or country of birth, with special focus on the under­served RIM communities. We recognize that maintaining and sharing our colorful cultural backgrounds contributes to our society and enriches us all.</p>
						
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end about-section -->
       <section class="about-section about-section-s2 section-padding p-t-0">
            <div class="container">
                <div class="row">
                    <div class="col col-md-6">
                        <h2>Programs and Accomplishments:</h2><br>
						<ol>
						<li>­Carolinas Asian Healthcare Professional Association (CAHPA)</li>
						<li>Dr. M. Yunus’ GRAMEEN Bank to Charlotte (Miro­lending)</li>
						<li>Specifized Cultural Adult Day Centers: Santiniketan Senior Center of Carolinas (SSCC)</li>
						<li>International living communities</li>
						<li>Establishing Partner­City status between Charlotte, NC and Ahmedabad, Gujarat, India</li>
						<li>Children and parental development programs ­ tutoring and counseling</li>
						<li>RIM Women economic development and empowerment</li>
						<li>Successful Citizen: Rights & Duties</li>
						<li>Mental, physical, and spiritual health education and activities</li>
						<li>Grieving and logistical assistance with death of family members, and Festivals, celebrations and Cultural events</li>
						</ol>
                    </div>
                    <div class="col col-md-6">
                        <h2>Partnerships:</h2>
						<br>
						<ul>
						<li>CMS, CMPD, DSS, and many city, county and state governmental organizations</li>
						<li>Fair Housing Authorities (FHA)</li>
						<li>Carolina’s Healthcare System (CHS)</li>
						<li>Carolina’s Indian American Physicians and the NC American Indian Health Board</li>
						<li>Central Piedmont Community College</li>
						<li>University of North Carolina Charlotte</li>
						<li>Johnson C Smith University</li>
						<li>DHI home care services and other local nonprofits</li>
						<li>Houses of worship and Mecklenburg Ministries</li>
						<li>Professional Financial Solutions (PFS), and</li>
						<li>Banks such as Wells Fargo and Bank of America.</li>
					    </ul>
						
                    </div>
                </div>
            </div> <!-- end container -->
        </section>

       
       
        <!-- .tp-counter-area start -->
        <div class="tp-counter-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tp-counter-grids">
                            <div class="grid">
                                <div>
                                    <h2><span class="odometer" data-count="6200">00</span>+</h2>
                                </div>
                                <p>Donation</p>
                            </div>
                            <div class="grid">
                                <div>
                                    <h2><span class="odometer" data-count="80">00</span>+</h2>
                                </div>
                                <p>Fund Raised</p>
                            </div>
                            <div class="grid">
                                <div>
                                    <h2><span class="odometer" data-count="245">00</span>+</h2>
                                </div>
                                <p>Volunteers</p>
                            </div>
                            <div class="grid">
                                <div>
                                    <h2><span class="odometer" data-count="605">00</span>+</h2>
                                </div>
                                <p>Projects</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .tp-counter-area end -->
        
	   
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