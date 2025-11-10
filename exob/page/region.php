<?php
    include "conn.php";
    require "updateR.php";

    if(isset($_POST['valid'])){
    $nom = $_POST["nom"];
    $superficie = $_POST["superficie"];
    if(!isset($_GET['idR'])){
    $sql ="INSERT INTO Region (nom , superficie) VALUES (:nom ,:superficie)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':nom'=> $nom,
        ':superficie' => $superficie
        ]);
    echo"region ajoutee avec succes";
    } else {
        $nomee = $_GET["idR"];
        $stmt = $pdo->prepare("UPDATE Region SET nom = ? , superficie= ? WHERE  idR= ? ");
        $stmt->execute([$nom , $superficie,$nomee]);
    
        }
        
        
        header("Location: TRegion.php");
    }  
    
    ?>
  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Formulaire Région</title>
  <style>
    body {
      background-color: #fff0f5;
    }

    fieldset {
      background-color: #ffe4ec;
      border-radius: 15px;
      border: 2px solid #ff69b4;
      padding: 30px;
      max-width: 500px;
      margin: 50px auto;
      box-shadow: 0 4px 10px rgba(255, 105, 180, 0.2);
    }

    h2 {
      color: #ff69b4;
      text-align: center;
      margin-bottom: 20px;
    }

    input[type="text"],
    input[type="number"] {
      border-radius: 10px;
      border: 1px solid #ff69b4;
      padding: 10px;
      width: 100%;
    }

    .btn-girly {
      background-color: #ff69b4;
      color: white;
      border: none;
      border-radius: 10px;
      padding: 10px 25px;
    }

    .btn-girly:hover {
      background-color: #ff1493;
    }

    label {
      color: #d63384;
      font-weight: 500;
    }
  </style>
</head>
<body>
  <form action="" method="POST">
    <fieldset>
      <h2>Region</h2>
      
      <label for="nom">NOM :</label>
      <input type="text" id="nom" name="nom" value="<?php if(isset($getEl)) echo $getEl['nom'] ?>" required><br><br>
      
      <label for="superficie">Superficie :</label>
      <input type="number" id="superficie" name="superficie" value="<?php if(isset($getEl)) echo $getEl['superficie'] ?>" required><br><br>
      
      <div class="text-center">
        <input type="submit" name="valid" value="Envoyer" class="btn btn-girly">
      </div>
    </fieldset>
  </form>
</body>
</html>
