
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>first step</title>
    <link rel="stylesheet" href="/css/validation.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>    
<body>
<main class="row">

  <div class="col-3 d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;height: 780px;overflow: hidden;">
    <a href="/" class="d-flex align-items-center ml-5 mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <span class="fs-4">fokotany</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="pageacc.php" class="nav-link text-white option active">
          population
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white option">
          information
        </a>
      </li>
      <li class="option">
        <a href="ajouter.php" class="nav-link text-white">
          Ajouter
        </a>
      </li>
    </ul>
    <hr>
    
  </div>

  <div class="container mt-5 pb-5 pt-5 col-9" >
    <div class="row">
        <form class="d-flex">
            <input id="search" class="form-control me-2" type="text" placeholder="rechercher un nom" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
    <h3 id="error" class="text-center"></h3>
    <div class="row">
        <div class="offset-md-1 col-md-10">
            <table class="table table-bordered border-primary table-hover mt-5 text-capitalize" id="mytable">

            </table>
        </div>
    </div>
</div>
    <hr>
</main>


<script src="/script.js"></script>
  </body>
</html>