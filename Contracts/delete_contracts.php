<?php
include_once "../connect.php";

if (isset($_GET['NumContrat']) && is_numeric($_GET['NumContrat']))  {
    $NumContrat = intval($_GET['NumContrat']);

    

    $stmt = $conn->prepare("DELETE FROM contrats WHERE NumContrat = ? ");
    $stmt->bind_param("i", $NumContrat);

    if ($stmt->execute()) {
        echo "Deleted successfully";
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