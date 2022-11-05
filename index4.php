<?php
$titre = "population";
$nav = "popu";
require_once("header.php");

?>
        <main class="main">
        <div class="container  pb-5 pt-5 col-9" >
    <div class="row">
        <form class="d-flex" method="post" name="submit">
            <input id="search" name="search" class="form-control me-2" type="text" placeholder="rechercher un nom" aria-label="Search">
            <button class="btn btn-success" type="submit" name="submit">rechercher</button>
        </form>
    </div>
    <div class="row">
        <div class="offset-md-1 col-md-10">
            <table class="table table-bordered border-primary table-hover mt-5 text-capitalize" id="mytable">
              <?php
              if(isset($_POST["submit"])){
                $search = $_POST["search"];
                $sql = "SELECT * FROM users WHERE id like'%$search%' or nom like'%$search%' or adresse like'%$search%' or numeroCIN like '%$search%' ";
                require_once("db4.php");
                $result = mysqli_query($conn,$sql);

                if($result){
                  if(mysqli_num_rows($result) > 0 ){
                    echo '<thead>
                            <tr class = "bg-dark text-white fw-bold">
                              <th>N°</th>
                              <th>nom</th>
                              <th>numeroCIN</th>
                              <th>sexe</th>
                              <th>adresse</th>
                            </tr>

                         </thead>';
                     while($row = mysqli_fetch_assoc($result)){
                     echo '<tbody>
                              <tr>
                                <td><a href="index6.php?data='.$row['id'].'">'.$row['id'].'</a></td>
                                <td>'.$row['nom'].'</td>
                                <td>'.$row['numeroCIN'].'</td>
                                <td>'.$row['sexe'].'</td>
                                <td>'.$row['adresse'].'</td>
                              </tr>
                              
                          </tbody>'; 
                      }       
                  }else{
                    echo '<h2 class = text-danger>pas trouvé! :( </h2>';
                  }
                  
                }

              }
              ?>

            </table>
        </div>
    </div>
        </main>
    </div>
    <?php include_once('footer.php'); ?>

</body>
</html>