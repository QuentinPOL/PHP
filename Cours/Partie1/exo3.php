<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Exo 3 PHP</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
    </head>

    <body>

        <table border="2px">
            <caption>Tableau à double entrée</caption>
        <?php
        /////////// EXO 3 (tableaux PHP à Double entrée)

        // (A)
        $i; $j;
        $users = array(
        0 => array('nom' => 'Pollet', 'prenom' => 'Quentin' , 'motDePass' => 'PolletQuentin' ),
        1 => array('nom' => 'Pollet1', 'prenom' => 'Quentin1' , 'motDePass' => 'PolletQuentin1' ),
        2 => array('nom' => 'Pollet2' , 'prenom' => 'Quentin2' , 'motDePass' => 'PolletQuentin2' ),
        3 => array('nom' => 'Pollet3', 'prenom' => 'Quentin3' , 'motDePass' => 'PolletQuentin3' ),
        4 => array('nom' => 'Pollet4', 'prenom' => 'Quentin4' , 'motDePass' => 'PolletQuentin4' ),
        5 => array('nom' => 'Pollet5' , 'prenom' => 'Quentin5' , 'motDePass' => 'PolletQuentin5' ) 
        );
         
        for ($i = 0; $i < sizeof($users); $i++)
        {
            echo "<tr><td>" .$users[$i]['nom']. " - " . $users[$i]['prenom']. " - " .$users[$i]['motDePass']. "</td></tr>";
        }

        $listes_Peoples = array(
            "Personnes" => array("Nom" => "Pollet", "Prenom" => "Quentin" , "motDePass" => "PolletQuentin" ),
            "Animaux" => array("Nom" => "Chien", "Provenance" => "ETC"),
            "Fleurs" => array("Date de Création" => "2017")
        );

        for ($i = 0; $i < sizeof($listes_Peoples); $i++)
        {
            for ($j = 0; $j < sizeof($listes_Peoples); $j++)
            {
                if ($i == 0)
                {
                    if ($j == 0)
                    {
                        echo "<p>" .$listes_Peoples["Personnes"]["Nom"]. "</p>";
                    }
                    elseif ($j == 1)
                    {
                        echo "<p>".$listes_Peoples["Personnes"]["Prenom"]. "</p>";
                    }
                    elseif ($j == 2) 
                    {
                        echo "<p>".$listes_Peoples["Personnes"]["motDePass"]. "</p>";
                    }
                }
                elseif ($i == 1)
                {
                    if ($j == 0)
                    {
                        echo "<p>".$listes_Peoples["Animaux"]["Nom"]. "</p>";
                    }
                    elseif ($j == 1)
                    {
                        echo "<p>".$listes_Peoples["Animaux"]["Provenance"]. "</p>";
                    }
                }
                elseif ($i == 2)
                {
                    if ($j == 0)
                    {
                        echo "<p>".$listes_Peoples["Fleurs"]["Date de Création"]. "🤣</p>";
                    }
                }
            }
        }

        ?>
        </table>

        <h1>Code source EXO 3</h1>
        <img src="capture/exo3.png" alt="Exo 3 PHP">
    </body>
</html>
