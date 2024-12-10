<?php
include_once "connect.php";

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = (int)$_GET['id'];

    try {
        // Start a transaction
        $pdo->beginTransaction();

        // Delete related rows in 'contrats' first
        $sqlContrats = "DELETE FROM contrats WHERE NumClient = :id";
        $stmtContrats = $pdo->prepare($sqlContrats);
        $stmtContrats->execute(['id' => $id]);

        // Delete the client from 'clients'
        $sqlClients = "DELETE FROM clients WHERE NumClients = :id";
        $stmtClients = $pdo->prepare($sqlClients);
        $stmtClients->execute(['id' => $id]);

        // Commit the transaction
        $pdo->commit();

        // Redirect back to the index page
        header("Location: index.php");
        exit;
    } catch (Exception $e) {
        // Rollback transaction in case of error
        $pdo->rollBack();
        die("Error deleting client: " . $e->getMessage());
    }
} else {
    die("Invalid ID");
}


