<?php
// Permet d'ajouter les tables pour la BDD


/* 
    Nous allons lancer ce scipt via l'url pour nous connecter
    et créer noptre BDD ainsi que les tables USER, FILM
*/

// On tente une connexion à notre serveur MySQL
// On affiche un message si on réussi à créer la BDD + les tables
// Sinon onb capture les erreurs
// https://www.php.net/manual/fr/pdo.connections.php

$host       = 'localhost';
$username   = 'root';
$password   = '';

try {
    // PDO est un objet qui prend 3 paramètres minimum
    $connection = new PDO("mysql:host=$host", $username, $password);
    // file_get_contents permet de récupérer et de lire le contnu d'un fichier
    $sql = file_get_contents("../data/data.sql");
    // exécution de fichier
    $connection->exec($sql);
    echo "Base de données et tables créées";

}catch(PDOException $error){
    echo $sql ."<br>" .$error->getMessage();
}
