<?php
require '../connect.php';

if (isset($_GET['NumImmatricule'])) {
    $NumImmatricule = $_GET['NumImmatricule'];


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $newNumImmatricule = $_POST['NumImmatricule'];
        $Marque = $_POST['Marque'];
        $Modele = $_POST['Modele'];
        $Annee = $_POST['Annee'];

        $stmt = $conn->prepare("UPDATE voitures SET NumImmatricule = ?, Marque = ?, Modele = ?, Annee = ? WHERE NumImmatricule = ?");
        if (!$stmt) {
            die("Prepare failed: " . $conn->error);
        }
        $stmt->bind_param("sssss", $newNumImmatricule, $NumImmatricule, $Marque, $Modele, $Annee);

        if ($stmt->execute() === TRUE) {
            echo "Car updated successfully!";
            header("Location: cars.php");
             exit();
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    }

    $stmt = $conn->prepare("SELECT * FROM voitures WHERE NumImmatricule = ?");
    $stmt->bind_param("s", $NumImmatricule);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    $stmt->close();
    
    if (!$user) {
        die("No user found with ID $NumImmatricule");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    
<form method="POST">
    <input type="text" name="NumImmatricule" value="<?= htmlspecialchars($user['NumImmatricule']) ?>" required>
    <input type="text" name="Marque" value="<?= htmlspecialchars($user['Marque']) ?>" required>
    <input type="text" name="Modele" value="<?= htmlspecialchars($user['Modele']) ?>" required>
    <input type="number" name="Annee" value="<?= htmlspecialchars($user['Annee']) ?>" required>
    <button type="submit">Update user</button>
</form>  

</body>
</html>


<?php
} else {
    echo "No user ID provided.";
}
?>
