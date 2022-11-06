<?php


require_once("db4.php");
require_once "dompdf/autoload.inc.php";

if(isset($_GET['data'])){
    $data =$_GET['data'];
  }else{
    $data = "";
  }
   
  $sql = "SELECT * FROM userse WHERE id=$data";
  $result = mysqli_query($conn,$sql);
  if($result){
    $row = mysqli_fetch_assoc($result);
    $page = '
<body>
    <style>
        body{
    font-family: Arial,sans-serif;
}


.h3{
    text-decoration: underline;
    opacity: .8;
    margin-left: 160px;

}
h2{
    opacity: .8;
    margin-bottom: px;
}
.div1{
    margin-left: 100px;
}
.h32{
    opacity: .8;
    margin-left: 100px;
}
img{
    margin-left: 170px;
}
.chef{
    text-decoration: underline;
    margin-left: 300px;
}
.div2{
    margin-left: 100px;
}
    </style>
    <h3 class="h32">Ville : Toamasina <br> Commune : mangarano 2</h3><br>
    <div class="div1">
        <p>****************************************************************************************</p>
        <h3 class="h3">
            Certificat de Résidence
        </h3>

    </div>
    <div class="div2">
        <p>Je sousigné(e) : RAKOTO Marco Polo</p>
        <p>Chef du quartier: Mangarano 2</p>
        <p>Atteste que le nommé(e):'.$row['nom'].' ' .$row['prenom'].'</p>
        <p>Née le: 1 Avril 2000</p>
        <p>De:...........................</p>
        <p>Et de:...............</p>
        <p>Originaire de:   '.$row['origine'].' .de nationalité '.$row['national'].'</p>
        <p>Exerce le proffession de: ' .$row['profession'].'</p>
        <p>Titulaire de :...........</p>
        <p>Réside effecivement dans quartier et est domicilé au lot N°:'.$row['adresse'].'</p>
        <p>Depuis:..............</p>
        <p>En foi de quoi la présence Attestation de Résidence lui est délivré pour servir et valoir ce que de droit</p><br><br>
                                   <p> Toamasina, le 10/08/2022</p>

                                   <p class="chef">le chef de quartier</p><br><br><br><br>

    </div>
</body>
</html>';
}else{
    $page = '<p class="lead">
              <a class="btn btn-dark" href="index4.php">retour</a>
          </p>
    <h2 class ="text-primary mt-5 mb-3">la personne a été supprimé!</h2>';
  }

use Dompdf\Dompdf;


$dompdf = new Dompdf();

$dompdf -> loadHtml($page);


$dompdf -> render();

$dompdf -> stream("mypdf",["Attachment" => false]);

$dompdf->setPaper("A4", "landscape");

?>