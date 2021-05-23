<?php    include '../header.php';  ?>
<?php

require_once "../config.php";
$album= "";
$album_err="";

if($_SERVER["REQUEST_METHOD"] == "POST"){
 
$album=$_POST['album'];


$filename = $_FILES["image"]["name"]; 
$tempname = $_FILES["image"]["tmp_name"];	 
  $folder = "album_thumnail/".$filename; 
  move_uploaded_file($tempname, $folder) ;
  $image=$folder ;

   
        $sql = "INSERT INTO album(AlbumName,thumbnail) VALUES ('$album','$image')";

        if ($link->query($sql) === TRUE) {
          header("Location:index.php");

        } else {
          echo "Please provide all details";
        } 
		
    
    
    // Close connection
    mysqli_close($link);
}
?>




      <!-- Divider -->
      <hr class="sidebar-divider my-0">

<div class="sidebar-heading">
  Pages
</div>
<!-- Nav Item - Charts -->
<li class="nav-item ">
  <a class="nav-link" href="../banner/">
  <i class="fa fa-file-image" aria-hidden="true"></i>
    <span>Home-Banner</span></a>
</li>
<li class="nav-item ">
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
                        <h2>Create New Album</h2>
                    </div>
                
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                      
                          <div class="form-group <?php echo (!empty($album_err)) ? 'has-error' : ''; ?>">
                            <label>Enter Album Name</label>
                            <input type="text" name="album" class="form-control" value="<?php echo $album; ?>"  required>
                            <span class="help-block"><?php echo $album_err;?></span>
                        
                        
              
                        </div>
                        <div class="form-group">
                            <label>Upload Thmubnail</label>
                            <input type="file" name="image" class="form-control" value="<?php echo $image; ?>" required>
                       
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