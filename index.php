<?php
include_once "connect.php";
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
                 $sql = "SELECT * FROM clients";
                 $result = $pdo->query($sql);

                 while ($row = $result->fetch()) {
                    ?>
                    <tr>
                        <td><?= htmlspecialchars($row["NumClients"]) ?></td>
                        <td><?= htmlspecialchars($row["Nom"]) ?></td>
                        <td><?= htmlspecialchars($row["Adress"]) ?></td>
                        <td><?= htmlspecialchars($row["Tel"]) ?></td>
                        <td>
                        <a href="modify.php?id=<?=htmlspecialchars($row["NumClients"])?>"><button class="btn-edit">Edit</button></a>
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
</body>
</html>
