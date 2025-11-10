
<?php
require "conn.php";

 if(isset($_GET["numE"])){
    if(!empty($_GET["numE"])){
        $idEl=$_GET["numE"];
        $select=$pdo->prepare ("SELECT * FROM electeur WHERE numE=?"); 
        $select->execute(array ($idEl));
        $getEl=$select->fetch();
        $selectRegionUpdate=$pdo->prepare("SELECT idR, nom FROM region WHERE idR=?");
        $selectRegionUpdate->execute(array ($getEl["idR"]));
        $getRegionUpdate=$selectRegionUpdate->fetchAll();

    }
 }