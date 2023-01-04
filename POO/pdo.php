<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Fonctions 2</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
    </head>

    <body>
        <form action="" method="post">
            <label>Requete : </label>
            <input type="text" id="saisi" name="saisi" required>
            <input type="submit" id="envoyer" name="envoyer">
        </form>
    </body>
</html>

<?php

    if (isset($_POST["envoyer"])) // Si il appuie sur le bouton envoyer
    {
        /// ON se connecte
        try{
            $ipserver = "192.168.65.222";
            $nomBase = "Clinique";
            $loginPrivilege = "SiteWeb";
            $passPrivilege = "SiteWeb";
        
            $GLOBALS["PDO"] = new PDO('mysql:host=' .$ipserver. ';dbname=' .$nomBase. '', $loginPrivilege, $passPrivilege);

            if (isset($_POST["saisi"])){
                $requete = $_POST["saisi"];
            
                $resultat =  $GLOBALS["PDO"]->query($requete);
                if ($resultat->rowCount() > 0)
                {
                    while ($tab = $resultat->fetch())
                    {
                        foreach ($tab as $key => $value) {
                            echo $key. " = ".$value;
                           // echo "Médicament Numéro : " .$tab["id"]. ", Nom du médicament : " .$tab["nom"]. " .<br>";
                        }
                        echo"<br>";
                        
                    }
                }
            }
           
        } 
        catch (Exception $error)
        {
            $error->getMessage();
        
            echo "Erreur est : " .$error;
        }
        /// ON se connecte

       
        
       /* if ($_POST["saisi"] == "select * from Medicament")
        {
            // resultat  est du coup un objet de type PDOstatement
            
           
        }
        else if ($_POST["saisi"] == "select * from Consultation")
        {
            if ($resultat->rowCount() > 0)
            {
                while ($tab = $resultat->fetch())
                {
                    echo "Consultation Numéro : " .$tab["id"]. ", Nom du médicament : " .$tab["nom"]. " .<br>";
                }
            }
        }*/

    }
?>