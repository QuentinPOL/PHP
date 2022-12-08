<?php 
session_start();

session_destroy();
header('Location: exo8.php');
?>