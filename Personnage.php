<?php
// include('../dashboard/system/init.php');
/*
XP = 0
PV = 10
random force 0,10
random défense 0,10
*/
error_reporting(E_ALL);
ini_set("display_errors", 1);

class Personnage{
    // On initialise les attributs
    private $_strength;
    private $_defense;
    private $_healthPoint = 10;
    private $_experience = 0; 

    /* 
    Le construct est une fonction qui est appelée 
    automatiquement dès l'instanciation d'une classe 
    et donc la création d'un objet

    On peut passer un variable à l'instanciation d'une classe 
    comme $monObjet = new MaClasse($maVariable);
    et on récupère $maVariable dans le construct de la classe MaClasse
    */

    function __construct(){
        $this->_strength = rand(0,10);
        $this->_defense = rand(0,10);        
    }

    function getStrength(){
        return $this->_strength;
    }
    // $adversaire = à l'objet $pierre
    function fight($adversaire){
        // $this correspond aux attributs et méthodes de chris
        if($this->_strength < $adversaire->_defense){
            return "Perdu";
        }
        elseif($this->_strength == $adversaire->_defense){
            return "Match nul";
        }
        else {
            return "Gagné";            
        }
    }
}
/* chris est un objet qui a été créé suite à l'instanciation de la classe Personnage */
$chris = new Personnage();
/* On affiche les attributs de l'objet chris */
echo '<pre>';
print_r($chris);
echo '</pre>';

$pierre = new Personnage();
echo '<pre>';
print_r($pierre);
echo '</pre>';

/* 
Pour appeler la méthode d'un objet, on fait :
$monobjet->mamethode();
*/

//$forceChris = $chris->getStrength();

/* 
On affiche le résultat de la méthode fight depuis l'objet chris
avec pour paramètre l'objet pierre 
*/

echo $chris->fight($pierre)." \n";

//echo $pierre->fight($chris)." \n";

// var_dump($personnage1);
// var_dump($personnage2);

//echo $personnage1->getStrength();
