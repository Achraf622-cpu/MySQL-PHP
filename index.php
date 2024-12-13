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
</head>
<body>
    <header class="bg-dark text-white py-3">
        <div class="container">
            <h1 class="text-center">Location de Voiture</h1>
            <p class="text-center">Simplifiez votre location de voitures en quelques clics !</p>
        </div>
    </header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="index.php">Accueil</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapsgite navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="./Clients/clients.php">Clients</a></li>
                    <li class="nav-item"><a class="nav-link" href="./Voiture/cars.php">Voitures</a></li>
                    <li class="nav-item"><a class="nav-link" href="./Contracts/contracts.php">Contrats</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="container mt-5">
        <section class="text-center">
            <h2 class="mb-4">Bienvenue sur notre site de location de voitures</h2>
            <p class="lead">Découvrez une expérience simplifiée pour gérer vos clients, voitures et contrats en toute efficacité.</p>
            <a href="./Clients/clients.php" class="btn btn-primary btn-lg mx-2">Gérer les Clients</a>
            <a href="./Voiture/cars.php" class="btn btn-success btn-lg mx-2">Gérer les Voitures</a>
            <a href="./Contracts/contracts.php" class="btn btn-info btn-lg mx-2">Gérer les Contrats</a>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
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
</head>
<body>
    <header class="bg-dark text-white py-3">
        <div class="container">
            <h1 class="text-center">Location de Voiture</h1>
            <p class="text-center">Simplifiez votre location de voitures en quelques clics !</p>
        </div>
    </header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="index.php">Accueil</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapsgite navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="./Clients/clients.php">Clients</a></li>
                    <li class="nav-item"><a class="nav-link" href="./Voiture/cars.php">Voitures</a></li>
                    <li class="nav-item"><a class="nav-link" href="./Contracts/contracts.php">Contrats</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="container mt-5">
        <section class="text-center">
            <h2 class="mb-4">Bienvenue sur notre site de location de voitures</h2>
            <p class="lead">Découvrez une expérience simplifiée pour gérer vos clients, voitures et contrats en toute efficacité.</p>
            <a href="./Clients/clients.php" class="btn btn-primary btn-lg mx-2">Gérer les Clients</a>
            <a href="./Voiture/cars.php" class="btn btn-success btn-lg mx-2">Gérer les Voitures</a>
            <a href="./Contracts/contracts.php" class="btn btn-info btn-lg mx-2">Gérer les Contrats</a>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
