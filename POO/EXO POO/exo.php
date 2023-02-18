<?php
    session_start();
    require("connexion.php");
    include("Class.php");

    //////////// PHP Partie 3 Objet ////////////

    // Exo 1 (création d’une classe en php)
    echo  "<p style='color:red;'>EXO 1 (création d’une classe en php)</p>";

    $User1 = new User();
    $User1->AfficheUser();

    ?>
    <table style="width: 15%;" border="1">
        <tr>
            <th style="text-align: center;">User</th>
        </tr>

        <tr>
            <td>
                <p>
                    -Nom : String<br>
                    -Prenom : String
                </p>
            </td>
        </tr>

        <tr>
            <td>
                <p>+AfficheUser() : void</p>
            </td>
        </tr>
    </table>
    <!-- Fin Exo 1-->

    <?php
    
    // Exo 2 (création d’un constructeur)
    echo  "<p style='color:red;'>EXO 2 (création d’un constructeur)</p>";

    $Personnage1 = new Personnage();
    echo "Personnage 1 votre vie est de ".$Personnage1->GetVie()." PV";

    /////////////////////

    // Exo 3 (création d’un constructeur)
    echo  "<p style='color:red;'>EXO 3 (création d’un constructeur avec paramètre)</p>";

    $Personnage1Bis = new PersonnageParam("Julien");
    echo "Personnage 1 Bis avec paramètre votre pseudo est : ".$Personnage1Bis->GetPseudo()." et vous avez ".$Personnage1Bis->GetVie()." PV";

    /////////////////////

    // Exo 4 (interaction entre objet)
    echo  "<p style='color:red;'>EXO 4 (interaction entre objet)</p>";

    $Personnage1Plus = new PersonnageParamPlus("Quentin");
    $Personnage2Plus = new PersonnageParamPlus("Jordan");

    $Personnage1Plus->Attack($Personnage2Plus);
    $Personnage2Plus->Attack($Personnage1Plus);

    /////////////////////

    // Exo 5 (objet PDO Select)
    echo  "<p style='color:red;'>EXO 5 (objet PDO Select)</p>";

    $Personnage1BDD =  new PersonnageBDD($GLOBALS["PDO"], 3);
    $Personnage2BDD =  new PersonnageBDD($GLOBALS["PDO"], 4);

    $Personnage1BDD->GetInfoPerso();
    $Personnage2BDD->GetInfoPerso();

    /////////////////////

    // Exo 6 (objet PDO Update)
    echo  "<p style='color:red;'>EXO 6 (objet PDO Update)</p>";

    $Personnage1Update =  new PersonnageBddUpdate($GLOBALS["PDO"], 3);
    $Personnage2Update =  new PersonnageBddUpdate($GLOBALS["PDO"], 4);

    $Personnage1Update->GetInfoPerso();
    $Personnage2Update->GetInfoPerso();

    $Personnage1Update->Attack($GLOBALS["PDO"], $Personnage2Update);
    $Personnage2Update->Soin($GLOBALS["PDO"]);

    /////////////////////

    // Exo 7 (objet PDO Select ALL)
    echo  "<p style='color:red;'>EXO 7 (objet PDO Select ALL)</p>";

    if ($GLOBALS["PDO"]) // Si la connexion à la bdd est réussi
    {
        $requete = "SELECT * FROM personnage";
        $selectPerso = $GLOBALS["PDO"]->query($requete);

        if($selectPerso != false) // Si requete réussi
        {
            $row_count = $selectPerso->rowCount();
            if($row_count > 0) // Si nombre lignes > 0
            {
                $i = $j = 0;

                $TableauPerso = array();
                while($bddPerso = $selectPerso->fetch())
                {
                    $TableauPerso[$i++] = new PersonnageBddSelectAll($bddPerso["idPersonnage"], $bddPerso["Pseudo"], $bddPerso["Vie"]);
                }

                foreach ($TableauPerso as $Perso) 
                {
                    $TableauPerso[$j++]->GetInfoPerso();
                }
            }
        }
    }

    /////////////////////

    // Exo 7 Bis (objet PDO Insert)
    echo  "<p style='color:red;'>EXO 7 Bis (objet PDO Insert)</p>";
    ?>

    <form action="" method="post">
        <label>Id du personnage :</label>
        <input type="num" name="IdPerso" placeholder="Id Perso" maxlength="3" pattern="[7-9]{1}|[0-9]{2}|[0-9]{3}" required>

        <label>Pseudo du personnage :</label>
        <input type="text" name="PseudoPerso" placeholder="Pseudo Perso" minlength="5" maxlength="15" pattern="[a-zA-Z]+" required>

        <label>Vie du personnage :</label>
        <input type="num" name="ViePerso" placeholder="Vie Perso" maxlength="3" pattern="[1-9]|[1-9][0-9]|100" required>

        <input type="submit" name="formPerso" value="Valider">
    </form>

    <?php

    if (isset($_POST["formPerso"])) // Si Appuis sur le bouton
    {
        $PersonnageCreate = new PersonnageBddForm($GLOBALS["PDO"], $_POST["IdPerso"], $_POST["PseudoPerso"], $_POST["ViePerso"]);
        $PersonnageCreate->GetInfoPerso();
    }

    /////////////////////

    // Exo 8 (objet PDO delete)
    echo  "<p style='color:red;'>EXO 8 (objet PDO delete)</p>";
    ?>

    <form action="" method="post">
        <label>Personnages :</label>

        <select name="personnages">
            <option value="">-- Choisir un personnage --</option>
            <?php
                if ($GLOBALS["PDO"]) // Si la connexion à la bdd est réussi
                {
                    $requete = "SELECT * FROM personnage";
                    $selectPerso = $GLOBALS["PDO"]->query($requete);
                
                    if($selectPerso != false) // Si requete réussi
                    {
                        $row_count = $selectPerso->rowCount();
                        if($row_count > 0) // Si nombre lignes > 0
                        {
                            while($bddPerso = $selectPerso->fetch())
                            {
                                ?>
                                    <option value="<?php echo $bddPerso["idPersonnage"]?>"><?php echo $bddPerso["Pseudo"]?></option>
                                <?php
                            }
                        }
                    }
                }
            ?>
        </select>

        <input type="submit" name="DeleteBtn" value="Supprimer">
    </form>

    <?php

    if (isset($_POST["DeleteBtn"]))
    {
        if ($GLOBALS["PDO"]) // Si la connexion à la bdd est réussi
        {
            $requete = "DELETE FROM personnage WHERE idPersonnage = ".$_POST["personnages"]."";
            $deletePerso = $GLOBALS["PDO"]->query($requete);
        
            if($deletePerso != false) // Si requete réussi
            {
                echo "Suppresion du personnage ".$_POST["personnages"]." réussi !";
            }
        }
    }
?>