<?php session_start(); ?>

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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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
            <h2>Algorithme aléatoire de création de bînome</h2>
            <h3>Le tableau</h3>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2 style="font-size: 1.2rem">Tableau des élèves</h2>
                    <!-- ICI COMMENCE NOTRE PHP -->
                    <table class="table">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Prénom</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if (isset($_SESSION['users'])) : ?>
                            <?php //var_dump($_SESSION['users']); ?>
                            <?php $i = 1;
                            foreach ($_SESSION['users'] as $user) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $user['nom']; ?></td>
                                    <td><?= $user['prenom']; ?></td>
                                </tr>
                                <?php $i++; endforeach; ?>
                        <?php endif; ?>

                        </tbody>
                    </table>
                </div>
                <div class="col-md-4 text-center">
                    <!-- ALGORITHME-->
                    <form action="traitement-binome.php" method="POST">
                        <div class="form-group">
                            <input type="hidden" class="form-control" placeholder="" name="changement" value="1">
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg">Créer un binôme</button>
                    </form>
                </div>
                <div class="col-md-4">
                    <h2 style="font-size: 1.2rem">Tableau des groupes d'élèves</h2>
                    <!-- ICI COMMENCE NOTRE PHP -->
                    <table class="table">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Prénom</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if (isset($_SESSION['binomes'])) : ?>
                            <?php //var_dump($_SESSION['binomes']); ?>
                            <?php $team = 1;
                            foreach ($_SESSION['binomes'] as $binome) : ?>
                                <?php for ($i = 0; $i < count($binome); $i++) : ?>
                                    <tr>
                                        <?php if ($i === 0) : ?>
                                            <th scope="row" rowspan="<?= count($binome) ?>"><?= $team; ?></th>
                                        <?php endif; ?>
                                        <td><?= $binome[$i]['nom']; ?></td>
                                        <td><?= $binome[$i]['prenom']; ?></td>
                                    </tr>
                                <?php endfor; ?>
                                <?php $team++; endforeach; ?>
                        <?php endif; ?>
                        </tbody>
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

</body>

</html>