<?php

// Nous allons inclure notre fichier bdd.php
require 'bdd.php';
// Traitement de notre formulaire
if(!empty($_POST)){
	// Si le formulaire est transmis je vérifie que l'utilisateur
	// est bien celui de ma bdd.php et si il a coché la case
	// se souvenir de moi, je stocke un cookie sur son navigateur

	// Un mot de passe hashé ne peut être décrypté, seulement
	// comparé avec la fonction password_verify()
	// Cette fonction retourne true si le mot de passe est identique
	$password_verify = password_verify($_POST['password'], $user['password']);

	if($_POST['email'] === $user['email'] && $password_verify){
		// Si les identifiants sont ok
		if($_POST['rememberme'] === 'rememberme'){
			// Si il a coché la case, j'enregistre son email dans un cookie
			setcookie('rememberme', $user['email'], time() + 3600*24*365);
		}
		header('Location: mon-compte.php');
	}else{
		header('Location: index.php');
	}

}
