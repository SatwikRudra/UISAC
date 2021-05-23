<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">


  <title>UISAC | Admin</title>

  <!-- Custom fonts for this template -->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">


                        <!-- Sidebar - Brand -->
                        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                            <div class="sidebar-brand-icon ">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            </div>
                            <div class="sidebar-brand-text mx-3">UISAC | Admin</div>
                        </a>

                        <hr class="sidebar-divider my-0">


<!-- Nav Item - Charts -->
<li class="nav-item ">
  <a class="nav-link" href="../events/gallery.php">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>Events</span></a>
</li>

<!-- Nav Item - Tables -->
<li class="nav-item ">
  <a class="nav-link" href="../album/index.php">
    <i class="fas fa-fw fa-table"></i>
    <span>Gallery</span></a>
</li>
<li class="nav-item ">
  <a class="nav-link" href="blog/">
    <i class="fas fa-fw fa-table"></i>
    <span>Blog</span></a>
</li>
<li class="nav-item active">
  <a class="nav-link" href="">
    <i class="fas fa-fw fa-table"></i>
    <span>Users</span></a>
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

          </form>

   
        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">

<!-- Nav Item - Search Dropdown (Visible Only XS) -->
<li class="nav-item dropdown no-arrow d-sm-none">
  <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fas fa-search fa-fw"></i>
  </a>
  <!-- Dropdown - Messages -->
  <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
    <form class="form-inline mr-auto w-100 navbar-search">
      <div class="input-group">
        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search fa-sm"></i>
          </button>
        </div>
      </div>
    </form>
  </div>
</li>



<div class="topbar-divider d-none d-sm-block"></div>

<!-- Nav Item - User Information -->
<li class="nav-item dropdown no-arrow">
  <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="mr-2 d-none d-lg-inline text-gray-600 small"> 
    

  Welcome  <?php
  session_start();
  echo htmlspecialchars($_SESSION["firstname"]); ?> 
     </span>
     <i class="fa fa-user" aria-hidden="true"></i>

  </a>
  <!-- Dropdown - User Information -->
  <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
  <a class="dropdown-item" href="../passwordreset.php" data-toggle="modal" data-target="#logoutModa">
      <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
      Reset Password
    </a>
    <a class="dropdown-item" href="../logout.php" data-toggle="modal" data-target="#logoutModal">
      <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
      Logout
    </a>
  </div>
</li>

</ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
     
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Registered Users</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                    <th>First Name</th>
                      <th>Last Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Address</th>
                      <th>State</th>
                      <th>Membership</th>
                      <th>Actions</th>
                    
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                    <th>First Name</th>
                      <th>Last Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Address</th>
                      <th>State</th>
                      <th>Membership</th>
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
                      <td>'.$row["first_name"].'</td>
                  
                      <td>'.$row["last_name"].'</td>
                  
                      <td>'.$row["email"].'</td>
                      <td>'.$row["phone"].'</td>
                      <td>'.$row["address"].'</td>
                      <td>'.$row["state"].'</td>
                      <td>'.$row["membership"].'</td>
                    
                                
                <td>  <a href="update.php?id='. $row['id'] .'" title="Update Record" data-toggle="tooltip"><span><i class="fa fa-pencil-square" aria-hidden="true"></i></span></a>&nbsp;
                <a href="delete.php?id="'. $row['id'] .'" title="Delete Record" data-toggle="tooltip"><span ><i class="fa fa-trash" aria-hidden="true"></i></span></a></td>
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
          <a class="btn btn-primary" href="login.html">Logout</a>
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
