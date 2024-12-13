<?php
require "connect.php";

if (isset($_GET['NumClients']) && is_numeric($_GET['NumClients']))  {
    $NumClients = intval($_GET['NumClients']);

    $stmt = $conn->prepare("DELETE FROM clients WHERE NumClients = ? ");
    $stmt->bind_param("i", $NumClients);

    if ($stmt->execute()) {
        echo" User deleted succesfully";
        header("Location: clients.php");
        exit;
    } else {
        echo "Error: {$stmt->error}";
    }

    $stmt->close();

} else {
    echo "No user ID provided.";
}

?>


