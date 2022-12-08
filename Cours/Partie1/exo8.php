<?php
    //On démarre une nouvelle session
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Exo 8 PHP</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
    </head>

    <body>
        <!-- (Formulaires avec méthode POST)--> 

        <!-- Ce bout de code vise à renvoyer la saisie de l'utilisateur grâce à un formulaire POST -->
        <form action="exo8.php" method="post">
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

        <!-- Ce bout de code vise à Supprimer la variable de session Username -->
        <form action="destroy_session.php" method="post">
            <input type="submit" id="delete" value="Supprimer">
        </form>

        <h1>Code source EXO 8</h1>
        <p><img src="capture/exo8.png" alt="Exo 8 PHP"></p>
        <img src="capture/exo8-1.png" alt="Exo 8 Suite PHP">
    </body>
</html>