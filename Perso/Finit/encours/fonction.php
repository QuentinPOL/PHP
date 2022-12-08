<?php
    function lchemin_rep($chemin_rep)
    {

      switch ($chemin_rep) {

        case 1 : 
            $dossier_rep = 'mesFichiersTexte/';
        break;

      }
      return $dossier_rep;
    }

  ///////////////////////////////////////////////////////
    
    function extrait_txt($pDebut, $nbCarac)
    {
        $mes_prenom = fopen(lchemin_rep(1)."prenom.txt", "r");
        $donnees = fgets($mes_prenom, 255);
        fclose($mes_prenom); // VALIDER

        $premier_extrait = substr($donnees, $pDebut, $nbCarac); // Renvoie JB

        return $premier_extrait
    }
        //$deuxième_extrait = substr($donnees, 4, 4); // Renvoie Stef
        //echo $deuxième_extrait;
        //$troisième_extrait = substr($donnees, 9, 2); // Renvoie Qt
        //echo $troisième_extrait;
        //$quatrième_extrait = substr($donnees, 12, 3); // Renvoie Isa
        //echo $quatrième_extrait;
        //$cinquième_extrait = substr($donnees, 16, 6); // Renvoie Celine
        //echo $cinquième_extrait;
        //$sixième_extrait = substr($donnees, 23, -1); // Renvoie Phanie
        //echo 'M. '.$sixième_extrait;
?>