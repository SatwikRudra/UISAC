<?php
// Include config file
require_once "../config.php";
 // Initialize the session

// Define variables and initialize with empty values
$name = $date = $time =$image= $des=$pdf="";
$name_err = $date_err = $time_err = $image_err=$des_err=$pdf_err="";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please give a title.";
    }  else{
        $name = $input_name;
    }
    date_default_timezone_set("Asia/Kolkata");
$date=date("M-d Y");
    
$time=date("h:i a");


    
      $filename = $_FILES["image"]["name"]; 
      $tempname = $_FILES["image"]["tmp_name"];	 
        $folder = "images/".$filename; 
        move_uploaded_file($tempname, $folder) ;
        $image=$folder ;

 
    
    
        $filename2 = $_FILES["pdf"]["name"]; 
        $tempname2 = $_FILES["pdf"]["tmp_name"];	 
          $folder1 = "pdf/".$filename2; 
          move_uploaded_file($tempname2, $folder1) ;
          if($folder1=='pdf/')
          $folder1='0';
          $pdf=$folder1 ;
  
   
      
      
    



    

$input_des = trim($_POST["description"]);
if(empty($input_des)){
    $des_err = "Please write description";     
} 
 else{
    $des = $input_des;
}











    // Check input errors before inserting in database
    if(empty($name_err) && empty($date_err) && empty($time_err)&&empty($image_err)&&empty($des_err))
    {
        // Prepare an insert statement
        $sql = "INSERT INTO blog(title,date,time,image,description,pdf) 
        VALUES ('$name','$date','$time','$image','$des','$pdf')";
 
        
        if ($link->query($sql) === TRUE) {
          header("Location:index.php");

        } else {
          echo "Please provide all details";
        } 
		
		 
    
    }
    
    // Close connection
    mysqli_close($link);
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
<li class="nav-item ">
  <a class="nav-link" href="../banner">
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
<li class="nav-item active ">
  <a class="nav-link" href="">
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


<h3>Blog</h3>
<?php include '../header3.php'; ?>




        <div class="container-fluid">
            <div class="row">
            <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="page-header">
                        <h4>Please enter the following inputs to create new article</h4>
                    </div>
                
                  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                            <label> Title<sup style="color:red;font-size:1em;">*</sup></label>
                            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>" required>
                            <span class="help-block"><?php echo $name_err;?></span>
                        </div>
                   
					            	<div class="form-group <?php echo (!empty($image_err)) ? 'has-error' : ''; ?>">
                            <label>Image<sup style="color:red;font-size:1em;">*</sup></label>
                            <input type="file" name="image" class="form-control" value="<?php echo $image; ?>" required>
                            <span class="help-block"><?php echo $image_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($pdf_err)) ? 'has-error' : ''; ?>">
                            <label>PDF (optional)</label>
                            <input type="file" name="pdf" class="form-control" value="<?php echo $pdf; ?>">
                            <span class="help-block"><?php echo $pdf_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($des_err)) ? 'has-error' : ''; ?>">
                            <label> Description<sup style="color:red;font-size:1em;">*</sup></label>
                            <textarea name="description" class="form-control" required><?php echo $des; ?></textarea>
                            <span class="help-block"><?php echo $des_err;?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                  </form>
                </div>
                <div class="col-lg-2"></div>
            </div>        
        </div>
        <!-- /.container-fluid -->

 </div>
      <!-- End of Main Content -->

   
<?php include '../footer.php';?>