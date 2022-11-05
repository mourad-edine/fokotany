<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "$titre" ;?></title>
    <link rel="stylesheet" href="input.css">
    <link rel="shortcut icon" href="Capture d’écran 2022-09-03 213538.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <header class="topbar">
        <a href="index4.php" class="topbar-logo text-white">fokotany</a>
        <nav class="topbar-nav">
            <a href="#" >info</a>
            <a href="#" >se deconecter</a>
        </nav>
    </header>

    <div class="container site">
        <nav class="sidebar text-white">
            <div>
                <img src="/person-circle (1).svg" alt="" width="20" height="20">
                <a href="index4.php" <?php if($nav === 'popu') :?>style ='background: #0f2027; color: white;'<?php endif; ?>>population</a>
            </div>
            <div>
                <img src="/card-checklist.svg" alt="" width="20" height="20">
                <a href="info.php" <?php if($nav === 'info') :?> style ='background: #0f2027; color: white;'<?php endif; ?>>information</a>
            </div>
            <div>
                <img src="/plus-circle.svg" alt="" width="20" height="20">
                <a href="index5.php" <?php if($nav === 'ajout') :?> style ='background: #0f2027; color: white;'<?php endif; ?>>ajouter</a>
            </div>
        </nav>