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
        <?php
            echo "<h1>Bienvenue sur notre site web ".$_SESSION["Login"]." !</h1>";
        ?>
        
        <!-- Ce bout de code vise à Supprimer la variable de session (De se déconnecter) -->
        <form action="disconnect.php" method="post">
            <input type="submit" id="disconnect" value="Déconnexion">
        </form>
    </body>
</html>