<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<?php

require_once("db4.php");

$db = mysqli_select_db($conn, 'info');

if(isset($_POST['delete'])){
    $id = $_POST['id'];

    $query = "DELETE FROM userse WHERE id ='$id'";
    $query_run = mysqli_query($conn,$query);

    if($query_run){
        echo "<h2 class = 'text-success'>donné éffacé!</h2>";
        header("location: index6.php");
    }else{
        echo "<h2 class ='text-success'>donné pas éffacé!</h2>";

    }

}
?>


</body>
</html>
