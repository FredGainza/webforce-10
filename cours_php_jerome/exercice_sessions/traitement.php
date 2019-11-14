<?php // Je démarre la session
session_start();
// Si le post est envoyé
if (!empty($_POST)) {
    // Je vérifie que les infos ne sont pas vides
    if (!empty($_POST['nom']) && !empty($_POST['prenom'])) {
        // Je vérifie que l'utilisateur n'est pas déjà enregistré
        // Avant je vérifie que la session USERS existe
        if (isset($_SESSION['users'])) {
            if (in_array($_POST['nom'], array_column($_SESSION['users'], 'nom')) && 
                in_array($_POST['prenom'], array_column($_SESSION['users'], 'prenom'))) {
                // Sinon il est déjà dedans
                $_SESSION['success'] = 'Utilisateur déjà enregistré';
                header('Location: index.php');
                
            }else{
                // Si je ne trouve pas l'utilisateur dans la session je l'ajoute
                $_SESSION['users'][] = [
                    'nom' => $_POST['nom'],
                    'prenom' => $_POST['prenom']
                ];
                // Si on l'ajoute on renvoi avec un succès
                $_SESSION['success'] = 'Utilisateur enregistré';
                header('Location: index.php');
            }

        } else {
            // Sinon je crée le premier élève dans la session USERS
            $_SESSION['users'][] = [ // Chaque élève sera un élément du tableau SESSION USERS
                'nom' => $_POST['nom'],
                'prenom' => $_POST['prenom']
            ];
            // Puis je renvoie vers la page accueil
            // avec un message succès
            $_SESSION['success'] = 'Utilisateur enregistré';
            header('Location: index.php');
        }
    } else {
        // je renvois vers l'index si on a pas reçu d'info
        // avec un message erreur
        $_SESSION['error'] = 'Il manque une information';
        header('Location: index.php');
    }
} else {
    // je renvois vers l'index si on a pas reçu d'info
    // avec un message erreur
    $_SESSION['error'] = 'Il manque une information';
    header('Location: index.php');
}