<?php
include_once './inc/header.php';
include_once './gallery/galleryClass.php';
$galleryClass=new galleryClass();
$listAlbum=$galleryClass->listAlbum();
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
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="jhttp://getbootstrap.com/docs/4.0/examples/justified-nav/justified-nav.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      <div class="masthead">
          <br/>
        <h3 class="text-muted">List Album</h3>
        <br/>

        <?php include_once './inc/navbar.php'; ?>
      </div>


      <!-- Example row of columns -->
      <div class="col-md-6">
          <table class="table table-bordered table-striped">
              <thead>
                  <tr><th>Id</th><th>Name</th></tr>
              </thead>
              <tbody>
                  <?php
                    if(count($listAlbum)){
                        foreach ($listAlbum as $value) {
                            echo "<tr><td>$value[AlbumId]</td><td>$value[AlbumName]</td></tr>";
                        }
                    }
                  ?>
              </tbody>
          </table>
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
