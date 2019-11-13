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


      <div class="row border hauteur pt-1">
        <div class="col-8">
          <h3>Composez votre pizza</h3>
          <h4>Séléction des ingrédients</h4>
        </div>
      </div>

      <form action="" method="get">
        <div class="row border hauteur pt-1">
          <div class="col-8">
            <h5>Base de la pâte</h5><br>
            <div class="form-check" id="choixSauce">
              <input class="form-check-input" type="radio" name="sauce" id="sauceTomate" value="tom" checked>
              <label class="form-check-label" for="sauceTomate">
                Sauce Tomate
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="sauce" id="sauceBlanche" value="bl">
              <label class="form-check-label" for="sauceBlanche">
                Sauce Blanche
              </label>
            </div>

          </div>
          <div class="col-4">
            <img src="img/tomate.png" alt="" class="h-50 ml-30" name="sauce" id="img-sauce">
          </div>
        </div>

        <div class="row border hauteur pt-1">
          <div class="col-8">
            <label class="form-check-label" for="fromage">Fromage(s)</label>
            <select class="custom-select my-1 mr-sm-2" name="fromage" id="fromage">
            <option selected value="1">Mozzarella</option>
            <option value="2">Mozzarella, Parmigiano</option>
            <option value="3">Mozzarella, Parmigiano, Gongorzolla</option>
          </select>
          </div>

          <div class="col-4"><img src="img/fromage.png" alt="" class="h-50 ml-30" id="img_fromage"></div>
          
        </div>

        <div class="row border hauteur pt-1">
          <div class="col-8">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="decoup" id="decoup" value="1">
            <label class="form-check-label" for="decoup">
              Découper ma pizza ?
            </label>
          </div>
          </div>
          <div class="col-4"><img src="img/blanche.png" alt="" class="h-50 ml-30"></div>
        </div>

        <div class="row border hauteur pt-1">
          <div class="col-8">
          <div class="form-check">
            <div class="row"><label class="form-check-label w-100" for="decoup">Supplément piment (non pimenté, pimenté, très pimenté)</label></div>
            <div class="row"><input class="form-check-input w-100" type="range" name="piment" id="piment" min="0" max="2" step="1"></div>
              
            
          </div>
          </div>
          <div class="col-4"><img src="img/no_piment.png" alt="" class="h-50 ml-30"></div>
        </div>

        <div class="row border hauteur pt-1">
          <div class="col-8"><button type="submit" class="btn btn-primary">Cuisiner ma pizza !</button></div>
          <div class="col-4"><img src="img/pizza.png" alt="" class="h-50 ml-30"></div>
        </div>
      </form>

      <div class="row">
          <div class="col-md-12">
            <!-- ICI COMMENCE NOTRE PHP -->
            <?php
              echo '<pre>'; // balise HTML de présentation des données
              var_dump($_GET); // Debug des données
              echo '</pre>';

              $choixSauce = $_GET['sauce'];
              $choixFromage = $_GET['fromage'];
              if (isset($_GET['decoup'])){
                $choixDecoup = $_GET['decoup'];
              }else{
                $choixDecoup = 0;
              }
              $choixPiment = $_GET['piment'];

              $prixSauce = 0;
              $prixFromage = 0;
              $prixDecoup = 0;
              $prixPiment = 0;
              

              if (isset($_GET) && !empty($_GET)){
                if(!empty($choixSauce)){
                  if ($choixSauce == 'tom'){
                    $prixSauce = 8;
                    $sauceAff = "Base de la pizza : sauce tomate";
                  }
                  if ($choixSauce == 'bl'){
                    $prixSauce = 7;
                    $sauceAff = "Base de la pizza : sauce blanche";
                  }
                  } else {
                      echo "Vous n'avez pas choisi votre base de pâte";
                  }

                if(!empty($choixFromage)){
                  for ($i=0; $i < 2; $i++){
                    if ($choixFromage == 0){
                      $prixFromage = 0.5;
                      $fromageAff = "Fromage choisi : Mozzarella";
                    }
                    if ($choixFromage == 1){
                      $prixFromage = 1;
                      $fromageAff = "Fromages choisis : Mozzarella, Parmigiano";
                    }
                    if ($choixFromage == 2){
                      $prixFromage = 1.5;
                      $fromageAff = "Fromages choisis : Mozzarella, Parmigiano, Gongorzolla";
                    }
                  }
                } else {
                  $fromageAff = "Pas de fromage choisi";
                }

                if(($choixDecoup)){
                  $prixDecoup = 1;
                  $decoupAff = "Vous avez choisi la découpe";
                }else{
                  $prixDecoup = 0;
                  $decoupAff = "Vous n'avez pas choisi la découpe";
                }

                $prixPiment = 0.1 + 0.2 * $choixPiment;
                if ($choixPiment == 0){
                  $pimmentAff = "Force du piment choisi : 1";
                }
                if ($choixPiment == 1){
                  $pimmentAff = "Force du piment choisi : 2";
                }
                if ($choixPiment == 2){
                  $pimmentAff = "Force du piment choisi : 3";
                }
                

              } else {
                  echo "Vous n'avez rien sélectionné";
              }
              $prixTotal = $prixSauce + $prixFromage + $prixDecoup + $prixPiment;

              $recap = [
                $sauceAff => $prixSauce,
                $fromageAff => $prixFromage,
                $decoupAff => $prixDecoup,
                $pimmentAff => $prixPiment,
                
              ];



              echo '<table class="w-50"><thead><tr><td style="border:1px solid black" class="bg-success">Liste des ingrédients</td><td style="border:1px solid black" class="bg-success">"Prix</td></tr></thead><tbody>';

              foreach ($recap as $key => $value) {
                echo '<tr>';
                echo '<td style="border:1px solid black">' . $key . '</td>';
                echo '<td style="border:1px solid black">' .$value. '€</td>';
                echo '</tr>';
              }
              echo '<tr><td style="border:1px solid black" class="bg-success">Prix Total :</td><td style="border:1px solid black" class="bg-success"><b>'.$prixTotal.'€</b></td></tr>';
              echo '</tbody></table>';











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
  <script src="js/app.js"></script>
</body>

</html>