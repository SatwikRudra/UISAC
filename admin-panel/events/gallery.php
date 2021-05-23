
<?php    include '../header.php';  ?>


<!-- Divider -->
<hr class="sidebar-divider my-0">


<!-- Nav Item - Charts -->
<li class="nav-item active">
  <a class="nav-link" href="gallery.php">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>Events</span></a>
</li>

<!-- Nav Item - Tables -->
<li class="nav-item ">
  <a class="nav-link" href="../album">
    <i class="fas fa-fw fa-table"></i>
    <span>Gallery</span></a>
</li>
<li class="nav-item">
  <a class="nav-link" href="../blog">
    <i class="fas fa-fw fa-table"></i>
    <span>Blog</span></a>
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
                <div class="col-md-12">
                    <div class="page-header clearfix">
                    
                        <a href="create.php" class="btn btn-success pull-right">Add New Event</a>
                        <br><br>
                    </div>
                    <?php
                    
                    require_once "config.php";
                    $sql = "SELECT * FROM events ORDER BY id DESC";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        
                                        echo "<th>Event Name</th>";
                                      
                                        echo "<th>Event Date</th>";
                                        echo "<th>Event Time</th>";
                                        echo "<th>Event Image</th>";
                                        echo "<th>Event Description</th>";
                                       
                                       
										  echo "<th>Edit</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        
                                        echo "<td>" . $row['event_name'] . "</td>";
                                        echo "<td>" . $row['event_date'] . "</td>";
                                        echo "<td>" . $row['event_time'] . "</td>";
                                        echo "<td><img class='eimg' src='".$row['event_image']."' ></td>";
                                      
                                        echo "<td>" . $row['event_description'] . "</td>";
                                        echo "<td>";
                                            
                                            echo "<a href='update.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'><span></span></a>";
                                            echo "<a href='delete.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'><span >Delete</span></a>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                   
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
 
                    mysqli_close($link);
                    ?>
                </div>
            </div>        
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
<?php 

include '../footer.php';
?>