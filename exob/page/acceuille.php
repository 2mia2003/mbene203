<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'Accueil Girly</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f0f5;
            color: #d63d6e;
        }

        .hero-section {
            background-color: #f4a7b9;
            color: white;
            padding: 100px 0;
            text-align: center;
            border-bottom: 3px solid #f7b3d5;
        }

        .hero-section h1 {
            font-size: 3rem;
            font-weight: bold;
        }

        .btn-primary {
            background-color: #d63d6e;
            border-color: #d63d6e;
        }

        .btn-primary:hover {
            background-color: #f4a7b9;
            border-color: #f4a7b9;
        }

        .content-section {
            padding: 50px 0;
            background-color: #f8f2f9;
        }

        footer {
            background-color: #d63d6e;
            color: white;
            text-align: center;
            padding: 20px 0;
        }

        .navbar-light .navbar-nav .nav-link {
            color: #d63d6e;
        }

        .navbar-light .navbar-nav .nav-link:hover {
            color: #f4a7b9;
        }
    </style>
</head>

<body>

    <div class="d-flex flex-column min-vh-100">
        <!-- En-tête Hero -->
        <header class="hero-section">
            <h1>Bienvenue sur notre site girly</h1>
            <p>Un endroit magique et rempli de douceur, explorez nos services et plus encore !</p>
            <a href="#content" class="btn btn-light">Explorer nos services</a>
        </header>

        <!-- Barre de navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Mes Pages Girly</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#">Accueil</a></li>
                        <li class="nav-item"><a class="nav-link" href="?page=region">Region</a></li>
                        <li class="nav-item"><a class="nav-link" href="?page=electeur">Electeur</a></li>
                        <!-- Menu déroulant pour les tables -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Tables
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="?page=TRegion">Table Region</a></li>
                                <li><a class="dropdown-item" href="?page=TElecteur">Table Electeur</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Section principale avec contenu -->
        <main class="container my-5" id="content">
            <?php
                // Vérifie la page à inclure en fonction du paramètre GET 'page'
                $page = isset($_GET['page']) ? $_GET['page'] : 'home'; // Page par défaut

                // Affiche le contenu de la page sélectionnée
                switch ($page) {
                    case 'region':
                        include('region.php');
                        break;
                    case 'electeur':
                        include('electeur.php');
                        break;
                    case 'TRegion':
                        include('TRegion.php');
                        break;
                    case 'TElecteur':
                        include('TElecteur.php');
                        break;
                    default:
                        echo "<h2>Accueil</h2><p>Bienvenue dans notre site girly. Explorez nos services et découvrez ce que nous avons à offrir.</p>";
                }
            ?>
        </main>

        <!-- Pied de page -->
        <footer>
            <p>&copy; 2025 MonSite Girly - Tous droits réservés.</p>
        </footer>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
