

<?php
require " conn.php";  




if(isset($_POST['valid'])){
  $nomU =$_POST['login'];
  $Mpass = $_POST['password'];

  $stmt =$pdo->prepare("SELECT login , Mpass FROM  utilisateur WHERE Mpass= ? and login=  ?");
  $stmt->execute( array($nomU,$Mpass));
  $tab = $stmt->fetch();

  if($tab){
    header("location: acceuille.php");
  }else{
    $mess="Mpass ou nomU incorrecte";
  }
 
  

 
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Connexion</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #fff0f5;
    }

    .login-form {
      max-width: 400px;
      margin: 60px auto;
      background-color: #ffe4ec;
      padding: 30px;
      border-radius: 15px;
      border: 2px solid #ff69b4;
      box-shadow: 0 4px 10px rgba(255, 105, 180, 0.2);
    }

    .login-form h2 {
      color: #ff69b4;
      text-align: center;
      margin-bottom: 20px;
    }

    label {
      color: #d63384;
      font-weight: 500;
    }

    .form-control {
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
  <div class="login-form">
  <h5 style= "color:red"><?php if(isset($mess)) echo $mess?></h5>
    <h2>Connexion</h2>

    <form method="POST">
       
      <div class="mb-3">
        <label for="login" class="form-label">Nom d'utilisateur</label>
        <input type="text" class="form-control" id="login" name="login" placeholder="Entrez votre login" required>
      </div>

      <!-- Mot de passe -->
      <div class="mb-3">
        <label for="password" class="form-label">Mot de passe</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Entrez votre mot de passe" required>
      </div>

      <!-- Bouton -->
      <div class="d-grid">
        <button type="submit" name="valid" class="btn btn-primary">Se connecter</button>
      </div>
      <p>Aviez vous deja un compte ?<a href=" inscription.php">inscrire d'abord </a></p>
    </form>
  </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
