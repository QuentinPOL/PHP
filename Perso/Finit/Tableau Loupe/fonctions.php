<?php
    function lrenvoie_IDclient($client, $numligne) // Ma fonction 
    {
        echo "<td><form action='idclient.php' method='post'>"; // Mon fichier avec ma méthode POST

        echo "<progress style='margin-bottom:35px;' min='0' max='100' value='".$client."'></progress>"; // Sur la page Tableau_loupe
        echo "<p> ? </p>"; // Point d'interrogation

        echo "<input type='hidden' name='IDclient' value='".$client."' />"; //Ma valeur rand renvoyer ne Post
        echo "<input type='hidden' name='Numligne' value='".$numligne."' />"; //Ma valeur numdeligne renvoyer en Post

        echo "<input type='submit' name='submit' style='background-image: url(monImage/loupe.jpg); height: 80px; width:80px;' value=''>";
        
        echo "</form></td>"; // Fin de mon formualaire et de ma colonne
    }
?> 