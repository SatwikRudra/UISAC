<?php
// Include config file
require_once "../config.php";
 

$username =$first=$last= "";
$username_err =$first_err=$last_err= "";
 
// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];
     // Validate username
     if(empty(trim($_POST["username"]))){
        $username_err = "Please enter email.";
    } else{
  
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

    
    // Check input errors before inserting in database
     // Check input errors before inserting in database
     if(empty($username_err) ){
        
        // Prepare an insert statement
        $sql ="UPDATE users SET first_name=?,last_name=?,email=? WHERE id=?";
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "sssi",$param_first,$param_last, $param_username,$param_id);
           
            // Set parameters
            $param_first=$first;
            $param_last=$last;
            $param_username = $username;
 
            $param_id=$id;
                    
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: index.php");
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
    // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM users WHERE id = ?";
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
                    $first = $row["first_name"];
                    $last = $row["last_name"];
                    $username = $row["email"];
       
                   
                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: index.php");
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
      echo "error";
        exit();
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
<a class="nav-link" href="../membership">
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


<h3>Membership</h3>
<?php include '../header3.php'; ?>

        <div class="container-fluid">
            <div class="row">
            <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="page-header">
                        <h2>Update Profile</h2>
                    </div>
                        
         <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group <?php echo (!empty($first_err)) ? 'has-error' : ''; ?>">
                            <label>First Name</label>
                            <input type="text" name="first" class="form-control" value="<?php echo $first; ?>">
                            <span class="help-block"><?php echo $first_err; ?></span>
                        </div>  
                        <div class="form-group <?php echo (!empty($last_err)) ? 'has-error' : ''; ?>">
                            <label>Last Name</label>
                            <input type="text" name="last" class="form-control" value="<?php echo $last; ?>">
                            <span class="help-block"><?php echo $last_err; ?></span>
                        </div>  

                        <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                            <label>Email</label>
                            <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                            <span class="help-block"><?php echo $username_err; ?></span>
                        </div>    
                     
                        <div class="form-group">
                          <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>  
                        
                        </div>
                     
        </form>
                </div>  <div class="col-lg-2"></div>
                </div>
      <!-- End of Main Content -->

<?php include '../footer.php';?>