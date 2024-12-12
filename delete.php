<?php
require "connect.php";

if (isset($_GET['id']) && is_numeric($_GET['id']))  {
    $NumClients = intval($_GET['id']);

    $stmt = $conn->prepare("DELETE FROM clients WHERE NumClients = ? ");
    $stmt->bind_param("i", $NumClients);

    if ($stmt->execute()) {
        echo" User deleted succesfully";
        header("Location: index.php");
        exit;
    } else {
        echo "Error: {$stmt->error}";
    }

    $stmt->close();

} else {
    echo "No user ID provided.";
}

?>


