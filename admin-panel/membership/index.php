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


        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
     
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Membership Registered Users</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                  <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Address</th>
                      <th>State</th>
                      <th>Membership</th>
                       <th>Status</th>
                      <th>Actions</th>
                    
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                    <th>Name</th>
                      
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Address</th>
                      <th>State</th>
                      <th>Membership</th>
                             <th>Status</th>
                      <th>Actions</th>
                    </tr>
                  </tfoot>
                  <tbody>
               
                  <?php
                    
                    include "../config.php";
                    $sql = "SELECT * FROM membership ORDER BY id DESC";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                          while($row = mysqli_fetch_array($result)){
              echo '    <tr>
                      <td>'.$row["first_name"].' '.$row["last_name"].'</td>
                  
                      
    
                      <td>'.$row["email"].'</td>
                      <td>'.$row["phone"].'</td>
                      <td>'.$row["address"].'</td>
                      <td>'.$row["state"].'</td>
                      <td>'.$row["membership"].'</td>
                           <td>'.$row["status"].'</td>
                    
                                
                <td> 
                <a href="update.php?id='. $row['id'] .'" title="Update Record" data-toggle="tooltip"> 
              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
              width="25" height="25"
              viewBox="0 0 172 172"
              style=" fill:#000000;float:right;">
              <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1"
               stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                stroke-dasharray="" stroke-dashoffset="0" font-family="none" 
                font-weight="none" font-size="none" text-anchor="none" 
                style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" 
                fill="none"></path><g fill="#3498db"><path d="M129.26245,9.28027c-2.78198,
                0 -5.56396,1.00781 -7.60059,3.04443l-11.39038,11.40088c-2.09961,-2.09961 -5.51147,
                -2.09961 -7.60059,0l-15.20117,15.20117c-1.01831,1.01831 -1.58521,2.37256 -1.58521,3.81079c0,1.42773 0.5669,2.78198
                 1.58521,3.78979l0.12598,0.13647l-72.77246,72.65698c-1.35425,1.35425 
                 -2.1731,3.14941 -2.33057,5.06006l-1.81616,22.5603l-1.88965,13.22754c-0.12598,
                 0.83984 0.15747,1.67969 0.76636,2.28858c0.50391,0.50391 1.18628,0.77685 1.88965,
                 0.77685c0.13647,0 0.26245,0 0.38843,-0.02099l13.21704,-1.87915l22.69678,-1.67969c1.93164,
                 -0.13647 3.7373,-0.96582 5.10205,-2.33057l72.77246,-72.66748c0.99731,0.93433 2.27808,
                 1.45923 3.65332,1.45923c1.43823,0 2.78198,-0.5564 3.80029,-1.57471l15.20117,
                 -15.20117c2.09961,-2.09961 2.09961,-5.50098 0,-7.60059l11.41138,-11.40088c2.02612,
                 -2.03662 3.13892,-4.73462 3.13892,-7.61108c0,-2.86597 -1.11279,-5.57446 -3.14941,
                 -7.60059l-22.80176,-22.80176c-2.02613,-2.03662 -4.8186,-3.04443 -7.61109,
                 -3.04443zM129.26245,14.60278c1.39624,0 2.79248,0.50391 3.81079,
                 1.52222l22.80176,22.80176c1.01831,1.01831 1.57471,2.36206 1.57471,
                 3.80029c0,1.43823 -0.5564,2.79248 -1.57471,3.80029l-11.40088,
                 11.41138l-30.41284,-30.41284l11.41138,-11.40088c1.00781,-1.01831 2.40405,
                 -1.52222 3.78979,-1.52222zM106.46069,27.52588l1.91065,1.90015l34.20264,
                 34.20264l1.90015,1.91065l-3.80029,3.78979c-1.0498,-1.0498 -2.75049,
                 -1.0498 -3.80029,0l-3.80029,3.81079c-1.0498,1.0498 -1.0498,2.75049 0,
                 3.80029l-3.80029,3.80029l-38.01343,-38.01343l3.80029,-3.80029c0.5249,
                 0.5249 1.20728,0.78735 1.90015,0.78735c0.69287,0 1.37524,
                 -0.26245 1.90015,-0.78735l3.81079,-3.80029c1.0498,-1.0498 1.0498,
                 -2.75049 0,-3.80029zM110.27148,40.03955c-0.69287,0 -1.37524,
                 0.26245 -1.90015,0.78735l-3.81079,3.80029c-1.0498,1.0498 -1.0498,
                 2.75049 0,3.80029c0.5249,0.5249 1.21777,0.78735 1.90015,
                 0.78735c0.69287,0 1.38574,-0.26245 1.91065,-0.78735l3.78979,
                 -3.80029c1.0603,-1.0498 1.0603,-2.75049 0,-3.80029c-0.5249,
                 -0.5249 -1.20728,-0.78735 -1.88965,-0.78735zM119.76172,49.55078c-0.68237,
                 0 -1.36474,0.25195 -1.88965,0.78735l-3.81079,3.78979c-1.0498,1.0603 -1.0498,
                 2.75049 0,3.81079c0.5249,0.5144 1.21777,0.77685 1.91065,0.77685c0.68237,
                 0 1.37524,-0.26245 1.90015,-0.77685l3.78979,-3.81079c1.0603,-1.0498 1.0603,
                 -2.73999 0,-3.78979c-0.5249,-0.5354 -1.20727,-0.78735 -1.90015,-0.78735zM91.40649,50.46411l30.40234,30.41284l-70.67285,70.55737l-2.56152,-12.80762l44.58521,-44.5852c1.0498,-1.0498 1.0498,-2.75049 0,-3.80029c-1.0498,-1.0498 -2.73999,-1.0498 -3.80029,0l-44.5957,44.5957l-6.33032,-1.27026l-1.27026,-6.34082l36.99512,-36.98462c1.0603,-1.0603 1.0603,-2.75049 0,-3.81079c-1.0498,-1.0498 -2.73999,-1.0498 -3.78979,0l-36.99512,36.99512l-12.53467,-2.49853zM129.27295,59.04102c-0.69287,0 -1.37524,0.26245 -1.90015,0.79785l-3.80029,3.78979c-1.0498,1.0603 -1.0498,2.75049 0,3.81079c0.5249,0.5144 1.20728,0.78735 1.90015,0.78735c0.69287,0 1.37524,-0.27295 1.90015,-0.78735l3.80029,-3.81079c1.0498,-1.0498 1.0498,-2.73999 0,-3.78979c-0.5249,-0.5354 -1.20728,-0.79785 -1.90015,-0.79785zM87.46973,70.45239c-0.69287,0 -1.37524,0.26245 -1.90015,0.77685l-7.60059,7.60059c-1.0603,1.0603 -1.0603,2.75049 0,3.81079c0.5144,0.5144 1.20728,0.78735 1.90015,0.78735c0.68237,0 1.37524,-0.27295 1.88965,-0.78735l7.60059,-7.60059c1.0603,-1.0603 1.0603,-2.75049 0,-3.81079c-0.5249,-0.5249 -1.20728,-0.78735 -1.88965,-0.77685zM17.7627,125.7876l14.20386,2.83447l1.54321,7.75806c0.22046,1.0603 1.0498,1.88965 2.11011,2.09961l7.74756,1.55371l2.86597,14.34033l-20.4502,1.50122l-9.6582,-9.64771z"></path></g></g></svg> <a>
                 
                <a href="delete.php?id='. $row['id'] .'" title="Delete Record" data-toggle="tooltip"><span ><i class="fa fa-trash" aria-hidden="true"></i></span></a></td>
                    </tr>';
                          }
                        }
                      }
?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="../login.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../js/demo/datatables-demo.js"></script>

</body>

</html>
