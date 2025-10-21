<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap5_3/bootstrap/css/bootstrap.min.css">
    <script src="../assets/bootstrap5_3/bootstrap/js/bootstrap.bundle.min.js"></script>
    <title>Perspective</title>
</head>
<style>
    :root {
            --primary-color: #3494ac;
        }
        
    .para{
        color: #0aca2aff;
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
    
    <main>
    <p>En 2025, l’économie malgache devrait connaître une croissance de 5,0%, soutenue par des performances solides dans plusieurs secteurs stratégiques :</p>
    <p class="para">L’agriculture :</p><p> une augmentation estimée de 9,5%, portée par la production de riz amélioré, qui permettra un rendement de plus de 8 tonnes par hectare.</p>
    <p class="para">L’industrie extractive :</p><p> une croissance de 4,0%, en raison de la demande accrue liée aux énergies renouvelables et à la production de batteries pour véhicules électriques.</p>
    <p class="para">Secteur tertiaire :</p><p>  une crois- sance de 5,4%, avec des initiatives visant à attirer davantage de touristes et à développer les infrastructures numériques. Pour assurer une qualité des services publics efficace et pérenne, l’État envisage en 2025 d’amé- nager 6 650 postes budgétaires (dont 2 150 à recruter par voie de concours).</p>

    <p>Les grands agrégats macroéconomiques sont présentés dans le tableau ci-après :</p>

    <a  href="../traitement/tr_tab1.php" ><p class="text-center">Prévisions macroéconomiques</p></a>
    
    <a href="../traitement/tr_tab2.php"><p class="text-center">Taux de croissance sectorielle</p></a>
</main>
</body>
</html>