<!DOCTYPE html>

<html>

<!-- Head -->
<head>

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

  <meta name="description" content="Page de travail"/>

  <meta name="keywords" content="NULL">

  <meta name="author" content="DJquinquin"/>

  <title>Accueil - Tableau PHP</title>

  <link rel="stylesheet" type="text/css" href="style.css" />


</head>

<body>
    <table>
    <?php

        $tableau = array();

        $num_ligne = 1;

        for ($i = 1;$i <= 20; $i++) {
            $Mavarandom = rand(0, 100);
            $tableau[$i] = "$Mavarandom";
        }
        // print_r($tableau);

        include("fonction.php");

        foreach ($tableau as $valeur) {
            echo ''.couleur_ligne($num_ligne).'';
                echo "<td>$num_ligne</td>";
                echo "<td>$valeur</td>";
            echo '</tr>';
            $num_ligne++;
        }

    ?> 
    </table>
</body>

<html>
