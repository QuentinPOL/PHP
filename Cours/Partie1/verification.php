<!DOCTYPE html>

<html>

<?php
    //On démarre une nouvelle session
    session_start();

    // include
    include("exoFinal.php");

    // Donne mon mdp et mon login à une variable session
    $_SESSION["Login"] = $_POST['login'];
    $_SESSION["Password"] = $_POST['password'];
    
    // Renvoie le login et le password afin de le verif
    echo renvoie_id($_SESSION["Login"], $_SESSION["Password"]);
?>

    <h1>Code source EXO Final</h1>
    <p><img src="capture/exoFinal.png" alt="EXO Final PHP"></p>
    <p><img src="capture/exoFinal-1.png" alt="EXO Suite 1 PHP"></p>
    <p><img src="capture/exoFinal-2.png" alt="EXO Suite 2 PHP"></p>
    <img src="capture/exoFinal-3.png" alt="EXO Suite 3 PHP">

</html>