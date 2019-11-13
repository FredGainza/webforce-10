<?php session_start();

if (!isset($_SESSION['binomes'])) {
  $_SESSION['binomes'] = [];
}
$nbEleves = count($_SESSION['users']);
$nbBinomes = 0;

if (isset($_POST['binomes'])) {
  $nbBinomes += $_POST['binomes'];

  if ($nbBinomes <= $_SESSION['nb_users'] / 2 + 1) {
    $tab = $_SESSION['users'];

    if ($nbEleves > 2) {
      $indices = array_rand($tab, 2);
    } else {
      $indices = array_keys($tab);
    }

    foreach ($indices as $i) {
      $element = $tab[$i];
      $_SESSION['binomes'][] = $element;
      unset($tab[$i]);
    }
  }
  $_SESSION['users'] = array_values($tab);
}

// unset($_SESSION['users']);
// unset($_SESSION['binomes']);
// session_unset();

?>
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
  <link rel="stylesheet" href="css/style.css">


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
          <div class="col-md-5">
            <!-- ICI COMMENCE NOTRE PHP -->
            <table>
              <fieldset>
                <legend>Tableau des élèves</legend>
                <thead>
                  <tr>
                    <td>#</td>
                    <td>Prénom de l'élève</td>
                    <td>Nom de l'élève</td>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $i = 1;
                  foreach ($_SESSION['users'] as $value) {
                    echo '<tr><td>' . $i++;
                    foreach ($value as $k => $v) {
                      echo '<td>';
                      echo ucfirst($v);
                      echo '</td>';
                    }
                    echo '</td></tr>';
                  }

                  

                  ?>
                </tbody>
              </fieldset>
            </table>
          </div>
          <div class="col-md-2 text-center pt-4">
            <form action="" method="POST">
              <button type="submit" class="btn btn-primary" name="binomes" value="1">Binomes</button>
            </form>
          </div>
          <div class="col-md-5">

            <table>
              <fieldset>
                <legend>Tableau des binomes</legend>
                <thead>
                  <tr>
                    <td>#</td>
                    <td>Prénom de l'élève</td>
                    <td>Nom de l'élève</td>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $y = 1;
                  foreach ($_SESSION['binomes'] as $key => $value) {
                    if ($key % 2 == 0) {
                      echo '<tr class="table-success"><td>' . $y++;
                    } else {
                      echo '<tr class="border_binome"><td> - ';
                    }

                    foreach ($value as $k => $v) {
                      echo '<td>';
                      echo ucfirst($v);
                      echo '</td>';
                    }
                    echo '</td></tr>';
                  }

                  ?>
                </tbody>
              </fieldset>
            </table>
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