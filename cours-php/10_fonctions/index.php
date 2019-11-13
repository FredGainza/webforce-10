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
              // LES FONCTIONS
              // Une fonction se déclare avec le mot clé "function" suivi d'un nom de fonction
              function identification(){
                return 'Bonjour, votre nom est Fred !';
              }

              // Pour exécuter une fonction, il faut l'appeler 
              identification();

              // Fonction avec des paramètres
              function operation($premier_chiffre, $deuxieme_chiffre){
                $resultat = $premier_chiffre * $deuxieme_chiffre;
                return $resultat;
              }
              echo operation(10, 5);

              // Fonction avec des paramètres par défaut
              function connexion($user = 'root', $password = ""){
                if($user === 'root'){
                  return "Bonjour $user, vous êtes administrateur";
                }else{
                  return "Bonjour $user, vous êtes abonné";
                }
              }

              // Utilisation des paramètres par defaut
              echo connexion();

              // Utilisation en remplacant les paramètres par defaut
              echo connexion("Jerome", "JAIME PHP");

              // $attr = [
              //   "class" => "maClass",
              //   "id" => "monID",
              //   "label" => "MonChamp"
              // ];
              // Exercice : fonction html($bal_ouverture, $bal_fermeture, $attribut, $contenu)
              // 4 paramètres - permet de générer de l'html
              // function html($bal_ouverture="", $bal_fermeture="", $attribut="", $contenu=""){
        
              //   if ($attribut == ""){
              //     $resultat = '<'.$bal_ouverture.'>'. $contenu . '<'.$bal_fermeture.'/>';
              //     return $resultat;
              //   } else {
              //         $chaine = "";
              //         foreach ($attribut as $key => $value) {
              //           $chaine .= $key. '='. $value ." ";
              //         }
              //         if ($bal_ouverture == 'img' OR $bal_ouverture == 'input'){
              //           $resultat = '<'.$bal_ouverture. " " .$chaine.'/>';
              //           return $resultat;
              //         }else{
              //               $resultat = '<'.$bal_ouverture. " " .$chaine.'/>'. $contenu . '</'.$bal_fermeture.'>';
              //               return $resultat;
              //         }
              //   }
              // }
                
                // if ($attribut == "") {
                //   $resultat = '<'.$bal_ouverture.'>'. $contenu . '<'.$bal_fermeture.'/>';
                //   return $resultat;
              
                // }else{
                //   $att = explode(" ", $attribut);
                //   $chaine = "";
                //   for ($i=0; $i<count($att); $i++){
                //     $chaine .= $att[$i]. ' = "  "';
                //   }
                //   $resultat = '<'.$bal_ouverture. " " .$chaine.'/>'. $contenu . '</'.$bal_fermeture.'>';
                //   return $resultat;
              // }
            
                // echo html("input", "input", $attr , "bonjour");

// Exercice : Créer une fonction qui génère des balises HTML
// Paramètres :
// - Ouvrir et/ou fermer une balise
// - Ajouter des attributs (non obligatoire)
// - Ajouter du contenu  

  echo '<hr><br>';


  function html($balise = '', $fermeture = '', $attribut = [], $contenu = ''){
    $count = strlen($balise) - 1;
    if(!empty($attribut)){
      $balise_finale = '';
      for ($i=0; $i < $count ; $i++) { 
        $balise_finale .= $balise[$i];
      }
      foreach ($attribut as $key => $value){
        $balise_finale .= " $key=\"$value\" ";
      }

      $balise_finale .= ">";
      $balise = $balise_finale;
    }

    if(!empty($contenu)){
      $balise .= $contenu;
    }

    if(!empty($fermeture)){
      $balise .= $fermeture;
    }
    
    return $balise;
  }

      $img = [
        'src' => 'https://placekitten.com/250/250',
        'class' => 'img-fluid'
      ];
      echo html('<img>', '', $img);


      $button = ['class' => 'btn btn-primary'];
      echo html('<button>', '</button>', $button, 'Envoyer');

      $form = ['method' => 'POST', 'action' => '/traitement.php'];
      echo html ('<form>', '</form>', $form, 'FORMULAIRE');

      $p = ['class' => 'test'];
      echo html ('<p>', '</p>', $p, 'blablabla');




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