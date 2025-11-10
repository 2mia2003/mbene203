<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/revision 2025/page_css/facturation.css">
    <title>  Document</title>
</head>
<body>
    <form method="POST" action="">
        <fieldset>
            <legend> FACTURATION </legend>
            numero : <input type="number" name="NU"><br><br>
            Designation : <input type="text" name="DS"><br><br>
            Prix Unitaire : <input type="number" name="PU"><br><br>
            Quantite : <input type="number" name="QU"><br><br>
            <input type = "submit" name = "valid" value = "send" >

        </fieldset>
        <div class ="my">
        <?php
         
        $x = $_POST['NU'];
        $y = $_POST['DS'];
        $z = $_POST['PU'];
        $v = $_POST['QU'];
        // ecrir un programme qui calcule le montant total
        $MontantTotal = $z*$v ;
        echo " le montant total est :".$MontantTotal ."<br><br>";
        //deduiction 18% le tva 
        $tva = 0.18*$MontantTotal ;
        echo"le tva est :".$tva ."<br><br>";
        $MTP = $MontantTotal + $tva;
        echo" le montant apres tva : \n $MTP"."<br>";
            //Applique une retenue de 5% sur MT : TTC
        $retenu = 0.05*$MTP;
        echo"la retenu  est : ".$retenu ." <br><br>";
        $ttc = $MontantTotal*(1+0.18);
        echo"le ttc est : \n $ttc ";
        
         
        ?>
</div>


    </form>
</body>
</html>