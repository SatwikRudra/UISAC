<?php

require_once "../config.php";
$image= "";
$image_err="";
$name_err = "";
$desc_err = "";
$circle_err = "";
$slide_title = "";
$slide_description = "";
$circle_text = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){

        
      $slide_title = trim($_POST["slide_title"]);
      if(empty($slide_title)){
          $name_err = "Please enter a name.";
      }  else{
          $slide_title = $slide_title;
      }
  
      $slide_description = trim($_POST["slide_description"]);
      if(empty($slide_description)){
          $desc_err = "Please enter a name.";
      }  else{
          $slide_description = $slide_description;
      }
    
      $circle_text = trim($_POST["circle_text"]);
      if(empty($circle_text)){
          $circle_err = "Please enter a name.";
      }  else{
          $circle_text = $circle_text;
      }
      
      $filename = $_FILES["image"]["name"]; 
      $tempname = $_FILES["image"]["tmp_name"];	 
        $folder = "images/".$filename; 
        move_uploaded_file($tempname, $folder) ;
        $image=$folder ;

    echo $image;
    $sql="INSERT INTO banner(image,slide_title,slide_description,circle_text) VALUES ('$image','$slide_title','$slide_description','$circle_text')";

        if ($link->query($sql) === TRUE) {
          header("Location:index.php");

        } else {
          echo "Please provide all details";
        } 
		
    
    
}
?>

<?php    include '../header.php';  ?>


<!-- Divider -->
<hr class="sidebar-divider my-0">
<br>
<div class="sidebar-heading">
  Pages
</div>
<!-- Nav Item - Charts -->
<li class="nav-item active">
  <a class="nav-link" href="">
  <i class="fa fa-file-image" aria-hidden="true"></i>
    <span>Home-Banner</span></a>
</li>
<li class="nav-item   ">
  <a class="nav-link" href="../about/">
  <i class="fa fa-building" aria-hidden="true"></i>
    <span>About</span></a>
</li>
<li class="nav-item ">
  <a class="nav-link" href="../events/">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>Events</span></a>
</li>

<!-- Nav Item - Tables -->
<li class="nav-item ">
  <a class="nav-link" href="../album/">
  <i class="fa fa-file-image" aria-hidden="true"></i>
    <span>Gallery</span></a>
</li>
<li class="nav-item ">
  <a class="nav-link" href="../blog/">
  <i class="fa fa-book" aria-hidden="true"></i>
    <span>Blog</span></a>
</li>
<li class="nav-item  ">
  <a class="nav-link" href="../contact/">
  <i class="fa fa-phone" aria-hidden="true"></i>
    <span>Contact</span></a>
</li>
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Users
</div>
<li class="nav-item ">
  <a class="nav-link" href="../membership/">
  <i class="fa fa-user" aria-hidden="true"></i>
    <span>Membership</span></a>
</li>
<li class="nav-item">
  <a class="nav-link" href="../donation/">
  <i class="fa fa-credit-card" aria-hidden="true"></i>
    <span>Donations</span></a>
</li>
<li class="nav-item ">
  <a class="nav-link" href="../volunteer/">
  <i class="fa fa-hand-paper" aria-hidden="true"></i>
    <span>Volunteer</span></a>
</li>

<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

  <!-- Topbar -->
  <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
      <i class="fa fa-bars"></i>
    </button>


<h3>Home-Banner</h3>
<?php include '../header3.php'; ?>




        <div class="container-fluid">
            <div class="row"> 
            <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="page-header">
                    
                    </div>
                
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                      
          
                    
					            	<div class="form-group <?php echo (!empty($image_err)) ? 'has-error' : ''; ?>">
                            <label>Upload Banner Image</label>
                            <input type="file" name="image" class="form-control" value="<?php echo $image; ?>">
                            <span class="help-block"><?php echo $image_err;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                            <label>Slide Title</label>
                            <input type="text" name="slide_title" class="form-control" value="<?php echo $slide_title; ?>">
                            <span class="help-block"><?php echo $name_err;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($desc_err)) ? 'has-error' : ''; ?>">
                            <label>Slide Description</label>
                            <input type="text" name="slide_description" class="form-control" value="<?php echo $slide_description; ?>">
                            <span class="help-block"><?php echo $desc_err;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($circle_err)) ? 'has-error' : ''; ?>">
                            <label>Text in Circle</label>
                            <input type="text" name="circle_text" class="form-control" value="<?php echo $circle_text; ?>">
                            <span class="help-block"><?php echo $circle_err;?></span>
                        </div>
                       
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
                </div>
                <div class="col-lg-2"></div>
            </div>        
        </div>
        <!-- /.container-fluid -->

      </div></div>
      <!-- End of Main Content -->

      <?php include '../footer.php';?>