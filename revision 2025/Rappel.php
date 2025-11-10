 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <form method="POST" name="from"  action="">
        <fieldset>
          A  :  <input type="number" name="a"<?= $_POST['a']?>> <br>
          B  :  <input type="number" name="b"<?= $_POST['b']?>> <br>
          C  :  <input type="number" name="c"<?= $_POST['c']?>> <br>
                <input type="submit" name= "valid" value= "send">
        </fieldset>

        <?php
        
        $x = $_POST['a'];
        $y = $_POST['b'];
        $z = $_POST['c'];
        // $deux = 2;
        //$quatre = 4;
         if($x===0){
            echo" C PAS EQUATION DU SD :  ";

         } else{
            $delta = pow($y,2)-(4* $x* $z);
            echo" delta est :".$delta;
        
         if($delta > 0){

            $racinedelta = sqrt($delta);

            echo" la racine de delta est : ".$racinedelta;
         }else{
            echo"Delta est negative ";
        }
    }
         
        ?>
    </form>
 </body>
 </html>