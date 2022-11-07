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
  $profession = $_POST["profession"];
  

    

  if($nom != "" && $national != "" && $email != "" && $adresse != "" && $sexe != "" && $prenom != "" && $numeroCIN != "" && $numeroTEL != "" && $profession != "")
    {

      $sql = "INSERT INTO userse(nom,prenom,profession,adresse,numeroCIN,email,numeroTEL,national,sexe) VALUES('$nom','$prenom','$profession','$adresse','$numeroCIN','$email','$numeroTEL','$national','$sexe',)";

  
        include_once('db4.php');

        $qry = mysqli_query($conn,$sql) or die("erreur d'entré!");
        if(!$qry){
            echo "erreur";
        }
    }
}
?>


<?php
require_once("header.php");
?>
        <main class="main">
            <div class="container-scroller">
                <div class="">
                  <div class="">
                    <div class="row w-100 mx-0">
                      <div class="col-lg-7 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5  rounded ">
                          <form class="pt-1" method="POST" name="register">
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
                             
                             <div class="mt-3">
                                 <input type="submit" name="register" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="inscription"/>
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
    