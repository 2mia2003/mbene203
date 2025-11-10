<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Page d'Index</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .hero-section {
      background: #f8f9fa;
      padding: 100px 0;
      text-align: center;
      border-bottom: 2px solid #ddd;
    }

    .hero-section h1 {
      color: #ff69b4;
    }

    .card-custom {
      border: 1px solid #ff69b4;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .card-custom:hover {
      background-color: #ffe4ec;
    }
  </style>
</head>
<body>

  <!-- Hero Section -->
  <section class="hero-section">
    <div class="container">
      <h1>Bienvenue sur notre site</h1>
      <p>Explorez nos services et apprenez-en plus sur ce que nous avons à offrir.</p>
      <a href="#services" class="btn btn-primary">Découvrir nos services</a>
    </div>
  </section>

  <!-- Services Section -->
  <section id="services" class="py-5">
    <div class="container">
      <h2 class="text-center mb-4">Nos Services</h2>
      <div class="row">
        <!-- Service 1 -->
        <div class="col-md-4 mb-4">
          <div class="card card-custom">
            <h5 class="card-title">Service 1</h5>
            <p class="card-text">Description du service 1. Nous vous offrons une expérience unique avec ce service.</p>
            <a href="#" class="btn btn-outline-primary">En savoir plus</a>
          </div>
        </div>
        <!-- Service 2 -->
        <div class="col-md-4 mb-4">
          <div class="card card-custom">
            <h5 class="card-title">Service 2</h5>
            <p class="card-text">Description du service 2. Une solution parfaite pour vos besoins spécifiques.</p>
            <a href="#" class="btn btn-outline-primary">En savoir plus</a>
          </div>
        </div>
        <!-- Service 3 -->
        <div class="col-md-4 mb-4">
          <div class="card card-custom">
            <h5 class="card-title">Service 3</h5>
            <p class="card-text">Description du service 3. Obtenez des résultats incroyables grâce à notre expertise.</p>
            <a href="#" class="btn btn-outline-primary">En savoir plus</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-light py-4">
    <div class="container text-center">
      <p>&copy; 2025 MonSite - Tous droits réservés</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
