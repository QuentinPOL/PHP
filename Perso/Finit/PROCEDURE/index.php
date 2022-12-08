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

	<table>
    <?php
      include("page.php");

      $mon_contenu = fopen(lchemin_rep(3)."data.txt", "r");
      $donnees = fgets($mon_contenu,255);
      fclose($mon_contenu);          
      //Affichage du résultat obtenu
      echo'Le fichier contient : '.$donnees;

      for ($i = 1; $i <= 7; $i++) { // Pour I(indice)

        echo '<tr>';
          echo '<td>' .$i. '</td>';
            echo '<td>' .lrenvoie_jour($i). '</td>';
            echo '<td> <img src=' .lchemin_rep(1).lrenvoie_image($i). '></td>';
            lrenvoie_formulaire($i);
        echo '</tr>';
      }
    ?>
  </table>
  <table>
    <?php


      for ($i = 1; $i <= 3; $i++) // Pour I(indice)
      { 

        echo '<tr>';
          echo '<th>Prénom M</th>';
          echo '<td>' .extrait_txt($i).'</td>';
        echo '</tr>';
      }
    ?>
  </table>

</body>

</html>