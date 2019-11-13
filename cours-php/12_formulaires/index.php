<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v3.8.5">
  <title>Cours PHP</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/album/">

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <!-- Custom styles for this template -->
  <link href="album.css" rel="stylesheet">
</head>

<body>
  <header>

  </header>

  <main role="main">

    <section class="jumbotron text-center">
      <div class="container">
        <h1 class="jumbotron-heading">Cours de PHP & MySQL</h1>
        <p class="lead text-muted">Modèle pour notre cours.</p>
      </div>
    </section>

    <div class="album py-5 bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- ICI COMMENCE NOTRE PHP -->
            <h2 class="mt-5">Exercice 1</h2>
            <form action="traitement.php" method="POST">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                </div>
                <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <h2 class="mt-5">Exercice 1</h2>

             <form action="exercice1.php" method="POST">

              <div class="form-row">              

                <div class="form-group col-6">

                  <label for="exo1-firstname">Firstname</label>

                  <input type="text" class="form-control" id="exo1-firstname" placeholder="Firstname" name="exo1-firstname">

                </div>

                 <div class="form-group col-6">

                  <label for="exo1-lastname">Firstname</label>

                  <input type="text" class="form-control" id="exo1-lastname" placeholder="Lastname" name="exo1-lastname">

                </div>

              </div>

              <div class="form-row">      

                <div class="form-group col-6">

                  <label for="exo1-email">Email</label>

                  <input type="email" class="form-control" id="exo1-email" placeholder="Email" name="exo1-email">

                </div>

                <div class="form-group col-6">

                  <label for="exo1-password">Password</label>

                  <input type="password" class="form-control" id="exo1-password" placeholder="Password" name="exo1-password">

                </div>

              </div>

              <button type="submit" class="btn btn-primary">Envoyer</button>

            </form>
          </div>
        </div>
      </div>
    </div>

  </main>

  <footer class="text-muted">
    <div class="container">
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>