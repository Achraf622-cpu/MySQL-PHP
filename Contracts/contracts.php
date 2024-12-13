<?php
include_once "../connect.php";
$result = $conn->query("SELECT * FROM contrats");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contrats</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="bg-dark text-white py-3">
        <div class="container">
            <h1 class="text-center">Contrats</h1>
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
                    <li class="nav-item"><a class="nav-link" href="../Clients/clients.php">Clients</a></li>
                    <li class="nav-item"><a class="nav-link" href="../Voiture/cars.php">Voitures</a></li>
                    <li class="nav-item"><a class="nav-link" href="contracts.php">Contrats</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>Liste des Contrats</h2>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addContractModal">Ajouter un Contrat</button>
        </div>
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Date de Début</th>
                    <th>Date de Fin</th>
                    <th>Durée</th>
                    <th>Client</th>
                    <th>Voiture</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?= $row['NumContrat'] ?></td>
                    <td><?=$row['DateDebut'] ?></td>
                    <td><?= $row['DateFin'] ?></td>
                    <td><?= $row['Duree'] ?> jours</td>
                    <td><?= $row['NumClient']?></td>
                    <td><?= $row['NumImmatriculation'] ?></td>
                    <td>
                        <a href="delete_contracts.php?NumContrat=<?= $row['NumContrat'] ?>" class="btn btn-danger btn-sm">Supprimer</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>

    <div class="modal fade" id="addContractModal" tabindex="-1" aria-labelledby="addContractModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addContractModalLabel">Ajouter un Contrat</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="create_contracts.php">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="DateDebut" class="form-label">Date de Début</label>
                            <input type="date" class="form-control" id="DateDebut" name="DateDebut" required>
                        </div>
                        <div class="mb-3">
                            <label for="DateFin" class="form-label">Date de Fin</label>
                            <input type="date" class="form-control" id="DateFin" name="DateFin" required>
                        </div>
                        <div class="mb-3">
                            <label for="NumClient" class="form-label">Client</label>
                            <select class="form-select" id="NumClient" name="NumClient" required>
                                <?php
                                $clients = $conn->query("SELECT NumClients, Nom FROM clients");
                                while ($client = $clients->fetch_assoc()) {
                                    echo "<option value=\"{$client['NumClients']}\">{$client['Nom']}</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="NumImmatriculation" class="form-label">Voiture</label>
                            <select class="form-select" id="NumImmatriculation" name="NumImmatriculation" required>
                                <?php
                                $cars = $conn->query("SELECT NumImmatricule, Modele FROM voitures");
                                while ($car = $cars->fetch_assoc()) {
                                    echo "<option value=\"{$car['NumImmatricule']}\">{$car['Modele']}</option>";
                                }
                                ?>
                            </select>
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
