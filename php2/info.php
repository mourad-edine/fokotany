<?php
$titre = "information";
$nav = "info";

require_once("header.php");

?>
<main class="main">
            <div class="container-scroller">
                <div class="">
                  <div class="">
                    <div class="row w-100 mx-0">
                      <div class="col-lg-12 mx-auto">
                        <div class="auth-form-light text-left px-4 px-sm-5">
                          <img src="/php2/Capture d’écran 2022-11-06 15426.png" alt="" style="margin-left: 180px;">
                           <?php require_once("db4.php");
                           $query = "SELECT * FROM userse";
                           $query_run = mysqli_query($conn,$query);
                           ?>
                            <table class="table table-bordered" width ="700">
                                 <tr class="text-white" style="background: #0f2027;">
                                    <th>id</th>
                                    <th>nom</th>
                                    <th>email</th>
                                    <th>sexe</th>
                                    <th>adresse</th>
                                    <th>option1</th>
                                    <th>option2</th>
                                </tr>
                                <?php 
                                if($query_run){
                                    while($row = mysqli_fetch_array($query_run)){
                                        ?>
                                            <tr>
                                                <td><?php echo $row['id'] ;?></td>
                                                <td><?php echo $row['nom'] ;?></td>            
                                                <td><?php echo $row['email'] ;?></td>
                                                <td><?php echo $row['sexe'] ;?></td>
                                                <td><?php echo $row['adresse'] ;?></td>
                                            
                                            <form action="#" method="POST">
                                                <input type="hidden" name = "id" value="<?php echo $row['id'] ?>">
                                                <td><input type="submit" href="#" class="btn btn-success" name ="modif" value="modifier"></td>
                                            </form>
                                            <form action="delete.php" method="POST">
                                                <input type="hidden" name = "id" value="<?php echo $row['id'] ?>">
                                                <td><input type="submit" href="delete.php" class="btn btn-danger" name ="delete" value="supprimer"></td>
                                            </form>
                                            </tr>
                                <?php           
                                        }
                                }
                                
                                ?>
                            </table>
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
    
    