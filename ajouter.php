<?php
if(isset($_POST["register"]))
{
    $nom = $_POST["nom"];
    $numeroCIN = $_POST["numeroCIN"];
    $adresse = $_POST["adresse"];
    $sexe = $_POST["sexe"];

    if($nom != "" && $numeroCIN != "" && $adresse != "" && $sexe != "" )
    {

        $sql = "INSERT INTO users(nom,numeroCIN,adresse,sexe) VALUES('$nom','$numeroCIN','$adresse','$sexe')";
  
        include_once('db2.php');

        $qry = mysqli_query($conn,$sql) or die("erreur d'entré!");
        if(!$qry){
            echo "erreur";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajouter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/validation.css">
</head>
<body>
<main> 
    <div class="col-3 d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;height: 780px;overflow: hidden;">
        <a href="/" class="d-flex align-items-center ml-5 mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
          <span class="fs-4">fokotany</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
            <a href="pageacc.php" class="nav-link text-white option">
              population
            </a>
          </li>
          <li>
            <a href="#" class="nav-link text-white option">
              information
            </a>
          </li>
          <li class="option">
            <a href="#" class="nav-link text-white  active">
              Ajouter
            </a>
          </li>
        </ul>
        <hr>
        
      </div> 
    <div class="container col-9">
        <form id = "form" method="POST" name="register">
            <h1>Ajouter </h1>
            <div class="input-control">
                <label for="nom">nom</label>
                <input type="text" id="nom" name="nom">
                <div class="error" id="error"></div>
            </div>
            
            <div class="input-control">
                <label for="numeroCIN">numero CIN</label>
                <input type="text" id="numeroCIN" name="numeroCIN">
                <div class="error" id="error"></div>
            </div>
            <div class="input-control">
                <label for="adresse">adresse</label>
                <input type="text" id="adresse" name="adresse">
                <div class="error" id="error"></div>
            </div>
            <div class="form-group mt-3">
                  <select name="sexe" class="form-control form-control-lg" id="sexe">
                    <option value="">sexe</option>
                    <option value="H">homme</option>
                    <option value="F">femme</option>
                  </select>
            </div>
            <div id="error"></div>
            <div class="mt-3">
              <input type="submit" name="register" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="ajouter" id = "envoyer" onclick="message()"/>
            </div>
            <div class="message">
              <div class="success bg-success m-3 p-3 text-white" id="success">
              </div>
              <div class="success bg-danger m-3 p-3 text-white" id="error">
              </div>

            </div>       
        </form>

    </div>
    
 </main>  
    <script src="script2.js"></script>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>