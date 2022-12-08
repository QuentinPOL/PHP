<?php
    //On démarre une nouvelle session
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Exo 5 PHP</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
    </head>

    <body>
        <!-- EXO 5 (Formulaires et méthode POST)--> 

        <!-- Ce programme vise à renvoyer la saisie de l'utilisateur grâce à un formulaire POST -->
        <form action="exo5.php" method="post">
            <label>Votre prénom : </label>
            <input type="text" id="name" name="prenom">
            <input type="submit" value="Validé">
        </form>

        <?php
            echo "Tu t'appel : <font color='red'>".$_POST["prenom"]."</font>";
        ?>

        <h1>Code source EXO 5</h1>
        <img src="capture/exo5.png" alt="Exo 5 PHP">
    </body>
</html>
