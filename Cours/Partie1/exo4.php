<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Exo 4 PHP</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
    </head>

    <body>
        <?php
        /////////// EXO 4 (Les Opérateurs)

        // Ce programme vise à savoir les solutions d'une équation de type : ax² + bx + c
        $a = 5; $b = 3; $c = -2;
        $delta = pow($b, 2) - (4*$a*$c);
        $x0 = -$b/(2*$a); $x1 = (-$b+sqrt($delta))/(2*$a); $x2 = (-$b-sqrt($delta))/(2*$a);

        echo "<br>Savoir si une équation ax² + bx + c  à une ou plusieurs solutions<br>";
        if ($delta > 0)
        {
            echo "L'équation admet deux solutions qui sont x1 = ".$x1." et x2 = ".$x2;
        }
        elseif ($delta == 0)
        {
            echo "L'équation admet une solution qui est x0 = ".$x0;
        }
        elseif ($delta < 0)
        {
            echo "L'équation n'admet aucune solution";
        }
        ?>

        <h1>Code source EXO 4</h1>
        <img src="capture/exo4.png" alt="Exo 4 PHP">
    </body>
</html>
