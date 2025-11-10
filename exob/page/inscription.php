<?php
require "conn.php";

if(isset($_POST['valid'])){
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $fonction = $_POST["fonction"];
    $login = $_POST["login"];
    $Naiss = $_POST["naissance"];
    $genre = $_POST["sexe"];
    $Mpass =$_POST['password'];
    if(!isset($_GET['id'])){
        $sql = "INSERT INTO utilisateur ( nom , prenom ,naissance ,sexe ,fonction ,Mpass , login ) VALUES (?,?,?,?,?,?,?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$nom , $prenom , $Naiss , $genre , $fonction , $Mpass ,$login]);

    }
    header("location: login.php") ;
}
?>
  <!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Formulaire d'inscription</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #fff0f5;
    }

    .formulaire {
      max-width: 500px;
      margin: 50px auto;
      background-color: #ffe4ec;
      padding: 30px;
      border-radius: 15px;
      border: 2px solid #ff69b4;
      box-shadow: 0 4px 10px rgba(255, 105, 180, 0.2);
    }

    .formulaire h2 {
      color: #ff69b4;
      text-align: center;
      margin-bottom: 20px;
    }

    label {
      color: #d63384;
      font-weight: 500;
    }

    .form-control, .form-check-input {
      border-radius: 10px;
      border: 1px solid #ff69b4;
      padding: 10px;
    }

    .btn-primary {
      background-color: #ff69b4;
      color: white;
      border: none;
      border-radius: 10px;
      padding: 10px 25px;
    }

    .btn-primary:hover {
      background-color: #ff1493;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="formulaire">
    <h2>Formulaire d'inscription</h2>
    <form method="POST">
      <!-- Nom -->
      <div class="mb-3">
        <label for="nom" class="form-label">Nom</label>
        <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrez votre nom" required>
      </div>

      <!-- Prénom -->
      <div class="mb-3">
        <label for="prenom" class="form-label">Prénom</label>
        <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Entrez votre prénom" required>
      </div>

      <!-- Date de naissance -->
      <div class="mb-3">
        <label for="naissance" class="form-label">Date de naissance</label>
        <input type="date" class="form-control" id="naissance" name="naissance" required>
      </div>

      <!-- Sexe -->
      <div class="mb-3">
        <label class="form-label">Sexe</label><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="sexe" id="homme" value="Homme" required>
          <label class="form-check-label" for="homme">Homme</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="sexe" id="femme" value="Femme" required>
          <label class="form-check-label" for="femme">Femme</label>
        </div>
      </div>

      <!-- Fonction -->
      <div class="mb-3">
        <label for="fonction" class="form-label">Fonction</label>
        <input type="text" class="form-control" id="fonction" name="fonction" placeholder="Ex: Développeur, Étudiant..." required>
      </div>

      <!-- Login -->
      <div class="mb-3">
        <label for="login" class="form-label">Nom d'utilisateur (login)</label>
        <input type="text" class="form-control" id="login" name="login" placeholder="Entrez un identifiant" required>
      </div>

      <!-- Mot de passe -->
      <div class="mb-3">
        <label for="password" class="form-label">Mot de passe</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe sécurisé" required>
      </div>

      <!-- Bouton -->
      <div class="d-grid">
        <button type="submit" class="btn btn-primary" name="valid">S'inscrire</button>
      </div>
    </form>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
