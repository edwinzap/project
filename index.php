<?php
require_once "Voiture.php";
session_start();

$_SESSION['voiture']= new Voiture();
$_SESSION['voiture']->changeContact();
header("Location: ./main.php");
?>