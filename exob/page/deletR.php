<?php
require "conn.php";
if(isset($_GET['idR'])){
    $id=$_GET['idR'];
    $stmt = $pdo->prepare("DELETE FROM Electeur WHERE idR=? ");
    $stmt->execute([$id]);

    $mia = $pdo->prepare("DELETE FROM Region WHERE idR=?");
    $mia->execute([$id]);
    header("Location: TRegion.php");
}
?>