<?php session_start(); ?>
	<!-- Exercice : L'objectif est de créer un algorithme qui crée des binômes.

	Étapes : 
	1 - Créer un formulaire d'ajout d'élève (NOM + PRENOM)
	2 - Stocker l'élève enregistré dans une $_SESSION['users']
	3 - Une fois que j'ai 12 élèves je vais vers la page de tri
	4 - Sur la page de tri, j'affiche un tableau HTML dans lequel je liste
	tous les élèves
	5 - Sur cette même page, j'affiche un bouton qui lors du click, récupère aléatoirement 2 élèves du tableau et les enregistre dans un second tableau HTML en dessous du bouton (il faut aussi transférer les binômes dans une autre session $_SESSION['binôme'])
 -->




<!-- ICI on démarre la session -->
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
            <span class = "text-primary">
                <?php
                $_SESSION['nb_users'] = 5;
                if(!isset($_SESSION['compteur'])) {
                    echo 'Nombre d\'élèves restant à ajouter : ' .$_SESSION['nb_users'];
                } else {
                    echo'Nombre d\'élèves restant à ajouter :  ' .$_SESSION['compteur'];
                }
              ?>
              </span>
            <form action="traitement.php" method="POST">
              <div class="form-group">
                <label for="prenom"></label>
                <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prénom">
              </div>
              <div class="form-group">
                <label for="nom"></label>
                <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom">
              </div>
              <button type="submit" class="btn btn-primary">Ajouter</button>
          </form>
          </div>
          <div class="col-md-12">
          <span class = "text-danger">
            <?php
              if(isset($_SESSION['err_champ'])) {
                  echo $_SESSION['err_champ'];
              }
              if(isset($_SESSION['err_doublons'])) {
                  echo $_SESSION['err_doublons'];
              }

            ?>
          </span> 
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