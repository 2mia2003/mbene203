<?php require "R2.php" ;
require "updateE.php";

?>


<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Liste des électeurs</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
  <style>
    body {
      background-color: #fff0f5;
    }

    .table thead {
      background-color: #ff69b4;
      color: white;
    }

    .table tbody tr:nth-child(even) {
      background-color: #ffe4ec;
    }

    .table tbody tr:hover {
      background-color: #ffcce5;
    }

    .btnedit {
      background-color: #ffb6c1;
      color: white;
      border: none;
      padding: 5px 10px;
      border-radius: 5px;
    }

    .btnsupp {
      background-color: #ff4d6d;
      color: white;
      border: none;
      padding: 5px 10px;
      border-radius: 5px;
    }

    .btnedit:hover {
      background-color: #ff92b4;
    }

    .btnsupp:hover {
      background-color: #ff1f4c;
    }

    h2 {
      color: #ff69b4;
    }
  </style>
</head>
<body>

<div class="container mt-5">
  <h2 class="text-center mb-4">Liste des électeurs</h2>
  <table class="table table-bordered text-center">
    <thead>
      <tr>
        <th>numE</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Naissance</th>
        <th>Lieu</th>
        <th>Genre</th>
        <th>idR</th>
        <th colspan="2">Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($getelecteur as $tab): ?>
        <tr>
          <td><?= $tab['numE'] ?></td>
          <td><?= $tab['nom'] ?></td>
          <td><?= $tab['prenom'] ?></td>
          <td><?= $tab['naissance'] ?></td>
          <td><?= $tab['lieu'] ?></td>
          <td><?= $tab['genre'] ?></td>
          <td><?= $tab['idR'] ?></td>
          <td>
            <a href="electeur.php?numE=<?= $tab['numE'] ?>">
              <button class="btnedit">
                <i class="fa-solid fa-pen-to-square"></i> Éditer
              </button>
            </a>
          </td>
          <td>
            <a href="deletT.php?numE=<?= $tab['numE'] ?>">
              <button class="btnsupp">
                <i class="fa-solid fa-trash"></i> Supprimer
              </button>
            </a>
          </td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</div>

</body>
</html>
