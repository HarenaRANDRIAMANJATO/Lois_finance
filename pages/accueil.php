<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Budget des Citoyens 2025 - Avant-propos</title>
    <link rel="stylesheet" href="../assets/bootstrap5_3/bootstrap/css/bootstrap.min.css">
    <script src="../assets/bootstrap5_3/bootstrap/js/bootstrap.bundle.min.js"></script>
    <style>
        :root {
            --primary-color: #3494ac;
            --secondary-color: #417794;
            --light-bg: #f8f9fa;
        }
        
        .custom-navbar {
            background-color: var(--primary-color);
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        .page-title {
            color: var(--secondary-color);
            font-weight: 700;
            margin: 32px 24px;
            border-bottom: 2px solid var(--secondary-color);
            padding-bottom: 16px;
        }
        
        .content-section {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            padding: 32px;
            margin-bottom: 32px;
        }
        
        .signature-section {
            text-align: right;
            margin-top: 32px;
            padding-top: 16px;
            border-top: 1px solid #e9ecef;
        }
        
        .footer {
            background-color: var(--primary-color);
            color: white;
            padding: 24px 0;
            margin-top: 48px;
        }
        
        .footer-links a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }
        
        .footer-links a:hover {
            text-decoration: underline;
        }
        
        .back-to-home {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            margin-bottom: 1rem;
        }
        
        .back-to-home:hover {
            text-decoration: underline;
        }
        
        @media (max-width: 768px) {
            .content-section {
                padding: 1.5rem;
            }
            
            .page-title {
                font-size: 1.75rem;
            }
        }
    </style>
</head>
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
    
    <main class="container my-4">
        
    
        <h1 class="page-title">Avant-propos</h1>
        
        <div class="content-section">
            <p class="lead">Le Ministère de l'Économie et des Finances présente le <strong>Budget des Citoyens 2025</strong>, une version simplifiée et facilement accessible de la Loi de Finances.</p>
            
            <p>Ce document a été conçu pour permettre à tous les citoyens de comprendre les grandes orientations budgétaires de l'État.</p>
            
            <p>Avec un langage clair et des explications simples, le Budget des Citoyens reflète l'engagement du gouvernement à promouvoir la transparence et à rapprocher les citoyens de la gestion des finances publiques. Il met en lumière les priorités économiques et sociales définies pour 2025 et de passage, met en exergue comment les ressources publiques sont utilisées pour répondre aux besoins de la population.</p>
            
            <p>Au fil des années, des efforts constants ont permis d'améliorer ce document, notamment en simplifiant les termes complexes et en présentant les informations essentielles comme les grandes catégories de dépenses de manière compréhensible pour tous.</p>
            
            <p>Disponible en malagasy et en français, ce Budget des Citoyens sera diffusé largement sur les plateformes numériques et dans des espaces publics dans tout Madagascar. Ainsi, tout un chacun est sollicité de partager ce Budget des citoyens afin d'atteindre la finalité qui est la transparence budgétaire.</p>
            
            <div class="signature-section">
                <img src="../img/singature.png" alt="Signature" width="230" height="150">
            </div>
        </div>
    </main>
    
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>Ministère de l'Économie et des Finances</h5>
                    <p>Budget des Citoyens 2025</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <div class="footer-links">
                        <a href="#">Mentions légales</a>
                        <a href="#">Politique de confidentialité</a>
                        <a href="#">Contact</a>
                    </div>
                    <p class="mt-2">© 2025 Ministère de l'Économie et des Finances de Madagascar</p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>