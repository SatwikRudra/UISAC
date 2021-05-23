<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Events</title>
    <style>
.eimg{
    width:100%;
    height:20em;
}


@media (max-width:480px)
{
  .eimg{
    width:100%;
    height:12em;
}
}
    </style>
  </head>
  <body>



<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<br><br>
<div class="container">

<div class="row">



   <?php
        require_once "config.php";
        $sql = "SELECT * FROM events ORDER BY id DESC";
        if($result = mysqli_query($link, $sql)){
            if(mysqli_num_rows($result) > 0){
  
         while($row = mysqli_fetch_array($result)){
            echo  '<div class="col-lg-6">';

            echo   '<div class="card" style="width: 100%;">';
            echo "<img class='eimg'src='events/".$row['event_image']."'  >";
            echo ' <div class="card-body">';
                 echo   '<h5 class="card-title">' .$row["event_name"].'</h5>';
                 echo ' <p class="card-text"><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;' .$row["event_date"].'<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-clock" aria-hidden="true">&nbsp;</i>'.$row["event_time"].'</span> <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;' .$row["event_location"].'</span></p>';
             
                 echo' <a class="btn btn-primary" data-toggle="collapse" href="#c'.$row["id"].'" role="button" aria-expanded="false" aria-controls="collapseExample">Read More</a>';

                   echo '<div class="collapse" id="c'.$row["id"].'">';
                  echo ' <div class="card card-body">'.$row["event_description"]. '</div>';
         
                  echo ' </div>';
                echo '</div>';
           echo '</div>';

                echo   '<br>';
         
     echo '</div>';
         }
            }
        }


?>








</div>
















</div>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>