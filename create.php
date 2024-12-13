<?php
require 'connect.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Nom = $_POST['Nom'];
    $Adress = $_POST['Adress'];
    $Tel = $_POST['Tel'];

    $stmt = $conn->prepare("INSERT INTO clients (Nom, Adress, Tel) VALUES (?,?,?)");
    $stmt->bind_param("sss", $Nom, $Adress, $Tel);

    if ($stmt->execute() === TRUE) {
        echo"User added successfully!";
        header("Location: clients.php");
        exit;
} else {
    echo "Error: {$stmt->error}";
}

$stmt->close();
}

?>


