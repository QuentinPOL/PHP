<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Exo 6 PHP</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
    </head>

    <body>
        <!-- EXO 6 (Formulaires et méthode GET)--> 

        <!-- Ce programme vise à renvoyer la saisie de l'utilisateur grâce à un formulaire GET -->
        <form action="exo6.php" method="get">
            <label>Votre prénom : </label>
            <input type="text" id="name" name="prenom">
            <input type="submit" value="Validé">
        </form>

        <?php
            echo "Tu t'appel : <font color='purple'>".$_GET["prenom"]."</font>";
        ?>

        <h1>Code source EXO 6</h1>
        <img src="capture/exo6.png" alt="Exo 6 PHP">
    </body>
</html>
