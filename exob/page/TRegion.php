<?php  require "R3.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Liste des régions</title>
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
  </style>
</head>
<body>

<div class="container mt-5">
  <h2 class="text-center mb-4" style="color: #ff69b4;">Liste des régions</h2>
  <table class="table table-bordered text-center">
    <thead>
      <tr>
        <th>ID</th>
        <th>NOM</th>
        <th>Superficie</th>
        <th colspan="2">Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($getRegion as $tab): ?>
        <tr>
          <td><?= $tab['idR'] ?></td>
          <td><?= $tab['nom'] ?></td>
          <td><?= $tab['superficie'] ?></td>
          <td>
            <a href="region.php?idR=<?= $tab['idR'] ?>">
              <button class="btnedit">
                <i class="fa-solid fa-pen-to-square"></i> Éditer
              </button>
            </a>
          </td>
          <td>
            <a href="deletR.php?idR=<?= $tab['idR'] ?>">
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
