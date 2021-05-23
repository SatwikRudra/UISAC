<?php
include_once './inc/header.php';
include_once './counting/countClass.php';
$countClass=new countClass();
$No=$countClass->showtheCount("gallery");
$aNo=$countClass->showtheCount("album");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Justified Nav Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jhttp://getbootstrap.com/docs/4.0/examples/justified-nav/justified-nav.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      <div class="masthead">
          <br/>
        <h3 class="text-muted">Gallery Dashboard</h3>
        <br/>
        <?php include_once './inc/navbar.php'; ?>
        
      </div>


      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-4">
          <h2>Gallery Added</h2>
          <h1><?php echo $No; ?></h1>
        </div>
          <div class="col-lg-4">
          <h2>Album Added</h2>
          <h1><?php echo $aNo; ?></h1>
        </div>
      </div>


    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="http://getbootstrap.com/assets/js/vendor/popper.min.js"></script>
    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
  </body>
</html>
