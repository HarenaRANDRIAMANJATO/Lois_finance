<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap5_3/bootstrap/css/bootstrap.min.css">
    <script src="../assets/bootstrap5_3/bootstrap/js/bootstrap.bundle.min.js"></script>
    <title>Sommaire</title>
</head>
<style>
    :root {
            --primary-color: #3494ac;
        }
        
        .custom-navbar {
            background-color: var(--primary-color);
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
</style>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light custom-navbar">
            <div class="container-fluid">
                <a href="../index.html" class="navbar-brand">
                    <img src="../img/logo.png" alt="..." width="160" height="90">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="../index.html">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="sommaire.php">Sommaire</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Documents</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container d-flex justify-content-around align-items-center flex-wrap mt-5 mb-5 gap-4">
    <div class="card" style="width: 16rem;">
        <img src="../img/perception.avif" class="card-img-top" alt="..." width="200" height="230px">
            <div class="card-body">
                <h5 class="card-title">Perspectives economique</h5>
                <p class="card-text">Contenu de la carte.</p>
                <a href="perspective.php" class="btn btn-primary">Voir +</a>
            </div>
    </div>

    <div class="card" style="width: 16rem;">
        <img src="../img/recette.avif" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Recette</h5>
                <p class="card-text">Contenu de la carte.</p>
                <a href="recette.php" class="btn btn-primary">Voir +</a>
            </div>
    </div>

    <div class="card" style="width: 16rem;">
        <img src="../img/depense.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Depense</h5>
                <p class="card-text">Contenu de la carte.</p>
                <a href="#" class="btn btn-primary">Voir +</a>
            </div>
    </div>

    <div class="card" style="width: 16rem;">
        <img src="../img/buget2.jpg" class="card-img-top" alt="..." width="200" height="259px">
            <div class="card-body">
                <h5 class="card-title">Defit budgetaire</h5>
                <p class="card-text">Contenu de la carte.</p>
                <a href="#" class="btn btn-primary">Voir +</a>
            </div>
    </div>

     <div class="card" style="width: 16rem;">
        <img src="../img/tax.webp" class="card-img-top" alt="..." width="200" height="229px">
            <div class="card-body">
                <h5 class="card-title">Extraits de dispositions fiscales et doanieres</h5>
                <p class="card-text">Contenu de la carte.</p>
                <a href="#" class="btn btn-primary">Voir +</a>
            </div>
    </div>

     <div class="card" style="width: 16rem;" >
        <img src="../img/a.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Acronymes</h5>
                <p class="card-text">Contenu de la carte.</p>
                <a href="#" class="btn btn-primary">Voir +</a>
            </div>
    </div>

     <div class="card" style="width: 16rem;">
        <img src="../img/az.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Glossaire</h5>
                <p class="card-text">Contenu de la carte.</p>
                <a href="#" class="btn btn-primary">Voir +</a>
            </div>
    </div>
    </div>
    
</body>
</html>