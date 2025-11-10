<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>h
    <h1>MA PAGE FORMULAIRE</h1>
<form method="POST" name="from"  action="">
    <fieldset>
        <legend text-align='center'> Categorie </legend>
        code  :  <input type="number" name="a"><br><br>
        nom  :  <input type="text" name="b" ><br><br>
                <input type="submit" name= "valid" value= "send">
    </fieldset>
    <?php
    if(isset($_POST['valid'])){
        $x = $_POST['a'];
        $y = $_POST['b'];

    }
    
    ?>`
    </form>
</body>
</html>