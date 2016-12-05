<?php
require_once "Voiture.php";
session_start();
//var_dump($_POST);
var_dump($_GET);
$voiture = $_SESSION['voiture'];

if (isset ($_GET['phare']))
{
    $voiture-> positionPhare=$_GET['phare'];
}

if (isset ($_POST['contact_x'])){
    $voiture->changeContact();
}

if(isset($_POST['accelerateur_x'])){
   if ($voiture->getFreinMain==true){
       $voiture->changeFreinMain();
   }
    $voiture->accelere();
}
if(isset($_POST['frein_x'])){
    $voiture->freine();
}

header("Location: ./main.php");

//vitesse = vitesse du moteur /(ou *) rapport de transmission * pi * (diamètre roue + 2*épaisseur du pneu)

//2500 / 0.97 * 3.14 * (485)= mm/minute => 1/1000 /minute => 1/1000 /1/60 0.001/0.017 6km/h

?>


