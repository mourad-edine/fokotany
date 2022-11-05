<?php
$titre = "ajouter";
$nav = "ajout";
if(isset($_POST["register"]))
{
    $nom = $_POST["nom"];
    $numeroCIN = $_POST["numeroCIN"];
    $adresse = $_POST["adresse"];
    $sexe = $_POST["sexe"];

    if($nom != "" && $numeroCIN != "" && $adresse != "" && $sexe != "" )
    {

        $sql = "INSERT INTO users(nom,numeroCIN,adresse,sexe) VALUES('$nom','$numeroCIN','$adresse','$sexe')";
  
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
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5 kaj rounded mt-5 ">
                          <form class="pt-1" method="POST" name="register">
                            <div class="form-group mt-3">
                                <input type="text" name="nom" class="form-control form-control-lg" id="nom" placeholder="nom">
                            </div>
                            <div class="form-group mt-3">
                                 <input type="numeroCIN" name="numeroCIN" class="form-control form-control-lg" id="numeroCIN" placeholder="numeroCIN">
                            </div>
                            <div class="form-group mt-3">
                                <input type="adresse" name="adresse" class="form-control form-control-lg" id="adresse" placeholder="adresse">
                            </div>
                            <div class="form-group mt-3">
                                 <select name="sexe" class="form-control form-control-lg" id="sexe">
                                     <option value="">sexe</option>
                                     <option value="H">homme</option>
                                    <option value="F">femme</option>
                                </select>
                            </div>
                            
                            <div class="mt-3">
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
    