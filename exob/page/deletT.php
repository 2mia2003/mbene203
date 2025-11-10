<?php
require "conn.php";
if(isset($_GET['numE'])){
    $id = $_GET['numE'];
    $mia = $pdo->prepare("DELETE FROM Electeur WHERE numE=?");
    $mia->execute([$id]);

    header("Location: TElecteur.php");
}