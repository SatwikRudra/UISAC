<?php
// Include config file
require_once "../config.php";
 

$username =$first=$last=$phone=$membership=$state=$address= "";
$username_err =$first_err=$last_err=$phone_err=$membership_err=$state_err=$address_err= "";
 
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
  
    if(empty(trim($_POST["phone"]))){
      $phone_err = "Please enter phone number.";     
  }  
  else{
      $phone = trim($_POST["phone"]);
  }
  
  
  if(empty(trim($_POST["state"]))){
      $state_err = "Please enter state";     
  }  
  else{
      $state= trim($_POST["state"]);
  }
  
  
  if(empty(trim($_POST["membership"]))){
      $membership_err = "Please enter membership";     
  }  
  else{
      $membership= trim($_POST["membership"]);
  }
  
   $_SESSION['varname']=$membership;
  
  if(empty(trim($_POST["address"]))){
      $address_err = "Please enter address";     
  }  
  else{
      $address= trim($_POST["address"]);
  }
  
    
    
    // Check input errors before inserting in database
     // Check input errors before inserting in database
     if(empty($username_err)&&empty($first_err)&&empty($last_err)&&empty($phone_err)&&empty($state_err)&&empty($address_err) ){
        
        // Prepare an insert statement
        $sql ="UPDATE membership SET first_name=?,last_name=?,email=?, phone=?,address=?,state=?,membership=? WHERE id=?";
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "sssssssi",$param_first,$param_last, $param_username, $param_phone, $param_address, $param_state, $param_membership,$param_id);
           
            // Set parameters
            $param_first=$first;
            $param_last=$last;
            $param_username = $username;
            $param_phone=$phone;
            $param_address=$address;
            $param_state=$state;
            $param_membership=$membership;
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
        $sql = "SELECT * FROM membership WHERE id = ?";
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
                    $phone = $row["phone"];
                    $address = $row["address"];
                    $state = $row["state"];
                    $membership = $row["membership"];
                   
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
<li class="nav-item active">
  <a class="nav-link" href="">
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
                        <div class="form-group <?php echo (!empty($phone_err)) ? 'has-error' : ''; ?>">
                            <label>Phone</label>
                            <input type="text" name="phone" class="form-control" value="<?php echo $phone; ?>">
                            <span class="help-block"><?php echo $phone_err; ?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($address_err)) ? 'has-error' : ''; ?>">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control" value="<?php echo $address; ?>">
                            <span class="help-block"><?php echo $address_err; ?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($state_err)) ? 'has-error' : ''; ?>">
                            <label>State</label>
                            <input type="text" name="state" class="form-control" value="<?php echo $state; ?>">
                            <span class="help-block"><?php echo $state_err; ?></span>
                        </div>

                        <div class="form-group ">
                            <label>Membership Type</label>
                            <select class="form-control" name="membership">
                        <option> $10.00 General Membership for 1 year </option>
                        <option>$251.00 Life Time Membership </option>
            
                    </select>
                            <span class="help-block"><?php echo $membership_err; ?></span>
                        </div><br>
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