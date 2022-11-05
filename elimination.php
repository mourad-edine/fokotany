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
                      <div class="col-lg-12 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                           <?php require_once("db5.php");
                           $query = "SELECT * FROM users";
                           $query_run = mysqli_query($conn,$query);
                           ?>
                            <table class="table table-bordered" width ="700">
                                 <tr class="text-white" style="background: #0f2027;">
                                    <th>id</th>
                                    <th>nom</th>
                                    <th>numeroCIN</th>
                                    <th>sexe</th>
                                    <th>adresse</th>
                                    <th>option</th>
                                </tr>
                                <?php 
                                if($query_run){
                                    while($row = mysqli_fetch_array($query_run)){
                                        ?>
                                            <tr>
                                                <td><?php echo $row['id'] ;?></td>
                                                <td><?php echo $row['nom'] ;?></td>            
                                                <td><?php echo $row['numeroCIN'] ;?></td>
                                                <td><?php echo $row['sexe'] ;?></td>
                                                <td><?php echo $row['adresse'] ;?></td>
 
                                            
                                            <form action="delete.php" method="POST">
                                                <input type="hidden" name = "id" value="<?php echo $row['id'] ?>">
                                                <td><input type="submit" href="delete.php" class="btn btn-danger" name ="delete"></input></td>
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
</body>
</html>        
    