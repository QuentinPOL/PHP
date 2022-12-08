<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Fonctions 2</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
    </head>

    <body>
        <?php
            include("functions.php");
        ?>
        <form action="" method="post">
            <div>
                <p>
                    <label>Username : </label>
                    <input type="text"  placeholder="Username" name="login" required>
                </p>

                <p>
                    <label>Password : </label>
                    <input type="password" placeholder="Password" name="password" required>
                </p>

                <input type="submit" name="envoyer">
                <input type="reset" value="Recommencer">
            </div>
        </form>

        <?php

            if (isset($_POST["envoyer"]))
            {
                afficheFormulaire($_POST["login"], $_POST["password"]);
            }
        ?>
    </body>
</html>