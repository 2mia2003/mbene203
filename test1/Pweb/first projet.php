<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form methode="post" name="from" action="">
    <fieldset legende>
         a : <input type="number" name="a" <?= $_GET['a']?>><br><br>          
         b : <input type="number" name="b" <?= $_GET['b']?>><br><br>
             <input type="submit" name="valid" value="send">
    </fieldset>

   </form> 
   <?php
    $X =  $_GET['a'];  
    $Y =  $_GET['b'];
    $result = $X+$Y ;
    echo"la somme est :".$result ;


   ?>
</body>
</html>