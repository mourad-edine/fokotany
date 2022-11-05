<?php
$nav = "population";
$nav = "popu";
require_once("header.php");
require_once("db4.php");

?>
        <main class="main">
            <div class="container-scroller">
                <div class="">
                  <div class="">
                    <div class="row w-100 mx-0">
                      <div class="col-lg-7 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5 bg-secondary rounded">
                        <?php $data =$_GET['data'];
                        $sql = "SELECT * FROM users WHERE id=$data";
                        $result = mysqli_query($conn,$sql);
                        if($result){
                          $row =mysqli_fetch_assoc($result);
                          echo '<div class="container">
                          <div class="jumbotron">
                            <h1 class="display-4 text-center text-white">'.$row['nom'].'</h1>
                            <p class="lead text-center text-dark">vos information:</p>
                            <p class="lead">
                              <a class="btn btn-dark" href="index4.php">retour</a>
                            </p>
                            <hr>
                            <table class = "table table-bordered">
                            <tr class="text-white">
                                    <th>nom</th>
                                    <th>'.$row['nom'].'</th>
                            </tr>
                            <tr class="text-white">
                                    <th>adresse</th>
                                    <th>'.$row['adresse'].'</th>
                            </tr>
                            <tr class="text-white">
                                    <th>sexe</th>
                                    <th>'.$row['sexe'].'</th>
                            </tr>
                            <tr class="text-white">
                                    <th>numeroCIN</th>
                                    <th>'.$row['numeroCIN'].'</th>
                            </tr>
                            </table>
                            <div>
                                <input type="submit" class = "btn btn-success" value= "modifier">
                                <input type="submit" class ="btn btn-danger" value= "supprimer">
                            </div>
                          </div>
                        </div>';

                        }
                        ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </main>
      </div>
      <?php require_once("footer.php"); ?>
        
</body>
</html>   






    