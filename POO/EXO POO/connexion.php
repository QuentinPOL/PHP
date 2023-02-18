<?php
    try{
        // Connexion
        $ipserver = "127.0.0.1";
        $nomBase = "baseexo";
        $loginPrivilege = "root";
        $passPrivilege = "root";
                
        $GLOBALS["PDO"] = new PDO('mysql:host=' .$ipserver. ';dbname=' .$nomBase. '', $loginPrivilege, $passPrivilege);
    } 
    catch (Exception $error) // Si erreur
    {
        $error->getMessage();
        echo "Erreur est : " .$error;
    }
?>