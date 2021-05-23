 <?php    include '../header.php';  ?>

<?php
// Include config file
require_once "../config.php";
$name = $date = $time =$image= $des=$loc="";
$name_err = $date_err = $time_err = $image_err=$des_err=$loc_err="";
 
 
 
// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];
    
  
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
    $des_loc = "Please enter location";     
} 
 else{
    $loc = $input_loc;
}









 

        // Check input errors before inserting in database
        if(empty($name_err) && empty($date_err) && empty($time_err)&&empty($image_err)&&empty($des_err))
        {
        
            $sql = "UPDATE events SET event_name='$name', event_date='$date',event_location='$loc', event_time='$time',event_image='$image',event_description='$des' WHERE id=$id";
         
            
            if ($link->query($sql) === TRUE) {
         
            echo "<script>alert('Updated Sucessfully')</script>";
                     echo "<script>window.location.href='index.php'</script>";
    
            } else {
              echo "Please provide all details";
            } 
            
             
        
        }}
} 

else{
    // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM events WHERE id = $id";
        if($stmt = mysqli_prepare($link, $sql)){
       
            // Set parameters
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value
                   $name = $row["event_name"];
                    $date = $row["event_date"];
                    $time= $row["event_time"];
                    $image=$row["event_image"];
                    $loc=$row["event_location"];
                    $des=$row["event_description"];
                   
                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: error.php");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
      
    }
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
  <a class="nav-link" href="">
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
                        <h2>Update Event</h2>
                    </div>
                
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"  enctype="multipart/form-data">
                        <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                            <label>Event Name</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>" required>
                            <span class="help-block"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($date_err)) ? 'has-error' : ''; ?>">
                            <label>Event date</label>
                            <input type="date" name="date" class="form-control" value="<?php echo $date; ?>" required>
                            <span class="help-block"><?php echo $date_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($time_err)) ? 'has-error' : ''; ?>">
                            <label>Event Time</label>
                            <input type="text" name="time" class="form-control" value="<?php echo $time; ?>" required>
                            <span class="help-block"><?php echo $time_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($image_err)) ? 'has-error' : ''; ?>">
                            <label>Event Image</label>
                            <input type="file" name="image" class="form-control" value="<?php echo $image; ?>" required>
                            <span class="help-block"><?php echo $image_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($loc_err)) ? 'has-error' : ''; ?>">
                            <label>Event Location</label>
                            <input type="text" name="loc" class="form-control" value="<?php echo $loc; ?>" required>
                            <span class="help-block"><?php echo $loc_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($des_err)) ? 'has-error' : ''; ?>" >
                            <label>Event Description</label>
                            <textarea name="description" class="form-control" required><?php echo $des; ?></textarea>
                            <span class="help-block"><?php echo $des_err;?></span>
                        </div>
                  
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">  
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
                <div class="col-lg-2"></div>
            </div>        
    <?php include '../footer.php';?>