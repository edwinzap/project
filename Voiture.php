<?php

/**
 * Created by PhpStorm.
 * User: Miguel
 * Date: 30/11/2016
 * Time: 19:20
 */
class Voiture
{
    public $nbreLitre=30;
    private $vitesse=0;
    private $freinMain = true;
    private $contact = false;

    function __construct()
    {
        return "Achat d'une nouvelle voiture réussi !";
    }

    /*Function de manipulation*/
    function changeContact(){
        if($this->contact == false){
            $this->contact = true;
            return "Démarrage";
        }
        else{
            $this->contact = false;
            return "Arret";
        }
    }
    function accelere(){
        if ($this->contact==true && $this->vitesse<200)
        {
            if ($this->freinMain==true){
                $this->vitesse+=10;
                $this->printVitesse();
            }
            else{
                return "Veillez retirer le frein à main";
            }
        }
    }
    function freine(){
        if ($this->contact==true && $this->vitesse>0)
        {
            $this->vitesse-=10;
            $this->printVitesse();
        }
    }

    function changeFreinMain(){
        if ($this->freinMain==true)
        {
            $this->freinMain=false;
            return "Frein à main retiré";
        }
        else
        {
            $this->freinMain=true;
            return "Frein à main mis";
        }
    }

    /*Function Get*/
    function getVitesse(){
        return $this->vitesse;
    }
    function getFreinMain(){
        return $this->freinMain();
    }

    /*Functions Print*/
    function printContact(){
        if ($this->contact==true){
            return "Votre voiture est démarrée";
        }
        else{
            return "Votre voiture est arrêtée";
        }
    }

    function printVitesse(){
        return "Vitesse = $this->vitesse";
    }


    /*Consommation*/
    function donneConso($nbreKm){
        return $this->nbreLitre * $nbreKm;
    }

    function donneConsoAnnuelle($nbreKm, $nbreJours=20){
        return $this->donneConso($nbreKm) * $nbreJours;
    }
}