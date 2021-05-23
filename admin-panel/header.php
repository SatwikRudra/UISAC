<?php    session_start();
               
                    
                    // Check if the user is logged in, if not then redirect him to login page
                    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
                        header("location: ../login.php");
                      
                    }
                    ?>

                    <!DOCTYPE html>
                    <html lang="en">

                    <head>

                    <meta charset="utf-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                    <meta name="description" content="">
                    <meta name="author" content="">

                    <title>UISAC | Admin</title>
 
                    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

                    <!-- Custom fonts for this template-->
                    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
                    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

                    <!-- Custom styles for this template-->
                    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
                    <style>
                    .eimg{
                        width:19em;
                        height:14em;
                    }
body,h1,h2,h3,h4,h5,h6,label,table{
    color:black !important;
}
.help-block{
    color:red;
}



                    </style>
                    </head>

                    <body id="page-top">

                    <!-- Page Wrapper -->
                    <div id="wrapper">

                        <!-- Sidebar -->
                        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                        <!-- Sidebar - Brand -->
                        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../index.php">
                            <div class="sidebar-brand-icon ">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            </div>
                            <div class="sidebar-brand-text mx-3">UISAC | Admin</div>
                        </a>


<!-- header2end-->

