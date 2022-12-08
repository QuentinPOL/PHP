<?php

  $fruits = array();
 
  $legumes = array('carotte','poivron','aubergine','chou');

  $identite = array(
    'nom' => 'Hamon', 
    'prenom' => 'Hugo', 
    'age' => 19, 
    'estEtudiant' => true
  );

  ////////////////////////////////////////////

  $legumes[] = 'salade';
  $identite['taille'] = 180;

  ////////////////////////////////////////////

  $legumes[12] = 'endive';
  $legumes[20] = 'piment';

  ////////////////////////////////////////////


  $legumes = array('carotte','poivron','aubergine','chou');
  $legumes[] = 'salade';
  echo $legumes[2].'<br/>';

  ////////////////////////////////////////////

  echo 'Nom : ', $identite['nom'] ,'<br/>';
  echo 'Prénom : ', $identite['prenom'] ,'<br/>';
  echo 'Age : ', $identite['age'] ,' ans<br/>';
  echo 'Taille : ', $identite['taille'] ,' cm';

?>