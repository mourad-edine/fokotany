<?php
$nav = "population";
$nav = "popu";
require_once("header.php");
require_once("db4.php");


if(isset($_GET['id'])){
  $id = $_POST['id'];
  $delete = mysqli_query($conn, "DELETE FROM users WHERE id = '$id'");
  header("location: index6.php");
}


$sql = "SELECT * FROM users";
$result = mysqli_query($conn,$sql); ?>

        <main class="main">
            <div class="container-scroller">
                <div class="">
                  <div class="">
                    <div class="row w-100 mx-0">
                      <div class="col-lg-7 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5 bg-secondary rounded">
                        <?php
                        
                        if(isset($_GET['data'])){
                          $data =$_GET['data'];
                        }else{
                          $data = "";
                        }
                         
                        $sql = "SELECT * FROM userse WHERE id=$data";
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
                            <tr class="text-dark">
                                    <th>nom</th>
                                    <th>'.$row['nom'].'</th>
                            </tr>
                            <tr class="text-dark"></tr>
                                    <th>prenom</th>
                                    <th>'.$row['prenom'].'</th>
                            </tr>
                            <tr class="text-dark">
                                    <th>sexe</th>
                                    <th>'.$row['sexe'].'</th>
                            </tr>
                            <tr class="text-dark">
                                    <th>numeroCIN</th>
                                    <th>'.$row['numeroCIN'].'</th>
                            </tr>
                            <tr class="text-dark">
                                    <th>profession</th>
                                    <th>'.$row['profession'].'</th>
                            </tr>
                            <tr class="text-dark">
                                    <th>numeroTEL</th>
                                    <th>'.$row['numeroTEL'].'</th>
                            </tr>
                            <tr class="text-dark">
                                    <th>email</th>
                                    <th>'.$row['email'].'</th>
                            </tr>
                            <tr class="text-dark">
                                    <th>adresse</th>
                                    <th>'.$row['adresse'].'</th>
                            </tr>
                            <tr class="text-dark">
                                    <th>nationalité</th>
                                    <th>'.$row['national'].'</th>
                            </tr>
                            
                            </table>

                          </div>
                        </div>
                        ';

                        }else{
                          echo '<p class="lead">
                                    <a class="btn btn-dark" href="index4.php">retour</a>
                                </p>
                          <h2 class ="text-primary mt-5 mb-3">la personne a été supprimé!</h2>';
                        }
                       
                        ?>
                        <div class="d-flex m-2">
                        
                        <?php
                         echo '<a class ="btn btn-primary"  href="index.php?data='.$row['id'].'">exporter pdf</a>' ;
                        
                        
                        ?>
                        <form action="delete2.php" method="POST">
                              <input type="hidden" name = "id" value="<?php echo $row['id'] ?>">
                              <td><input type="submit" href="delete2.php" class="btn btn-danger" name ="delete" value="supprimer"></td>
                        </form>
                        </div>
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






    