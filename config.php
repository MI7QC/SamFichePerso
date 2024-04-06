<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'fichepersoa');

// Créez une connexion PDO en utilisant les informations de connexion définies
try {
    $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
/*
$id = "";
$name = "";
$avatar ="";
$race = "";
$class = "";
$title = "";
$twitchName = "";
$xp = "";
$lvl = "";
$strength = "";
$constitution = "";
$wisdom = "";
$dexterity = "";
$intelligence = "";
$charisma = "";
*/
?>