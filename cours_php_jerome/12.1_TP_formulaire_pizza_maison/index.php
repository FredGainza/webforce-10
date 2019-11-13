<!-- ICI COMMENCE NOTRE PHP -->
<?php 

  // On verifie si la gloale $_GET n'est pas vide
  // à travers une fonction

function isGet(){
  if( ! empty($_GET) ){
    return true;
  }else{
    return false;
  }
}

if(isGet()){
    // Fonction pour afficher le tableau
 function tableau_pizza(){
     // Définition des tarifs
   $base = 12;
   if($_GET['base'] === 'Sauce blanche'){
    $base += 0.50;
    }
     /*
      Explication : Avec explode(), on scinde une chaine avec
      un délimiteur (ici la virgule) dans un tableau, puis
      je compte le nombre d'élément dans le tableau
     */
      $fromage = count(explode(',', $_GET['fromage'])) ;

      $decoupe = (!empty($_GET['couper']) && $_GET['couper'] === 'Pizza découpée') ? 1 : 0;

     // Si la valeur de piment est supérieur à 1 alors on attribut 0.5 sinon 0
      $piment = ($_GET['piment'] > 1) ? 0.5 : 0;

      $total = [];
     // Total
      $total[] += $base; 
      $total[] += $fromage;
      $total[] += $decoupe;
      $total[] += $piment;

     $total_price = array_sum($total);

      $resultat = '';
      $i = 0;
      foreach ($_GET as $k => $v) {
        $resultat .= '<tr>' . 
                      ' <td> ' . ucfirst($k) . ' </td>'.
                      ' <td> ' . $v . ' </td>'.
                      ' <td> ' . $total[$i] . ' </td>'.
                      '</tr>';
                      $i++;
      }

      if($decoupe === 1){
        $resultat .= '<tr><td>Couper</td><td>Offert</td><td>-1</td></tr>';
        // Je diminue de 1 le prix total
        $total_price = --$total_price;
      }
      $resultat .= '<tr><td>Total</td><td class="text-center" colspan="2">' . $total_price . '€</td></tr>';
      return $resultat;
    }   
  }
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
            <div class="col-12">
              <h1>Composer votre propre pizza !</h1>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              
            <span <?php if( isGet() ) :?> style="display: none;" <?php endif;?>>
              <h2>Sélection des ingrédients</h2>
              <form action="" method="GET">
                <p>Base de la pâte :</p>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="base" id="sauce_tomate" value="Sauce tomate" checked>
                  <label class="form-check-label" for="sauce_tomate">
                    Sauce tomate
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="base" id="sauce_blanche" value="Sauce blanche">
                  <label class="form-check-label" for="sauce_blanche">
                    Sauce blanche
                  </label>
                </div>
                <hr style="margin-top: 2rem;">
                <div class="form-group">
                  <label for="fromage">Fromage(s)</label>
                  <select class="form-control" id="fromage" name="fromage">
                    <option value="Mozzarella">Mozzarella</option>
                    <option value="Mozzarella, parmigiano">Mozzarella, Parmigiano</option>
                    <option value="Mozzarella, parmigiano, gorgonzolla">Mozzarella, Parmigiano, Gorgonzolla</option>
                  </select>
                </div>
                <hr style="margin-top: 6rem;">
                <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="couper" name="couper" value="Pizza découpée">
                  <label class="form-check-label" for="couper">Découper ma pizza ?</label>
                </div>
                <hr style="margin-top: 8.85rem;">
                <div class="form-group">
                  <label for="piment">Supplément piment (non pimenté, pimenté, très pimenté)</label>
                  <input type="range" class="form-control-range" id="piment" min="0" max="2" value="0" name="piment">
                </div>
                <hr style="margin-top: 7rem;">
                <button type="submit" class="btn btn-primary">Cuisiner ma pizza !</button>
              </form> 
            </span>
            <span <?php if( !isGet() ) :?> style="display: none;" <?php endif;?>>
                <?php if( isGet() ) :?>
                <table class="table">
                  <thead class="thead-dark">
                    <tr>
                      <th>Ingrédient(s)</th>
                      <th>Détails</th>
                      <th>Prix</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?= tableau_pizza(); ?>
                  </tbody>
                </table>
              <?php endif; ?>
              </span>      
            </div>
            <div class="col-md-6 text-center">
                <span <?php if( isGet() ) :?> style="display: none;" <?php endif;?>>
                  <div id="basePate">
                    <img src="images/tomate.png" alt="" width="150">
                  </div>
                  <hr>
                  <div id="nbrFromage">
                    <img src="images/fromage.png" alt="" width="150">
                  </div>
                  <hr>
                  <div id="coupePizza">
                    <img src="images/blanche.png" alt="" width="150">
                  </div>
                  <hr>
                  <div id="nbrPiment">
                    <img src="images/no_piment.png" alt="" width="150">
                  </div>
                  <hr>
                  <div id="pizzaFini">
                    <img src="images/pizza_no_piment.png" alt="" width="150">
                  </div>
                </span>
                <span <?php if( !isGet() ) :?> style="display: none;" <?php endif;?>>
                  <h3>En préparation</h3>
                  <img src="https://media.giphy.com/media/5hrj42zCA1RoA/giphy.gif" alt="">
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
    <script src="js/app.js"></script>
  </body>

  </html>