<?php 
if(isset($_POST['register']))
{
   $username = $_POST['username'];
   $password = $_POST['password'];
   $email = $_POST['email'];
   $country = $_POST['country'];


  if($username!= '' && $password != '' && $email!= '' &&$country != ''){
    $sql = "INSERT INTO utilisateur(username,password,email, country) VALUES('$username','$password','$email','$country')" ;
    include_once('base.php');

    $qry = mysqli_query($conn, $sql) or die("erreur d'insertion de donnée");

    if($qry)
    {
      echo "$username a bien été enregistré";
    }
  }
}else{
  echo "remplir toute les formulaire";
}

?>






<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="">
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5 bg-white mt-5">
             
              <h4>remplir les formulaires</h4>
              <form class="pt-3" method="POST" name="register">
              <div class="form-group">
                  <input type="text" name="username" class="form-control form-control-lg" id="username" placeholder="username">
                </div>
                <div class="form-group mt-3">
                  <input type="email" name="email" class="form-control form-control-lg" id="email" placeholder="Email">
                </div>
                <div class="form-group mt-3">
                  <select name="country" class="form-control form-control-lg" id="country">
                    <option value="">pays</option>
                    <option value="US">Madagascar</option>
                    <option value="UK">chine</option>
                    <option value="IN">japon</option>
                    <option value="GR">allemagne</option>
                    <option value="AR">Argentine</option>
                  </select>
                </div>
                <div class="form-group mt-3">
                  <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="Password">
                </div>
                <div class="mb-4">
                </div>
                <div class="mt-3">
                  <input type="submit" name="register" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="inscription"/>
                
                </div>
                <div class="text-center mt-4 font-weight-light">
                  connexion <a href="index.php" class="text-primary">se connecter</a>
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
