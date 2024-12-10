<?php
// Database connection settings;
$host = "localhost";
$username = "root"; 
$password = "password"; 
$dbname = "LocationVoiture"; 

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();

}

$sql = "SELECT * FROM clients";
$result = $pdo->query($sql);


?>