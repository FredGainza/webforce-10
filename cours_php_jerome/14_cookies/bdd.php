<?php

// Base de données
/* Dans ce fichier nous allons encoder un mot de passe
avec la fonction password_hash();
https://www.php.net/manual/fr/function.password-hash.php
On utilisera l'algorithme BCRYPT pour encoder notre mot de passe
Le mot de passe sera encodé dans une chaine de 60 caractères
*/

// J'ai un utilisateur
$user = ['email' => 'j@ime.php', 'password' => 'PhpCfun'];
// J'encode le mot de passe
// Effectuez un var_dump
password_hash($user['password'], PASSWORD_BCRYPT);
// $2y$10$MqErxmA2UQzBrIGl4DQ8xOih9QoMz58/k8vOEAmzEGhlFbIIBWjNy


// Je stocke de nouveau le mot de passe dans l'utilisateur

$user['password'] = '$2y$10$MqErxmA2UQzBrIGl4DQ8xOih9QoMz58/k8vOEAmzEGhlFbIIBWjNy';
// var_dump($user);
/* Le tableau $user est maintenant composé comme suit :
	$user
		email 		= j@ime.php
		password 	= $2y$10$MqErxmA2UQzBrIGl4DQ8xOih9QoMz58/k8vOEAmzEGhlFbIIBWjNy
	Attention vous n'aurez peut être pas la même clé encodée que celle que je vous montre
*/
