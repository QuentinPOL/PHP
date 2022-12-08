<!DOCTYPE html>

<html>

<!-- Head -->
<head>

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

  <meta name="description" content="Page de travail"/>

  <meta name="keywords" content="NULL">

  <meta name="author" content="DJquinquin"/>

  <title>Accueil - Page de travail</title>

  <link rel="stylesheet" type="text/css" href="style.css" />


</head>

<body>

	<table> <!-- Début de mon Tableau -->
    <?php
        include("fonction.php"); // Inclure mon fichier PHP avec mes fonctions

        echo '<th> Première Colonne </th>'; // Titre Colonne 1
        echo '<th> Deuxième Colonne </th>'; // Titre Colonne 2
        echo '<th> Troisième Colonne </th>'; // Titre Colonne 3

        //Boucle de 1 à 7
        for ($i = 1; $i <= 7; $i++) {  

            // Début des colonnes de mon tableau
            echo '<tr>'; 
            echo '<td>' .$i. '</td>'; // 7 Colonnes
            // Jour Semaine Param mon indice
            echo '<td>' .frenvoie_jour($i). '</td>'; 
            // Parcour du fichier avec fopen()
            echo '<td>' .fRenvoiPrenom(). '</td>'; 
            echo '</tr>';
            // Fin des colonnes de mon tableau
        }
    ?>
  </table> <!-- Fin de mon Tableau -->
</body>

</html>