<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Exo 1 PHP</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
    </head>

    <body>
        <?php
        /////////// EXO 1 (Les conditions)

        // Ce programme vise à mettre mettre une div en rouge si le nombre aléatoire est paire et impaire à la mettre en bleu
        $nbAleatoire = rand(0, 100);

        echo "Si mon nombre aléatoire est paire j'affiche du rouge, sinon j'affiche du bleu <br>";
        if ($nbAleatoire % 2 == 1)
        {
            echo '<div style="background-color: blue;">'.$nbAleatoire.' est impair</div>';
        }
        else
        {
            echo '<div style="background-color: red;">'.$nbAleatoire.' est pair</div>';
        }
        ?>

        <h1>Code source EXO 1</h1>
        <img src="capture/exo1.png" alt="Exo 1 PHP">
    </body>
</html>
