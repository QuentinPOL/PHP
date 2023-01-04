<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>POO 1</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
    </head>

    <body>
        <form action="" method="post">
            <label>Select de la table : </label>
            <input type="text" id="saisi" name="saisi" required>
            <input type="submit" id="envoyer" name="envoyer">
        </form>

        <br>

        <?php
            if (isset($_POST["envoyer"])) // Si il appuie sur le bouton envoyer
            {
                try{
                    // Connexion
                    $ipserver = "127.0.0.1";
                    $nomBase = "clinique";
                    $loginPrivilege = "SiteWeb";
                    $passPrivilege = "SiteWeb";
                
                    $GLOBALS["PDO"] = new PDO('mysql:host=' .$ipserver. ';dbname=' .$nomBase. '', $loginPrivilege, $passPrivilege);
                    // Fin Connexion

                    $requete = $_POST["saisi"]; // recupere la saisie

                    if (isset($_POST["saisi"])) // Si la saisie est pas vide
                    {
                        if ($requete == "consultation" || $requete == "medecin" || $requete == "medicament" || $requete == "patient" || $requete == "prescription")
                        {
                            $resultat =  $GLOBALS["PDO"]->query("select * from ".$_POST["saisi"]);

                            if ($resultat->rowCount() > 0)
                            {
                                while ($tab = $resultat->fetch())
                                {
                                    if ($requete == "consultation")
                                    {
                                        echo "Consultation N°" .$tab["id"]. ", Date et heure : " .$tab["Dateheure"]. ", Médecin N°" .$tab["idMedecin"]. ", Patient N°" .$tab["idPatient"]. ".<br>";
                                    }
                                    else if ($requete == "medecin")
                                    {
                                        echo "Médecin N°" .$tab["id"]. ", Nom : " .$tab["nom"]. ", Prenom : " .$tab["prenom"]. ".<br>";
                                    }
                                    else if ($requete == "medicament")
                                    {
                                        echo "Médicament N°" .$tab["id"]. ", Nom : " .$tab["nom"]. ".<br>";
                                    }
                                    else if ($requete == "patient")
                                    {
                                        echo "Patient N°" .$tab["id"]. ", Nom : " .$tab["nom"]. ", Prenom : " .$tab["prenom"]. ".<br>";
                                    }
                                    else if ($requete == "prescription")
                                    {
                                        echo "Consultation N°" .$tab["idConsultation"]. ", Médicament N°" .$tab["idMedicament"]. ", Quantité : " .$tab["Quantité"]. ".<br>";
                                    }
                                }
                            }
                        }
                        else // Si elle correspond à aucune table dans la bdd
                        {
                            echo "Aucune table trouver ! :/";
                        }
                    }
                } 
                catch (Exception $error) // Si erreur
                {
                    $error->getMessage();
                    echo "Erreur est : " .$error;
                }
            }
        ?>
    </body>
</html>