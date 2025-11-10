<?php
require "conn.php";

 if(isset($_GET["idR"])){
    if(!empty($_GET["idR"])){
        $idR=$_GET["idR"];
        $select=$pdo->prepare ("SELECT * FROM region WHERE idR=?"); 
        $select->execute(array ($idR));
        $getEl=$select->fetch();
         
    }
 }
  