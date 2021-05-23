<?php
$alert="";
if(isset($_POST["submit"])){
    $username=$_POST["Username"];
    $password =$_POST["Password"];
    if($username==""||$password==""){
        $alert= "Please enter the value";
    }
    else
    {
        include_once './manage/login/loginClass.php';
        $loginClass=new loginClass();
        $alert=$loginClass->checkLogin($username, $password);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signin To CMS</title>
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://getbootstrap.com/examples/signin/signin.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

        <form class="form-signin" method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <?php echo $alert; ?>
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Username</label>
        <input type="text" id="inputEmail" class="form-control" name="Username" placeholder="Enter Username" autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="text" id="inputPassword" class="form-control" name="Password" placeholder="Enter Password">
<!--        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>-->
<button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
