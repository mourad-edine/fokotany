<?php



require_once "dompdf/autoload.inc.php";

use Dompdf\Dompdf;

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
        <p>Je sousigné(e) :..........php...........</p>
        <p>Chef du quartier:.........php............</p>
        <p>Atteste que le nommé(e):..php............</p>
        <p>Née le:..php............ à .............</p>
        <p>De:.......................php............</p>
        <p>Et de:....................php.............</p>
        <p>Originaire de:............php............de nationalité........</p>
        <p>Exerce le proffession de:..php............</p>
        <p>Titulaire de :.......php............</p>
        <p>Réside effecivement dans quartier et est domicilé au lot N°:..php............</p>
        <p>Depuis:..php............</p>
        <p>En foi de quoi la présence Attestation de Résidence lui est délivré pour servir et valoir ce que de droit</p><br><br>
                                   <p> Toamasina, le .......php.....</p>

                                   <p class="chef">le chef de quartier</p><br><br><br><br>

    </div>
</body>
</html>';
$dompdf = new Dompdf();

$dompdf -> loadHtml($page);


$dompdf -> render();

$dompdf -> stream("mypdf",["Attachment" => false]);

$dompdf->setPaper("A4", "landscape");

?>