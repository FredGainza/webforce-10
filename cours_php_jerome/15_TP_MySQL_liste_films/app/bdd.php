<?php
// Connexion à la base de données
// Nous utiliserons aussi le gestionnaire d'erreur
// C'est une bonne pratique d'utliser le try et catch

$dbname = 'tp_films';
$user 	= 'root';
$pass 	= '';

try{
	$connexion = new PDO('mysql:host=localhost;dbname='.$dbname, $user, $pass);
}catch(PDOException $e){
	print "Erreur !: " . $e->getMessage() . "<br/>";
	die();
}