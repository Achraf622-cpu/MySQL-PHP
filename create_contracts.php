<?php
include_once "connect.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $DateDebut = $_POST['DateDebut'];
    $DateFin = $_POST['DateFin'];
    $NumClient = $_POST['NumClient'];
    $NumImmatriculation = $_POST['NumImmatriculation'];

    // Calculate duration in days
    $startDate = new DateTime($DateDebut);
    $endDate = new DateTime($DateFin);
    $Duree = $startDate->diff($endDate)->days;

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO contrats (DateDebut, DateFin, Duree, NumClient, NumImmatriculation) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssiss", $DateDebut, $DateFin, $Duree, $NumClient, $NumImmatriculation);

    // Execute and check
    if ($stmt->execute()) {
        echo "<script>alert('Contrat ajout\u00e9 avec succ\u00e8s!'); window.location.href='contracts.php';</script>";
    } else {
        echo "<script>alert('Erreur lors de l\u2019ajout du contrat: " . $stmt->error . "'); window.location.href='contracts.php';</script>";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "<script>alert('Requ\u00eate non valide'); window.location.href='contracts.php';</script>";
}
