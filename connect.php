<?php
// Database connection settings;
$host = "127.0.0.1";
$username = "root"; 
$password = "password"; 
// $dbname = "Gestion de location de voiture"; 
$database = "LocationVoiture";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: {$conn->connect_error}");
}
?>

// try {
//     $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
// } catch (PDOException $e) {
//     echo "Erreur de connexion : " . $e->getMessage();

// }

// $sql = "SELECT * FROM clients";
// $result = $pdo->query($sql);


