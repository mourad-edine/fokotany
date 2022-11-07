<?php
$titre = "ajouter";
$nav = "ajout";
if(isset($_POST["register"]))
{
  $nom = $_POST["nom"];
  $national = $_POST["national"];
  $email = $_POST["email"];
  $adresse = $_POST["adresse"];
  $sexe = $_POST["sexe"];
  $numeroTEL= $_POST["numeroTEL"];
  $prenom = $_POST["prenom"];
  $numeroCIN = $_POST["numeroCIN"];
  $mot = $_POST['mot_de_passe'];
  $profession = $_POST["profession"];
  

    
  if($nom != "" && $national != "" && $email != "" && $adresse != "" && $sexe != "" && $prenom != "" && $numeroCIN != "" && $numeroTEL != "" && $profession != "" && $mot !="")
  {
    include_once('db4.php');

    $sql = "INSERT INTO userse(nom, prenom, profession, adresse, numeroCIN, email, numeroTEL, mot_de_passe, sexe, national) VALUES ('$nom','$prenom ','$profession','$adresse','$numeroCIN','$email ','$numeroTEL','$mot','$sexe','$national')";

    $qry = mysqli_query($conn,$sql) or die("erreur d'entré!");
    if(!$qry){
      echo "<h4 class ='text-danger'>erreur</h4>";
  }else{
      echo "<h4 class ='text-success'>enregistré avec suucess</h4>";
  }
    
  }

  }
?>


<?php
require_once("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    
        <main class="main">
            <div class="container-scroller">
                <div class="">
                  <div class="">
                    <div class="row w-100 mx-0">
                      <div class="col-lg-7 mx-auto">
                        <div class="auth-form-light text-left  px-4 px-sm-5  rounded ">
                          <form class="pt-1" method="POST" name="register">
                            <img src="/php2/Capture d’écran 2022-11-06 15426.png" alt="">    
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
                                <input type="text" name="numeroTEL" class="form-control form-control-lg" id="numeroTEL" placeholder="numero de téléphone" >
                              </div>
                              <div class="form-group mt-3">
                                <select name="national" class="form-control form-control-lg" id="national">
                                   <option value="">nationalité</option>
                                   <option value="Malagasy">Malagasy</option>
                                    <option value="Français">Français</option>
                                    <option value="italien">italian</option>
                                    <option value="bresilien">bresilien</option>
                                </select>
                             </div>
                             <div class="form-group mt-3">
                                <input type="password" name="mot_de_passe" class="form-control form-control-lg" id="mot_de_passe" placeholder="password">
                             </div>
                             
                             <div class="mt-3 mx-5">
                                 <input type="submit" name="register" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="ajouter"/>
                                 
                             </div>

                         </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </main>
      </div>
        <?php require_once("footer.php") ;?>
</body>
</html>        
    