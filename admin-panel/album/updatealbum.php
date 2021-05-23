<?php    include '../header.php';  ?>
<?php
// Include config file
require_once "../config.php";
 
$name =$image= "";
 $name_err="";
 
// Processing form data when form is submitted
if(isset($_POST["AlbumId"]) && !empty($_POST["AlbumId"])){
    // Get hidden input value
    $id = $_POST["AlbumId"];
    
   // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } else{
        $name = $input_name;
    }
   

    $filename = $_FILES["image"]["name"]; 
    $tempname = $_FILES["image"]["tmp_name"];	 
      $folder = "album_thumnail/".$filename; 
      move_uploaded_file($tempname, $folder) ;
      $image=$folder ;

    
    // Check input errors before inserting in database
    if(empty($name_err)){
        // Prepare an update statement
           $sql = "UPDATE album SET AlbumName=?,thumbnail=? WHERE AlbumId=?";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssi", $param_title,$param_thumb,$param_id);
            
            
             $param_title = $name;
             $param_thumb=$image;
            $param_id = $id;
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
            echo "<script>alert('Updated Sucessfully')</script>";
                     echo "<script>window.location.href='index.php'</script>";
                //header("location: index.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
      
    }
    
   
} 

else{
    // Check existence of id parameter before processing further
    if(isset($_GET["AlbumId"]) && !empty(trim($_GET["AlbumId"]))){
        // Get URL parameter
        $id =  trim($_GET["AlbumId"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM album WHERE AlbumId = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            
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
                   $name = $row["AlbumName"];
                   $image=$row["thumbnail"];
           
                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: error.php");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
        
        // Close connection
        mysqli_close($link);
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
       
        exit();
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
  <a class="nav-link" href="../banner/">
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
<li class="nav-item active">
  <a class="nav-link" href="index.php">
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


<h3>Gallery</h3>
<?php include '../header3.php'; ?>


        <div class="container-fluid">
            <div class="row">
            <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="page-header">
                        <h2>Update Album Name</h2>
                    </div>
                    
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                            <label>Enter New Album Name</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                            <span class="help-block"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Upload Thumbnail</label>
                            <input type="file" name="image" class="form-control" value="<?php echo $image; ?>" required>
                       
                        </div>
                        <input type="hidden" name="AlbumId" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">  
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
                
            <div class="col-lg-2"></div>
            </div>        
   <?php include '../footer.php'; ?>