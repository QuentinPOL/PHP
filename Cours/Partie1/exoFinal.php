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
        <form action="verification.php" method="post">
            <label>Nom d'utilisateur : </label>
            <input type="text" placeholder="Nom d'utilisateur" name="login" value="" required>

            <label>Mot de passe : </label>
            <input type="password" placeholder="Mot de passe" name="password" value="" required>

            <input type="submit" value="Connexion">
            <input type="reset" value="Recommencer">
        </form>

        <?php
            //Fonction qui renvoie le login et le password et qui test en fonction si bon ou pas
            function renvoie_id($login, $password)
            {
                if ($login == "Julien" and $password == "1234") 
                {
                    header("Location: accueil.php");
                }
                elseif ($login != "Julien")
                {
                    echo "<p style='color:red;'>Le login est inconnu !</p>";
                }
                elseif ($password != "1234")
                {
                    echo "<p style='color:red;'>Le mot de passe est incorrect !</p>";
                }
            }
        ?>
    </body>
</html>