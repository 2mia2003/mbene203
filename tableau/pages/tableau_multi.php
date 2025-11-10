<?php
// Création du tableau multidimensionnel
$donnees = [
    'etudiants' => [
        ['matricule' => 'ET001', 'nom' => 'Dupont', 'prenom' => 'Jean', 'sexe' => 'M'],
        ['matricule' => 'ET002', 'nom' => 'Martin', 'prenom' => 'Marie', 'sexe' => 'F'],
        ['matricule' => 'ET003', 'nom' => 'Bernard', 'prenom' => 'Luc', 'sexe' => 'M']
    ],
    'fichiers' => [
        ['codef' => 'F001', 'nomf' => 'Informatique'],
        ['codef' => 'F002', 'nomf' => 'Mathématiques']
    ],
    'departements' => [
        ['numd' => 'D001', 'nomd' => 'Sciences'],
        ['numd' => 'D002', 'nomd' => 'Lettres']
    ]
];

// 1) Parcourir le tableau multidimensionnel
foreach ($donnees as $categorie => $elements) {
    echo "<h2>$categorie</h2>"; // Affiche le nom de la catégorie (étudiants, fichiers, départements)
    echo "<ul>";
    foreach ($elements as $element) {
        echo "<li>";
        foreach ($element as $cle => $valeur) {
            echo "$cle : $valeur, ";
        }
        echo "</li>";
    }
    echo "</ul>";
}


echo "<h2>Affichage HTML des données</h2>";
echo "<table border='1'>";
echo "<tr><th>Catégorie</th><th>Détails</th></tr>";
foreach ($donnees as $categorie => $elements) {
    echo "<tr><td>$categorie</td><td>";
    echo "<ul>";
    foreach ($elements as $element) {
        echo "<li>";
        foreach ($element as $cle => $valeur) {
            echo "$cle : $valeur, ";
        }
        echo "</li>";
    }
    echo "</ul>";
    echo "</td></tr>";
}
echo "</table>";

// 3) Compter le nombre total d'éléments dans le tableau
$totalElements = 0;
foreach ($donnees as $categorie => $elements) {
    $totalElements += count($elements);
}
echo "<h2>Nombre total d'éléments : $totalElements</h2>";
?>
