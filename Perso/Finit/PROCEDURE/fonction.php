<?php

    function frenvoie_jour($numeroJourSemaine){ // Ma fonction Qui renvoie les jours

     // Selon mon Paramètre
        switch ($numeroJourSemaine) 
        {
            case 1: // Cas 1
                $nomJourSemaine = "Lundi"; // Ma variable Me Renvoie Lundi
            break; // Pour éviter la répétition

            case 2:
                $nomJourSemaine = "Mardi";
            break;

            case 3:
                $nomJourSemaine = "Mercredi";
            break;

            case 4:
                $nomJourSemaine = "Jeudi";
            break;

            case 5:
                $nomJourSemaine = "Vendredi";
            break;

            case 6;
                $nomJourSemaine = "Samedi";
            break;

            case 7:
                $nomJourSemaine = "Dimanche";
            break;
        }
        return $nomJourSemaine; // PAS echo sinon hors Tableau
    }

    function fMesRepertoires($repertoire){

        switch ($repertoire){

            case 1:
                $monRepertoire = "mesFichiersTexte/";
            break;
        }
        return $monRepertoire;
    }
    function fRenvoiPrenom(){
     
        $contenuFichier = fopen(fMesRepertoires(1)."prenom.txt", "r+");
        // J'extrait la Première Ligne
        $mesDonnees = fgets($contenuFichier, 255);
        // Je Ferme le Fichier
        fclose($contenuFichier);
        // Je dit ce que contient mon Fichier
        //return $mesDonnees;

        //  switch ($monParametre){

        //      case 1:
        //          $numeroDepart = 1;
        //          $nombreCaractere = 2;
        //      break;

        //      case 2:
        //          $numeroDepart = 4;
        //          $nombreCaractere = 4;
        //      break;

        //      case 3:
        //          $numeroDepart = 9;
        //          $nombreCaractere = 2;
        //      break;

        //      case 4:
        //          $numeroDepart = 12;
        //          $nombreCaractere = 3;
        //      break;

        //      case 5:
        //          $numeroDepart = 16;
        //          $nombreCaractere = 6;
        //      break;

        //      case 6:
        //          $numeroDepart = 23;
        //          $nombreCaractere = -1;
        //      break;

        //      case 7:
        //          $numeroDepart = 0;
        //          $nombreCaractere = 30;
        //      break;
        // }


        $mon_occurence = substr_count($mesDonnees, ';');



        //}


        //$monPrenom = substr($mesDonnees, $numeroDepart, $nombreCaractere);

    }
?>