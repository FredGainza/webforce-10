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
            <?php 
              // Les opérateurs
              // Affectation
              $a = 1;
              $b = $a;
              echo $a; // 1
              echo $b; // 1

              // Affectation par référence
              $prenom = "Jérôme";
              $reference_prenom = &$prenom;

              echo '<pre>';
                echo $prenom; // Jérôme
                echo '<br>';
                echo $reference_prenom; // Jérôme
              echo '</pre>';

              $prenom = "JD";

              echo '<pre>';
                echo $prenom; // JD
                echo '<br>';
                echo $reference_prenom; // JD
              echo '</pre>';

              // Les opérateurs arithmétiques

              $x = 1;
              $y = 5;

              echo $x + $y;   // Somme : 6
              echo $y - $x;   // Soustraction : 4
              echo $y * $x;   // Multiplication : 5
              echo $y / $x;   // Division : 5
              echo $y ** $x;  // Exponentiation : 5
              echo $y % $x;   // Modulo : 0
              echo -$y;       // Opposé : -5
              echo ++$x;      // Pré-incrémentation : 2
              echo $y++;      // Post-incrémentation : 5
              echo $y;        //$y vaut maintenant 6
              echo --$x;      // Pré-décrémentation : 1
              echo $y--;      // Post-décrémentation : 6
              echo $y;        // $y vaut maintenant 5

              // Les opérateurs de chaine
              $string_1 = 'Bonjour, ';
              $prenom   = 'Jérôme';
              $age      = 30;
              $string_2 = ' tu as ';
              $string_3 = ' ans.';

              echo $string_1 . $prenom . $string_2 . $age . $string_3;

              // Les opérateurs de comparaisons
              echo '<pre>';
                var_dump($y == $x);   // Égalité
                var_dump($y === $x);  // Égalité et identique
                var_dump($y != $x);   // Différent
                var_dump($y !== $x);  // Différent ou de type différent
                var_dump($y < $x);    // Inférieur
                var_dump($y <= $x);   // Inférieur ou égale
                var_dump($y > $x);    // Supérieur
                var_dump($y >= $x);   // Supérieur ou égale
              echo '</pre>';

              // Les opérateurs logiques
              $y && $x;   // Et / AND 
              $y || $x;   // Ou / OR
              $y xor $x;  // si $x OU $y est TRUE, mais pas les deux en même temps
              !$y;        // Non logique

              // Les opétareurs ternaires
              // Si $variable1 est égale à true ALORS
              // J'affiche $variable 1
              // SINON j'affiche $variable 2

              $variable1 = true;
              $variable2 = false;

              echo $variable1 ? $variable1 : $variable2;
              

            ?>
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