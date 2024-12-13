<?php
require 'connect.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $NumImmatricule = $_POST['NumImmatricule'];
    $Marque = $_POST['Marque'];
    $Modele = $_POST['Modele'];
    $Annee = $_POST['Annee'];

    $stmt = $conn->prepare("INSERT INTO voitures (NumImmatricule, Marque, Modele , Annee) VALUES (?,?,?,?)");
    $stmt->bind_param("sssi", $NumImmatricule, $Marque, $Modele, $Annee);

    if( $stmt->execute()) {
        echo"Voiture ajoutée!";
        header("Location: cars.php");
}else{
    echo "Error: {$stmt->error}";
}
$stmt->close();
}

?>