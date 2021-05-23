<?php    include '../header.php';  ?>


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
  <a class="nav-link" href="">
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
                <div class="col-md-12">
                    <div class="page-header clearfix">
                    
                    <center>
                        <a href="createalbum.php" class="btn btn-success pull-right" style="background:none;color:green;">Create New Album
                        </a> <a href="creategallery.php" class="btn btn-primary pull-right">Add New Image
                        </a>
                        </center>
                        <br><br>
                   



  </div>


</div>
                    </div>


            

           <div class="row text-center">
           <div class="col-lg-2"></div>

           <div class="col-lg-8">
          <?php
                    
                include '../config.php';
                    $sql = "SELECT * FROM album ORDER BY AlbumId DESC";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        
                                        echo "<th>Album Name</th>";
                                        echo "<th>Actions</th>";
                                  
                                   
                              
                                while($row = mysqli_fetch_array($result)){
                        
                                    echo "<tr>";
                                        
                                        echo "<td>" . $row['AlbumName'] . "</td>";

                                        echo "<td> 
                                        <a  href='updatealbum.php?AlbumId=". $row['AlbumId'] ."' title='Edit Album' data-toggle='tooltip'> <span><img src='../blog/i.png' width='25'height='25' </span></a>&nbsp;&nbsp;
                                        <a href='viewgallery.php?AlbumId=". $row['AlbumId'] ."' title='View Album' data-toggle='tooltip'> <span ><i class='fa fa-eye' aria-hidden='true'></i></span></a>&nbsp;&nbsp;
                                         <a  href='delete.php?AlbumId=". $row['AlbumId'] ."' title='Delete Album' data-toggle='tooltip'><span ><i class='fa fa-trash' aria-hidden='true'></i></span></a> </td>";
                                
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                   
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No Albums were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
 
                    mysqli_close($link);
          ?>
            </div>  
           <div class="col-lg-2"></div>
                    <br>
</div>
</div>
                  </div>
            
                  </div>
            </div>
            </div>        
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

   
<?php include '../footer.php';?>