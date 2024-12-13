<?php
require "../connect.php";

if (isset($_GET['NumImmatricule']) && !empty($_GET['NumImmatricule'])) { 
    $NumImmatricule = $_GET['NumImmatricule'];

    $stmt = $conn->prepare("DELETE FROM voitures WHERE NumImmatricule = ?");
    $stmt->bind_param("s", $NumImmatricule);

    if ($stmt->execute()) {
        header("Location: cars.php");
        exit;
    } else {
        echo "Error: {$stmt->error}";
    }

    $stmt->close();
} else {
    echo "No NumImmatricule provided or NumImmatricule is empty.";
}
?>
