<?php
if(isset($_POST["register"]))
{
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $country = $_POST["country"];

    if($username != "" && $password != "" && $email != "" && $country != "" )
    {

        $sql = "INSERT INTO users(username,password,email,country) VALUES('$username','$password','$email','$country')";
  
        include_once('db.php');

        $qry = mysqli_query($conn,$sql) or die("erreur d'entré!");
        if($qry)
        {
            echo "$username ajouter avec succes";
        }else{
            echo "erreur";
        }
    }
}
?>
 


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body class="">
  <div class="container-scroller">
    <div class="">
      <div class="">
        <div class="row w-100 mx-0">
          <div class="col-lg-6 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5 bg-white mt-5">
             
              <h4>ajouter un administrateur!</h4>

              <form class="pt-3" method="POST" name="register">
                <div class="form-group mt-3">
                  <input type="text" name="username" class="form-control form-control-lg" id="username" placeholder="Username">
                </div>
                <div class="form-group mt-3">
                  <input type="email" name="email" class="form-control form-control-lg" id="email" placeholder="Email">
                </div>
                <div class="form-group mt-3">
                  <select name="country" class="form-control form-control-lg" id="country">
                    <option value="">region</option>
                    <option value="tm">toamasina</option>
                    <option value="UK">tanà</option>
                    <option value="IN">India</option>
                    <option value="GR">Germany</option>
                    <option value="AR">Argentina</option>
                  </select>
                </div>
                <div class="form-group mt-3">
                  <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="Password">
                </div>
                <div class="mt-3">
                  <input type="submit" name="register" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="inscription"/>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  vous avez déjà un compte? <a href="index.php" class="text-primary">connection</a>
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
