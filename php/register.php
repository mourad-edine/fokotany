<?php
if(isset($_POST["register"]))
{
    $nom = $_POST["nom"];
    $mot_de_passe = $_POST["mot_de_passe"];
    $email = $_POST["email"];
    $adresse = $_POST["adresse"];
    $sexe = $_POST["sexe"];
    $numeroTEL= $_POST["numeroTEL"];
    $prenom = $_POST["prenom"];
    $numeroCIN = $_POST["numeroCIN"];
    $profession = $_POST["profession"];


    if($nom != "" && $mot_de_passe != "" && $email != "" && $adresse != "" && $sexe != "" && $prenom != "" && $numeroCIN != "" && $numeroTEL != "" && $profession != "" )
    {

        $sql = "INSERT INTO userse(nom,prenom,profession,adresse,numeroCIN,email,numeroTEL,mot_de_passe,sexe) VALUES('$nom','$prenom','$profession','$adresse','$numeroCIN','$email','$numeroTEL','$mot_de_passe','$sexe')";
  
        include_once('db.php');

        $qry = mysqli_query($conn,$sql) or die("erreur d'entré!");
        if($qry)
        {
            echo "$nom ajouter avec succes";
        }else{
            echo "erreur";
        }
    }
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
    <div class="">
      <div class="">
        <div class="row w-100 mx-0">
          <div class="col-lg-6 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5 bg-white mt-5">
             
              <h4>ajouter un administrateur!</h4>

              <form class="pt-3" method="POST" name="register">
                <div class="form-group mt-3">
                  <input type="text" name="nom" class="form-control form-control-lg" id="username" placeholder="nom">
                </div>
                <div class="form-group mt-3">
                  <input type="text" name="prenom" class="form-control form-control-lg" id="prenom" placeholder="prenom">
                </div>
                <div class="form-group mt-3">
                  <select name="profession" class="form-control form-control-lg" id="profession">
                    <option value="">profession</option>
                    <option value="ingenieur">ingénieur</option>
                    <option value="chauffeur">chauffeur</option>
                    <option value="mécanicien">mecanicien</option>
                    <option value="boucher">boucher</option>
                    <option value="informaticien">informaticien</option>
                    <option value="agriculteur">agriculteur</option>
                    <option value="vendeur">vendeur</option>
                    <option value="Autre">Autre</option>
                  </select>
                </div>
                
                <div class="form-group mt-3">
                  <select name="adresse" class="form-control form-control-lg" id="adresse">
                    <option value="">adresse</option>
                    <option value="mangarano ||">mangarano ||</option>
                    <option value="Barikadimy">Barikadimy</option>
                    <option value="mangarivotra">mangarivotra</option>
                    <option value="Basiandrano">Basiandrano</option>
                    <option value="AR">Argentina</option>
                  </select>
                </div>
                <div class="form-group mt-3">
                  <input type="email" name="email" class="form-control form-control-lg" id="email" placeholder="Email" required>
                </div>
                <div class="form-group mt-3">
                  <input type="text" name="numeroCIN" class="form-control form-control-lg" id="numeroCIN" placeholder="numeroCIN">
                </div>
                <div class="form-group mt-3">
                  <select name="sexe" class="form-control form-control-lg" id="sexe">
                    <option value="">sexe</option>
                    <option value="homme">homme</option>
                    <option value="femme">femme</option>
                  </select>
                </div>
                <div class="form-group mt-3">
                  <input type="text" name="numeroTEL" class="form-control form-control-lg" id="numeroTEL" placeholder="numero de téléphone" required>
                </div>
                <div class="form-group mt-3">
                  <input type="password" name="mot_de_passe" class="form-control form-control-lg" id="mot_de_passe" placeholder="Password">
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
