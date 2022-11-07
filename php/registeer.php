<?php

if(isset($_POST["register"]))
{
  $username = $_POST["username"];
  $password = $_POST["password"];
  $email = $_POST["email"];
  $country = $_POST["country"];
  if($username!= '' && $password != '' && $email != '' && $country!='' ){
    $sql = "INSERT INTO users(username, password,email, country) VALUES('$username','$password','$email','$country')";

    include_once('db.php');

    $qry = mysqli_query($conn, $sql) or die("misy raha tsy mazava ao");

    if($qry){
      echo "$username a été enregistré";
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
  <title>s'enregistrer</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/Capture d’écran 2022-09-03 213538.png" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <div class="container-scroller ">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5 bg-dark">
            <img src="images/téléchargement.png" alt="" width="60">
              <h4>vous êtes nouveau?</h4>
              <h6 class="font-weight-light">c'est facile de d'isncrire.</h6>
              <form class="pt-3" method="POST" name="register" action="">
                <div class="form-group">
                  <input type="text" name="username" class="form-control form-control-lg" id="username" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="email" name="email" class="form-control form-control-lg" id="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                  <select name="country" class="form-control form-control-lg" id="country">
                    <option value="">region</option>
                    <option value="US">Tuléar</option>
                    <option value="UK">Toamasina</option>
                    <option value="IN">Tananarive</option>
                    <option value="GR">Mahajanga</option>
                    <option value="AR">Antsiranana</option>
                  </select>
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="Password" required>
                </div>
                <div class="mb-4">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" name="iagree" value="1" class="form-check-input">
                      j'accepte tout
                    </label>
                  </div>
                </div>
                <div class="mt-3">
                  <input type="submit" name="register" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="inscription"/>
                
                </div>
                <div class="text-center mt-4 font-weight-light">
                  vous avez déjà un copmte? <a href="index.php" class="text-primary">se connecter</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
</body>

</html>
