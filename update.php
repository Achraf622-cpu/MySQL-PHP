<?php
require 'connect.php';

if (isset($_GET['NumClients'])) {
    $NumClients = $_GET['NumClients'];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $Nom = $_POST['nom'];
        $Adress = $_POST['adress'];
        $Tel = $_POST['tel'];

        $stmt = $conn->prepare("UPDATE clients SET nom = ?, email = ? WHERE NumClients = ?");
        $stmt->bind_param("sssi", $Nom, $Adress, $Tel, $NumClients);

        if ($stmt->execute() === TRUE) {
            echo"Client Updated successfully!";
        } else {
            echo "Error: " . $stmt->error;
        }
    }
        $stmt->close();



    $result = $conn->query("SELECT * FROM clients WHERE NumClients = $NumClients");
    $user = $result->fetch_assoc();
?>

<form method="POST">
    <input type="text" name="nom" value="<?= $user['nom'] ?>" required>
    <input type="text" name="adress" value="<?= $user['adress'] ?>"  required>
    <input type="text" name="tel" value="<?= $user['tel'] ?>" required>
    <button type="submit">Update user</button>
</form>

<?php
} else {
    echo "No user ID provided";
}

?>