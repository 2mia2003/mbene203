<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/tomorow/css/agent.css">
    <title>Document</title>
</head>
 
<body>
<header><h1>MA PAGE FORMULAIRE</h1></header>
<form method="POST" name="from"  action="">
    <fieldset>
        <legend> Agent </legend>
     id :   <input type="number" name ="id">
     Nom : <input type="text" name ="nom"><br><br> 
     Prenom :   <input type="text" name ="prenom" >
     Naissance :   <input type="date" name ="naiss"><br><br>
     sexe :  <select name="sexe">
                    <option value="1"> F </option>
                    <option value="2"> M </option>
            </select>
     salaire : <input type="number" name ="salaire"><br><br>
     Codect  : <select name="code">
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
     
                </select><br><br>
     <input type="submit" name ="valid" value ="send">
    </fieldset>
    <?php
    if(isset($_POST['valid'])){
        $a = $_POST['id'];
        $b = $_POST['nom'];
        $c = $_POST['prenom'];
        $d = $_POST['naiss'];
        $e = $_POST['sexe'];
        $f = $_POST['salaire'];
        $g = $_POST['code'];

    }
   
    ?>
    </form>
</body>
</html>