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
              // Les boucles
              // La boucle WHILE
              /*
                Tant que tu n'as pas atteint la valeur 5 tu ajoutes
                une unité au chiffre précédent.
              */

                $chiffre = 0;
                echo '<ul>';
                while ($chiffre <= 5) {
                  echo '<li>Numéro du tour de boucle : ' . ($chiffre + 1) . '</li>';
                  $chiffre++; // J'incrémente de 1 le chiffre en base
                }
                echo '</ul>';
            ?>
            <ul>
              <?php $chiffre = 0; ?>
              <?php while($chiffre <= 5) : ?>
                <li>Numéro du tour de boucle : <?= ($chiffre + 1); ?></li>
                <?php $chiffre++; ?>
              <?php endwhile; // J'incrémente de 1 le chiffre en base ?>
            </ul>
            
            <?php 
              // La boucle DO WHILE
              $im_a_dev = "Je suis un dev !";
              $length   = strlen($im_a_dev);
              $i        = 0;

              do{
                // Affiche la première lettre en majuscule suivit d'un point
                echo strtoupper($im_a_dev[$i]) . '-';
                $i++;
              }while($i < $length);
            ?>
            <?php
              // La boucle FOR
              for($i = 0; $i < 10; $i++){
                echo '<p>Tour de boucle numéro ' . $i . '</p>';
              }
             ?>

            <?php for($i = 0; $i < 10; $i++) : ?>
              <p>Tour de boucle numéro <?= $i; ?> </p>
            <?php endfor; ?>

            <?php
              // La boucle SWITCH
              $i = 0; 
              switch ($i) {
                case 1: // Dans le cas où $i est égale à 1
                  echo 'La variable vaut : ' . $i;
                  break; // Si c'est ce cas je stoppe le switch
                case 2: // Dans le cas où $i est égale à 2
                  echo 'La variable vaut : ' . $i;
                  break; // Si c'est ce cas je stoppe le switch

                default:
                  echo 'Je n\'ai pas trouvé de valeur correspondante';
                  break;
              }
             ?>
             <?php 
              // La boucle FOREACH
              $notes_jeux_videos = [
                'The Witcher'           => 20,
                'Counter Strike'        => 16,
                'Dragon Ball FighterZ'  => 18
              ];

              foreach ($notes_jeux_videos as $nom_du_jeu => $note) {
                echo '<p>' . $nom_du_jeu . ' a obtenu la note de : ' . $note . '</p>';
              }
             ?>
             <?php foreach ($notes_jeux_videos as $nom_du_jeu => $note) : ?>
              <p> <?= $nom_du_jeu; ?> a obtenu la note de : <?= $note; ?></p>
             <?php endforeach; ?>
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