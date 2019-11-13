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
              // Ancienne version de déclaration de tableau
              $ancien_jeux = array();

              // Version à privilégier
              $jeux = ['Time Witcher', 'Counter Strike', 'Dragon Ball FighterZ'];
              echo '<pre>'; // balise html dde presentation
                var_dump($jeux);
              echo '</pre>';

              echo '<pre>'; // balise html dde presentation
                var_dump($jeux[1]);
              echo '</pre>';

              // Tableau associatif avec des clés / valeurs
              $bulletin_notes = ['Toto' => 12]; // Déclaration d'un tableau
              echo '<pre>'; // balise html dde presentation
                var_dump($bulletin_notes);
              echo '</pre>';

              // Notes de jeux videos
              $notes_jeux_video = [
                'The Witcher'           => 20,
                'Counter Strike'        => 16,
                'Dragon Ball FighterZ'  => 18
              ];
              echo '<pre>'; // balise html dde presentation
                var_dump($notes_jeux_video);
              echo '</pre>';

              // Tableau multidimensionnel
              $equipe_rugby = [ // Tableau
                'Avant' => [    // 1ere partie de mon tab
                  1 => 'pilier',                
                  2 => 'talonneur',                
                  3 => 'pilier',                
                  4 => 'lock',                
                  5 => 'lock',                
                  6 => 'flankers',                
                  7 => 'flankers',                
                  8 => 'flankers'               
                ],
                'Arriere' => [    // 2eme partie de mon tab
                  9 => 'demi de melee',                
                  10 => 'demi ouverture',                
                  11 => 'trois-quart',                
                  12 => 'centre',                
                  13 => 'centre',                
                  14 => 'ailier',                
                  15 => 'arriere'                            
                ]
              ];
              echo '<pre>'; // balise html dde presentation
              var_dump($equipe_rugby);
              echo '</pre>';
                                              ////////////////////////////////////////////// attention : une clé ne correspond à aucun index 
                                                                                          //  $equipe_rugby['Arriere'] n'est pas équivalent à $equipe_rugby[1]
              // Afficher la seconde partie du tableau
              echo '<pre>'; // balise html de presentation
              var_dump($equipe_rugby['Arriere']);
              echo '</pre>';

              // Afficher la seconde partie du tableau en ciblant le numéro 10
              echo '<pre>'; // balise html de presentation
              var_dump($equipe_rugby['Arriere'][10]);
              echo '</pre>';
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