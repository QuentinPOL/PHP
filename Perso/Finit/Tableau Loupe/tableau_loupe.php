<!DOCTYPE html>

<html>

<!-- Head -->
<head>

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

  <meta name="description" content="Page de travail"/>

  <meta name="keywords" content="NULL">

  <meta name="author" content="DJquinquin"/>

  <title>Tableau Loupe PHP</title>

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

        include("fonctions.php");

        foreach ($tableau as $valeur) {
            echo '<tr>';
                echo "<td>$num_ligne</td>";
                echo "<td>$valeur</td>";
                lrenvoie_IDclient($valeur,$num_ligne);
            echo '</tr>';
            $num_ligne++;
        }

    ?> 
    </table>
</body>

<html>