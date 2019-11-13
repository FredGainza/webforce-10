<?php
// Nous allons inclure notre fichier bdd.php
require 'bdd.php';
// Traitement de notre formulaire
if(!empty($_POST)){
    // Si le formulaire est transmis je vérifie que l'utilisateur
    // est bien celui de ma bdd.php 
    // et s'il a coché la case 'se souvenir de moi', je stocke
    // un cookie sur son navigateur

    // Un mdp hashé ne peut être décrypté, seulement comparé
    // avec la fonction password_verify()
    // cette fonction retourne true si le mdp est identique


$password_verify = password_verify($_POST['password'], $user['password']);

if ($_POST['email'] === $user['email'] && password_verify){
    if ($_POST['rememberme'] === 'rememberme'){
        // si il a coché la case j'enregistre l'email dans un cookie
        setcookie('rememberme', $user['email'], time() + 3600*24*365);
   }
   header('Location: mon-compte.php');
 }else{
     header('Location: definition.php');
 }
}
