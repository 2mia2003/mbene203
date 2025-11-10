<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    extract($_POST);
  
    $dateNaissance = new DateTime($naissance);
    $aujourdhui = new DateTime();
    $difference = $dateNaissance->diff($aujourdhui);
    $age = $difference->y;
    $Ipress = $SB * 0.03;
    $CSS = $SB * 0.04;
    $retennue = $SB * 0.02;
    if($age>40){
        $Prime =  25000;
    } else {
        $Prime =  1500;
    };
    $Salaire_Net = ( ( $SB + $Prime ) - ( $Ipress + $retennue + $CSS) );


    echo "<h1> BULLETIN </h1>";
    echo "<p>Nom: $nom</p>";
    echo "<p>Prénom: $prenom</p>";
    echo "<p>Date de naissance: $naissance</p>";
    echo "<p>Âge calculé: $age ans</p>";
    echo "<p>Fonction: $fction </p>";
    echo "<p>SalaireBrute: $SB </p>";
    echo "<p>Caisse de securite social: $CSS </p>";
    echo "<p>Ipress: $Ipress </p>";
    echo "<p> la Retenue : $retennue </p>";
    echo "<p> la Prime : $Prime </p>";
    echo "<p> Salaire Net : $Salaire_Net </p>";




    

    

}

?>