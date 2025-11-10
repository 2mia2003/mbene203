<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Formulaire Amélioré</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Ton CSS perso -->
  <style>
    body {
      background-color: #f2f2f2;
    }
    .form-container {
      max-width: 350px;
      margin: 0 auto;
    }
  </style>
</head>
<body>

  <div class="container mt-5">
    <div class="form-container">
      <div class="card shadow p-3">
        <h2 class="mb-3 text-center">Formulaire de contact</h2>
        
        <form>
          <div class="mb-3">
            <label for="nom" class="form-label">Nom complet</label>
            <input type="text" class="form-control" id="nom" placeholder="Entrez votre nom">
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Adresse email</label>
            <input type="email" class="form-control" id="email" placeholder="exemple@mail.com">
          </div>

          <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" rows="4" placeholder="Écrivez votre message ici..."></textarea>
          </div>

          <button type="submit" class="btn btn-primary w-100">Envoyer</button>
        </form>
      </div>
    </div>
  </div>

  <!-- Script Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
