<?php
require "connect.php";

if (isset($_GET['id']) && is_numeric($_GET['id']))  {
    $NumClients = intval($_GET['id']);

    $stmt = $conn->prepare("DELETE FROM voitures WHERE NumImmatricule = ?" );

    if ($stmt->execute()){
        echo"User deleted Successfully";
        header("Location: cars.php");
        exit;
    } else {
        echo "Error : {$stmt->error}";
    }

    $stmt->close();
} else {
    echo "No user ID provided.";
}

?>