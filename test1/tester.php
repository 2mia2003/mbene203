<?php
//tableau indexe
$fruits=array("pommes","Banane","orange");
foreach($fruits as $fruits){
   echo "fruit prefere :".$fruits ;

}


//tableau associatif
$personne = array(
    "nom"=>"Aliou",
    "age"=>25,
    "ville"=>"paris"
);
echo"nom :".$personne["nom"]. "<br>";

//tableau multidimensionnel
$etudiants = array(
    array ("nom"=>"aliou","age"=>33),
    array("nom"=>"cheikh","age"=>12)
);
echo"Age de cheikh :".$etudiants[1].["age"];
?>