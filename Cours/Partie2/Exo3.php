<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Fonctions 3</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
    </head>

    <body>
        <?php
            include("functions.php");

            $tableau = array(15.7,14.5,0.41,6.969,20,0,14,42,667);

            echo "<p>La moyenne du tableau est égale à : ".moyenneTable($tableau)."</p>";
            
        ?>
    </body>
</html>