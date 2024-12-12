<?php
include_once "connect.php";
include_once "create.php";
$result = $conn->query("SELECT * FROM clients");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="header">
        <h1>Car Rental Management</h1>
    </header>
    <nav class="navbar">
        <ul>
            <li><a href="#clients">Clients</a></li>
            <li><a href="#cars">Cars</a></li>
            <li><a href="#contracts">Contracts</a></li>
        </ul>
    </nav>
    <main>
        <section id="clients">
            <h2>Clients</h2>
            
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Client ID</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                 

                 while ($row = $result->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?= $row["NumClients"]?></td>
                        <td><?=$row["Nom"] ?></td>
                        <td><?=$row["Adress"] ?></td>
                        <td><?=$row["Tel"] ?></td>
                        <td>
                        <a href="update.php?id=<?=htmlspecialchars($row["NumClients"])?>"><button class="btn-edit">Edit</button></a>
                            <a href="delete.php?id=<?=htmlspecialchars($row["NumClients"])?>"><button class="btn-delete">Delete</button></a>
                        </td>
                    </tr>
                    <?php
                 }
                 ?>
                </tbody>
            </table>
        </section>
    </main>
    <form method ="POST">
    <input type="text" name="nom" placeholder="nom" required>
    <input type="text" name="adress" placeholder="adress" required>
    <input type="text" name="tel" placeholder="tel" required>
    <button type="submit">Add user</button>
</form>

</body>
</html>
