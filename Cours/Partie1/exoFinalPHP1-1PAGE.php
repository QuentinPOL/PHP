<!--
    BY QUENTIN POLLET BTS SN 1ERE ANNEE
    LA PROVIDENCE AMIENS
    LAST RELEASE 19/12/2022 15:13
    EXO FINAL PHP 1
-->

<?php 
session_start(); // On Commence la session
?>

<!DOCTYPE html>
<html>
    <!-- Header de la page avec toutes les infos-->
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Exo 8 PHP</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
    </head>

    <!-- Corps de la page avec tout le contenu -->
    <body>
        <?php
            if  (isset($_POST["Connexion"])) // Si l'utilisateur appuis sur le bouton de connexion
            {
                if ($_POST["login"] == "Julien" and $_POST["password"] == "1234")  // Si login et password sont bon alors on se connecte
                {
                    $_SESSION["Login"] = $_POST["login"]; // Tableau de session Login = login de l'utilsateur
                    $_SESSION["Password"] = $_POST["password"]; // Tableau de session Password = password de l'utilsateur

                    $_SESSION["Isconnect"] = true; // Et on met la session Isconnect à true
                }
                elseif ($_POST["login"] != "Julien") // Sinon si le login est inconnu
                {
                    echo "<p style='color:red;'>Le login est inconnu !</p>"; // On affiche le login est inconnu
                }
                elseif ($_POST["password"] != "1234") // Sinon si le password est incorrect
                {
                    echo "<p style='color:red;'>Le mot de passe est incorrect !</p>"; // On affiche le login est incorrect
                }
            }
            else if (isset($_POST["Deconnexion"])) // Sinon si l'utilisateur appuis sur le bouton de déconnexion
            {
                session_unset(); // On supprime tout les tableaux de la session
                session_destroy(); // On détruit la session
            }

            if (isset($_SESSION["Isconnect"]) and $_SESSION["Isconnect"] == true) // Si la session IsConnect existe et qu'elle est vrai
            {
                echo "<h1>Bienvenue sur notre site web ".$_SESSION["Login"]." !</h1>"; // Affiche le message de connexion avec le nom de l'utilsateur
                ?>
                    <!-- Ce bout de code vise à Supprimer la variable de session (De se déconnecter) -->
                    <form action="" method="post">
                        <input type="submit" name="Deconnexion" value="Déconnexion">
                    </form>
                <?php
            }
            else // Sinon si elle existe pas on affiche le formulaire de connexion
            {
                ?>
                    <!-- (Formulaires avec méthode POST)--> 

                    <!-- Ce bout de code vise à renvoyer la saisie de l'utilisateur grâce à un formulaire POST -->
                    <form action="" method="post">
                        <label>Nom d'utilisateur : </label>
                        <input type="text" placeholder="Nom d'utilisateur" id="login" name="login" required>

                        <label>Mot de passe : </label>
                        <input type="password" placeholder="Mot de passe" id="password" name="password" required>

                        <input type="submit" value="Connexion" name="Connexion">
                        <input type="reset" value="Recommencer">
                    </form>
                <?php
            }
        ?>
    </body>
</html>