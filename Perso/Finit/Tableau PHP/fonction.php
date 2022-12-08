<?php
    function couleur_ligne($valeur){
        if ($valeur%2 == 1) {
            echo "<tr style='background-color:#9F9F9F;'>";
        }
        else{
            echo "<tr>";
        }
    }
?>