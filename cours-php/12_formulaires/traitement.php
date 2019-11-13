<?php

// Traitement du notre formulaire
// On accède aux données via le tableau $_POST
echo '<pre>'; // Balise HTML de présentation
var_dump($_POST); // Debug des données
echo '</pre>';

// Si la globale $_POST est définie
// Et quelle n'est pas vide

if(isset($_POST) && !empty($_POST)){
	// Si l'email est valide
	if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
		// Si l'email est valide, je test le password
		if(!empty($_POST['password'])){
			header('Location: /mon-compte');
		}else{
			//!\\ Retourne à la page précédente
			header('Location: ' . $_SERVER['HTTP_REFERER']);
		}
	}else{
		//!\\ Retourne à la page précédente
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}

}else{
	//!\\ Retourne à la page précédente
	header('Location: ' . $_SERVER['HTTP_REFERER']);
}
