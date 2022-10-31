<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/validation.css">
</head>
<body>
<main> 
    <div class="col-3 d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;height: 780px;overflow: hidden;">
        <a href="/" class="d-flex align-items-center ml-5 mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
          <span class="fs-4">fokotany</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
            <a href="index.html" class="nav-link text-white option">
              population
            </a>
          </li>
          <li>
            <a href="#" class="nav-link text-white option">
              information
            </a>
          </li>
          <li class="option">
            <a href="#" class="nav-link text-white  active">
              Ajouter
            </a>
          </li>
        </ul>
        <hr>
        
      </div> 
    <div class="container col-9">
        <form id = "form" action="/">
            <h1>Ajouter </h1>
            <div class="input-control">
                <label for="username">prenom</label>
                <input type="text" id="username" name="username">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="email">email</label>
                <input type="email" id="email" name="email">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="password">numero CIN</label>
                <input type="text" id="password" name="password">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="username">adresse</label>
                <input type="text" id="password2" name="password2">
                <div class="error"></div>
            </div>
            <button type="submit">Ajouter</button>        
        </form>
    </div>
    
 </main>     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>