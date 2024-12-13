<?php
require '../connect.php';

if (isset($_GET['NumContrat'])) {
    $NumContrat = $_GET['NumContrat'];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $DateDebut = $_POST['DateDebut'];
        $DateFin = $_POST['DateFin'];
        $Duree = $_POST['Duree'];
        $NumClient = $_POST['NumClient'];
        $NumImmatriculation = $_POST['NumImmatriculation'];

        
        $stmt = $conn->prepare("UPDATE contrats SET DateDebut = ?, DateFin = ?, Duree = ?, NumClient = ?, NumImmatriculation = ? WHERE NumContrat = ?");
        if (!$stmt) {
            die("Prepare failed: " . $conn->error);
        }
        
        $stmt->bind_param("sssisi", $DateDebut, $DateFin, $Duree, $NumClient, $NumImmatriculation, $NumContrat);

        if ($stmt->execute() === TRUE) {
            echo "Contract updated successfully!";
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    }

    
    $result = $conn->query("SELECT * FROM contrats WHERE NumContrat = $NumContrat");
    $contract = $result->fetch_assoc();
    if (!$contract) {
        die("No contract found with ID $NumContrat");
    }
?>

<form method="POST">
    <label for="DateDebut">Date Debut:</label>
    <input type="date" name="DateDebut" value="<?= htmlspecialchars($contract['DateDebut']) ?>" required>
    
    <label for="DateFin">Date Fin:</label>
    <input type="date" name="DateFin" value="<?= htmlspecialchars($contract['DateFin']) ?>" required>
    
    <label for="Duree">Duree:</label>
    <input type="number" name="Duree" value="<?= htmlspecialchars($contract['Duree']) ?>" required>
    
    <label for="NumClient">Num Client:</label>
    <input type="number" name="NumClient" value="<?= htmlspecialchars($contract['NumClient']) ?>" required>
    
    <label for="NumImmatriculation">Num Immatriculation:</label>
    <input type="text" name="NumImmatriculation" value="<?= htmlspecialchars($contract['NumImmatriculation']) ?>" required>

    <button type="submit">Update Contract</button>
</form>

<?php
} else {
    echo "No contract ID provided.";
}
?>
