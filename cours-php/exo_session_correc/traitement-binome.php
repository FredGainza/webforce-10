<?php session_start();
// Je vérifie que j'ai bien reçu le formulaire avec l'information cachée
if (isset($_POST) && !empty($_POST)) {
    // Si le changement vaut 1
    if ($_POST['changement'] == 1) {
        // On vérifie que la session USERS n'est pas vide
        if (!empty($_SESSION['users'])) {
            // Si elle n'est pas vide je prends 2 élèves que j'ajoute à la nouvelle session BINOMES

            // Si il ne reste qu'un seul utilisateur (le cas d'un chiffre impair)
            if(count($_SESSION['users']) === 1){
                $groupe_aleatoire = rand(0, count($_SESSION['binomes']) - 1);
                $_SESSION['binomes'][$groupe_aleatoire][] = $_SESSION['users'][0];
                
                // Je retire les élèves transférés dans binôme de la session USERS
                unset($_SESSION['users']);

            }else{
                $binome = []; // je commence par créer un tableau vide dans lequel j'ajouterai les deux élèves

                for ($i = 1; $i <= 2; $i++) {
                    // Je sélectionne deux élèves
                    $eleve_numero = rand(0, count($_SESSION['users']) - 1);
                    // Je les ajoute au tableau binôme
                    $binome[] = $_SESSION['users'][$eleve_numero];
                        
                    // Je retire les élèves transférés dans binôme de la session USERS
                    unset($_SESSION['users'][$eleve_numero]);

                    // Je réorganise les index de la session USERS sinon mon algo ne marchera pas
                    sort($_SESSION['users']);
                }
                // J'ajoute les binômes à la session
                $_SESSION['binomes'][] = $binome;
            }           
           
            header('Location: binome.php');

        } else {
            header('Location: binome.php');
        }
    } else {
        header('Location: binome.php');
    }
} else {
    header('Location: binome.php');
}
