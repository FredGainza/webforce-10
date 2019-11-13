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

<!-- - Créer une condition utilisant les variables $age et
$sexe dans une instruction if pour sélectionner une personne
de sexe masculin dont l’age est compris entre 36 et 52 ans et
afficher un message de bienvenue.
​
-Écrivez un tableau multidimensionnel associatif dont les clés sont
des initiales (Nom Prénom = NP) de personne et les valeurs des tableaux indicés
contenant le nom, le prénom, la ville de résidence et l’age de la personne. Débugguez ensuite
le tableau.
​
- Utilisez la boucle adéquate pour lister les informations sous forme de liste HTML
	Nom + Prénom
	Ville
	Age
- Faite la même étape que précédente mais avec une autre boucle (vous ne devez pas utiliser,
while et for, soit l'une ou l'autre)
​
- Créez un tableau contenant une liste d’adresses e-mail (min 15 adresse e-mails). 
Récupérer le nom du fournisseur, ex : toto@gmail.com, je récupère gmail.com. 
Affichez le pourcentage de fournisseur utilisé dans le document. -->



<?php
// EXO 1
$age = 40;
$sexe = "m";

if($age >= 36 && $age <= 52 && $sexe == "m"){
  echo 'bienvenue';
} 

// EXO 2

$initiales = [
  "JM" => [
    "Nom"  => "Mendion", 
    "Prénom" => "Jean", 
    "Ville" => "Biarritz", 
    "age" => 40
  ],
  "AC" => [
    "Nom"  => "Canler", 
    "Prénom" => "Audrey", 
    "Ville" => "Talence", 
    "age" => 42
  ],
  "JF" => [
    "Nom"  => "Fifou", 
    "Prénom" => "Jean", 
    "Ville" => "Bayonne", 
    "age" => 38
    ]
];

echo '<pre>';
var_dump($initiales);
echo '<pre>';

// echo '<ul>';
// for ($i=0; $i < count($initiales); $i++) { 
//   echo '<li>'. $initiales[$i]["Nom"]. " " .$initiales[$i]["Prénom"] .'</li>';
//   echo '<li>'. $initiales[$i]["Ville"].'</li>';
//   echo '<li>'. $initiales[$i]["age"].'</li>';
//   echo '<br';
// };
// echo '</ul>';

echo '<ul>';
foreach(array_keys($initiales) as $key){
  echo '<li>'. $initiales[$key]["Nom"]. " " .$initiales[$key]["Prénom"] .'</li>';
  echo '<li>'. $initiales[$key]["Ville"].'</li>';
  echo '<li>'. $initiales[$key]["age"].'</li>';
  echo '<br>';
}
echo '</ul>';

$cle = array_keys($initiales);
print_r($cle);

echo '</ul>';
for ($i=0; $i < count($initiales); $i++) { 
  echo '<li>'. $initiales[$cle[$i]]["Nom"]. " " .$initiales[$cle[$i]]["Prénom"] .'</li>';
  echo '<li>'. $initiales[$cle[$i]]["Ville"].'</li>';
  echo '<li>'. $initiales[$cle[$i]]["age"].'</li>';
  echo '<br>';
}
echo '<ul>';


// exo 4

$mail = [
  'fred.gg@gmail.com',
  'pierre.gaia@hotmail.com',
  'george.lala@gmail.com',
  'lise.julie@orange.fr',
  'pierre.paul@free.fr',
  'jeanjean@voila.fr',
  'brunoli@voila.fr',
  'jugeli@free.fr',
  'he44ehyeh@sfr.fr',
  'gregdelarue@gmail.com',
  'jeandelavoiture@apple.com',
  'audreycanler@hotmail.com',
  'popaul@orange.fr',
  'jeanlelele@laposte.net',
  'jeanjean@laposte.fr'
];

$fournisseur = [];
for ($i=0; $i < count($mail) ; $i++) { 
  $mailto = $mail[$i];
  $mailParts = explode('@', $mailto);
  $user = $mailParts[0];
  $domain = $mailParts[1];
  array_push($fournisseur, $mailParts[1]);

}
$tab_final = (array_count_values($fournisseur));
foreach ($tab_final as $key => $value) {
  echo 'la part totale de ' .$key. ' est de ' . (round($value/count($tab_final)*100, 2)) .'%;<br>';
}


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