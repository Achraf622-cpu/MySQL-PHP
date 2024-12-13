<?php
include_once "../connect.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $DateDebut = $_POST['DateDebut'];
    $DateFin = $_POST['DateFin'];
    $NumClient = $_POST['NumClient'];
    $NumImmatriculation = $_POST['NumImmatriculation'];

    $startDate = new DateTime($DateDebut);
    $endDate = new DateTime($DateFin);
    $Duree = $startDate->diff($endDate)->days;

    $stmt = $conn->prepare("INSERT INTO contrats (DateDebut, DateFin, Duree, NumClient, NumImmatriculation) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssiss", $DateDebut, $DateFin, $Duree, $NumClient, $NumImmatriculation);

    if ($stmt->execute()) {
        echo "Added successfully";
        header("Location: contracts.php");
        exit;
    } else {
        echo "Error: {$stmt->error}";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Error";
}
