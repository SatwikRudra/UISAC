<?php

include "admin-panel/config.php";

$username =$first=$last=$phone=$message= "";
$username_err =$first_err=$last_err=$phone_err=$message_err ="";


if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } 
    else{
  
         $username = trim($_POST["username"]);
                }
            

          

    

    //first name
    if(empty(trim($_POST["first"]))){
      $first_err = "Please enter first name.";     
  }  else{
      $first = trim($_POST["first"]);
  }
  
    //last name
    if(empty(trim($_POST["last"]))){
      $last_err = "Please enter last name.";     
  }  else{
      $last = trim($_POST["last"]);
  }

  if(empty(trim($_POST["phone"]))){
    $phone_err = "Please enter phone number.";     
}  
else{
    $phone = trim($_POST["phone"]);
}

if(empty(trim($_POST["message"]))){
    $message_err = "Please enter message.";     
}  
else{
    $message = trim($_POST["message"]);
}





    // Check input errors before inserting in database
    if(empty($username_err)&&empty($first_err)&&empty($last_err)&&empty($phone_err)&&empty($message_err) ){
        
        // Prepare an insert statement
        $sql = "INSERT INTO contact(first_name,last_name, email, phone, message) 
        VALUES (?,?,?,?,?)";
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssss",$param_first,$param_last, $param_username, $param_phone, $param_message);
            
            // Set parameters
            $param_first=$first;
            $param_last=$last;
            $param_username = $username;
            $param_phone=$phone;
      $param_message=$message;
                    
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                echo "<script>alert('Thank you for your response!!');</script>";
                //header('Location:index.php');
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
else{
     
    
}
?>


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
                                <h2>Contact Us</h2>
                                <ol class="breadcrumb">
                                    <li><a href="index.html">Home</a></li>
                                    <li>Contact</li>
                                </ol>
                            </div>
                        </div> <!-- end row -->
                    </div> <!-- end container -->
                </div>
            </div>
        </section>
        <!-- end page-title -->
        <!-- start contact-pg-contact-section -->
        <section class="contact-pg-contact-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-md-6">
                        <div class="section-title-s3 section-title-s5">
                            <h2>Our Contacts</h2>
                        </div>
                        <div class="contact-details">
                            <p>We are committed to empowering individuals to move successfully through varying stages of life.</p>
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="ti-location-pin"></i>
                                    </div>
                                    <h5>Our Location</h5>
                                    <p>Midwood International & Cultural Center,7701 Wallace lane, Charlotte NC 28212</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="ti-mobile"></i>
                                    </div>
                                    <h5>Phone</h5>
                                    <p> (704) 491-1186</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="ti-email"></i>
                                    </div>
                                    <h5>Email</h5>
                                    <p>Nbcharlotte@uisac.org</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col col-md-6">
                        <div class="contact-form-area">
                            <div class="section-title-s3 section-title-s5">
                                <h2>Quick Contact Form</h2>
                            </div>
                            <div class="contact-form">
                                <form  id="contact-form"  class="contact-validation-active" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                     <div>
                                        <input type="text" class="form-control " name="first" placeholder="First name">
                                        <span class="help-block"><?php echo $first_err; ?></span>
                                    </div>
                                    <div>
                                        <input type="text" class="form-control" name="last" placeholder="Last name">
                                         <span class="help-block"><?php echo $last_err; ?></span>
                                    </div>
                                    <div>
                                        <input type="text" class="form-control" name="username" placeholder="Enter Email">
                                        <span class="help-block"><?php echo $username_err; ?></span>
                                    </div>
                                    <div>
                                        <input type="text" class="form-control" name="phone" placeholder="Enter Phone Number">
                                        <span class="help-block"><?php echo $phone_err; ?></span>
                                    </div>
                         
                                    <div class="comment-area">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3" placeholder="Enter Message"></textarea>
                                        <span class="help-block"><?php echo $message_err; ?></span>
                                    </div>
                                    <div class="submit-area">
                                        <button type="submit" class="theme-btn">Submit Now</button>
                                        <div id="loader">
                                            <i class="ti-reload"></i>
                                        </div>
                                    </div>
                                    <div class="clearfix error-handling-messages">
                                        <div id="success">Thank you</div>
                                        <div id="error"> Error occurred while sending email. Please try again later. </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>                    
                </div>

                <div class="row">
                    <div class="col col-xs-12">
                        <div class="contact-map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3261.26288811428!2d-80.74262018541056!3d35.17499976517691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8854219904a11bed%3A0xd049d197828def3e!2s7701%20Wallace%20Ln%2C%20Charlotte%2C%20NC%2028212%2C%20USA!5e0!3m2!1sen!2sin!4v1621253037071!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>                        </div>                        
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end contact-pg-contact-section -->
       
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