<?php
if(isset($_POST["login"])){
  $username = $_POST["username"];
  $password = $_POST["password"];
  
  
  $sql = "SELECT * FROM users WHERE username = '$username'  && password ='$password'";
  require_once('db.php');
  $qry = mysqli_query($conn,$sql) or die("erreur d'entré!");
  $count = mysqli_num_rows($qry);
  if($count == 1){
     header("location: pageacc.php");
  }
  else{
    echo "on ne vous reconnnais pas";
  }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body class="bg-dark">
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5 bg-white mt-5">
            
              <h4>identifiez vous!</h4>
              <h6 class="font-weight-light"></h6>
              <form class="pt-3" method="post" name="login">
                <div class="form-group mt-3">
                  <input type="text" name="username" class="form-control form-control-lg" id="username" placeholder="Username">
                </div>
                <div class="form-group mt-3">
                  <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="Password">
                </div>
                <div class="mt-3">
                  <input type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name ="login" value="se connecter" />
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                    <div class="text-center mt-4 font-weight-light">
                          vous n'avez pas encore de compte? <a href="register.php" class="text-primary">creez un compte</a>
                    </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
