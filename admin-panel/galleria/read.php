<?php

if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
   
    require_once "admin-panel/config.php";
    
    
    $sql = "SELECT * FROM galleria WHERE id = ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        
        $param_id = trim($_GET["id"]);
        
      
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){
               
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                
                $title = $row["title"];
                $date= $row["date"];
                $time = $row["time"];
                $image=$row["image"];
                $des=$row["description"];
            } else{
               
                header("location: error.php");
                exit();
            }
            
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
  
    mysqli_stmt_close($stmt);
    
 
    mysqli_close($link);
} else{
   
    header("location: error.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Charlotte Gujrati Samaj</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-logos/0.14/font-logos.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-logos/0.14/font-logos.min.css">
<link href="https://fonts.googleapis.com/css2?family=Archivo:wght@600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="css/bootstrapvalues.css">
<link rel="stylesheet" href="css/navmenu.css">
<link rel="stylesheet" href="css/banner.css">
<link rel="stylesheet" href="css/footer.css">
<link rel="stylesheet" href="css/Main-content.css">
	<!-- Animate.css -->


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->

<style>
  body,h1,h2,h3,h4,h5,h6,p,a{
    font-family: 'Roboto Slab', serif !important;
  }
  .img-fluid{
	  width:100%;}
</style>
</head>
<body>
    <div class="container-fluid">
        <div class="header">
          <div class="top-header">
          <div class="top-container">
            <div class="navbar navbar-expand sticky-top">
                <div class="nm-social-icons d-flex">
                 <div><a href="#"><i class="fa fa-facebook-official w3-large" aria-hidden="true"></a></i></div>
                 <div><a href="#"><i class="fa fa-instagram w3-large" aria-hidden="true"></i></a></div>
                 <div><a href="#"><i class="fa fa-twitter w3-large" aria-hidden="true"></i></a></div>
                 <div><a href="#"><i class="fa fa-youtube w3-large" aria-hidden="true"></i></a></div>
                </div>

                
              <div class="nm-header-buttons d-flex">
                <div><a href="#"><button class="btn btn-outline-success text-secondary" type="submit">Signup</button></a></div>
                <div><a href="#"><button class="btn btn-outline-success text-secondary" type="submit">Login</button></a></div>
               </div>
               </div>
            </div>
          </div>
          
          
       
           <div class="middle-header" style="background:#1D2B64;  ">    
            <div class="navbar  navbar-expand-sm" style="display: flex;">
                <div class="logo-container">
                 <h1 class="navbar-brand logo-font" style="
                 font-family: 'Roboto Slab', serif !important;">CHARLOTTE GUJRATI SAMAJ</h1>
                </div>
                    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
                                <div class="nm-container">
               
                <ul class="d-flex navbar-nav" >
                  <li class="nav-item" ><a href="#"style="color:white !important;font-weight:100;" >HOME</a></li>
                  <li class="nav-item"><a href="./AboutUs.html" style="color:white !important;">ABOUT</a></li>
                  <li class="nav-item"><a href="#" style="color:white !important;">EVENTS</a></li>
                  <li class="nav-item"><a href="#" style="color:white !important;">GALLERY</a></li>
                  <li class="nav-item"><a href="admin-panel/blog.php" style="color:white !important;">BLOG</a></li>
                  <li class="nav-item"><a href="#" style="color:white !important;">CONTACT</a></li>
                  <li class="nav-item"><a href="#" style="color:white !important;">MEMBERSHIP</a></li>
                </ul> 
              </div>
            </div>
        </div>
        </div>
        </div>

    <br><br>

    


  <section>

<div class="container ">
<div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
        <h1 style="color:black;font-weight:700;">
         <?php echo $row["title"]; ?>
        </h1>
        <img class="img-fluid" src="admin-panel/blog/<?php echo $row["image"]; ?>" >  <br><br>
        <h5 class="form-control-static"><b>Published on</b>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row["date"]; ?></h5>

    </span>
        <p class="form-control-static" style="  display: flex;align-content:justify;"><?php echo $row["description"]; ?></p>
    </div>
    <div class="col-lg-2"></div>
</div>
</div>

</section>



  



   <div class="footer" style="background:#1D2B64;color:white !important;">
     <div class="container">
        <div><p class="text-center">&copy CHARLOTTE GUJRATI SAMAJ, All Rights Reserved</p></div>
     </div>
   </div>

    </div>
</body>
</html>