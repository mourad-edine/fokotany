<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>css de la mort</title>
    <link rel="stylesheet" href="input.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <header class="topbar">
        <a href="#" class="topbar-logo text-white">fokotany</a>
        <nav class="topbar-nav">
            <a href="#" >info</a>
            <a href="#" >se deconecter</a>
        </nav>
    </header>

    <div class="container site">
        <nav class="sidebar "class="text-dark">
            <a href="#" class="text-dark">population</a>
            <a href="#" class="text-dark">information</a>
            <a href="#" class="text-dark">ajouter</a>
        </nav>
        <main class="main">
            <div class="container-scroller">
                <div class="">
                  <div class="">
                    <div class="row w-100 mx-0">
                      <div class="col-lg-7 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                          <h4>bonjour l'ami(e)</h4>
                          <h6 class="font-weight-light">connecte toi.</h6>
                          <form class="pt-3" method="post" name="login">
                            <div class="form-group">
                              <input type="text" name="username" class="form-control form-control-lg" id="username" placeholder="Username">
                            </div>
                            <div class="form-group">
                              <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="Password">
                            </div>
                            <div class="mt-3">
                              <input type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name ="login" value="se connecter" />
                            </div>
                            <div class="my-2 d-flex justify-content-between align-items-center">
                              <div class="form-check">
                                <label class="form-check-label text-muted">
                                  <input type="checkbox" class="form-check-input" name="remember">
                                  se souvenir
                                </label>
                              </div>
                            </div>
                            <div class="text-center mt-4 font-weight-light">
                              pas encore de compte? <a href="register.php" class="text-primary">s'inscrire</a>
                            </div>
                          </form>
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