<?php
$etudiants = [
    ["nom"=>"lamina", "prenom"=> "aidara","age"=> 21,"filiere"=>"gestion"],
    ["nom"=>"satou","prenom"=>"thiam","age"=>22 , "filiere"=>"management"], 
    ["nom"=>"Elage","prenom"=>"Sokhna","age"=>25 , "filiere"=>"informatique"],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        table{
            width: 50%;
            border-collapse :collapse;
            margin :20px;
        }
        th ,td {
            border : 1px solid black;
            padding : 10px;
            text-align : center;
        }
    </style>
</head>
<body>
   
        <h2 style="text-align : center;">Liste des Etudiants</h2>
        <table>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Age</th>
                <th>Filiere</th>
            </tr>
        <?php foreach($etudiants as $etudiants) { ?>
            <tr>
                <td><?php echo $etudiants["nom"];  ?></td>
                <td><?php echo $etudiants["prenom"]; ?></td>
                <td><?php echo $etudiants["age"]; ?></td>
                <td><?php echo $etudiants["filiere"]; ?></td>
            </tr>


       <?php } ?>
       <h2 style ="text-align : center "> le dernier element du tableau </h2>

    
    </table>
</body>
</html>