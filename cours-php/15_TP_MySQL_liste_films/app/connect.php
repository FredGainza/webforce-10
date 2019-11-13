<?php   // je dois démarrer ma session
session_start();
//je vide les sessions, j'en crée une autre
    unset($_SESSION['errors']);
    unset($_SESSION['successs']);

// Vérifie si l'utilisateur peut accéder aux films
if(isset($_POST) && !empty($_POST)){
    // Si l'email est valide
    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        // Si l'email est valide je test le le password
        if(!empty($_POST['password'])){
            // j'ouvre la connexion avec PDO
            require_once 'bdd.php';

            // je crée une requete pour vérifier si l'utilisateur existe
            // je prépare la requete
            $sql = $connexion->prepare("SELECT * FROM user WHERE email=:email AND password=:password");
            // J'exécute la requete
            $sql->execute(
                [
                    'email'     => $_POST['email'],
                    'password'  => $_POST['password']
                ]
            );
            // Je récupère le résultat
            $user = $sql->fetch();


            // si j'ai bien l'utilisateur, alors je le fais passer à la suite
            if (!empty($user)){
                // Je peux aussi faire une verif supplémentaire pour voir
                // si l'utilisateur correspond bien (optionnel)
                // je redirige vers mon compte
                $_SESSION['success'] = 'Connexion réussie';
                // Je donne la permission à mon utilisateur 
                $_SESSION['access'] = true;
                header('Location: ../list-films.php');

            } else {
                // s'il n'est pas trouvé je renvoie une erreur
                $_SESSION['errors'] = 'Identifiants incorrects';
                //!\\ retourne à la page précedente
                header('Location: ' .$_SERVER['HTTP_REFERER']);
            }

        } else {
            //!\\ retourne à la page précedente
            header('Location: ' .$_SERVER['HTTP_REFERER']);
        }
        
    } else {
        //!\\ retourne à la page précedente
        header('Location: ' .$_SERVER['HTTP_REFERER']);
    }

} else {
 //!\\ retourne à la page précedente
 header('Location: ' .$_SERVER['HTTP_REFERER']);
}



// echo '<pre>';
// var_dump($user);exit;
// echo '</pre>';