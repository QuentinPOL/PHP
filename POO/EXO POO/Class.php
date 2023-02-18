<?php
    // Exo 1
    class User{

        // Propriété(s)
        private $Nom;
        private $Prenom;

        // Méthode(s)
        public function AfficheUser()
        {
            echo "<p>Je suis un User</p>";
        }
    }

    // Exo 2
    class Personnage
    {

        // Propriété(s)
        private $Pseudo;
        private $Vie;

       // Constructeur
       public function __construct()
       {
            $this->Vie = 100;
       }

        // Méthode(s)
       public function GetVie()
       {
            return $this->Vie;
       }
    }

    // Exo 3
    class PersonnageParam
    {

        // Propriété(s)
        private $Pseudo;
        private $Vie;

       // Constructeur
       public function __construct($pseudo)
       {
            $this->Vie = 100;
            $this->Pseudo = $pseudo;
       }

        // Méthode(s)
       public function GetVie()
       {
            return $this->Vie;
       }

       public function GetPseudo()
       {
            return $this->Pseudo;
       }
    }

    // Exo 4
    class PersonnageParamPlus
    {

        // Propriété(s)
        private $Pseudo;
        private $Vie;

       // Constructeur
       public function __construct($pseudo)
       {
            $this->Vie = 100;
            $this->Pseudo = $pseudo;
       }

        // Méthode(s)
       public function GetVie()
       {
            return $this->Vie;
       }

       public function GetPseudo()
       {
            return $this->Pseudo;
       }

       public function Attack($personnageX)
       {
            $personnageX->Defense(50);
            echo "<p>Boum ".$this->GetPseudo()." attaque ".$personnageX->GetPseudo()." ! ".$this->GetPseudo()." = ".$this->GetVie()." PV et ".$personnageX->GetPseudo()." = ".$personnageX->GetVie()."PV !</p>";
       }

       public function Defense($DamageAttack)
       {
            $this->Vie -= $DamageAttack;
       }
    }

    // Exo 5
    class PersonnageBDD
    {

        // Propriété(s)
        private $Pseudo;
        private $Vie;
        private $Id;

       // Constructeur
       public function __construct($pdo, $id)
       {
          if ($pdo) // Si la connexion à la bdd est réussi
          {
               $Requete = "SELECT * FROM personnage WHERE idPersonnage = $id";
               $selectPersonnages= $pdo->query($Requete);

               if($selectPersonnages != false)
               {
                   $row_count = $selectPersonnages->rowCount();
                   if($row_count > 0)
                   {
                         $tabPersonnages = $selectPersonnages->fetch();

                         $this->Id = $tabPersonnages["idPersonnage"];
                         $this->Pseudo = $tabPersonnages["Pseudo"];
                         $this->Vie = $tabPersonnages["Vie"];
                   }
               }
          }
       }

        // Méthode(s)
        public function GetId()
        {
             return $this->Id;
        }

        public function GetPseudo()
        {
             return $this->Pseudo;
        }

        public function GetVie()
        {
             return $this->Vie;
        }

       public function GetInfoPerso()
       {
          echo "<p>Le Personnage ".$this->Id." s'appelle ".$this->Pseudo." et il à ".$this->Vie." PV.</p>";
       }

       public function Attack($personnageX)
       {
            $personnageX->Defense(50);
            echo "<p>Boum ".$this->GetPseudo()." attaque ".$personnageX->GetPseudo()." ! ".$this->GetPseudo()." = ".$this->GetVie()." PV et ".$personnageX->GetPseudo()." = ".$personnageX->GetVie()."PV !</p>";
       }

       public function Defense($DamageAttack)
       {
            $this->Vie -= $DamageAttack;
       }
    }

     // Exo 6
    class PersonnageBddUpdate
    {

        // Propriété(s)
        private $Pseudo;
        private $Vie;
        private $Id;

       // Constructeur
       public function __construct($pdo, $id)
       {
          if ($pdo) // Si la connexion à la bdd est réussi
          {
               $Requete = "SELECT * FROM personnage WHERE idPersonnage = $id";
               $selectPersonnages= $pdo->query($Requete);

               if($selectPersonnages != false)
               {
                   $row_count = $selectPersonnages->rowCount();
                   if($row_count > 0)
                   {
                         $tabPersonnages = $selectPersonnages->fetch();

                         $this->Id = $tabPersonnages["idPersonnage"];
                         $this->Pseudo = $tabPersonnages["Pseudo"];
                         $this->Vie = $tabPersonnages["Vie"];
                   }
               }
          }
       }

        // Méthode(s)
        public function GetId()
        {
             return $this->Id;
        }

        public function GetPseudo()
        {
             return $this->Pseudo;
        }

        public function GetVie()
        {
             return $this->Vie;
        }

       public function GetInfoPerso()
       {
          echo "<p>Le Personnage ".$this->Id." s'appelle ".$this->Pseudo." et il à ".$this->Vie." PV.</p>";
       }

       public function Attack($pdo, $personnageX)
       {
          if ($personnageX->Defense($pdo, 50) == 1)
          {
               echo "<p>Boum ".$this->GetPseudo()." attaque ".$personnageX->GetPseudo()." ! ".$this->GetPseudo()." = ".$this->GetVie()." PV et ".$personnageX->GetPseudo()." = ".$personnageX->GetVie()." PV !</p>";
          }
          else
          {
               echo "<p>Erreur !!!!</p>";  
          }
       }

       public function Defense($pdo, $DamageAttack)
       {
          if ($pdo) // Si la connexion à la bdd est réussi
          {
               $Requete = "UPDATE `personnage` SET `Vie`= $this->Vie - $DamageAttack WHERE idPersonnage = $this->Id";
               $UpdateVie= $pdo->query($Requete);

               if($UpdateVie != false)
               {
                    $this->Vie -= $DamageAttack;
                    return 1;
               }
               else 
               {
                    return 0;
               }
          }
       }

       public function Soin($pdo)
       {
          if ($pdo) // Si la connexion à la bdd est réussi
          {
               $Requete = "UPDATE `personnage` SET `Vie`= 999 WHERE idPersonnage = $this->Id";
               $UpdateVieMax = $pdo->query($Requete);

               if($UpdateVieMax != false)
               {
                    $this->Vie = 999;
                    echo "Soin ! La vie de ".$this->Pseudo." est de nouveau au maximum avec un total de ".$this->Vie." PV.";
               }
               else 
               {
                    return 0;
               }
          }
       }
     }


     // Exo 7
    class PersonnageBddSelectAll
    {

        // Propriété(s)
        private $Pseudo;
        private $Vie;
        private $Id;

       // Constructeur
       public function __construct($id, $pseudo, $vie)
       {
          $this->Id = $id;
          $this->Pseudo = $pseudo;
          $this->Vie = $vie;
       }

        // Méthode(s)
        public function GetId()
        {
             return $this->Id;
        }

        public function GetPseudo()
        {
             return $this->Pseudo;
        }

        public function GetVie()
        {
             return $this->Vie;
        }

       public function GetInfoPerso()
       {
          echo "<p>Le Personnage ".$this->Id." s'appelle ".$this->Pseudo." et il à ".$this->Vie." PV.</p>";
       }

       public function Attack($pdo, $personnageX)
       {
          if ($personnageX->Defense($pdo, 50) == 1)
          {
               echo "<p>Boum ".$this->GetPseudo()." attaque ".$personnageX->GetPseudo()." ! ".$this->GetPseudo()." = ".$this->GetVie()." PV et ".$personnageX->GetPseudo()." = ".$personnageX->GetVie()." PV !</p>";
          }
          else
          {
               echo "<p>Erreur !!!!</p>";  
          }
       }

       public function Defense($pdo, $DamageAttack)
       {
          if ($pdo) // Si la connexion à la bdd est réussi
          {
               $Requete = "UPDATE `personnage` SET `Vie`= $this->Vie - $DamageAttack WHERE idPersonnage = $this->Id";
               $UpdateVie= $pdo->query($Requete);

               if($UpdateVie != false)
               {
                    $this->Vie -= $DamageAttack;
                    return 1;
               }
               else 
               {
                    return 0;
               }
          }
       }

       public function Soin($pdo)
       {
          if ($pdo) // Si la connexion à la bdd est réussi
          {
               $Requete = "UPDATE `personnage` SET `Vie`= 999 WHERE idPersonnage = $this->Id";
               $UpdateVieMax = $pdo->query($Requete);

               if($UpdateVieMax != false)
               {
                    $this->Vie = 999;
                    echo "Soin ! La vie de ".$this->Pseudo." est de nouveau au maximum avec un total de ".$this->Vie." PV.";
               }
               else 
               {
                    return 0;
               }
          }
       }
     }


     // Exo 7 Bis
    class PersonnageBddForm
    {

        // Propriété(s)
        private $Pseudo;
        private $Vie;
        private $Id;

       // Constructeur
       public function __construct($pdo, $id, $pseudo, $vie)
       {
          if ($pdo) // Si la connexion à la bdd est réussi
          {
               $Requete = "INSERT INTO personnage (idPersonnage, Pseudo, Vie) VALUES ('$id', '$pseudo', '$vie');";
               $IsertPersonnage = $pdo->query($Requete);

               if($IsertPersonnage != false)
               {
                    $this->Id = $id;
                    $this->Pseudo = $pseudo;
                    $this->Vie = $vie;
               }
          }
       }

        // Méthode(s)
        public function GetId()
        {
             return $this->Id;
        }

        public function GetPseudo()
        {
             return $this->Pseudo;
        }

        public function GetVie()
        {
             return $this->Vie;
        }

       public function GetInfoPerso()
       {
          echo "<p>Le Personnage ".$this->Id." s'appelle ".$this->Pseudo." et il à ".$this->Vie." PV.</p>";
       }

       public function Attack($pdo, $personnageX)
       {
          if ($personnageX->Defense($pdo, 50) == 1)
          {
               echo "<p>Boum ".$this->GetPseudo()." attaque ".$personnageX->GetPseudo()." ! ".$this->GetPseudo()." = ".$this->GetVie()." PV et ".$personnageX->GetPseudo()." = ".$personnageX->GetVie()." PV !</p>";
          }
          else
          {
               echo "<p>Erreur !!!!</p>";  
          }
       }

       public function Defense($pdo, $DamageAttack)
       {
          if ($pdo) // Si la connexion à la bdd est réussi
          {
               $Requete = "UPDATE `personnage` SET `Vie`= $this->Vie - $DamageAttack WHERE idPersonnage = $this->Id";
               $UpdateVie= $pdo->query($Requete);

               if($UpdateVie != false)
               {
                    $this->Vie -= $DamageAttack;
                    return 1;
               }
               else 
               {
                    return 0;
               }
          }
       }

       public function Soin($pdo)
       {
          if ($pdo) // Si la connexion à la bdd est réussi
          {
               $Requete = "UPDATE `personnage` SET `Vie`= 999 WHERE idPersonnage = $this->Id";
               $UpdateVieMax = $pdo->query($Requete);

               if($UpdateVieMax != false)
               {
                    $this->Vie = 999;
                    echo "Soin ! La vie de ".$this->Pseudo." est de nouveau au maximum avec un total de ".$this->Vie." PV.";
               }
               else 
               {
                    return 0;
               }
          }
       }
     }
?>