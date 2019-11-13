<?php

// $tab = [
// 	'JD' => [
// 		'nom' => 'diaferia',
// 		'prenom' => 'jérôme',
// 		'age' => 30,
// 		'ville' => 'Cenac'
// 	],
// 	'OJ' => [
// 		'nom' => 'onate',
// 		'prenom' => 'javier',
// 		'age' => 30,
// 		'ville' => 'Bordeaux'
// 	]
// ];
// $index = array_keys($tab);
// echo "<pre>";
// for($i = 0; $i < count($tab); $i++){
	
// 	print_r($tab[$index[$i]]['nom']);
// 	print_r($tab[$index[$i]]['prenom']);
// 	print_r($tab[$index[$i]]['age']);
// 	print_r($tab[$index[$i]]['ville']);


// }
// echo "</pre>";


// Corrections des exercices
?>
<?php 

$age = '45';
$sexe= 'masculin';

if ($age >= 36 && $age <= 52 && $sexe == 'masculin' ):?>
	<p> Bienvenue!</p>
<?php endif;?>

<?php 
	$tab = [
		"DJ" => [
			"Nom" => "Diaferia",
			"Prenom" => "Jerôme",
			"Ville" => "Bordeaux",
			"Age" => "30"
		],
		"OJ" => [
			"Nom" => "Onate",
			"Prenom" => "Javier",
			"Ville" => "Bordeaux",
			"Age" => "29"
		],
		"NC" => [
			"Nom" => "Noé",
			"Prenom" => "Clément",
			"Ville" => "Bordeaux",
			"Age" => "29"
		]

	];

	echo "<pre>";
		var_dump($tab);
	echo "</pre>";


?>

<?php
$tab_length = count($tab);
$index = array_keys($tab);
/*echo "<pre>";
var_dump($index);
echo "</pre>";*/
$i = 0;

echo "<ul>";
while($i < $tab_length){
	echo "<li>Votre nom est " . $tab[$index[$i]]["Nom"] . " et votre prenom est " . $tab[$index[$i]]["Prenom"] . "</li>";
	echo "<li>Votre ville est " . $tab[$index[$i]]["Ville"] . "</li>";
	
	echo "<li>Votre age est " . $tab[$index[$i]]["Age"] . "</li>";
	echo "<hr>";
	$i++;
}
echo "</ul>";

echo "<ol>";
foreach($tab as $key => $val){
		echo "<li>Bonjour : " . $key;
			echo "<ul>";
			echo "<li>Votre nom est " . $val["Nom"] . " et votre prénom" .  $val["Prenom"] . "</li>";
			echo "<li>Votre ville est " . $val["Ville"] .  "</li>";
			echo "<li>Votre age est " . $val["Age"] .  "</li>";
			echo "<hr>";
			echo "</ul>";
		echo "</li>";
}
echo "</ol>";


?>

<?php
//EXO 4
           //- Créez un tableau contenant une liste d’adresses e-mail (min 15 adresse e-mails).
           //Récupérer le nom du fournisseur, ex : toto@gmail.com, je récupère gmail.com.
           //Affichez les pourcentages des fournisseurs utilisés dans le document.

	$tableau = [

	"toto@gmail.com",
	"toto@hotmail.com",
	"trimard@gmail.com",
	"toto@gtour.com",
	"toto@gmail.com",
	"toto@gmail.com",
	"toto@gmail.com",
	"toto@wanadoo.com",
	"toto@gmail.com",
	"toto@wanadoo.com",
	"toto@wanadoo.com",
	"toto@gmail.com"

	];
	$fournisseurs_mail = [];
	foreach ($tableau as $value) {
		$result = explode("@", $value);
		$fournisseurs_mail[] = $result[1] ;
	}

	$fournisseur_occurence = 
		array_count_values($fournisseurs_mail);

	$percent = [];
	foreach ($fournisseur_occurence as $key => $value) {
		$percent[$key] = 
		round(($value / count($tableau))*100);
	}


	echo "<pre>";
	var_dump($percent);
	echo "</pre>";
	
	function pre($var) {
		echo '<pre>';
		var_dump($var);
		echo '</pre>';
	}
	pre($tableau);




	// function printr($var) {
	// 	echo '<pre>';
	// 	print_r($var);
	// 	echo '</pre>';
	// }

	

	/////////////Fonction Pourcentage ////////////

	// function pourcentages($table){

	// 	$total = count($table);
	// 	$percentResult = [];
	// 	$table_occurence = array_count_values($table);
	// 	foreach ( $table_occurence as $value => $count) {
	// 		$percentResult[$value] = round(($count / $total)*100 . " %");
	// 	}
	// 	return $percentResult;
	// }
	///////////////////////////////////////

	// $fournisseur_pourcentages = [];
	// for( $i = 0 ; $i < count($tableau); $i++){
	// 	$fournisseur =  strstr($tableau[$i], '@');
	// 	$fournisseur_less = substr( $fournisseur , 1);
	// 	echo "<ul>";
	// 	echo "<li> " . $fournisseur_less . "</li>";
	// 	echo "</ul>";
	// 	array_push($fournisseur_pourcentages, $fournisseur_less);
	// }
	// echo "<pre>";
	// 	var_dump(pourcentages($fournisseur_pourcentages));
	// echo "</pre>";

	





?>