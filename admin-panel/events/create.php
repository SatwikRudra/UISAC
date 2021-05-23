<?php    include '../header.php';  ?>


<?php
// Include config file
require_once "../config.php";
 // Initialize the session

// Define variables and initialize with empty values
$name = $date = $time =$image= $des=$loc="";
$name_err = $date_err = $time_err = $image_err=$des_err=$loc_err="";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    }  else{
        $name = $input_name;
    }
    
    // Validate occupation
    $input_date = trim($_POST["date"]);
    if(empty($input_date)){
        $date_err = "Please enter a valid date";     
    } else{
        $date = $input_date;
    }
    
    // Validate dob
    $input_time = trim($_POST["time"]);
    if(empty($input_time)){
        $time_err = "Please enter the time";     
    } 
     else{
        $time = $input_time;
    }

      $filename = $_FILES["image"]["name"]; 
      $tempname = $_FILES["image"]["tmp_name"];	 
        $folder = "event-image/images/".$filename; 
        move_uploaded_file($tempname, $folder) ;
        $image=$folder ;

 
    



    

$input_des = trim($_POST["description"]);
if(empty($input_des)){
    $des_err = "Please write description";     
} 
 else{
    $des = $input_des;
}


$input_loc = trim($_POST["loc"]);
if(empty($input_loc)){
    $loc_err = "Please enter location";     
} 
 else{
    $loc = $input_loc;
}









    // Check input errors before inserting in database
    if(empty($name_err) && empty($date_err) && empty($time_err)&&empty($image_err)&&empty($des_err))
    {
        // Prepare an insert statement
        $sql = "INSERT INTO events(event_name, event_date,event_time,event_location,event_image,event_description) 
        VALUES ('$name','$date','$time','$loc','$image','$des')";
 
        
        if ($link->query($sql) === TRUE) {
         
            echo "<script>alert('Created Sucessfully')</script>";
                     echo "<script>window.location.href='index.php'</script>";

        } else {
          echo "Please provide all details";
        } 
		
		 
    
    }
    
    // Close connection
    mysqli_close($link);
}
?>



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
<li class="nav-item active ">
  <a class="nav-link" href="index.php">
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
  <a class="nav-link" href="../blog">
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


<h3>Events</h3>
<?php include '../header3.php'; ?>



        <div class="container-fluid">
            <div class="row">
            <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="page-header">
                        <h2>Create Event</h2>
                    </div>
                
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                            <label>Event Name</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                            <span class="help-block"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($date_err)) ? 'has-error' : ''; ?>">
                            <label>Event date</label>
                        
                            <input type="date" name="date" class="form-control" value="<?php echo $date; ?>">
                            <span class="help-block"><?php echo $date_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($time_err)) ? 'has-error' : ''; ?>">
                            <label>Event Time</label>
                            <input type="text" name="time" class="form-control" value="<?php echo $time; ?>">
                            <span class="help-block"><?php echo $time_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($loc_err)) ? 'has-error' : ''; ?>">
                            <label>Event Location</label>
                            <input type="text" name="loc" class="form-control" value="<?php echo $loc; ?>">
                            <span class="help-block"><?php echo $loc_err;?></span>
                        </div>
					            	<div class="form-group <?php echo (!empty($image_err)) ? 'has-error' : ''; ?>">
                            <label>Event Image</label>
                            <input type="file" name="image" class="form-control" value="<?php echo $image; ?>" required>
                            <span class="help-block"><?php echo $image_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($des_err)) ? 'has-error' : ''; ?>">
                            <label>Event Description</label>
                            <textarea name="description" class="form-control"><?php echo $des; ?></textarea>
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


      <?php 

include '../footer.php';

?>
