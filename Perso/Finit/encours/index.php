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
      include("fonction.php");

      echo '<th>Num Début</th>';
      echo '<th>Nb Carac</th>';

      for ($i = 1; $i <= 3; $i++) // Pour I(indice)
      {
        echo '<tr>';
        echo '<td>1</td>';
        echo '<td>4</td>';
        echo '<td>' ..'</td>';
        echo '</tr>';
      }
    ?>
  </table>

</body>

</html>