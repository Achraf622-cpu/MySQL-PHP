<?php
include_once "../connect.php";
include_once "create.php";
$result = $conn->query("SELECT * FROM clients");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clients</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="bg-dark text-white py-3">
        <div class="container">
            <h1 class="text-center">Clients</h1>
        </div>
    </header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="../index.php">Accueil</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="clients.php">Clients</a></li>
                    <li class="nav-item"><a class="nav-link" href="../Voiture/cars.php">Voitures</a></li>
                    <li class="nav-item"><a class="nav-link" href="../Contracts/contracts.php">Contrats</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>Liste des Clients</h2>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addClientModal">Ajouter un Client</button>
        </div>
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Adresse</th>
                    <th>Téléphone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?= htmlspecialchars($row['NumClients']) ?></td>
                    <td><?= htmlspecialchars($row['Nom']) ?></td>
                    <td><?= htmlspecialchars($row['Adress']) ?></td>
                    <td><?= htmlspecialchars($row['Tel']) ?></td>
                    <td>
                        <a href="update.php?NumClients=<?= htmlspecialchars($row['NumClients']) ?>" class="btn btn-warning btn-sm">Modifier</a>
                        <a href="delete.php?NumClients=<?= htmlspecialchars($row['NumClients']) ?>" class="btn btn-danger btn-sm">Supprimer</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>

    <div class="modal fade" id="addClientModal" tabindex="-1" aria-labelledby="addClientModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addClientModalLabel">Ajouter un Client</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="create.php">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="nom" name="Nom" required>
                        </div>
                        <div class="mb-3">
                            <label for="adress" class="form-label">Adresse</label>
                            <input type="text" class="form-control" id="adress" name="Adress" required>
                        </div>
                        <div class="mb-3">
                            <label for="tel" class="form-label">Téléphone</label>
                            <input type="text" class="form-control" id="tel" name="Tel" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
