<?php
    //On démarre une nouvelle session
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Exo 7 PHP</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
    </head>

    <body>
    <!-- EXO 7 (Variables de session) -->

        <!-- (Formulaires avec méthode POST)--> 

        <!-- Ce bout de code vise à renvoyer la saisie de l'utilisateur grâce à un formulaire POST -->
        <form action="exo7.php" method="post">
            <label>Votre prénom : </label>
            <input type="text" id="name" name="prenom">
            <input type="submit" value="Validé">
            <input type="reset" value="Recommencer">
        </form>

        <?php

        // Ce bout de code vise à stocker le prénom de l'utilisateur dans une variable de session Username
            $_SESSION["Username"] = $_POST["prenom"];
            
            if ($_SESSION["Username"] == '')
            {
                echo "La variable sauvegardé est : NULL";
            }
            else
            {
                echo "La variable sauvegardé est : " .$_SESSION["Username"];
            }
        ?>

        <h1>Code source EXO 7</h1>
        <img src="capture/exo7.png" alt="Exo 7 PHP">
    </body>
</html>
