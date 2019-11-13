<?php session_start();
// Traitement de notre formulaire
// avec session
if(!empty($_POST)){
	$_SESSION['user'] = [
		'pseudo' => $_POST['email'], 
		'password' => $_POST['password']
	];

	// header('Location: mon-compte.php');
	var_dump($_SESSION['user']);
}
