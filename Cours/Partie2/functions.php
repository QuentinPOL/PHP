<?php

    /////////////////////// EXO 1 Fonctions de base

    function AfficheTable($table)
    {
        echo "<table border=2>";
        for ($i = 0; $i < sizeof($table); $i++)
        {
            echo "<tr><td>Element N°" .$i. " : " .$table[$i]. "</td></tr>";
        }
        echo "</table>";
    }

    /////////////////////// EXO 2 Fonction Paramétrable
    
    function createTableauEntente($colonne1, $colonne2, $colonne3)
    {
        $tableauLigne = array(
            0 => array("Pollet", "Blanguerin"),
            1 => array("Quentin", "Jordan"),
            2 => array("1234", "5678")
        );

        if (!empty($colonne1) && !empty($colonne2) && !empty($colonne3))
        {
    ?>
        <table border="2">
            <tr>
                <th><?php echo $colonne1; ?></th>
                <th><?php echo $colonne2; ?></th>
                <th><?php echo $colonne3; ?></th>
            </tr>
    <?php
        for ($i = 0; $i < sizeof($tableauLigne) - 1; $i++)
        {
            echo "<tr>";

            for ($j = 0; $j < sizeof($tableauLigne[$i]) + 1; $j++)
            {
                echo "<td>" .$tableauLigne[$j][$i].  "</td>";
            }

            echo "</tr>";
        }
    ?>
        </table>
    <?php
        }
    }

    /////////////////////// EXO 3 Fonction qui retourne un résultat

    function moyenneTable($table)
    {
        $moyenne = 0;

        for ($i = 0; $i < sizeof($table); $i++)
        {
            $moyenne += $table[$i];
        }

        return $moyenne/sizeof($table);
    }

    /////////////////////// EXO Final Fonction qui affiche un formulaire de connexion à une page et 
    // qui prend en paramètre un mot de passe
    $_SESSION["Login"]; // Recup Username
    $_SESSION["Password"]; // Recup Password

    function afficheFormulaire($login, $password)
    {
        
        if ($password == "1234" && $login == "Quentin") 
        {
            //On démarre une nouvelle session
            session_start();

            $_SESSION["Login"] = $login;
            $_SESSION["Password"] = $password;

            header("Location: accueil.php");
        }
        else if ($login != "Quentin")
        {
            echo "<p style='color:red;'>Login incorrect !</p>";
        }
        else if ($password != "1234")
        {
            echo "<p style='color:red;'>Password incorrect !</p>";
        }
    }

?>