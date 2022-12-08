<!DOCTYPE html>

<html>

<!-- Head -->
<head>

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

  <meta name="description" content="Page d'affichage"/>

  <meta name="keywords" content="NULL">

  <meta name="author" content="DJquinquin"/>

  <title>Accueil - Page d'affichage</title>

  <link rel="stylesheet" type="text/css" href="style.css" />


</head>

<body>
    <?php
        $monIDclient = $_POST['IDclient']; // Mon rand en post
        echo $monIDclient.' -> '; // J'affiche mon rand
        echo '<progress min="0" max="100" value="'.$monIDclient.'"></progress>'; // Jauge en % de mon rand
        
        $monNumLigne = $_POST['Numligne']; // Mon numero de ligne en post

        if ($monNumLigne%2 == 0){ // si pair alors afficher euro(€)
          echo "€";
        }
        else { // sinon afficher dollards ($)
          echo "$";
        }
    ?>
</body>

</html>