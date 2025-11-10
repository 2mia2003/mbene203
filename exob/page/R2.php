<?php
include "conn.php";
$stmt = $pdo->prepare("SELECT * FROM Electeur");
    $stmt -> execute();
    $getelecteur = $stmt -> fetchAll();
?>