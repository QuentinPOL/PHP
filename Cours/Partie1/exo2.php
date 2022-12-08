<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Exo 2 PHP</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
    </head>

    <body>
        <?php
        /////////// EXO 2.1 (tableaux PHP à indice numérique)

        // (A) et (B)
        $i;
        $tabInt = array(26, 52, 74, 15, 45);
        ?>

        <table border="2px">
            <caption style="border: 2px solid red;">Chiffres du tableau</caption>

        <?php
        for ($i = 0; $i < sizeof($tabInt); $i++)
        {
            echo "<tr><td>Element " .($i+1). " = ".$tabInt[$i]. "</td></tr>";
        }
        ?>
        </table>

        <?php
        /////////// EXO 2.2 (tableaux PHP à indice nommé)

        // (A)
        $tabStr = array("Nom" => "Pollet", "Prénom" => "Quentin", "MDP" => "Test1234");

        echo "<br> Nom = " .$tabStr["Nom"]. ",  Prénom = " .$tabStr["Prénom"]. ", MDP = " .$tabStr["MDP"];
        ?>

        <h1>Code source EXO 2</h1>
        <img src="capture/exo2.png" alt="Exo 2 PHP">
    </body>
</html>