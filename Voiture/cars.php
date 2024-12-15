<?php
include_once "../connect.php";
include_once "create_cars.php";
$result = $conn->query("SELECT * FROM voitures");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voitures</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        header {
            background: linear-gradient(45deg, #007bff, #6610f2);
            color: white;
        }
        nav .nav-link {
            font-weight: 500;
            transition: color 0.3s;
        }
        nav .nav-link:hover {
            color: #f8f9fa;
        }
        table thead {
            background: #6610f2;
            color: white;
        }
        table tbody tr:hover {
            background: rgba(0, 123, 255, 0.1);
        }
        .btn-sm {
            font-size: 0.875rem;
        }
        .modal-content {
            border-radius: 10px;
        }
        .btn-primary {
            background: linear-gradient(45deg, #007bff, #6610f2);
            border: none;
        }
        .btn-primary:hover {
            background: linear-gradient(45deg, #6610f2, #007bff);
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="py-4">
        <div class="container text-center">
            <h1>Gestion des Voitures</h1>
        </div>
    </header>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="../index.php">Accueil</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="../Clients/clients.php">Clients</a></li>
                    <li class="nav-item"><a class="nav-link" href="cars.php">Voitures</a></li>
                    <li class="nav-item"><a class="nav-link" href="../Contracts/contracts.php">Contrats</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <main class="container my-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>Liste des Voitures</h2>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCarModal">Ajouter une Voiture</button>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Numéro Immatricule</th>
                    <th>Marque</th>
                    <th>Modèle</th>
                    <th>Année</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?= $row['NumImmatricule'] ?></td>
                    <td><?= $row['Marque'] ?></td>
                    <td><?= $row['Modele'] ?></td>
                    <td><?= $row['Annee'] ?></td>
                    <td>
                        <a href="update_cars.php?NumImmatricule=<?= $row['NumImmatricule'] ?>" class="btn btn-warning btn-sm">Modifier</a>
                        <a href="delete_car.php?NumImmatricule=<?= $row['NumImmatricule'] ?>" class="btn btn-danger btn-sm">Supprimer</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>

    <div class="modal fade" id="addCarModal" tabindex="-1" aria-labelledby="addCarModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addCarModalLabel">Ajouter une Voiture</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="create_cars.php">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="numImmatricule" class="form-label">Numéro Immatricule</label>
                            <input type="text" class="form-control" id="numImmatricule" name="NumImmatricule" required>
                        </div>
                        <div class="mb-3">
                            <label for="marque" class="form-label">Marque</label>
                            <input type="text" class="form-control" id="marque" name="Marque" required>
                        </div>
                        <div class="mb-3">
                            <label for="modele" class="form-label">Modèle</label>
                            <input type="text" class="form-control" id="modele" name="Modele" required>
                        </div>
                        <div class="mb-3">
                            <label for="annee" class="form-label">Année</label>
                            <input type="number" class="form-control" id="annee" name="Annee" required>
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
