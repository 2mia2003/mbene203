<?php
include "conn.php";
$stmt = $pdo->prepare("SELECT * FROM Region");
    $stmt -> execute();
    $getRegion = $stmt -> fetchAll();
?>
