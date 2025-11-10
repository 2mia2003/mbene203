<?php
include "conn.php";
require "updateE.php";

$Region = $pdo->query("SELECT * FROM Region")->fetchAll();

if(isset($_POST['valid'])){
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $idR = $_POST["region"];
    $Naiss = $_POST["naissance"];
    $lieu = $_POST["lieu"];
    $genre = $_POST["genre"];
    if(!isset($_GET['numE'])){
        $sql = "INSERT INTO Electeur ( nom , prenom , naissance ,lieu , genre , idR) VALUES (?,?,?,?,?,?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$nom , $prenom , $Naiss , $lieu , $genre , $idR]);

    }
    else{
        $numee = $_GET['numE'];
        $stmt = $pdo->prepare("UPDATE Electeur SET nom=? , prenom=? , naissance=? ,lieu=? , genre=? , idR=? WHERE numE=? ");
        $stmt->execute([$nom , $prenom , $Naiss , $lieu , $genre , $idR,$numee]);
    }

    
    echo "Electeur ajoute avec succes " ;
     
}
     

?>
  <!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulaire Électeur</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #fff0f5;
    }

    .form-container {
      background-color: #ffe4ec;
      border-radius: 15px;
      border: 2px solid #ff69b4;
      padding: 30px;
      max-width: 600px;
      margin: 50px auto;
      box-shadow: 0 4px 10px rgba(255, 105, 180, 0.2);
    }

    h3 {
      color: #ff69b4;
      text-align: center;
      margin-bottom: 20px;
    }

    label {
      color: #d63384;
      font-weight: 500;
    }

    .form-control, .form-select {
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

    .text-center {
      text-align: center;
    }
  </style>
</head>
<body style="background-color: #f8f9fa;">
  <div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="form-container">
      <h3>Formulaire Électeur</h3>
      <form action="" method="POST">
        <!-- Lieu -->
        <div class="mb-3">
          <label for="lieu" class="form-label">Lieu</label>
          <input type="text" class="form-control" id="lieu" name="lieu" value="<?php if(isset($getEl)) echo $getEl['lieu']?>" required>
        </div>

        <!-- Nom -->
        <div class="mb-3">
          <label for="nom" class="form-label">Nom</label>
          <input type="text" class="form-control" id="nom" name="nom" value="<?php if(isset($getEl)) echo $getEl['nom']?>" required>
        </div>

        <!-- Prénom -->
        <div class="mb-3">
          <label for="prenom" class="form-label">Prénom</label>
          <input type="text" class="form-control" id="prenom" name="prenom" value="<?php if(isset($getEl)) echo $getEl['prenom']?>" required>
        </div>

        <!-- Date de naissance -->
        <div class="mb-3">
          <label for="naissance" class="form-label">Date de naissance</label>
          <input type="date" class="form-control" id="naissance" name="naissance" value="<?php if(isset($getEl)) echo $getEl['naissance']?>" required>
        </div>

        <!-- Genre -->
        <div class="mb-3">
          <label for="genre" class="form-label">Genre</label>
          <select class="form-select" id="genre" name="genre" required>
            <?php if(isset($getEl)) : ?>
              <option value="<?= $getEl['genre'] ?>"><?= $getEl['genre'] ?></option>
            <?php endif ?>
            <option value="F">F</option>
            <option value="M">M</option>
          </select>
        </div>

        <!-- Région -->
        <div class="mb-4">
          <label for="region" class="form-label">Région</label>
          <select class="form-select" id="region" name="region" required>
            <?php foreach($Region as $Region){ ?>
              <option value="<?= $Region['idR'] ?>"><?= $Region['nom']?></option>
            <?php } ?>
          </select>
        </div>

        <!-- Bouton -->
        <div class="text-center">
          <button type="submit" name="valid" class="btn btn-primary w-100">Envoyer</button>
        </div>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
