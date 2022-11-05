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
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                           <?php require_once("db4.php");
                           $sql = "SELECT * FROM users";
                           $result = mysqli_query($conn,$sql);
                           ?>
                            <table class="table table-bordered">
                                <tr class="text-white" style="background: #0f2027;">
                                    <th>id</th>
                                    <th>nom</th>
                                    <th>numeroCIN</th>
                                    <th>sexe</th>
                                    <th>adresse</th>
                                </tr>
                                <?php while($row = mysqli_fetch_object($result)){?>


                                <tr>
                                    <td><?php echo $row->id ?></td>
                                    <td><?php echo $row->nom ?></td>
                                    <td><?php echo $row->numeroCIN ?></td>
                                    <td><?php echo $row->sexe ?></td>
                                    <td><?php echo $row->adresse ?></td>
                                </tr>
                                <?php }?>
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
    