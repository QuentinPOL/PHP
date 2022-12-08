<?php 

function lrenvoie_jour($num_jour)
      {

        switch ($num_jour) {

          case 1:
            $nomdujour = "Lundi";
            break;

          case 2:
            $nomdujour = "Mardi";
            break;

          case 3:
            $nomdujour = "Mercredi";
            break;

          case 4:
            $nomdujour = "Jeudi";
            break;

          case 5:
            $nomdujour = "Vendredi";
            break;

          case 6:
            $nomdujour = "Samedi";
            break;

          case 7:
            $nomdujour = "Dimanche";
            break;

        }
        return $nomdujour;
    }

    function lrenvoie_image($num_image)
      {

        switch ($num_image) {

          case 1:
            $img = 'image1.jpg';
            break;

          case 2:
            $img = 'image2.jpg';
            break;

          case 3:
            $img = 'image3.jpg';
            break;

          case 4:
            $img = 'image4.jpg';
            break;

          case 5:
            $img = 'image5.jpg';
            break;

          case 6:
            $img = 'image6.jpg';
            break;

          case 7:
            $img = 'image7.jpg';
            break;

          case 8:
            $img = 'image8.jpg';
            break;

        }
        return $img;
    }

    function lchemin_rep($chemin_rep)
    {

      switch ($chemin_rep) {

        case 1:
            $dossier_rep = 'mesImages/';
            break;

        case 2 : 
            $dossier_rep = 'docPDF/';
            break;
        case 3 : 
            $dossier_rep = 'mesFichiersTexte/';
            break;
      }
      return $dossier_rep;
  }

    function lrenvoie_formulaire($param)
    {
      echo "<td><form action='nomJour.php' method='post'>";
      echo "<input type='hidden' name='NomJour' value='".lrenvoie_jour($param)."' />";
      echo "<input type='submit' name='submit' style='background-image: url(mesImages/image9.jpg); height: 80px; width:80px;' value=''>";
      echo "</form></td>";
    }

?>