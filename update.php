<?php
require 'connect.php';

if (isset($_GET['NumClients'])) {
    $NumClients = $_GET['NumClients'];


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $Nom = $_POST['nom'];
        $Adress = $_POST['adress'];
        $Tel = $_POST['tel'];

        $stmt = $conn->prepare("UPDATE clients SET Nom = ?, Adress = ?, Tel = ? WHERE NumClients = ?");
        if (!$stmt) {
            die("Prepare failed: " . $conn->error);
        }
        $stmt->bind_param("sssi", $Nom, $Adress, $Tel, $NumClients);

        if ($stmt->execute() === TRUE) {
            echo "Client updated successfully!";
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    }

    $result = $conn->query("SELECT * FROM clients WHERE NumClients = $NumClients");
    $user = $result->fetch_assoc();
    if (!$user) {
        die("No user found with ID $NumClients");
    }
?>

<form method="POST">
    <input type="text" name="nom" value="<?= htmlspecialchars($user['Nom']) ?>" required>
    <input type="text" name="adress" value="<?= htmlspecialchars($user['Adress']) ?>" required>
    <input type="text" name="tel" value="<?= htmlspecialchars($user['Tel']) ?>" required>
    <button type="submit">Update user</button>
</form>

<?php
} else {
    echo "No user ID provided.";
}
?>
