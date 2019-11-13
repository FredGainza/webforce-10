<?php session_start();

// $prenom = $_POST['prenom'];
// $nom = $_POST['nom'];
// $users = $_SESSION['users'];


$_SESSION['err_champ'] = '';
$_SESSION['err_doublons'] = '';

if (isset($_POST) && !empty($_POST)) {
    if (!empty($_POST['prenom']) && !empty($_POST['nom'])) {
        if (!isset($_SESSION['users'])) {
            $_SESSION['users'][] = ['prenom' => $_POST['prenom'], 'nom' => $_POST['nom']];
            $_SESSION['compteur'] = $_SESSION['nb_users'] - 1;
            header('Location: index.php');
        } else {
            if (in_array($_POST['nom'], array_column($_SESSION['users'], 'nom')) && in_array($_POST['prenom'], array_column($_SESSION['users'], 'prenom'))) {
                $_SESSION['err_doublons'] = 'Vous avez déjà enregistré l\'élève '. $_POST['prenom']. ' ' .$_POST['nom'];
                header('Location: index.php');
            } else {
                $_SESSION['users'][] = ['prenom' => $_POST['prenom'], 'nom' => $_POST['nom']];
                if (count($_SESSION['users']) < $_SESSION['nb_users']) {
                    $_SESSION['compteur'] = $_SESSION['nb_users'] - count($_SESSION['users']) ;
                    header('Location: index.php');
                } else {
                    header('Location: tableaux.php');
                }
            }
        }
    } else {
        $_SESSION['err_champ'] = 'Vous n\'avez pas renseigné au moins un des 2 champs demandés';
        header('Location: index.php');
    }
}

// unset($_SESSION['users']);
//    session_unset();