<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    extract($_POST);
  
    $dateNaissance = new DateTime($naissance);
    $aujourdhui = new DateTime();
    $difference = $dateNaissance->diff($aujourdhui);
    $age = $difference->y;

    echo "<h1>Résultats du formulaire</h1>";
    echo "<p>ID: $id</p>";
    echo "<p>Nom: $nom</p>";
    echo "<p>Prénom: $prenom</p>";
    echo "<p>Date de naissance: $naissance</p>";
    echo "<p>Âge calculé: $age ans</p>";
}
?>