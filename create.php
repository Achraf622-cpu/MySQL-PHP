<?php
require 'connect.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Nom = $_POST['nom'];
    $Adress = $_POST['adress'];
    $Tel = $_POST['tel'];

    $stmt = $conn->prepare("INSERT INTO clients (Nom, Adress, Tel) VALUES (?,?,?)");
    $stmt->bind_param("sss", $Nom, $Adress, $Tel);

    if ($stmt->execute() === TRUE) {
        echo"User added successfully!";
} else {
    echo "Error: {$stmt->error}";
}

$stmt->close();
}

?>


