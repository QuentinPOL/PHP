<?php 
session_start();

session_destroy();
header('Location: exoFinal.php');
?>