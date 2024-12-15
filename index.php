<?php
include_once "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental Dashboard</title>
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
        .card {
            border: none;
            border-radius: 10px;
            transition: transform 0.3s;
        }
        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        footer {
            background: #343a40;
            color: white;
        }
    </style>
</head>
<body>

    <header class="py-4">
        <div class="container text-center">
            <h1>Location de Voiture</h1>
            <p class="mb-0">Simplifiez votre location de voitures en quelques clics !</p>
        </div>
    </header>

    
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="index.php">Accueil</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="./Clients/clients.php">Clients</a></li>
                    <li class="nav-item"><a class="nav-link" href="./Voiture/cars.php">Voitures</a></li>
                    <li class="nav-item"><a class="nav-link" href="./Contracts/contracts.php">Contrats</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container my-5">
        <section class="text-center">
            <h2 class="mb-4">Bienvenue sur notre site de location de voitures</h2>
            <p class="lead">Découvrez une expérience simplifiée pour gérer vos clients, voitures et contrats en toute efficacité.</p>
        </section>
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card p-4 text-center">
                    <div class="mb-3">
                        <i class="bi bi-person-fill display-4 text-primary"></i>
                    </div>
                    <h5 class="card-title">Gérer les Clients</h5>
                    <p class="card-text">Accédez à la gestion complète de vos clients en quelques clics.</p>
                    <a href="./Clients/clients.php" class="btn btn-primary">Voir Clients</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 text-center">
                    <div class="mb-3">
                        <i class="bi bi-car-front-fill display-4 text-success"></i>
                    </div>
                    <h5 class="card-title">Gérer les Voitures</h5>
                    <p class="card-text">Ajoutez, supprimez ou modifiez votre parc automobile facilement.</p>
                    <a href="./Voiture/cars.php" class="btn btn-success">Voir Voitures</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 text-center">
                    <div class="mb-3">
                        <i class="bi bi-file-text-fill display-4 text-info"></i>
                    </div>
                    <h5 class="card-title">Gérer les Contrats</h5>
                    <p class="card-text">Organisez et gérez vos contrats avec efficacité.</p>
                    <a href="./Contracts/contracts.php" class="btn btn-info">Voir Contrats</a>
                </div>
            </div>
        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
</body>
</html>
