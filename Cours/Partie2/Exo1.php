<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Fonctions 1</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
    </head>

    <body>
        <?php
            include("functions.php");

            echo "<div>";
            echo "<p> Tableau 1 </p>";
            $table1 = array(1,2,3,4,5);
            AfficheTable($table1);
            echo "</div>";

            ///////////////////////

            echo "<div style='position: absolute; bottom: 0px;'>";
            echo "<p> Tableau 2 </p>";
            $table2 = array(6,7,8,9,10);
            AfficheTable($table2);
            echo "</div>";
        ?>
    </body>
</html>